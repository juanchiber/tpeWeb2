<?php
require_once './smarty-4.2.1/libs/Smarty.class.php';

class authView{
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); 
    }

    function showFormLogin($error = null) {
        $this->smarty->assign('error', $error);
        $this->smarty->display('form_login.tpl');
    }

}

?>