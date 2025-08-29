<?php
// app/routes.php
use App\Controllers\HealthController;
use App\Controllers\ProtectedController;
use App\Middleware\CorsMiddleware;
use App\Middleware\RateLimitMiddleware;
use App\Middleware\JwtMiddleware;

use App\Controllers\AssessmentController;

use App\Controllers\ScoringEngine\ParticipantController;
use App\Controllers\ScoringEngine\ParticipantSessionController;
use App\Controllers\ScoringEngine\SelfAssessmentResponseController;

/**
 * Global/Shared middlewares can be added in Router via $router->group or by modifying Router::__construct
 * Example: API v1 group
 */
$router->group(['prefix' => '/v1', 'middleware' => [CorsMiddleware::class]], function($r) {
    // GET /api/v1/health
    $r->get('/health', [HealthController::class, 'index'], [RateLimitMiddleware::class]);

    // Param route: GET /api/v1/users/{id}
    $r->get('/users/{id}', function($request, $params) {
        return ['ok' => true, 'id' => $params['id']];
    });

    // Protected route: GET /api/v1/protected/secret
    $r->get('/protected/secret', [ProtectedController::class, 'secret'], [JwtMiddleware::class]);

    
    // Assessment routes
    $r->get('/assessments', [AssessmentController::class, 'index']);
    $r->get('/assessments/{id}', [AssessmentController::class, 'show']);
    $r->post('/assessments', [AssessmentController::class, 'store']);
    $r->put('/assessments/{id}', [AssessmentController::class, 'update']);
    $r->delete('/assessments/{id}', [AssessmentController::class, 'destroy']);

    // Scoring Engine routes group
    $r->group(['prefix' => '/scoring-engine'], function($r) {
        // Participant routes
        $r->get('/participants', [ParticipantController::class, 'index']);
        $r->get('/participants/{id}', [ParticipantController::class, 'show']);
        $r->post('/participants', [ParticipantController::class, 'store']);
        $r->put('/participants/{id}', [ParticipantController::class, 'update']);
        $r->patch('/participants/{id}', [ParticipantController::class, 'patch']);
        $r->delete('/participants/{id}', [ParticipantController::class, 'destroy']);

        // Participant Sessions routes
        $r->get('/participant-sessions', [ParticipantSessionController::class, 'indexSessions']);
        $r->get('/participant-sessions/{id}', [ParticipantSessionController::class, 'showSession']);
        $r->post('/participant-sessions', [ParticipantSessionController::class, 'storeSession']);
        $r->put('/participant-sessions/{id}', [ParticipantSessionController::class, 'updateSession']);
        $r->patch('/participant-sessions/{id}', [ParticipantSessionController::class, 'patchSession']);
        $r->delete('/participant-sessions/{id}', [ParticipantSessionController::class, 'destroySession']);

        // Self Assessment Responses routes
        $r->get('/self-assessment-responses', [SelfAssessmentResponseController::class, 'index']);
        $r->get('/self-assessment-responses/{id}', [SelfAssessmentResponseController::class, 'show']);
        $r->post('/self-assessment-responses', [SelfAssessmentResponseController::class, 'store']);
        $r->put('/self-assessment-responses/{id}', [SelfAssessmentResponseController::class, 'update']);
        $r->patch('/self-assessment-responses/{id}', [SelfAssessmentResponseController::class, 'patch']);
        $r->delete('/self-assessment-responses/{id}', [SelfAssessmentResponseController::class, 'destroy']);
    });
});

/**
 * API v2 group example (future)
 */
$router->group(['prefix' => '/v2', 'middleware' => [CorsMiddleware::class]], function($r){
    $r->get('/health', [HealthController::class, 'index']);
});


