document.getElementById("button_payment").addEventListener("click", function () {
    var arrData = [];
    var container_cart = Array.from(document.getElementsByClassName('container_cart'));
    container_cart.forEach(ele => {
        var obj = {};
        var id = ele.getElementsByClassName('container_cart_item')[0].getAttribute('id');
        var quantity = ele.getElementsByClassName('cart_info_quantity')[0].textContent;
        obj.id = id;
        obj.name = ele.querySelector('.cart_info_name').textContent;
        obj.price = ele.querySelector('.container_cart_info_price').textContent
        obj.quantity = quantity;
        obj.img = ele.querySelector('img').getAttribute('src')
        arrData.push(obj);
    })
    document.querySelector('.app').classList.add('displayNode')
    var totalPrice = 0
    var paymentView = `
    <div class="header">
        <div class="header-block row">
            <div class="back-btn col-1">
                <em class="ti-back-left"></em>
            </div>
            <div class="header-term col-10">THANH TOÁN</div>
        </div>
    </div>
    <div class="full-content">
        <div class="container">    
            <div class="product-list">
                <div class="list-header row">
                    <div class="product-name col-6">Tên món ăn</div>
                    <div class="product-price col-2">Đơn giá</div>
                    <div class="product-count col-2">Số lượng</div>
                    <div class="product-total col-2">Thành tiền</div>
                </div>
                <div class="show-product">`
    arrData.forEach(ele => {
        totalPrice += +ele.price
        paymentView += `
        <div class="product row">
            <div class="product-img col-1">
                <img class="__box-img" src="${ele.img}">
            </div>
            <div class="product-name col-5">${ele.name}</div>
            <div class="product-price col-2">50000đ</div>
            <div class="product-count col-2">${ele.quantity}</div>
            <div class="product-total col-2">${ele.price}</div>
        </div>`
    })
    paymentView +=`
                </div>
                <div class="total row">
                    <div class="total-blank1 col-7"></div>
                    <div class="total-blank2 col-1"></div>
                    <div class="total-text col-2">TỔNG TIỀN</div>
                    <div class="total-num col-2">${totalPrice}</div>
                </div>
            </div>
    
            <div class="chooseMethod">
                <div class="chooseMethod--title">
                    Chọn phương thức thanh toán:
                </div>
                <div class="chooseMethod--choose" id="chooseMethod--choose">
                    <ul >
                        <li onclick="changemethod('e-banking')" class="chooseMethod--method">E-Banking</li>
                        <li onclick="changemethod('e-wallet')" class="chooseMethod--method active--payment">E-Wallet</li>
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
                        <input type="text" name="seri" id="seri">
                        <p class="price">Tổng tiền : ${totalPrice}</p>
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
                        <p class="price">Tổng tiền : 195000đ</p>
        
                        <input type="submit" value="Thanh toán">
                    </form>
                </div>
                
            </div>
        </div>
    </div>`
    // Add active class to the current button (highlight it)
    

    document.querySelector('.__payment-view').innerHTML = paymentView
    document.querySelector('.back-btn').addEventListener("click", function () {
        document.querySelector('.app').classList.remove('displayNode')
        document.querySelector('.__payment-view').innerHTML = ''
    })
    // console.log(arrData)

});
var header = document.getElementById("chooseMethod--choose");
    var btns = header.getElementsByClassName("chooseMethod--method");

    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function () {
            var current = document.getElementsByClassName("active--payment");
            if (current.length > 0) {
                current[0].className = current[0].className.replace(" active--payment", "");
            }
            this.className += " active--payment";
        });
    }


    function changemethod(id) {
        if (id == "e-wallet") {
            current = document.getElementById(id);
            current.classList.remove("hide")
            document.getElementById("e-banking").className += " hide";
        }
        if (id == "e-banking") {
            current = document.getElementById(id);
            current.classList.remove("hide")
            document.getElementById("e-wallet").className += " hide";
        }
    }


