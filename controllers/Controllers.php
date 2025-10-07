<?php

class Controllers
{
    static function view(string $page, $data = [])
    {
        $data;
        require $page;
    }
}
