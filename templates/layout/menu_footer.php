<?php
    //lấy sản phẩm cấp 1:
    $d->reset();
    $sql = "select id,tenkhongdau,ten_$lang as ten from #_product_list where type='product' and hienthi=1 order by stt,id desc";
    $d->query($sql);
    $product_list = $d->result_array();
?>

<nav id="menu_mb">
  <ul class="menu_footer">
    <li class=""><a href="" title="Trang chủ">Trang chủ</a></li>   
    <li class=""><a href="gioi-thieu.html" title="Giới thiệu">Giới thiệu</a></li>          
    <li class=""><a href="san-pham.html" ttile="Sản phẩm">Sản phẩm</a>
        <ul class="">
            <?php foreach($product_list as $l=>$list){
                $d->reset();
                $sql = "select id,tenkhongdau,ten_$lang as ten from #_product_cat where type='product' and id_list='".$list['id']."' and hienthi=1 order by stt,id desc";
                $d->query($sql);
                $product_cat = $d->result_array();
            ?>
            <li><a href="san-pham/<?=$list['id']?>/<?=$list['tenkhongdau']?>/"><?=$list['ten']?></a>
                <ul class="">
                    <?php foreach($product_cat as $c=>$cat){?>
                    <li><a href="san-pham/<?=$cat['id']?>/<?=$cat['tenkhongdau']?>.htm"><?=$cat['ten']?></a></li>
                    <?php }?>
                </ul>
            </li>
            <?php }?>
        </ul>
    </li>
    <li class=""><a href="chinh-sach.html" title="Chính sách">Chính sách</a></li>  
    <li class=""><a href="uu-dai.html" title="Ưu đãi">Ưu đãi</a></li>  
    <li class=""><a href="tin-tuc.html" title="Tin tức">Tin tức</a></li>
    <li class=""><a href="lien-he.html" title="Liên hệ">Liên hệ</a></li>   
  </ul>
</nav>

<!--Gọi điện tư vấn-->
<div class="call">
    <div class="call_hotline">
        <span class="blink_me">
            <a href="tel:<?=$row_setting['hotline']?>"><img src="images/goidien.png" alt="">Gọi điện</a>
        </span>
    </div>
    <div>
        <strong style="background:url(images/tuvan.png) no-repeat left center;  background-size:auto 25px;"><a href="sms:<?=$row_setting['hotline']?>">SMS</a></strong>
    </div>
    <div>
        <strong style="background:url(images/chiduong.png) no-repeat left center; background-size:auto 25px;padding-left: 30px;"><a href="lien-he">Bản đồ</a></strong>
    </div>
</div>
