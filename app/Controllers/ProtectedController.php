<?php
namespace App\Controllers;

use App\Core\Controller;

class ProtectedController extends Controller {
    public function secret() {
        // $this->request->user is set by JwtMiddleware
        $user = $this->request->user ?? null;
        return $this->ok([
            'secret' => 'the answer is 42',
            'user' => $user
        ]);
    }
}
