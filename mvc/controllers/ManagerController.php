<?php

use function PHPSTORM_META\type;

class ManagerController extends controller{

    public function viewHome(){
        $this->view("orderManagerment", [

        ]);
    }
    public function login(){
        $this->view("managerLogin");
    }
    public function logout(){
        require_once "./mvc/core/basehref.php";
        unset($_SESSION["manager"]);
        unset($_SESSION["ho"]);
        unset($_SESSION["ten"]);
        header("Location:".getUrl()."/ManagerController/login");
    }
    public function checklogin($username, $password){
        return $this->model("ManagerModel")->CheckLogin($username, $password);
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