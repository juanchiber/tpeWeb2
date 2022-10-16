<?php
require_once './smarty-4.2.1/libs/Smarty.class.php';

class productView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); 
    }

    public function showHome(){
        $this->smarty->display('home.tpl');
    }

    public function showAllProducts($products, $categories) {
        $this->smarty->assign('products', $products);
        $this->smarty->assign('categories', $categories);

        $this->smarty->display('product_list.tpl');
    }

    public function showProductById($product){
        $this->smarty->assign('product', $product);
        $this->smarty->display('show_product.tpl');
    }

    public function editProductById($product, $categories){
        $this->smarty->assign('product', $product);
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('form_edit.tpl');
    }

}
