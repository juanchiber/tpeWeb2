<?php

require_once './app/models/category.model.php';
require_once './app/models/product.model.php';
require_once './app/views/product.view.php';
require_once './app/helpers/auth.helper.php';

class productController {
    private $model;
    private $view;
    private $categoryModel;
    private $authHelper;

    public function __construct() {
        $this->model = new productModel();
        $this->view = new productView();
        $this->categoryModel = new categoryModel();
        $this->authHelper = new authHelper();

    }

    public function showHome(){
        session_start();
        $this->view-> showHome();
    }

    public function showProducts() {
        session_start();
        $products = $this->model->getAllProducts();
        $categories = $this->categoryModel->getAllCategories();
        $this->view->showAllProducts($products, $categories);
    }

    public function showProduct($id){
        session_start();
        $product= $this->model->getProduct($id);
        $this->view->showProductById($product);
    }

    public function addProduct() {
        if (!empty($_POST['product']) && !empty($_POST['detail']) && !empty($_POST['price']) && !empty($_POST['id_category']) &&
            trim($_POST['product']) && trim($_POST['detail']) && trim($_POST['price']) && trim($_POST['id_category'])){
            $this->authHelper->checkLoggedIn();
            
            $product = $_POST['product'];
            $detail = $_POST['detail'];
            $price = $_POST['price'];
            $category = $_POST['id_category'];

            $id = $this->model->insertProduct($product, $detail, $price, $category);

            header("Location: " . BASE_URL . "products"); 
        }
        else{
            var_dump("Complete todos los campos");
            die();
        }
    }
 
    public function deleteProduct($id) {
        $this->model->deleteProductById($id);
        header("Location: " . BASE_URL . "products");
    }

    public function editProduct($id){
        $product= $this->model->getProduct($id);
        $categories = $this->categoryModel->getAllCategories();
        $this->view->editProductById($product, $categories);

    }

    public function updateProduct(){
        if(trim($_POST['id_product']) && trim($_POST['product']) && trim($_POST['detail']) && trim($_POST['price']) && trim($_POST['id_category']) &&
            !empty($_POST['id_product'])&& !empty($_POST['product']) && !empty($_POST['detail']) && !empty($_POST['price']) && !empty($_POST['id_category'])){
            $id= $_POST['id_product'];
            $product = $_POST['product'];
            $detail = $_POST['detail'];
            $price = $_POST['price'];
            $id_category = $_POST['id_category'];

            $this->model->updateProductById($id, $product, $detail, $price, $id_category);
            header("location: " . BASE_URL . "products");
        }
        else{
            var_dump("Complete todos los campos");
            die();
        }
    }

}

