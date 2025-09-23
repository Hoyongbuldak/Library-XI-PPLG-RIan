<?php

class Controllers
{
    static function view(string $page, $data = [])
    {
        require $page;
    }
}
