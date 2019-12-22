<div class="fixwidth">
  <h1 class="pagetitle"><span><?=$title_detail?></span></h1>

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
  <div class="page_content" align="center"><div class="paging"><?=$paging?></div></div>
  <div class="clear"></div>
</div>