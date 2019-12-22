<meta charset="UTF-8">
<!--<meta charset="UTF-8" name='viewport' content='width=1200'>-->
<meta charset="UTF-8" name='viewport' content='width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no'>
<base href="<?=$http.$config_url?>/">
<link id="favicon" rel="shortcut icon" href="<?=_upload_hinhanh_l.$favicon['thumb_'.$lang]?>" type="image/x-icon" />
<title><?=$title_bar?></title>
<meta name="description" content="<?=$description_bar?>">
<meta name="keywords" content="<?=$keywords_bar?>">
<?=$row_setting['meta']?>
<meta name="robots" content="noodp,index,follow" />
<meta http-equiv="audience" content="General" />
<meta name="resource-type" content="Document" />
<meta name="distribution" content="Global" />
<meta name='revisit-after' content='1 days' />
<meta name="ICBM" content="<?=$row_setting['toado']?>">
<meta name="geo.position" content="<?=$row_setting['toado']?>">
<meta name="geo.placename" content="<?=$row_setting['diachi_'.$lang]?>">
<meta name="author" content="<?=$row_setting['ten_'.$lang]?>">
<link rel="canonical" href="<?=getCurrentPageURL_CANO()?>" />
<meta property="og:site_name" content="<?=$row_setting['website']?>" />
<meta property="og:locale" content="vi_VN" />
<?php include _template.'layout/meta_share.php'; ?>
<meta name="dc.language" CONTENT="vietnamese">
<meta name="dc.source" CONTENT="<?=$http.$config_url?>">
<meta name="dc.title" CONTENT="<?=$title_bar?>">
<meta name="dc.keywords" CONTENT="<?=$keywords_bar?>">
<meta name="dc.description" CONTENT="<?=$description_bar?>">
<?php if($_SERVER["HTTPS"]=='on'){ ?>
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<?php } ?>