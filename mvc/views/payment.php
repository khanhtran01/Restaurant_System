<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../../assets/fontawesome-free-5.15.4-web/css/all.css">
    <link rel="stylesheet" href="../../assets/css/payment.css">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <ul class="btn--back">
            <li class="icon--back"><em class="ti-back-left"></em></li>
            <li class="text--back"><p>Back</p></li>
        </ul>
        
        
        <div class="title" ><a href="#">PAYMENT</a></div>
    </div>

    <div class="container">
        
        <div class="showProduct">
            <div class="showProduct--item">
                <img class="item--image" src="../../assets/img/ga-ran.png" alt="gan-ran.png">
                <div class="item--details">
                    <p class="item--details--name">Tên món ăn : Gà rán</p>
                    <p class="item--details--quantity">Số Lượng : 2</p>
                    <p class="item--details--price"> Giá : 1.5$</p>
                </div>
            </div>
            <div class="showProduct--item">
                <img class="item--image" src="../../assets/img/ga-ran.png" alt="gan-ran.png">
                <div class="item--details">
                    <p class="item--details--name">Tên món ăn : Gà rán</p>
                    <p class="item--details--quantity">Số Lượng : 2</p>
                    <p class="item--details--price"> Giá : 1.5$</p>
                </div>
            </div>
            <div class="showProduct--item">
                <img class="item--image" src="../../assets/img/ga-ran.png" alt="gan-ran.png">
                <div class="item--details">
                    <p class="item--details--name">Tên món ăn : Gà rán</p>
                    <p class="item--details--quantity">Số Lượng : 2</p>
                    <p class="item--details--price"> Giá : 1.5$</p>
                </div>
            </div>
            <div class="showProduct--item">
                <img class="item--image" src="../../assets/img/ga-ran.png" alt="gan-ran.png">
                <div class="item--details">
                    <p class="item--details--name">Tên món ăn : Gà rán</p>
                    <p class="item--details--quantity">Số Lượng : 2</p>
                    <p class="item--details--price"> Giá : 1.5$</p>
                </div>
            </div>
            <div class="showProduct--item">
                <img class="item--image" src="../../assets/img/ga-ran.png" alt="gan-ran.png">
                <div class="item--details">
                    <p class="item--details--name">Tên món ăn : Gà rán</p>
                    <p class="item--details--quantity">Số Lượng : 2</p>
                    <p class="item--details--price"> Giá : 1.5$</p>
                </div>
            </div>
            <div class="showProduct--item">
                <img class="item--image" src="../../assets/img/ga-ran.png" alt="gan-ran.png">
                <div class="item--details">
                    <p class="item--details--name">Tên món ăn : Gà rán</p>
                    <p class="item--details--quantity">Số Lượng : 2</p>
                    <p class="item--details--price"> Giá : 1.5$</p>
                </div>
            </div>

        </div>

        <div class="chooseMethod">
            <div class="chooseMethod--title">
                Chọn phương thức thanh toán:
            </div>
            <div class="chooseMethod--choose" id="chooseMethod--choose">
                <ul >
                    <li onclick="changemethod('e-banking')" class="chooseMethod--method">E-Banking</li>
                    <li onclick="changemethod('e-wallet')" class="chooseMethod--method active">E-Wallet</li>
                </ul>
            </div>
            
           
           
            
            
            <div class="form" id="form">
                <form id="e-banking" class="form__e-banking hide" action="">
                    <label for="bank">Chọn ngân hàng:</label>
                    <select id="bank" name="bank">
                        <option value="ACB">Ngân hàng Á Châu (ACB)</option>
                        <option value="Agribank">Agribank</option>
                        <option value="SHB">SHB</option>
                    </select>
                    <label for="seri">Số seri:</label>
                    <input type="text" name="seri" id="seri" placeholder="Số Seri">
                    <p class="price">Tổng tiền : 15$</p>
                    <input type="submit" value="Thanh toán">

                </form>

                <form id="e-wallet" class="form__e-wallet" action="">
                    <label for="bank">Chọn Ví điện tử:</label>
                    <select id="e-wallet" name="e-wallet">
                        <option value="zalo">Zalo Pay</option>
                        <option value="momo">Momo</option>
                    </select>
                    <label for="seri">Số điện thoại:</label>
                    <input type="text" name="phone" id="phone" placeholder="Phone number">
                    <p class="price">Tổng tiền : 15$</p>

                    <input type="submit" value="Thanh toán">
                </form>
            </div>
            <script>
                // Add active class to the current button (highlight it)
                var header = document.getElementById("chooseMethod--choose");
                var btns = header.getElementsByClassName("chooseMethod--method");

                for (var i = 0; i < btns.length; i++) {
                    btns[i].addEventListener("click", function() {
                        var current = document.getElementsByClassName("active");
                        if (current.length > 0) {
                            current[0].className = current[0].className.replace(" active", "");
                        }
                        this.className += " active";
                    });
                }
            </script>
            <script>
                function changemethod(id){
                    if (id == "e-wallet")
                    {
                        current = document.getElementById(id);
                        current.classList.remove("hide")
                        document.getElementById("e-banking").className += " hide";
                    }
                    if (id == "e-banking")
                    {
                        current = document.getElementById(id);
                        current.classList.remove("hide")
                        document.getElementById("e-wallet").className += " hide";
                    }
                }
            </script>
        </div>




    </div>

    <div class="footer">
        <p>abc</p>
    </div>
</body>
</html>