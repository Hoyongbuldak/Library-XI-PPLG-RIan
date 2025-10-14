<?php

require_once "Controllers.php";

class HomeController extends Controllers
{
    static function index()
    {
        return self::view("views/home.php");
    }

    static function home()
    {
        session_start();
        $dataLogin = $_SESSION["is_login"];
        $id = $_SESSION["id"];
        $full_name = $_SESSION["full_name"];
        $email = $_SESSION["email"];
        $role = $_SESSION["role"];
        $phone = $_SESSION["phone"];
        if (
            isset($dataLogin) &&
            isset($id) &&
            isset($full_name) &&
            isset($email) &&
            isset($role) &&
            isset($phone)
        ) {
            $full_name = $_SESSION['full_name'];
            $role = $_SESSION['role'];

            if ($role === 'admin') {
                return self::view("views/admin/dashboard.php", [
                    'full_name' => $full_name,
                    'role' => $role
                ]);
            }

            return header("Location: http://localhost:8000/book");
        }
        header("Location: http://localhost:8000/auth");
    }
}
