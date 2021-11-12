
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
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="../../assets/css/signin.css"> -->

    <link rel="stylesheet" href="assets/css/signin.css">

</head>
<body>
    <div class="container">
        <div class="head--form">
            <h3 class="fw-bold">TECHFOOD</h3>
        </div>
        <div id="change_option">
        <div id="sign_in">
                <p>REGISTER</p>
            </div>
            <div class="d-flex" id="vertical_line">
                <div class="vr"></div>
            </div>
            <div id="sign_up">
                <a href="signin">SIGN IN</a>
            </div>
        </div>
        <div class="my_content">

            <form action="register/confirm_email" onsubmit="vadilation()" method="post">
                <label class="form-label" for="FirstName" id="first_name">FIST NAME</label>
                <input class="form-control" type="text" id="first_name_text" name = "first_name">

                <br>
                <label class="form-label" for="LastName" id="last_name">LAST NAME</label>
                <input class="form-control" type="text" id="last_name_text" name = "last_name">

                <br>
                <label class="form-label" for="Age" id="age-cute">AGE</label>
                <input class="form-control" type="text" id="age" name = "age">


                <br>

                
                <label class="form-label" for="email" id="email">EMAIL ADDRESS</label>

                <input class="form-control" type="email" id="email_text" name = "email">


                <br>

                <label class="form-label" for="password" id="password">PASSWORD</label>

                <input class="form-control" type="password" id="pasword_text">

                <br>
                <label class="form-label" for="re-password" id="re-password">REPASSWORD</label>
                <input class="form-control" type="password" id="re-pasword_text">


                <br>

                <div class="d-grid mt-2 mb-1">

                    <button class="btn btn-primary" type="submit"><span class="fw-bold">REGISTER</span></button>

                </div>
                <p></p>
                <div class="text-center mb-5" id="forgot_pass">
                    <p>By creating your account, you agree to our 
                        <a href="">Terms and Conditions & Privacy Policy </a>                   
                    </p>
                </div>
            </form>
            </div>
        </div>
        <script>
        function ValidateEmail(mail) 
        {
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail.value))
        {
            return true;
        }
            return false;
        }
        function check_text_length(var_check, start, end) {
            if(var_check.value.length < start || var_check.value.length > end) {
                return false;
            }
            return true;
        }
        function vadilation() {
            
            var first_name = document.getElementById('first_name_text');
            var last_name  = document.getElementById('last_name_text');
            var email = document.getElementById('email_text');
            var age = document.getElementById('age');
            var password = document.getElementById('password_text');
            var re_password = document.getElementById('re-password_text');
            var check_firstname = check_text_length(first_name,2,30);
            var check_lastname = check_text_length(last_name,2,30);
            var check_password = check_text_length(password,6,30);
            var check_age = Number.isInteger(age.value/1) && (age.value/1 > 16);
            var check_email = ValidateEmail(email);
            var check_repass = false;
            if(password.value == re_password.value) {
                check_repass = true;
            }
            else {
                check_repass = false;
            }

            if(check_repass && check_firstname && check_lastname && check_password && check_age && check_email) {
                
            }
            else {
                if(!check_firstname || !check_lastname) {
                    alert('First Name hoặc Last Name từ 2 đến 30 ký tự');
                }
                else if (!check_password) {
                    alert('Password phải từ 6 đến 30 ký tự');
                }
                else if (!check_age){
                    alert('Age không hợp lệ');
                }
                else if(!check_repass) {
                    alert('Repassword không trùng khớp');
                }
                else if (!check_email) {
                    alert('Email không hợp lệ');
                }
            }
        }
    </script>
    
</body>
</html>