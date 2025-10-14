<?php

require_once("Controllers.php");
require_once("models/User.php");
require_once("models/Role.php");

class AuthController extends Controllers
{
    static function index()
    {
        session_start();
        $dataLogin = $_SESSION["is_login"] ?? NULL;
        $id = $_SESSION["id"] ?? NULL;
        $full_name = $_SESSION["full_name"] ?? NULL;
        $email = $_SESSION["email"] ?? NULL;
        $role = $_SESSION["role"] ?? NULL;
        $phone = $_SESSION["phone"] ?? NULL;

        if (
            isset($dataLogin) &&
            isset($id) &&
            isset($full_name) &&
            isset($email) &&
            isset($role) &&
            isset($phone)
        ) {
            return header("Location: http://localhost:8000/dashboard");
        }

        return self::view("views/auth.php");
    }

    static function register()
    {
        $roles = new Role();
        $data = $roles->getRole();
        return self::view("views/register.php", $data);
    }

    static function auth()
    {
        if (
            $_REQUEST["email"] == "" ||
            $_REQUEST["password"] == ""
        ) {
            session_start();
            $_SESSION['ERROR'] = "all fields must be filled!";
            return header("Location: http://localhost:8000/auth");
        }

        $user = new User;
        $user->login(
            $_REQUEST['email'],
            $_REQUEST["password"]
        );
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

        $user = new User;
        $user->register(
            $_REQUEST["password"],
            $_REQUEST["full_name"],
            $_REQUEST['phone'],
            $_REQUEST['email']
        );
    }
}
