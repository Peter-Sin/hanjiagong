<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="/Public/css/style.css" rel="stylesheet">
    <link href="/Public/css/person.css" rel="stylesheet">
    <script src="/Public/js/jquery.js"></script>
    <script src="/Public/js/style.js"></script>
    <title>龙子人力资源</title>
</head>
<body>
<!--点击top回到顶部-->
<div class="floatwindow">
    <div class="top">
        <img src="/Public/images/index_fanhuidingbu.png"/>
    </div>
    <div class="release">
        <img src="/Public/images/index_fabu.png"/>
    </div>
</div>
<!--占位用-->
<div class="box"></div>
<div class="index_header">
    我的
</div>
<div class="index_footer">
    <ul class="clear">
    	<li><a href="/index.php/Home/Index/index"><img src="/Public/images/index_footerSY.png"/></a></li>
    	<li><a href="/index.php/Home/Company/company"><img src="/Public/images/index_footerQY.png"/></a></li>
    	<li><a href="/index.php/Home/Release/resource"><img src="/Public/images/index_footerZYQ.png"/></a></li>
    	<li><a href="/index.php/Home/News/news"><img src="/Public/images/index_footerXX.png"/></a></li>
    	<li><a href="/index.php/Home/Person/person"><img src="/Public/images/index_footerWD1.png"/></a></li>
    </ul>   
</div>
<!--菜单页-->
<!--<div class="menu_list">
    <div class="head">
        <a class="close" href="javascript:;"><img src="/Public/images/index_classify_gb.png"/></a>
        龙子网
    </div> 
</div>-->

<div class="column">
	<div class="person">
		<a href="#">
			<img src="/Public/images/WD-weidenglu.png"/>
			<div>
				<p><?php echo ($list['username']); ?></p>
				<p><?php echo ($statu); ?></p>
			</div>
			<!-- <span><img src="/Public/images/WD-xyy.png"/></span> -->
		</a>
	</div>
	<div class="money">
		<ul class="clear">
			<li><a href="/index.php/Home/Person/wallet"><img src="/Public/images/WD-qb.png"/><p>￥<?php echo ($balance); ?></p></a></li>
			<li><a href="/index.php/Home/Person/commision"><img src="/Public/images/WD-yj.png"/><p>￥<?php echo ($balance1); ?></p></a></li>
			<li><a href="/index.php/Home/Person/invite"><img src="/Public/images/WD-tg.png"/><p>推广码：<?php echo ($list['recode']); ?></p></a></li>
		</ul>
	</div>
	<div class="fun">
            <div class="margin">
                <a class="clear" href="/index.php/Home/Person/personal">
                     <img src="/Public/images/WD-grxx.png"/>
                     <div>个人信息</div>
                     <span><img src="/Public/images/WD-xyy.png"/></span>
                 </a>
                <a style="border-top:2px solid #f9f9f9;" class="clear" href=/index.php/Home/Person/certification><img src="/Public/images/WD-rz.png"/><div>实名认证</div><span><img src="/Public/images/WD-xyy.png"/></span></a>
                 <a style="border-top:2px solid #f9f9f9;" class="clear" href=/index.php/Home/Person/authorize><img src="/Public/images/WD-sq.png"/><div>我的授权</div><span><img src="/Public/images/WD-xyy.png"/></span></a>
            </div>
            <div class="margin">
                <a class="clear" href="/index.php/Home/Person/enrollline"><img src="/Public/images/WD-lsjl.png"/><div>报名记录</div><span><img src="/Public/images/WD-xyy.png"/></span></a>
               
            </div>
            <div class="margin">
                <a class="clear" href="/index.php/Home/Person/myrelease"><img src="/Public/images/WD-fb.png"/><div>我的发布</div><span><img src="/Public/images/WD-xyy.png"/></span></a>
               
            </div>
            <div class="margin">
                <a class="clear" href="/index.php/Home/Person/go_time"><img src="/Public/images/WD-shezhi.png"/><div>出发时间</div><span><img src="/Public/images/WD-xyy.png"/></span></a>
               
            </div>
            
            <div class="margin">
                <a class="clear" href="/index.php/Home/Person/about"><img src="/Public/images/WD-gywm.png"/><div>关于我们</div><span><img src="/Public/images/WD-xyy.png"/></span></a>
                
            </div>
    </div>
	
   
</div>
<br>
<br>
<br>
<br>
<br>

</body>
</html>