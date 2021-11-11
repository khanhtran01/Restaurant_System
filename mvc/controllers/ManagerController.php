<?php

use function PHPSTORM_META\type;

class ManagerController extends controller{

    public function viewManagerController(){
        $this->view("orderManagerment", [

        ]);
    }
    public function getOrders(){
        $orders = $this->model("ManagerModel")->getOrders();
        $this->view("getOrderAjax", [
            'orders' => $orders
        ]);
    }
    public function finishOrder(){
        if(isset($_POST['id'])){
            $this->model("ManagerModel")->finishOrder($_POST['id']);
        }
    }
}
?>
<!-- 
echo '<pre>';
    print_r($data);
    die; -->