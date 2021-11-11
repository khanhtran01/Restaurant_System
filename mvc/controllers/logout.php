<?php
class logout extends controller
{

    public function __construct()
    {
        require_once "./mvc/core/basehref.php";
        $_SESSION['error'] = False;
        unset($_SESSION['username']);
        header("Location: " . getUrl(). "/Home");
    }

}
?>