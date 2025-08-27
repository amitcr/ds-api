<?php
// app/routes.php
use App\Controllers\HealthController;
use App\Controllers\ProtectedController;
use App\Middleware\CorsMiddleware;
use App\Middleware\RateLimitMiddleware;
use App\Middleware\JwtMiddleware;

use App\Controllers\AssessmentController;

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
});

/**
 * API v2 group example (future)
 */
$router->group(['prefix' => '/v2', 'middleware' => [CorsMiddleware::class]], function($r){
    $r->get('/health', [HealthController::class, 'index']);
});


