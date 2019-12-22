<div class="fixwidth">
	<h1 class="pagetitle"><span><?=$title_detail?></span></h1>
	<div id="info">
		<div class="khung">
		  <div>
			<?php foreach($tintuc as $k=>$v){?>
			<div class="box_new"> 
				<a class="box_new_img" href="<?=$v['tenkhongdau']?>" >
					<img src="thumb/150x110/1/<?=_upload_baiviet_l.$v['photo']?>" border="0" align="left" onerror="this.src='thumb/150x110/1/images/noimage.jpg'" />
				</a>
				<div class="box_new_info">
				  	<h3><a href="<?=$v['tenkhongdau']?>"><?=$v['ten_'.$lang]?></a></h3>
				  	<span class="ngaydang">Ngày đăng :<?=date('d/m/Y - g:i A',$v['ngaytao']);?></span>
				  	<div class="box_new_des"><?=catchuoi($v['mota_'.$lang],180)?></div>
			  	</div>
			  	<div class="clear"></div>
			</div>
			<?php }?>
			<div class="clear"></div>
		  </div>
		  <div align="center"><div class="paging"><?=$paging?></div></div>
		</div>
	</div>
	<div class="clear"></div>
</div>
