<?php
class Home extends controller{

    function viewHome(){
        $productsByType = $this->model('ProductsModel')->getProductByType();
        $this->view("home", [
            "productsByType" => $productsByType
        ]);
    }
}
?>

<!-- echo '<pre>';
    print_r($data);
    die; -->