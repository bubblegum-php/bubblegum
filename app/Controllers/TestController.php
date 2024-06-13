<?php

namespace App\Controllers;

use Bubblegum\Controller;

class TestController extends Controller
{
    public function store(): array|string
    { // "store" is a default destination for post http method
        return ['data' => 'Hello folks, this is a test information here. I am Bubblegum btw.'];
    }

}
