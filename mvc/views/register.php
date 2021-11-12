<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../assets/css/signin.css">
</head>
<body>
    <?php
        if (isset($_SESSION['complete'])){
            echo "<script>alert('Đăng ký thành công')</script>";
            unset($_SESSION['complete']);
        }
    ?>
    <div class="container">
        <div class="head--form">
            <h3>TECHFOOD</h3>
        </div>
        <div id="change_option">
            <div id="sign_up">
                <a href="signin.html">SIGN IN</a>
            </div>
            <div class="d-flex" id="vertical_line">
                <div class="vr"></div>
            </div>
            <div id="sign_in">
                <p>REGISTER</p>
            </div>
        </div>
        <div class="my_content">
            <form action="register/verify" method="post">
                <label class="form-label" for="FirstName" id="first_name">Fisrt Name</label>
                <input name="Fname" class="form-control" type="text" id="first_name_text">

                <br>
                <label class="form-label" for="LastName" id="last_name">Last Name</label>
                <input name="Lname" class="form-control" type="text" id="last_name_text">

                <br>
                <label class="form-label" for="Age" id="age">Age</label>
                <input name="age" class="form-control" type="text" id="age_int">

                <br>

                
                <label class="form-label" for="email" id="email">EMAIL ADDRESS</label>
                <input name ="email" class="form-control" type="email" id="email_text">
                <?php
                if (isset($_SESSION['errorRegister'])){
                echo "<label style=\"color : red\" class=\"form-label\" for=\"email\">Email này đã có người sử dụng</label>";
                unset($_SESSION['errorRegister']);
                }
                ?>
                <br>

                <label class="form-label" for="password" id="password">PASSWORD</label>
                <input name="pass" class="form-control" type="password" id="pasword_text">

                <br>
                <label class="form-label" for="re-password" id="re-password">REPASSWORD</label>
                <input name="repass" class="form-control" type="password" id="re-pasword_text">
                <?php
                if (isset($_SESSION['passerror'])){
                echo "<label style=\"color : red\" class=\"form-label\" for=\"re-password\">Mật khẩu không trùng khớp</label>";
                unset($_SESSION['passerror']);
                }
                ?>   
                <br>

                <div class="d-grid mt-2 mb-1">
                    <input value="REGISTER" type="submit" class="btn btn-primary"><span class="fw-bold"></span></input>
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
            return (false)
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
            var password = document.getElementById('password_text');
            var re_password = document.getElementById('re-password_text');
            

            var check_firstname = check_text_length(first_name,2,30);
            var check_lastname = check_text_length(last_name,2,30);
            var check_email = ValidateEmail(email);
            var check_password = check_text_length(password,6,30);
            var check_repass = (password.value === re_password.value) ? true : false;
            
            if (check_firstname && check_lastname && check_email && check_password && check_repass){
                var x =2;
            }
            else {
                if(!check_firstname || !check_lastname) {
                    alert('Họ và tên từ 2 đến 30 ký tự');
                }
                else if(!check_email) {
                    alert('Email không hợp lệ');
                }
                else if(!check_password){
                    alert('Password không hợp lệ');
                }
                else if (!check_repass) {
                    alert('Xác nhận Password không trùng khớp');
                }
            }
        }
    </script>
    
</body>
</html>