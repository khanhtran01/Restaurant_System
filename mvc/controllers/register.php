<?php

use function PHPSTORM_META\type;

class login extends controller
{

    public function viewregister()
    {
        // $productsByType = $this->model('ProductsModel')->getProductByType();
        $this->view("register");
    }
}
?>