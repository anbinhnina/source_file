<?php
	session_start();
	@define ( '_template' , './templates/');
	@define ( '_source' , './sources/');
	@define ( '_lib' , './libraries/');
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	$d = new database($config['database']);

	$d->reset();
	$d->query("select * from #_setting limit 0,1");
	$row_setting = $d->fetch_array();
	
	if(!isset($_SESSION['lang'])){
		$lang=$row_setting['lang'];
	}else{
		$lang=$_SESSION['lang'];
	}
	include_once _source."lang_$lang.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."counter.php"; 
	include_once _source."template.php";
	include_once _lib."file_requick.php";
?>
<!DOCTYPE html>
<html lang="vi">
<head>
<?php include_once _template."layout/meta.php"; ?>
<?php include_once _template.'layout/css.php'; ?>
<?=$row_setting['analytics']?> 
</head>

<body>
<div id="fb-root"></div>

<div class="maincontent">
	content


	<?php /*
	<!--header--><div id="header_top"><?php include _template."layout/header.php"; ?></div>
	<!--menu-->
	<div id="menu_top">
		<div class="menu"><?php include _template."layout/menu.php"; ?></div>
		<p class="resmenu_logo"><img src="thumb/85x61/1/<?=_upload_hinhanh_l.$logo['photo']?>" alt=""></p>
		<div class="menu_top"><?php include _template."layout/menu_top.php"; ?></div>
	</div>
	<!--slider--><?php if($template=='index'){?><div class="clear slider_containermain"><?php include _template."layout/full_width.php"; ?></div><?php }?>
	<!--main-->	
	<div class="<?=($template!='index')?'maintial_detail':'maintail_index'?>"><?php include _template.$template."_tpl.php";?><div class="clear"></div></div>
	<!--footer--><?php include _template."layout/footer.php";?>
	<!-- menu footer--><?php include _template."layout/menu_footer.php"; ?>
	<!-- ZALO--><a class="btn_zalo" href="https://zalo.me/<?=$row_setting['chinhanh']?>" target="_blank"><img data-src="images/icon_zalo.png" alt="" width="75px"></a>
	*/ ?>
</div>


<?php include_once _template.'layout/json_strucdata.php'; ?>
<?php include_once _template.'layout/js.php';  ?>
<?=$row_setting['vchat']?>
<?=$row_setting['script_bottom']?>
<?=$row_setting['script_top']?>
<?php
	include_once _template.'layout/facebook.php';
?>
</body>


</html>
