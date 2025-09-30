<?php

require_once("Controllers.php");
require_once("models/User.php");

class AuthController extends Controllers
{
    static function index()
    {
        return self::view("views/auth.php");
    }

    static function store()
    {
        if (
            $_REQUEST["full_name"] == "" ||
            $_REQUEST["email"] == "" ||
            $_REQUEST["password"] == "" ||
            $_REQUEST["phone"] == ""
        ) {
            session_start();
            $_SESSION['ERROR'] = "all fields must be filled!";
            return header("Location: http://localhost:8000/auth");
        }

        $user = new User($_REQUEST);
        $user->register(
            $_REQUEST["password"],
            $_REQUEST["full_name"],
            $_REQUEST['phone'],
            $_REQUEST['email']
        );
    }
}
