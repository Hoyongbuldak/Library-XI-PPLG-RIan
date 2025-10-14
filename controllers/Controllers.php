<?php

class Controllers
{
    static function view(
        string $page,
        $data = [],
        $isLogin =  false
    ) {
        $isLogin;
        $data;
        require $page;
    }
}
