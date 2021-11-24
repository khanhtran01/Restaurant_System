<?php
require_once "./mvc/core/basehref.php";
$home_url = getUrl() . '/';
if (!isset($_SESSION["manager"])) {
    header("Location:" . getUrl() . "/ManagerController/login");
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
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" integrity="sha512-oHDEc8Xed4hiW6CxD7qjbnI+B07vDdX7hEPTvn9pSZO1bcRqHp8mj9pyr+8RVC2GmtEfI2Bi9Ke9Ass0as+zpg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Manager Controller</title>

</head>

<body>
    <div class="app">
        <?php require_once "./mvc/views/blocks/managerheader.php"; ?>

        <div class="container_app">
            <div id="parent" class="grid">
                

            </div>
        </div>

        <br><br>
        <div class="footer">

        </div>

    </div>
    <script src="./assets/js/manager.js"></script>
</body>

</html>
