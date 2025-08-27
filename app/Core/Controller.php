<?php
namespace App\Core;

class Controller
{
    protected $request;

    public function __construct()
    {
        $this->request = new Request();
    }

    protected function ok($data = [])
    {
        return Response::json($data, 200);
    }

    protected function created($data = [])
    {
        return Response::json($data, 201);
    }

    protected function error($msg = 'Error', $code = 400)
    {
        return Response::json(['error' => $msg], $code);
    }
}
