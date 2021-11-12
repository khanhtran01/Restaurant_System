<?php
require_once "./mvc/core/basehref.php";
$home_url = getUrl() . '/';
$message = "";
if (isset($_POST['submit-login'])) {
	$username = $_POST["username"];
    $password = $_POST["password"];
    $user = new ManagerController;
    $row = $user->checklogin($username,$password);
    if(is_array($row)){
        $_SESSION["manager"] = $row['ID'];
        $_SESSION["ho"] = $row['Fname'];
        $_SESSION["ten"] = $row['Lname'];
    }else{
        $message = "Invalid Username or Password!";
    }
}
if (isset($_SESSION["manager"])) {
	header("Location:".getUrl()."/ManagerController/viewHome");
}
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
    <link rel="stylesheet" href="./assets/css/signin.css">
</head>
<body>
    <div class="container">
        <div class="head--form">
            <h3>TECHFOOD</h3>
        </div>
        <div class="my_content">
            <form action="" method="post">
                <label class="form-label" for="username">UserName</label>
                <input name="username" class="form-control">

                <br>

                <label class="form-label" for="password" id="password">PASSWORD</label>
                <input name="password" class="form-control" type="password" id="pasword_text">

                <br>
                <div class="d-grid mt-2 mb-1">
                    <input type="submit" class="btn btn-primary" name="submit-login"><span class="fw-bold"></span></input>
                </div>
                <div class="message"><?php if($message!="") { echo $message; } ?></div>
                <div class="text-center mb-5" id="forgot_pass">
                    <a href="">forgot password?</a>
                </div>
                
            </form>
        </div>
    </div>
</body>
</html>