<?php

require_once './app/models/category.model.php';
require_once './app/views/category.view.php';
class categoryController{
    private $view;
    private $model;

    public function __construct() {
        $this->model = new categoryModel();
        $this->view = new categoryView();
    }

    public function showCategories() {
        session_start();
        $categories = $this->model->getAllCategories();
        $this->view->showCategories($categories);
    }

    public function addCategory(){
        if(!empty($_POST['category']) && trim($_POST['category'])){
            $category = $_POST['category'];
            $id = $this->model->insertCategory($category);
            
            header("Location: " . BASE_URL . "show_categories"); 
        }
        else{
            var_dump("Complete todos los campos");
            die(); 
        }
    }

    public function editCategory($id){
        $category= $this->model->getCategory($id);
        $this->view->editCategoryById($category);
    }

    public function updateCategory(){
        if(!empty($_POST['id_category']) && !empty($_POST['category']) && 
            trim($_POST['id_category']) && trim($_POST['category'])){
            $id= $_POST['id_category'];
            $category = $_POST['category'];
            $this->model->updateCategoryById($id, $category);
            header("Location: " . BASE_URL . "show_categories");
        }
        else{
            var_dump("Complete todos los campos");
            die();
        }
    }

    public function deleteCategory($id) {
        //$cantidad = $this->model->getProductsByCategory($id);
        //if($cantidad>0){
            $this->model->deleteCategoryById($id);
            header("Location: " . BASE_URL . "show_categories");
        //}
        //else if(cantidad==0){
        //    $this->view->errorDeleteCategory($id);
        //}
    }


    public function showProductsByCategory($id){
        session_start();
        $products = $this->model->getProductsByCategory($id);
        $this->view->showProductsByCategory($products);
    }


}

?>