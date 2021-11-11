<?php
require_once "./mvc/core/basehref.php";
$home_url = getUrl().'/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        echo "<base href='${home_url}'>";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../assets/css/signin.css">
</head>
<body>
    <div class="container">
        <div class="head--form">
            <h3>TECHFOOD</h3>
        </div>
        <div id="change_option">
            <div id="sign_up">
                <a href="register.html">REGISTER</a>
            </div>
            <div class="d-flex" id="vertical_line">
                <div class="vr"></div>
            </div>
            <div id="sign_in">
                <p>SIGN IN</p>
            </div>
        </div>
        <div class="my_content">
            <form action="login/verify" method="post">
                <label class="form-label" for="email" id="email">EMAIL ADDRESS</label>
                <input name="email" class="form-control" type="email" id="email_text">

                <br>

                <label class="form-label" for="password" id="password">PASSWORD</label>
                <input name="pass" class="form-control" type="password" id="pasword_text">

                <br>
                <?php
                if (!isset($_SESSION['error']) || $_SESSION['error'] == True ){
                echo "<label style=\"color : red\" class=\"form-label\" for=\"password\" id=\"password\">sai tai khoang hoac mat khau</label>";
                }
                ?>
                <div class="d-grid mt-2 mb-1">
                    <input type="submit" class="btn btn-primary"><span class="fw-bold"></span></input>
                </div>

                <div class="text-center mb-5" id="forgot_pass">
                    <a href="">forgot password?</a>
                </div>
            </form>

           
            </div>


        </div>
    
    
</body>
</html>