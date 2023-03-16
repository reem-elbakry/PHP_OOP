<?php

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 

require_once __DIR__."/../vendor/autoload.php";


// $BASE_URL = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["SERVER_NAME"].$_SERVER["PHP_SELF"];
// $BASE_URL = str_replace("index.php", "", $BASE_URL);

// define("ASSETS_PATH", $BASE_URL."assets".DIRECTORY_SEPARATOR);  // http://scandiweb/public/assets/

// var_dump(ASSETS_PATH);

define("ASSETS_PATH", "http://scandiweb/public/assets/".DIRECTORY_SEPARATOR); 

require_once "../src/routes/web.php";


