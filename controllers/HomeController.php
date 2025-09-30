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
        $dataLogin = $_SESSION["is_login"];

        if (isset($dataLogin)) {
            return self::view("views/admin/dashboard.php");
        }

        header("Location: http://localhost:8000/auth");
    }
}
