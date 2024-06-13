<?php

use Bubblegum\App;

session_start();
require_once "../vendor/autoload.php";
require_once "../app/routes.php";


define("ROOT_PATH", dirname(__DIR__, 1) . DIRECTORY_SEPARATOR);

App::run();