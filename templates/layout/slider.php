<div class="slider_container">
	<div id="jssor_rotator" style="position:relative;margin:0 auto;top:0px;left:0px; width: 928px;height: 400px;overflow:hidden;">
		<!-- Loading Screen -->
		<div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
			<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="images/spin.svg"/>
		</div>
		<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width: 928px;height: 400px;overflow:hidden;">
			<?php foreach ($slider as $arow){?>
			<div>
				<a href="<?=$arow['link']?>" target="_blank"><img alt="<?=$arow["ten_$lang"]; ?>" data-u="image" src="thumb/928x400/1/<?php echo _upload_hinhanh_l.$arow["photo"];?>" onerror="this.src='thumb/928x400/2/images/noimage.jpg'" /></a>
			 </div>
			<?php }?>
		</div>
		<!-- Arrow Navigator -->
		<div data-u="arrowleft" class="jssora093" style="position:absolute;width:35px;height:35px;top:calc(50% - 50px);left:0px;cursor:pointer;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
			<img src="images/arrow_left.png" alt="">
		</div>
		<div data-u="arrowright" class="jssora093" style="position:absolute;width:35px;height:35px;top:calc(50% - 50px);right:0px;cursor:pointer;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
			<img src="images/arrow_right.png" alt="">
		</div>
	</div>
</div>