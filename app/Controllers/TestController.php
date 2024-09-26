<?php

namespace App\Controllers;

use Bubblegum\Controller;
use Bubblegum\Request;

/**
 * Controller for testing (Don't use it on your production pls)
 */
class TestController extends Controller
{
    /**
     * Testing json response for get http method
     * @param string $nameOfPathVariable
     * @return array|string
     */
    public function index(string $nameOfPathVariable): array|string
    { // "index" is a default destination for GET http method
        return [
            'data' => 'Hello folks, this is a test information here. I am Bubblegum btw.',
            'path_variable' => $nameOfPathVariable,
        ];
    }

    /**
     * Testing json response for post http method
     * @param Request $request
     * @param string $variableHere
     * @return array|string
     */
    public function store(Request $request, string $variableHere): array|string
    { // "store" is a default destination for POST http method
        return [
            'path_variable' => $variableHere,
            'request' => $request->all()
        ];
    }
}
