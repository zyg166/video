﻿
<?php
include ('./inc/aik.config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta http-equiv="cache-control" content="no-siteapp">
<link rel='stylesheet' id='main-css'  href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='main-css'  href='css/play.css' type='text/css' media='all' />
<script type='text/javascript' src='http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js?ver=0.5'></script>

<meta name="keywords" content="枪版电影播放页-<?php echo $aik['sitename'];?>">
<title>正在播放-心理罪-<?php echo $aik['sitename'];?></title>
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
</head>
<style>
  .single-strong {color: #606060;font-size: 14px;font-weight: 700;border-left: 3px #ff5c5c solid;padding-left: 10px;display: block;line-height: 32px;margin: 10px 0;}
.html5play iframe{
	    height: 600px;
}
@media only screen and (max-width:420px){
.html5play iframe{
	    height: 260px;
}}
.html5play iframe{
	background: url(images/8.png) no-repeat;
    background-size: 100%;
}


</style>

<body class="page-template page-template-pages page-template-posts-play page-template-pagesposts-play-php page page-id-16">
<?php  include 'header.php';?>
<div class="single-post">
<section class="container">
    <div class="content-wrap">
    	<div class="content">
<div class="asst asst-post_header"><?php echo $aik['bofang_ad'];?></div>
<div class="sptitle"><h1>
心理罪</h1></div>
<div id="bof">
</div>
<div class="am-cf"></div>
<div class="am-panel am-panel-default">
<div class="am-panel-bd">
<div class="html5play">
<iframe name="心理罪" src="https://url.sqlgame.com/?path=/%E5%9C%A8%E7%BA%BF%E8%B5%84%E6%BA%90/xinlizui.mp4|a32556376" marginwidth="0" marginheight="0" border="0" scrolling="no" frameborder="0" topmargin="0" width="100%" height="100%"></iframe>
</div>
<p style="text-align:center;color: #fff;font-size: 10px;background: #6ED56C;padding:11px 8px;border-radius: 2px;">扫描右上角二维码，关注官方微信，看电影更方便!</p><div class="dianshijua" id="dianshijuid">
<a class='am-btn am-btn-default lipbtn' href='xlz.php'>TC</a>
</div>
</div>
<!--PC和WAP自适应版-->
<?php echo $aik['changyan'];?>
<div class="article-actions clearfix">
 <div class="shares">
        <strong>分享到：</strong>
        <a href="javascript:;" data-url="<?php echo $aik['pcdomain'];?>" class="share-weixin" title="分享到微信"><i class="fa"></i></a><a etap="share" data-share="qzone" class="share-qzone" title="分享到QQ空间"><i class="fa"></i></a><a etap="share" data-share="weibo" class="share-tsina" title="分享到新浪微博"><i class="fa"></i></a><a etap="share" data-share="tqq" class="share-tqq" title="分享到腾讯微博"><i class="fa"></i></a><a etap="share" data-share="qq" class="share-sqq" title="分享到QQ好友"><i class="fa"></i></a><a etap="share" data-share="renren" class="share-renren" title="分享到人人网"><i class="fa"></i></a><a etap="share" data-share="douban" class="share-douban" title="分享到豆瓣网"><i class="fa"></i></a>
    </div>   
 <a href="javascript:;" class="action-rewards" etap="rewards">打赏</a>
    </div> 
</div>
    	</div>
<?php  include 'sidebar.php';?>
</section>
</div>
<?php  include 'footer.php';?>
</body>
</html>