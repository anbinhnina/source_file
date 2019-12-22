<?php  
  @define ( "_LIB" , './libraries/');
  include_once _LIB."config.php";
?>
<!DOCTYPE html>
<html xml:lang>
<head>
	<title>Not found 404</title>
</head>
<body style="background:url(images/404.png) center no-repeat;width: 100%;height:100vh;overflow: hidden;">

<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	setTimeout(function(){
	window.location.href="http://<?=$config_url?>/";
	}, 3000);		
});
</script>

</body>
</html>
