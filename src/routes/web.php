<?php


use app\Router;


Router::get('/', "ProductController", "index");
Router::get('/add-product', "ProductController", "create");
Router::post('/', "ProductController", "store");
Router::delete('/mass-delete', "ProductController", "destroy");