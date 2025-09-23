<?php

require 'controllers/AuthController.php';
require 'controllers/HomeController.php';
require 'controllers/BookController.php';

$server = $_SERVER["REQUEST_URI"];

if ($server == "/") {
    return HomeController::index();
}

if ($server == "/book") {
    return BookController::index();
}

if ($server == "/auth") {
    return AuthController::index();
}

return require "views/notFoundPage.php";
