<?php 


namespace app\controllers;


use  app\Controller;
use  app\models\Product;
use app\Request;
use app\Response;

class ProductController extends Controller {

    /**
     * METHOD: GET	
     * URI: /products
     */
    public function index(Request $request) {
        $product  = new Product();
        $products = $product->getAll();

        // var_dump($products);
        /**
         * array of objects (products)
         */
 
        $this->view("home", ["page_title" => "Home", "products" => $products]);
    }

    /**
     * METHOD: GET	
     * URI: /products/create
     */
    public function create(Request $request) {
 
        $this->view("add-product", ["page_title" => "Add Product"]);

    }

    /**
     * METHOD: POST	
     * URI: /products
     */
    public function store(Request $request) {

        $data = $request->getBody();

        $product  = new Product();

        if($product->get($data["sku"])) {
            $error = "duplicated sku, please enter a unique one!";
            $this->view("add-product", ["error" => $error]);
        }else{
            $product->store($data);
            Response::redirect("/");
        }
        
    }

    /**
     * METHOD: DELETE	
     * URI: /products/{id}
     */
    public function destroy(Request $request) {
        $skus = $request->getBody();


        $product  = new Product();

        foreach ($skus as $key => $value) {
            $product->delete($value);
        }
        
        Response::redirect("/");
    }


}