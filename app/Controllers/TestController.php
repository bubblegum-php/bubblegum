<?php

namespace App\Controllers;

use Bubblegum\Controller;

/**
 * Controller for testing (Don't use it on your production pls)
 */
class TestController extends Controller
{
    /**
     * Testing json response for post http method
     * @return array|string
     */
    public function store(): array|string
    { // "store" is a default destination for post http method
        return ['data' => 'Hello folks, this is a test information here. I am Bubblegum btw.'];
    }
}
