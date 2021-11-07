<?php
class Home extends Controller{
    // function show(){
    //     $allProduct = $this->model("all");
    //     echo $allProduct->getName();
    //     // echo "hello";
    // }
    function viewHome(){
        $this->view("drink", [
            
        ]);
    }
}
?>