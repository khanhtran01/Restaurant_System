<?php

use function PHPSTORM_META\type;

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
    public function pay(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $userID = $_POST['user_ID'];
            $arrProductID = $_POST['arr_id'];
            $arrAmountProduct = $_POST['arr_quality'];
            $Price = $_POST['price'];
            
            echo "<script>alert('".gettype($arrAmountProduct)."')</script>";

            $this->model('PaymentModel')->updateBill([
                "userID" => $userID,
                "arrProduct" => $arrProductID,
                "price" => $Price,
                "arrAmount" => $arrAmountProduct
            ]);
            
        
        $productsByType = $this->model('ProductsModel')->getProductByType();
        $this->view("home", [
            "productsByType" => $productsByType
        ]);
    }
}
}
?>

<!-- echo '<pre>';
    print_r($data);
    die; -->