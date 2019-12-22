<h1 style="display: none"><?=$row_setting['ten_'.$lang]?></h1>
<!--BOX TIÊU CHÍ-->
<div class="boxtieuchi_container">
    <div class="fixwidth">
        <div class="boxtieuchi_list">
            <div class="auto_tc">
                <?php foreach($tieuchis as $k=>$v){?>
                    <div class="boxtieuchi_item" style="background:<?=($v['color'])?$v['color']:'#ebebeb'?>">
                        <a class="boxtieuchi_img" href="<?=$v['tenkhongdau']?>"><img data-lazy="<?=($v['photo'])?'thumb/50x50/1/'._upload_baiviet_l.$v['photo']:'thumb/50x50/1/images/noimage.jpg'?>" alt=""></a>
                        <div class="boxtieuchi_info">
                            <h2><a href="<?=$v['tenkhongdau']?>"><?=$v['ten']?></a></h2>
                            <p class="boxtieuchi_des"><?=catchuoi($v['mota'],80)?></p>
                        </div>
                        <div class="clear"></div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>

<!--BOX ĐẶC SẢN-->
<div class="boxdacsan_container">
    <div class="fixwidth">
        <div class="boxdacsan_title"><span>Đặc sản nổi bật</span><a class="boxdacsan_dangtin" href="danh-sach-tin-dang">Tin đăng</a><a class="boxdacsan_all" href="san-pham">Xem tất cả ></a><div class="clear"></div></div>
        <div class="boxxproduct_list loadkhung_product">
            <?php foreach($product_index as $k=>$v){ $sale=countGiamgia($v['giacu'], $v['giaban']);?>
                <div class="boxproduct_item">
                    <a class="boxpronv_img" href="<?=$v['tenkhongdau']?>"><img class="lazy" data-src="<?=($v['photo'])?'thumb/195x190/1/'._upload_product_l.$v['photo']:'thumb/195x190/1/images/noimage.jpg'?>" alt=""></a>
                    <h3 class="boxproduct_name"><a href="<?=$v['tenkhongdau']?>" title="<?=$v['ten_vi']?>"><?=$v['ten_'.$lang]?></a></h3>
                    <div class="price_product">                        
                        <span class="price_now"><?=$v['giaban']==0?_lienhe:number_format($v['giaban'],0,',','.').' đ'?></span> 
                        <?php if($v['giacu']>0){?><span class="price_old"><?=number_format($v['giacu'],0,',','.').' đ'?></span><?php }?>
                    </div>
                    <?php if($v['banchay']){?><p class="boxpronv_hot"><img src="images/sphot.png" alt=""></p><?php }?>
                    <?php if($v['giacu']){?><p class="boxpronv_sale">-<?=$sale?>%</p><?php }?>
                </div>
            <?php }?>
        </div>
    </div>
</div>


<!--BOX PRO LIST NB-->
<?php foreach($product_listnb as $l=>$list){
    $d->reset();
    $d->query("select ten_$lang as ten,id,tenkhongdau,photo from #_product_item where type='product' and id_cat='".$list['id']."' and hienthi=1 order by stt,id desc");
    $product_itemnb = $d->result_array();

    $d->reset();
    $d->query("select ten_$lang,id,tenkhongdau,photo,giaban,giacu,soluong,banchay from #_product where type='product' and id_cat='".$list['id']."' and noibat=1 and hienthi=1 order by stt,id desc");
    $product_s = $d->result_array();
?>
<div class="boxprolistnb_container">
    <div class="fixwidth">
        <div class="boxdacsan_title"><span><?=$list['ten']?></span><a class="boxdacsan_all" href="<?=$list['tenkhongdau']?>">Xem tất cả ></a><div class="clear"></div></div>
        <div class="boxprolist_list <?=($l%2!=0)?'fixprolist_list':''?>">
            <div class="boxprolist_left">
                <?php if($product_itemnb){?>
                    <ul>
                    <?php foreach($product_itemnb as $i=>$item){?>
                        <li><a href="<?=$item['tenkhongdau']?>"><?=$item['ten']?></a></li>
                    <?php }?>
                    </ul>
                <?php }else{?>
                    <p style="color:red;text-align: center;padding:15px 0;font-style: italic;">[Đang cập nhật]</p>
                <?php }?>    
            </div>
            <div class="boxprolist_right">
                <div class="auto_pro">
                    <?php foreach($product_s as $k=>$v){ $sale=countGiamgia($v['giacu'], $v['giaban']);?>
                        <div>
                            <div class="boxpronv_autoitem">
                                <a class="boxpronv_img" href="<?=$v['tenkhongdau']?>"><img class="lazy" data-lazy="<?=($v['photo'])?'thumb/195x190/1/'._upload_product_l.$v['photo']:'thumb/195x190/1/images/noimage.jpg'?>" alt=""></a>
                                <h3 class="boxproduct_name"><a href="<?=$v['tenkhongdau']?>" title="<?=$v['ten_vi']?>"><?=$v['ten_'.$lang]?></a></h3>
                                <div class="price_product">                        
                                    <span class="price_now"><?=$v['giaban']==0?_lienhe:number_format($v['giaban'],0,',','.').' đ'?></span> 
                                    <?php if($v['giacu']>0){?><span class="price_old"><?=number_format($v['giacu'],0,',','.').' đ'?></span><?php }?>
                                </div>
                                <?php if($v['banchay']){?><p class="boxpronv_hot"><img src="images/sphot.png" alt=""></p><?php }?>
                                <?php if($v['giacu']){?><p class="boxpronv_sale">-<?=$sale?>%</p><?php }?>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<?php }?>


<!--BOX TIN TỨC-->
<div class="boxtintuc_container">
    <div class="fixwidth">
        <div class="boxdacsan_title"><span>Tin tức</span><a class="boxdacsan_all" href="tin-tuc">Xem tất cả ></a><div class="clear"></div></div>
        <div class="boxtintuc_list">
            <div class="auto_tt">
            <?php foreach($news_scroll as $k=>$v){?>
                <div class="boxtintuc_item">
                    <a class="boxtintuc_img" href="<?=$v['tenkhongdau']?>"><img data-lazy="<?=($v['photo'])?'thumb/275x190/1/'._upload_baiviet_l.$v['photo']:'thumb/275x190/1/images/noimage.jpg'?>" alt=""></a>
                    <div class="boxtintuc_info">
                        <p class="boxtintuc_date"><span><?=date('d',$v['ngaytao'])?></span>Tháng <?=date('m',$v['ngaytao'])?></p>
                        <div class="boxtintuc_noidung">
                            <h4><a href="<?=$v['tenkhongdau']?>"><?=$v['ten']?></a></h4>
                            <p>Bài viết</p>
                        </div>
                        <div class="clear boxtintuc_des"><?=catchuoi($v['mota'],130)?></div>
                    </div>
                </div>
            <?php }?>
            </div>
        </div>
    </div>
</div>