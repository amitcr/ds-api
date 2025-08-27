<?php
namespace App\Controllers;

use App\Core\Controller;

class HealthController extends Controller {
    public function index() {
        return $this->ok([
            'status' => 'ok',
            'service' => 'micro-api',
            'time' => date('c')
        ]);
    }
}
