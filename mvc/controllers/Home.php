<?php
class Home extends controller{

    public function viewHome(){
        $productsByType = $this->model('ProductsModel')->getProductByType();
        $this->view("home", [
            "productsByType" => $productsByType
        ]);
    }
    public function viewModal(){
        $id = $_POST['id'];
        $product = $this->model('ProductsModel')->getProductByID($id);
        $this->view("modalProduct", [
            'product' => $product,
        ]);
    }
}
?>

<!-- echo '<pre>';
    print_r($data);
    die; -->