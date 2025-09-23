<?php

require_once "Controllers.php";

class HomeController extends Controllers
{
    static function index()
    {
        return self::view("views/home.php");
    }
}
