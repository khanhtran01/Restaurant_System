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
    <link rel="stylesheet" href="./assets/css/base-food.css">
    <link rel="stylesheet" href="./assets/css/main-food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css"
        integrity="sha512-oHDEc8Xed4hiW6CxD7qjbnI+B07vDdX7hEPTvn9pSZO1bcRqHp8mj9pyr+8RVC2GmtEfI2Bi9Ke9Ass0as+zpg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/payment.css">
    <link rel="stylesheet" href="./assets/fontawesome-free-5.15.4-web/css/all.css">
    <link rel="stylesheet" href="./assets/themify-icons/themify-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
   
</head>
<body>
    <div class="app">
        <?php require_once "./mvc/views/blocks/homeheader.php";?>
        <?php require_once "./mvc/views/pages/homePages.php";?>
        
    </div>
    <div class="__payment-view ">
    
    </div>
    


    <script src="./assets/js/foodjs.js"></script>
    <script src="./assets/js/payment.js"></script>
</body>
</html>