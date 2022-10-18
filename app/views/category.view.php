<?php
require_once './smarty-4.2.1/libs/Smarty.class.php';

class categoryView{
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); 
    }

    public function showCategories($categories){
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('show_categories.tpl');
    }

    public function editCategoryById($category){
        $this->smarty->assign('category', $category);
        $this->smarty->display('form_edit_category.tpl');
    }

    public function showProductsByCategory($products){
        $this->smarty->assign('products', $products);
        $this->smarty->display('show_products_by_category.tpl');
    }

    /* public function errorDeleteCategory($id){
        $this->smarty->display('error.tpl');
    }
    */

}

?>