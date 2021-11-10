<?php
    class Payment extends Controller {
        function __construct(){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // collect value of input field
                $userID = $_POST['user_ID'];
                $arrProductID = $_POST['arr_id'];
                $arrAmountProduct = $_POST['arr_quality'];
                $Price = $_POST['price'];
                
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
