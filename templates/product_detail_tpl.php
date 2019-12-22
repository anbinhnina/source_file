<div class="fixwidth clearfix">
  <div class="content_main">
    <div class="">
      <div class="img_detail col-md-5 col-sm-6 col-xs-12">
        <div class="main_img_detail">
          <a id="Zoomer" href="<?=_upload_product_l.$row_detail['photo']?>" class="MagicZoomPlus" rel="zoom-width:300px; zoom-height:300px;selectors-effect-speed: 600; selectors-class: Active;">
            <img src="thumb/625x500/1/<?=_upload_product_l.$row_detail['photo']?>" alt="<?=$row_detail['ten_'.$lang]?>"/>
          </a>
        </div>
        <?php include_once "layout/module/sub_img_detail_h.php"; ?>
      </div>

      <div class="info_detail col-md-7 col-sm-6 col-xs-12">
        <div class="item_info_detail name_detail"><h1><?=$row_detail['ten_'.$lang]?></h1></div>
        <div class="item_info_detail"><b><?=_masanpham?> : </b><span><?=$row_detail['masp']?></span></div>
        <div class="item_info_detail clearfix">
          <span class="price_now"><?=($row_detail['giaban']==0)?'Liên hệ':number_format($row_detail['giaban'],0,',','.')."đ"?></span>
          <?php if($row_detail['giacu']>0){?><span class="price_old">(<?=number_format($row_detail['giacu'],0,',','.')."đ"?>)</span><?php } ?>
        </div>
        <div class="item_info_detail"><b><?=_mota?> : </b><?=$row_detail['mota_'.$lang]?></div>
        
        <div class="item_info_detail"><?php include_once _template.'layout/module/share.php'; ?></div>
        <div class="item_info_detail amount_cart clearfix">
          <button id="minus"><i class="fa fa-minus" aria-hidden="true"></i></button>
          <input type="text" min="1" max="99" value="1" class="amount">
          <button id="plus"><i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
        <div class="item_info_detail">
          <a class="btn_Cart_Detail buy-now" onclick="addtocart(<?=$row_detail['id']?>,$('.amount).val(),1)">Mua ngay</a>
          <a class="btn_Cart_Detail buy-to-cart" onclick="addtocart(<?=$row_detail['id']?>,$('.amount').val(),0)">Thêm vào giỏ hàng</a>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="bottom_detail">
        <div class="contain_tab">
            <a href="#noidung_chitiet" class="item_tab active" ><?=_noidungchitiet?></a>
            <a href="#binhluan" class="item_tab" ><?=_binhluan?></a>
        </div><!--end contain tab-->
        <div class="clear"></div>
        <div class="contain_content_tab">
            <div id="noidung_chitiet" class="content_tab active ">
                <div class="text">
                    <?=check_ssl_content($row_detail['noidung_'.$lang])?>
                </div>
            </div>
            <div id="binhluan" class="content_tab">
              <div class="fb-comments" data-href="<?=getCurrentPageURL_CANO()?>" data-width="100%" data-numposts="5"></div>
            </div>
        </div>
    </div>
  </div>
</div>
<div class="fixwidth clearfix">
    <div class="title_main"><span><?=$title_other?></span></div>
    <div class="content_main clearfix">
        <div class="loadkhung_product">
          <?php foreach($product as $k=>$v){ $sale=countGiamgia($v['giacu'], $v['giaban']); ?>
            <div class="boxproduct_item">
                <a class="boxpronv_img" href="<?=$v['tenkhongdau']?>"><img class="lazy" data-src="<?=($v['photo'])?'thumb/195x190/1/'._upload_product_l.$v['photo']:'thumb/195x190/1/images/noimage.jpg'?>" alt=""></a>
                <h3 class="boxproduct_name"><a href="<?=$v['tenkhongdau']?>" title="<?=$v['ten_'.$lang]?>"><?=$v['ten_'.$lang]?></a></h3>
                <div class="price_product">                        
                    <span class="price_now"><?=$v['giaban']==0?_lienhe:number_format($v['giaban'],0,',','.').' đ'?></span> 
                    <?php if($v['giacu']>0){?><span class="price_old"><?=number_format($v['giacu'],0,',','.').' đ'?></span><?php }?>
                </div>
                <?php if($v['banchay']){?><p class="boxpronv_hot"><img src="images/sphot.png" alt=""></p><?php }?>
                <?php if($v['giacu']){?><p class="boxpronv_sale"><?=$sale?>%</p><?php }?>
            </div>
          <?php }?>
        </div>
    </div>
</div>
