<?php

require_once './app/controllers/product.controller.php';
require_once './app/controllers/auth.controller.php';
require_once './app/controllers/category.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; 
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}else{
    $action= 'login';
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'home':
        $productController = new productController();
        $productController->showHome();
        break;
    case 'login':
        $authController = new authController();
        $authController->showFormLogin();
        break;
    case 'validate':
        $authController = new authController();
        $authController->validateUser();
        break;
    case 'logout':
        $authController = new authController();
        $authController->logout();
        break;
    case 'products':
        $productController = new productController();
        $productController->showProducts();
        break;  
    case 'show':
        $productController = new productController();
        $id = $params[1];
        $productController->showProduct($id);
        break;
    case 'add':
        $productController = new productController();
        $productController->addProduct();
        break;
    case 'delete':
        $productController = new productController();
        $id = $params[1];
        $productController->deleteProduct($id);
        break;
    case 'edit': 
        $productController = new productController();
        $id = $params[1];
        $productController->editProduct($id);
        break;  
    case 'update':
        $productController = new productController();
        $productController->updateProduct();
        break;
    case 'show_categories':
        $categoryController = new categoryController();
        $categoryController->showCategories();
        break;
    case 'add_category':
        $categoryController = new categoryController();
        $categoryController->addCategory();
        break;
    case 'delete_category':
        $categoryController = new categoryController();
        $id = $params[1];
        $categoryController->deleteCategory($id);
        break;
    case 'edit_category':
        $categoryController = new categoryController();
        $id = $params[1];
        $categoryController->editCategory($id);
        break;
    case 'update_category':
        $categoryController = new categoryController();
        $categoryController->updateCategory();
        break;
    case 'show_products_by_category':
        $categoryController = new categoryController();
        $id = $params[1];
        $categoryController->showProductsByCategory($id);
        break;
    default:
        echo('404 Page not found');
        break;
}
