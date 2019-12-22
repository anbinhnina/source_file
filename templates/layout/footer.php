<?php	
	$d->reset();
    $sql= "select photo_vi as photo,link from #_photo where type='logo_ct' and hienthi!=0";
    $d->query($sql);
    $logo_ct = $d->fetch_array();

	$d->reset();
    $sql_slider = "select photo_vi as photo,link from #_photo where type='mxh_f' and hienthi=1 order by stt,id desc";
    $d->query($sql_slider);
    $mxh_f=$d->result_array();    

    $d->reset();
	$sql = "select noidung_$lang as noidung from #_company where type='footer' ";
	$d->query($sql);
	$footer = $d->fetch_array();

	$d->reset();
	$sql = "select id,tenkhongdau,ten_$lang as ten from #_baiviet where type='chinhsach' and hienthi=1 order by stt,id desc";
	$d->query($sql);
	$chinhsachs = $d->result_array();
?>

<div class="boxfooter_container">
	<div class="fixwidth">
		<div class="boxfooter_left">
			<p class="boxfooter_title">Giới thiệu</p>
			<div class="boxfooter_list">
				<?php foreach($gioithieus as $k=>$v){?>
					<p><a href="<?=$v['tenkhongdau']?>"><?=$v['ten']?></a></p>
				<?php }?>
			</div>
		</div>
		<div class="boxfooter_middle">
			<p class="boxfooter_title">Hỗ trợ khách hàng</p>
			<div class="boxfooter_list">
				<?php foreach($hotros as $k=>$v){?>
					<p><a href="<?=$v['tenkhongdau']?>"><?=$v['ten']?></a></p>
				<?php }?>
			</div>			
		</div>
		<div class="boxfooter_right">
			<p class="boxfooter_title">Đăng ký nhận tin</p>
			<p class="boxfooter_slogan">Vui lòng đăng ký nhận tin để biết thêm thông tin quảng cáo</p>
			<form method="POST" class="boxform_input" action="trang-chu">
				<input type="text" name="input_email" class="input_form input_email" placeholder="Mail của bạn..." required>
				<input type="hidden" id="recaptchaResponseEmail" name="recaptcha_responseEmail">
				<input type="submit" name="input_submitbtn" class="input_submitbtn" value="Gửi">
			</form>
			<div class="boxfooter_mxh">
				<?php foreach($mxh_f as $k=>$v){?>
	                <a href="<?=$v['link']?>" target="_blank"><img src="thumb/27x27/1/<?=_upload_hinhanh_l.$v['photo']?>" alt=""></a>
	            <?php }?>
			</div>
		</div>
		<div class="boxfooter_khac">
			<p class="boxfooter_title">Fanpage</p>
			<div class="chat_facebook"></div>
		</div>
		<div class="clear"></div>
	</div>

	<div class="boxfooter_infomation">
		<div class="fixwidth">
			<div class="boxfooter_info_item boxfooter_info_time">
				Giờ mở cửa: <p><?=$row_setting['giolamviec']?></p>
			</div>
			<div class="boxfooter_info_item boxfooter_info_phone">
				Hotline đặt hàng: <p><?=$row_setting['hotline']?></p>
			</div>
			<div class="boxfooter_info_item boxfooter_info_add">
				<p><?=$row_setting['diachi_'.$lang]?></p>
			</div>
			<div class="boxfooter_info_item boxfooter_info_mail">
				Email: <p><?=$row_setting['email']?></p>
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<div class="boxfooter_bottom">
		<div class="fixwidth">
			<p class="boxfooterbt_left"><?=$row_setting['copyright']?>. Design by Nina Co .,Ltd</p>
			<div class="boxfooterbt_right">Đang online: 99 <span>|</span>Tổng truy cập: 999</div>
			<div class="clear"></div>
		</div>
	</div>
</div>