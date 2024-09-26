<?php

namespace App\Routes;

use Bubblegum\Routes\Route;
use Bubblegum\Views\View;

// use Bubblegum controllers down here
use App\Controllers\TestController;

// use Bubblegum middlewares down here
use App\Middlewares\TestMiddleware;

// Bubblegum routes down here
Route::get('/', View::class)->to('welcome')
    ->withData([
        'message' =>    'Just like stars twinkle in the night sky, your ideas are shining bright! ' .
                        'And yes, this is a test message. This message has been added from routes.php ' .
                        'for testing purposes. You can also add a message here by passing a data array to the view!',
        'username' => 'User',
        'link' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
    ]);

Route::get('/{nameOfPathVariable}',
    wrap(TestController::class, TestMiddleware::class)
);

Route::post('/{variableHere}', TestController::class);