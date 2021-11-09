<div class="container_app">
    <div class="grid">
        <div class="grid__row">
            <div class="col-9">
            <?php foreach($productsByType as $type): ?>
                <div class="item_list">
                    <div class="grid__row">
                        <?php foreach($type['products'] as $product): ?>
                            <div class="col-3">
                                <div class="item_list_detail" id="<?=$product['ID']?>">
                                    <img class="showModal" src="./assets/img/<?= $product['img'] ?>.png" alt="">
                                    <div class="item_list_content">
                                        <div class="item_name"><?= $product['Name'] ?></div>
                                        <div class="item_sale">
                                            <div class="item_price">Giá: <span><?= $product['Price'] ?></span>đ</div>
                                            <button class="button_add_cart" id="<?=$product['ID']?>"><i class="bi bi-cart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
            <div class="col-3">
                <div class="item_cart">
                    <div class="header_cart">
                        <i class="bi bi-cart-check-fill"></i>
                        <div class="your_cart">Your Cart (<span>0</span>)</div>
                    </div>
                    <div class="item_cart_list">

                    </div>
                    <div class="payment_cart">
                        <button id="button_payment" class="button_payment">Thanh toán</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal_product displayNode">
    <div class="modal_content">
        <div class="modal_content_in">
            <div class="__modal-content">
                
            </div>
            
            <div class="button_close_modal">
                <button id="button_close_modal">Close</button>
            </div>

        </div>
    </div>
</div>