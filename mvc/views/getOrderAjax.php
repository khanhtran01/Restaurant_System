<?php
    $output = '';
    foreach($orders as $order){
        $output .= '
        <div id="item1" class="orderbox">            
            <div class="b4-grid-row">
                <div class="header_cart">
                    <i class="bi bi-cart-check-fill"></i>
                    <div class="your_cart"> Order <span>'.$order['ID'].'</span></div>
                </div>
                <div class="grid__row">';
        foreach($order['foods'] as $food){
            $output .= '
                    <div class="col-2">
                        <div class="item_list_detail" id="'.$food['ID'].'">
                            <img src="./assets/img/'.$food['img'].'.png" alt="">
                            <div class="item_list_content">
                                <div class="item_name_OM">'.$food['Name'].'</div>
                                <div class="item_quantity_OM">Số lượng: '.$food['quantity'].'</div>
                            </div>
                        </div>
                    </div>';
        }   
        $output .= '
                </div>
                <br><button data-id='.$order['ID'].' class="finish_food"> Finish</button><br> 
            </div>
        </div>';
    }
    echo $output;
?>

