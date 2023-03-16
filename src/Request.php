<?php

namespace app;
use app\ArrayIs;


class Request {

    public function getMethod()
    {
        if( $_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST["_method"]) == "DELETE") {
            return "DELETE";
        }
        return $_SERVER['REQUEST_METHOD'];
    }

    public function getUrl()
    {
        return $_SERVER['REQUEST_URI'];
    }

    public function getBody()
    {
        $data = [];
   
        foreach ($_POST as $key => $value) {
            if($key != "_method"){
                if(is_array($value)) {
                    if(!ArrayIs::associative($value)){
                        // array_push($data, $value);
                        return $value;
                    }
                }else{
                    $data[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
                }
            }
        }
        
        return $data;
    }

}