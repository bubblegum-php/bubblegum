<?php

namespace App\Middlewares;

use Bubblegum\Middlewares\Middleware;
use Bubblegum\Request;

class TestMiddleware extends Middleware
{

    public function handle(Request $request, array $data = []): string|array
    {
        $data = $this->handleWrapped($request, $data);
        $data['message_from_middleware'] = 'Hi, I am TestMiddleware :)';
        return $data;
    }
}