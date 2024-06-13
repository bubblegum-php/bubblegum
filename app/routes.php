<?php

namespace App\Routes;

use Bubblegum\Routes\Route;
use Bubblegum\Views\View;

// use Bubblegum controllers down here
use App\Controllers\TestController;

// Bubblegum routes down here
Route::get('/', View::class)->to('welcome');
Route::post('/', TestController::class);