<?php

require_once "Controllers.php";
require_once "models/Category.php";

class BookController extends Controllers
{
    static function index()
    {
        $data = new Category();
        return self::view("views/book.php", $data->getData());
    }
}
