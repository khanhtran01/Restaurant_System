<?php

use function PHPSTORM_META\type;

class register extends controller
{

    public function viewregister()
    {
        // $productsByType = $this->model('ProductsModel')->getProductByType();
        $this->view("register");
    }


    public function confirm_email(){
        require_once "./mvc/core/basehref.php";
        $email = $_POST['email'];
        $password = $_POST['password'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $re_pass = $_POST['repass'];
        // $age = ctype_digit( $_POST['age']) ? (int)$_POST['age'] : $_POST['age'];
        
        
        if(preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email) && 
            (strlen($password) >= 2 && strlen($password) <= 30) &&
            (strlen($last_name) >= 2 && strlen($last_name) <= 30) &&
            (strlen($first_name) >= 2 && strlen($first_name) <= 30) &&
            ($re_pass == $password) 
            // (is_int($age) && $age > 16)
        )
        {
        $data = $this->model('registerModel')->checkAccount([
            "email" => $email,
            "password" => $password
        ]);

        if($data == "") {
            $myadd = $this->model('registerModel')->NewAccount($email,md5($password),$age,$first_name, $last_name);
            // echo "<script>alert('Đăng ký thành công') </script>";
            // echo "<script> alert('Đăng ký thành công');</script>";
            header("Location: " . getUrl(). "/login");
           
        }
        else {
            // echo "<script>alert('Email: ".$email." đã được sử dụng') </script>";
            header("Location: " . getUrl(). "/register");
        }
        // header("Location: " . getUrl(). "/login");


    }
    else {
        header("Location: " . getUrl(). "/register");
    }
    }
   
}


?>