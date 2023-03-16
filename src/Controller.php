<?php

namespace app;

class Controller {

    protected function view($filename="", $data=[]) {
        extract($data);
        require_once __DIR__."/views//".$filename.".php";
    }

}