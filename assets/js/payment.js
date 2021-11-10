document.getElementById("button_payment").addEventListener("click", function () {
    var arrData = [];
    var container_cart = Array.from(document.getElementsByClassName('container_cart'));
    container_cart.forEach(ele => {
        var obj = {};
        var id = ele.getElementsByClassName('container_cart_item')[0].getAttribute('id');
        var quantity = ele.getElementsByClassName('cart_info_quantity')[0].textContent;
        obj.id = id;
        obj.quantity = quantity;
        arrData.push(obj);
    })
    document.querySelector('.app').classList.add('displayNode')
    var paymentView = `<div class="header">
    <div class="header-block row">
        <div class="back-btn col-1">
            <em class="ti-back-left"></em>
        </div>
        <div class="header-term col-10">THANH TOÁN</div>
    </div>
</div>`
    document.querySelector('.__payment-view').innerHTML = paymentView
    // console.log(arrData)
    
});