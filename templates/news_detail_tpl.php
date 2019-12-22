<div class="fixwidth">
	<h2 class="pagetitle"><span><?=$title_detail?></span></h2>
	<div id="info">
	  <div id="sanpham">
		<div class="khung">
			<h1 class="tieude"><?=$row_detail['ten_'.$lang]?></h1>
		  	<p class="ngaydang">Ngày đăng :<?=date('d/m/Y - g:i A',$row_detail['ngaytao']);?></p>
		  	<div class="noidung">
		  		<?=check_ssl_content($row_detail['noidung_'.$lang])?>
		  		<?php include_once _template.'layout/module/share.php'; ?>
            	<div class="fb-comments" data-href="<?=getCurrentPageURL_CANO()?>" data-width="100%" data-numposts="5"></div>
		  	</div>
		  	<div style="clear:left;"></div>		  	

		  	<div class="boxnews_share">
		  		<div class="title_news_other">Bài viết khác</div>
			  	<?php foreach($tintuc as $tinkhac){?>
			  		<div style="padding:2px 0px 2px 10px; height:auto;"><a href="<?=$tinkhac['tenkhongdau']?>" style="text-decoration:none;"><img src="images/muiten.png" border="0" />&nbsp;&nbsp;<span style="font-size:13px; color:#666;"><?=$tinkhac['ten_'.$lang]?></span></a></div>
			  	<?php }?>
			</div>
		</div>
	  </div>
	</div>
	<div class="clear"></div>
</div>