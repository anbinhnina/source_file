<?php 
	/**
	 * NINA Framework
	 * Vertion 1.0
	 * Author NINA Co.,Ltd. (nina@nina.vn)
	 * Copyright (C) 2015 NINA Co.,Ltd. All rights reserved
	*/
	
	if(!defined('_lib')) die("Error");
	include_once _lib.'AntiSQLInjection.php';
	function nettuts_error_handler($number, $message, $file, $line, $vars){
		if (($number !== E_NOTICE) && ($number < 2048)){	
			die();
		}
	}
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	

	$api_url     = 'https://www.google.com/recaptcha/api/siteverify';
	$site_key    = '6Ld4kKEUAAAAAAmTCHa6_xcxB3MsT6RvIMCYXD4_';
	$secret_key  = '6Ld4kKEUAAAAALF3N8pNMqn1lkIZH_ytWGc35TO0';
	//$site_key    = '6Lcsd5kUAAAAAGQc7N1jOh3y4usRmMaXqHySYvF3';
	//$secret_key  = '6Lcsd5kUAAAAABtUZ7y-yP9_L_dlka47_bOnurZ3';
	
	$config_url = $_SERVER["SERVER_NAME"].'/source_nhom';
	$config_file = "http://".$config_url."/admin";
	$config['arrayDomainSSL'] = array("yourdomainssl.com.vn");
	$config['debug'] = 0;    #Bật chế độ debug dành cho developer
	$config['lang']="vi";
	$config['email']="";
	$config['pass']="";
	$config['ip']="";
	$config['lang']= array('vi'=>'Tiếng việt','en'=>'Tiếng anh');
	$config['lang_active']= 'vi';
	$config['salt']='@#$fd_!34^';
	$config['login_name'] = $config_url;
	$config['login']['attempt'] = 5;
	$config['login']['delay'] = 15;

	$config['author']['Name'] = "Vũ An Bình";
	$config['author']['Email'] = "anbinh.nina@gmail.com";

	$config['database']['debug'] = $config['debug'];	
	$config['database']['servername'] = 'localhost';
	$config['database']['username'] = 'root';
	$config['database']['password'] = '';
	$config['database']['database'] = 'source_nhom';
	$config['database']['refix'] = 'table_';

	error_reporting($config['debug']);
	if((float)phpversion() < 5.6)
		include_once _lib."class.database.v5.php";
	else
		include_once _lib."class.database.v7.php";
?>