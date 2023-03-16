<?php 

namespace app;

use app\Request;

class Router {

   public static function handle($method='GET', $path='/', $controller= '', $action= null) {

         $request = new Request();

         $currentMethod = $request->getMethod();
         $currentURI = $request->getUrl();

         if($currentMethod != $method || $currentURI != $path) {
            return false;
         }

         $root = "";
         $pattern = "#^".$root.$path."$#siD";

         if(preg_match($pattern, $path)) {
            if(is_callable($controller)){
               $controller();
            }else{
               $controller = "app\controllers\\" . $controller;
               $controller = new $controller();
               $controller->$action($request);
            }
            exit();
         }

         return false;
    }

    public static function get($path='/', $controller='', $action=null) {
      return self::handle('GET', $path, $controller, $action);
    }

    public static function post($path='/', $controller='', $action=null) {
      return self::handle('POST', $path, $controller, $action);
    }

    public static function delete($path='/', $controller='', $action=null) {
      return self::handle('DELETE', $path, $controller, $action);
    }
}