<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="/Public/css/style.css" rel="stylesheet">
    <link href="/Public/css/index.css" rel="stylesheet">
    <link href="/Public/css/ggxx.css" rel="stylesheet">   
    <script src="/Public/js/jquery.js"></script>
    <script src="/Public/js/style.js"></script>
    <title>龙子人力资源</title>
</head>
<body>
<div class="box"></div>
<div class="index_header">
    <a href="javascript:history.go(-1);" class="left"><img src="/Public/images/XQY-fh.png"/></a>
公告详情
    <a href="javascript:;" class="menu right"><img src="/Public/images/XQY-gd.png"/></a>
</div>
<!--菜单页-->
<div class="menu_list">
    <div class="list_l">
        <ul class="clear">
            <li>
                <a href="/index.php/Home/Index/index">                    
                    <span>首页</span>
                </a>
            </li>
            <li>
                <a href="/index.php/Home/Company/company">                    
                    <span>企业</span>
                </a>
            </li>
            <li>
                <a href="/index.php/Home/Release/resource">                    
                    <span>资源圈</span>
                </a>
            </li>
            <li>
                <a href="/index.php/Home/News/news">                   
                    <span>消息</span>
                </a>
            </li>
            <li>
                <a href="/index.php/Home/Person/person">                    
                    <span>我的</span>
                </a>
            </li>
            
        </ul>
    </div>
    
</div>
<!--公告列表-->
<div class="gonggao">
	<ul class="clear">
		<li class="gglines clear">
			<a href="#">
				<div class="gg_title clear">
					<h1><?php echo ($list[0][title]); ?></h1>
					<div class="ggfabu">
						<span>龙子网官方号</span>
						<span><?php echo ($list[0][time]); ?></span>
						<div class="ggfabu_r">
							<!-- <span><img src="/Public/images/GG-gkcs.png"/></span> -->
							<!-- <span>3660</span> -->
						</div>
					</div>
				</div>
				<div class="ggxx clear">
					<p><?php echo ($list[0][content]); ?></p>
				</div>				
			</a>
		</li>	
	</ul>
</div>
<br>
<br>
<br>
<br>
<br>

</body>
</html>