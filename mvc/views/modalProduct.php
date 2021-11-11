<?php
$output = '<div class="content_top">
<div class="content_top_img">
    <img src="./assets/img/'.$product['img']. '.png" alt="">
</div>
<div class="content_top_sale">
    <h2 class="content_top_name">'.$product['Name'].'</h2>
    <div class="content_top_price">Price: '.$product['Price'].'đ</div>
</div>
</div>
<div class="content_bottom">
<div class="content_bottom_description">
    <h2 class="content_bottom_description_title">Description</h2>
    <p>'.$product['Description'].'</p>
</div>
</div>
';
echo $output;
?>
