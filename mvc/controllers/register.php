<?php

use function PHPSTORM_META\type;

class register extends controller
{

    public function viewHome()
    {
        $this->view("register");
    }
    public function verify(){
        require_once "./mvc/core/basehref.php";
        $fname = $_POST['Fname'];
        $lname = $_POST['Lname'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $repass = $_POST['repass'];
        // echo "<script>alert('".$email."') </script>";
        $data = $this->model('registerModel')->checkAccount([
            "fname" => $fname,
            "lname" => $lname,
            "age" => $age,
            "email" => $email,
            "pass" => $pass,
            "repass" => $repass
        ]);
        header("Location: " . geturl(). "/register");
    }
}
?>
