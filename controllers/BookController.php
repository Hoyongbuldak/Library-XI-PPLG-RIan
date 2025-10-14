<?php

require_once "Controllers.php";
require_once "models/Category.php";

class BookController extends Controllers
{
    static function index()
    {
        session_start();
        $dataLogin = $_SESSION["is_login"] ?? false;
        $data = new Category();
        return self::view("views/book.php", $data->getData(), $dataLogin);
    }

    static function create()
    {
        $data = new Category();
        return self::view("views/admin/create_book.php", $data->getData());
    }

    static function show($id)
    {
        $data = new Category();
        return self::view("views/admin/update_book.php", $data->getData());
    }
}
