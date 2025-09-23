<?php

require_once("Controllers.php");

class AuthController extends Controllers
{
    static function index()
    {
        return self::view("views/auth.php");
    }
}
