﻿<?php
include ('./inc/aik.config.php');
?>
<?='<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta http-equiv="cache-control" content="no-siteapp">
<title>'; echo $aik['title'];?><?="</title>
<link rel='stylesheet' id='main-css'  href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='main-css'  href='css/index.css' type='text/css' media='all' />
<script type='text/javascript' src='http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js?ver=0.5'></script>
<meta name=\"keywords\" content=\""; echo $aik['keywords'];?><?='">
<meta name="description" content="'; echo $aik['description'];?><?='">
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
</head>
<body class="home blog">
';  include 'header.php';?>
<?='<div id="homeso">
<form method="post" id="soform" style="text-align: center;float: none" action="./seacher.php">
'; echo $aik['logo_ss'];?><?='<br><br>
<input tabindex="2" class="homesoin" id="sos" name="wd" type="text" placeholder="输入你要观看的视频" value="">
<button id="button" tabindex="3" class="homesobtn" type="submit"><i class="fa">观看</i></button>
</form>


</div>
';
 $do1='http://www.360kan.com/dianying/list.php?cat=all&pageno=1';$do2='http://www.360kan.com/dianshi/list.php?cat=all&pageno=1';$do11=base64_encode($do1);$do21=base64_encode($do2);?>


 }
}
</script>
</div>
<?php 
$url='./cx/cx.php'; 
$html = file_get_contents($url); 
echo $html; 
?> 


</div>
<!--http://www.ffwef.top-->
<?php  include 'footer.php';?>
</body>
</html>