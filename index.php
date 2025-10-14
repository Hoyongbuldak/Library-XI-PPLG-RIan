<?php

require 'controllers/AuthController.php';
require 'controllers/HomeController.php';
require 'controllers/BookController.php';

$server = $_SERVER["REQUEST_URI"];


if ($server == "/") {
    return HomeController::index();
}

if ($server == "/dashboard") {
    return HomeController::home();
}

if ($server == "/book") {
    return BookController::index();
}

if ($server == "/create-member") {

    $method = $_SERVER["REQUEST_METHOD"];

    if ($method == "GET") {

        return AuthController::register();
    }

    return AuthController::store();
}

if ($server == "/auth") {

    $method = $_SERVER["REQUEST_METHOD"];

    if ($method == "GET") {
        return AuthController::index();
    }

    return AuthController::auth();
}

return require "views/notFoundPage.php";
