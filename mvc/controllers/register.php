<?php

use function PHPSTORM_META\type;

class register extends controller
{

    public function viewregister()
    {
        // $productsByType = $this->model('ProductsModel')->getProductByType();
        $this->view("register");
    }
}
?>