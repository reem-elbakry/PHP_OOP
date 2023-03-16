<?php

namespace app;

use PDO;

final class DB {
    private static $instance = null; 
    private static $connection; 

    private static function getInstance() {

        if(is_null(self::$instance)){
            self::$instance = new DB();
        }
        return self::$instance;

    }


    private function __construct() {}

    private static function connect($host, $dbname, $user, $password) {
        self::$connection = new PDO("mysql:host=$host;dbname=$dbname",$user,$password);
    }

    public static function getConnection() {
        if(is_null(self::$connection)){
            self::connect("localhost", "scandiweb_db", "root", "engroma1995");

        }
        return self::$connection;
    }
}