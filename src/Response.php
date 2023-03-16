<?php

namespace app;


class Response {

    public static function redirect($url)
    {
        header("Location: $url");
    }
}