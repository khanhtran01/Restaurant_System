<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="stylesheet" href="./../../assets/css/base.css">
    <link rel="stylesheet" href="./../../assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" integrity="sha512-oHDEc8Xed4hiW6CxD7qjbnI+B07vDdX7hEPTvn9pSZO1bcRqHp8mj9pyr+8RVC2GmtEfI2Bi9Ke9Ass0as+zpg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
    <div class="app">
        <div class="header">
            <div class="grid">
                <div class="grid__row">
                    <div class="nav_bar_up">
                        <div class="nav_bar_up_info">
                            <div class="nav_bar_up_info_telephone">
                                <i class="bi bi-phone"></i>
                                <div>ÆØŒ</div>
                            </div>
                            <div class="nav_bar_up_info_email">
                                <i class="bi bi-envelope"></i>
                                <div>bku@hcmut.edu.vn</div>
                            </div>
                            <div class="nav_bar_up_info_location">
                                <i class="bi bi-geo-alt"></i>
                                <div></div>
                            </div>
                        </div>
                        <div class="nav_bar_up_login">
                            <a href="">Đăng nhập</a>
                            <a href="">Đăng kí</a>
                        </div>
                    </div>
                </div>
                <div class="grid_row">
                    <div class="nav_bar_down">
                        <div class="nav_bar_up_logo">
                            <img src="https://sso.hcmut.edu.vn/cas/images/bk_logo.png" alt="">
                            <div class="slogan">Tech Food©</div>
                        </div>
                        <div class="nav_bar_up_menu">
                            <ul class="list_menu">
                                <li>
                                    <i style="color: antiquewhite;" class="bi bi-egg-fill"></i>
                                    <a href="">Food</a>
                                </li>
                                <li>
                                    <i class="bi bi-cup-straw"></i>
                                    <a href="">Drink</a>
                                </li>
                                <li>
                                    <i class="bi bi-file-earmark-person"></i>
                                    <a href="">About</a>
                                </li>
                                <li>
                                    <i class="bi bi-file-earmark-person"></i>
                                    <a href="">Order in ling</a>
                                </li>
                                <li>
                                    <button onclick="Rando"> Add random order (doesn't work)</button>
                                </li>
                            </ul>
                        </div>
                        <div class="nav_bar_up_cart">
                            <i class="bi bi-cart-check"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div   class="container_app">
            <div id="parent" class="grid">
                    <div id="item1" class="col">
                        <div class="b4-grid-row">
                            <div class="header_cart">
                                <i class="bi bi-cart-check-fill"></i>
                                <div class="your_cart"> Order <span>1</span></div>
                                <div class="your_cart_id"> Order ID <span>110621300</span></div>
                            </div>
                            <div class="grid__row">
                                    <div class="col-2">
                                        <div class="item_list_detail" id="1">
                                            <img src="https://cdn.daylambanh.edu.vn/wp-content/uploads/2017/08/cach-lam-banh-hamburger-bo-600x400.jpg" alt="">
                                            <div class="item_list_content">
                                                <div class="item_name">Hambuger</div>
                                                <div class="item_quantity">Số lượng: 2</div>                                             
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="item_list_detail" id="1">
                                            <img src="https://image.thanhnien.vn/1024/uploaded/congthang/2019_10_09/anh_1_dzzf.jpg" alt="">
                                            <div class="item_list_content">
                                                <div class="item_name">Bún bò</div>
                                                <div class="item_quantity">Số lượng: 2</div>                                             
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="item_list_detail" id="1">
                                            <img src="https://i.ytimg.com/vi/cJu6tFJe_Gc/maxresdefault.jpg" alt="">
                                            <div class="item_list_content">
                                                <div class="item_name">Cơm sườn 2</div>
                                                <div class="item_quantity">Số lượng: 2</div>                                             
                                            </div>
                                        </div>
                                    </div>

                                
                            </div>
                            <br><button onclick="FinishFunc('item1')" class="button_payment"> Finish</button><br>
                        </div>
                    </div>

                    <div id="item2" class="col">
                        <div class="b4-grid-row">
                            <div class="header_cart">
                                <i class="bi bi-cart-check-fill"></i>
                                <div class="your_cart"> Order <span>2</span></div>
                                <div class="your_cart_id"> Order ID <span>110621301</span></div>
                            </div>             
                            <div class="grid__row">
                                    <div class="col-2">
                                        <div class="item_list_detail" id="1">
                                            <img src="https://cdn.tgdd.vn/2021/05/CookRecipe/Avatar/banh-mi-thit-bo-nuong-thumbnail-1.jpg" alt="">
                                            <div class="item_list_content">
                                                <div class="item_name">Bánh mì</div>
                                                <div class="item_quantity">Số lượng: 69</div>                                             
                                            </div>
                                        </div>
                                    </div>

                            </div>
                            <br><button onclick="FinishFunc('item1')" class="button_payment"> Finish</button><br>
                        </div>
                    </div>

                    <div id="item3" class="col">
                        <div class="b4-grid-row">
                            <div class="header_cart">
                                <i class="bi bi-cart-check-fill"></i>
                                <div class="your_cart"> Order <span>3</span></div>
                                <div class="your_cart_id"> Order ID <span>110621302</span></div>
                            </div>           
                            <div class="grid__row">
                                    <div class="col-2">
                                        <div class="item_list_detail" id="1">
                                            <img src="https://cdn.tgdd.vn/2021/05/CookRecipe/Avatar/banh-mi-thit-bo-nuong-thumbnail-1.jpg" alt="">
                                            <div class="item_list_content">
                                                <div class="item_name">Bánh mì</div>
                                                <div class="item_quantity">Số lượng: 1</div>                                             
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="item_list_detail" id="1">
                                            <img src="https://cdn.tgdd.vn/2021/05/CookRecipe/Avatar/banh-mi-thit-bo-nuong-thumbnail-1.jpg" alt="">
                                            <div class="item_list_content">
                                                <div class="item_name">Bánh mì</div>
                                                <div class="item_quantity">Số lượng: One</div>                                             
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="item_list_detail" id="1">
                                            <img src="https://cdn.tgdd.vn/2021/05/CookRecipe/Avatar/banh-mi-thit-bo-nuong-thumbnail-1.jpg" alt="">
                                            <div class="item_list_content">
                                                <div class="item_name">Bánh mì</div>
                                                <div class="item_quantity">Số lượng: Một</div>                                             
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="item_list_detail" id="1">
                                            <img src="https://cdn.tgdd.vn/2021/05/CookRecipe/Avatar/banh-mi-thit-bo-nuong-thumbnail-1.jpg" alt="">
                                            <div class="item_list_content">
                                                <div class="item_name">Bánh mì</div>
                                                <div class="item_quantity">Số lượng: 3 trừ 2</div>                                             
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="item_list_detail" id="1">
                                            <img src="https://cdn.tgdd.vn/2021/05/CookRecipe/Avatar/banh-mi-thit-bo-nuong-thumbnail-1.jpg" alt="">
                                            <div class="item_list_content">
                                                <div class="item_name">Bánh mì</div>
                                                <div class="item_quantity">Số lượng: 69^0</div>                                             
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="item_list_detail" id="1">
                                            <img src="https://cdn.tgdd.vn/2021/05/CookRecipe/Avatar/banh-mi-thit-bo-nuong-thumbnail-1.jpg" alt="">
                                            <div class="item_list_content">
                                                <div class="item_name">Bánh mì</div>
                                                <div class="item_quantity">Số lượng: e^(2*pi*i)</div>                                             
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="item_list_detail" id="1">
                                            <img src="https://cdn.tgdd.vn/2021/05/CookRecipe/Avatar/banh-mi-thit-bo-nuong-thumbnail-1.jpg" alt="">
                                            <div class="item_list_content">
                                                <div class="item_name">Bánh mì</div>
                                                <div class="item_quantity">Số lượng: 1/2+1/4+1/8+1/16...+1/(2^n)</div>                                             
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="item_list_detail" id="1">
                                            <img src="https://cdn.tgdd.vn/2021/05/CookRecipe/Avatar/banh-mi-thit-bo-nuong-thumbnail-1.jpg" alt="">
                                            <div class="item_list_content">
                                                <div class="item_name">Bánh mì</div>
                                                <div class="item_quantity">Số lượng: sin^2(x) + cos^2(x)</div>                                             
                                            </div>
                                        </div>
                                    </div>


                            </div>
                            <br><button onclick="FinishFunc('item1')" class="button_payment"> Finish</button><br>
                        </div>
                    </div>
                    

                    <div id="item4" class="col">
                        <div class="b4-grid-row">
                            <div class="header_cart">
                                <i class="bi bi-cart-check-fill"></i>
                                <div class="your_cart"> Order <span>4</span></div>
                                <div class="your_cart_id"> Order ID <span>110621303</span></div>
                            </div>
                            <div class="grid__row">
                                    <div class="col-2">
                                        <div class="item_list_detail" id="1">
                                            <img src="https://cdn.daynauan.info.vn/wp-content/uploads/2019/05/com-tam-la-mon-an-binh-dan.jpg" alt="">
                                            <div class="item_list_content">
                                                <div class="item_name">Cơm sường 1</div>
                                                <div class="item_quantity">Số lượng: 1</div>                                             
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="item_list_detail" id="1">
                                            <img src="https://i.ytimg.com/vi/cJu6tFJe_Gc/maxresdefault.jpg" alt="">
                                            <div class="item_list_content">
                                                <div class="item_name">Cơm sườn 2</div>
                                                <div class="item_quantity">Số lượng: 1</div>                                             
                                            </div>
                                        </div>
                                    </div>

                            </div>
                            <br><button onclick="FinishFunc('item1')" class="button_payment"> Finish</button><br>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <br><br>
        <div class="footer">

        </div>
    </div>
    <script src="./index.js"></script>
    <script>
        function FinishFunc(childID){
            var parent = document.getElementById('parent');
            var child = document.getElementById(childID);
            parent.removeChild(child);
        }
        
        function Rando(){
            var rand = Random()
            var parent = document.getElementById('parent');
            parent.appendChild(rand);
        }
    </script>
</body>
</html>
