<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="baidu-site-verification" content="6BvH2SLazw"/>
    <meta name="keyword" Lang="EN" content="龙子人力资源，人力资源，龙子人力，龙子网，龙子网人力资源，龙子网人力，大学生人力资源">
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="/Public/css/style.css" rel="stylesheet">
    <link href="/Public/css/swiper.css" rel="stylesheet">
    <link href="/Public/css/index.css"rel="stylesheet">
    <script src="/Public/js/jquery.js"></script>
    <script src="/Public/js/swiper.js"></script>
    <script src="/Public/js/style.js"></script>
    <script src="/Public/js/app4.js"></script>
    <title>龙子人力资源</title>
</head>
<body>
<!--点击top回到顶部-->
<div class="floatwindow">
    <div class="top">
        <img src="/Public/images/index_fanhuidingbu.png"/>
    </div>
    <div class="release">
         <a href="/index.php/Home/Release/release_job"><img src="/Public/images/index_fabu.png"/></a>
    </div>
</div>
<!--占位用-->
<div class="box"></div>
<div class="index_header">
    <!--<a href="javascript:;" class="left"><img src="/Public/images/index_gerenzhongxin.png"/></a>-->
    龙子人力资源
    <!-- <a href="/index.php/Home/Login/index">登陆</a> -->
    <!--<a href="javascript:;" class="menu right"><img src="/Public/images/index_fenlei.png"/></a>-->
</div>
<div class="index_footer">
    <!--<a href="javascript:;" class="left"><img src="/Public/images/index_gerenzhongxin.png"/></a>-->
    <ul class="clear">
    	<li><a href="/index.php/Home/Index/index"><img src="/Public/images/index_footerSY1.png"/></a></li>
    	<li><a href="/index.php/Home/Company/company"><img src="/Public/images/index_footerQY.png"/></a></li>
    	<li><a href="/index.php/Home/Release/resource"><img src="/Public/images/index_footerZYQ.png"/></a></li>
    	<li class="caonima"><a href="/index.php/Home/News/news"><img src="/Public/images/index_footerXX.png"/></a></li>
    	<li class="caonima"><a href="/index.php/Home/Person/person"><img src="/Public/images/index_footerWD.png"/></a></li>
    </ul>
    <!--<a href="javascript:;" class="menu right"><img src="/Public/images/index_fenlei.png"/></a>-->
</div>

<!--swiper轮播插件-->
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide"><a href="javascript:;"> <img src="/Public/images/banner1.jpg"/></a></div>
        <div class="swiper-slide"><a href="javascript:;"> <img src="/Public/images/index_banner.png"/></a></div>
        <!-- <div class="swiper-slide"><a href="javascript:;"> <img src="/Public/images/index_banner.png"/></a></div>
        <div class="swiper-slide"><a href="javascript:;"> <img src="/Public/images/index_banner.png"/></a></div> -->
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination">1</div>
    <div class="swiper-pagination">2</div>
    <div class="swiper-pagination">3</div>
    <div class="swiper-pagination">4</div>
</div>
<!-- Swiper JS -->
<script src="/Public/js/swiper.js"></script>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        autoplay:3000,
        autoplayDisableOnInteraction : false,
        loop:true
    });
</script>
<!--导航-->
<div id="nav">
    <ul class="clear">
        <li><a href="/index.php/Home/Person/guarantee"><img src="/Public/images/index_baozhang.png"/>我的保障</a></li>
        <li class="caonima"><a href="/index.php/Home/Person/commision"><img src="/Public/images/index_yongjin.png"/>我的佣金</a></li>
        <li class="caonima"><a href="/index.php/Home/Person/wallet"><img src="/Public/images/index_zhuxuejin.png"/>我的助学金</a></li>
        <li class="caonima"><a href="/index.php/Home/Enroll/index"><img src="/Public/images/index_baoming.png"/>我要报名</a></li>       
        <li class="caonima"><a href="/index.php/Home/Person/invite"><img src="/Public/images/index_tuiguang.png"/>我要推广</a></li>
    </ul>
</div>
<!--公告-->
<div class="notice clear">
    <i><img src="/Public/images/index_tongzhigonggao.png"/></i>
    <a href="javascript:;"><span></span></a>
    <div class="bulletin">
        <ul>
        <?php if(is_array($info)): foreach($info as $key=>$val): ?><li><a href="/index.php/Home/News/gfggxq?id=<?php echo ($val["id"]); ?>"><?php echo ($val["title"]); ?></a></li>
           <!--  <li><a href="/index.php/Home/News/lzwgfh">龙子网倾情打造龙子人力资源 致力于解决学生们就业创业难问题 寒假工正在招募中 欢迎大家前来报名 我们不求做的最好，只会做的更好，把学生们的利益最大化</a></li> --><?php endforeach; endif; ?>
        </ul>
    </div>
</div>
<!--公告滚动-->
<script>
    $(".bulletin").Scroll({line:1,speed:1000,timer:2000});
</script>
<p id="sessionss" style="display:none;"><?php echo ($_SESSION['id']); ?></p>
<!--列表-->
<div class="column">
   <!--企业-->
	<div class="index_company">
		<span>合作企业</span><span><a href="/index.php/Home/Company/company">更多>></a></span>
	</div>
    <div class="inner">
        <ul>
            <?php if(is_array($list)): foreach($list as $key=>$val): ?><li class="headlines clear">
                    <a href="/index.php/Home/Company/companyxq?cid=<?php echo ($val["cuid"]); ?>">
                        <div class="l_box clear">
                            <h1><?php echo ($val["title"]); ?></h1></span>
                            <div class="types">
                            	<span><?php echo ($val["classify"]); ?></span>
                            	<span><?php echo ($val["wage"]); ?>元</span>
                            </div>
                            <div class="pruduct">
                                <!--<span class="act">高校头条</span>-->
                                <div class="comment">
                                   <!-- <img src="/Public/images/index_pinglun.png">-->
                                    <span>定金</span>
                                    <span>￥<?php echo ($val["earnest"]); ?></span>
                                </div>
                                <div class="good">
                                    <img src="/Public/images/ZYQ-weizhi.png">
                                    <span><?php echo ($val["town"]); ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="r_box clear">
                            <img src="/Public/images/company/<?php echo ($val["image"]); ?>">
                        </div>
                        <div class="user clear">
                        	<span><?php echo ($val["treatment"]["0"]); ?></span><span><?php echo ($val["treatment"]["1"]); ?></span><span><?php echo ($val["treatment"]["2"]); ?></span><span><?php echo ($val["treatment"]["3"]); ?></span>
                        </div>
                    </a>
                </li><?php endforeach; endif; ?>
           <!--  <li class="headlines clear">
                <a href="javascript:;">
                    <div class="l_box clear">
                        <h1>富士康郑州园区</h1><span class="time">10.12</span>
                        <div class="types">
                        	<span>寒假工</span>
                        	<span>3000-5000元</span>
                        </div>
                        <div class="pruduct">
                            <span class="act">高校头条</span>
                            <div class="comment">
                                <img src="/Public/images/index_pinglun.png">
                                <span>定金</span>
                                <span>￥200</span>
                            </div>
                            <div class="good">
                                <img src="/Public/images/index_dianzan.png">
                                <span>河南省郑州市</span>
                            </div>
                        </div>
                    </div>
                    <div class="r_box clear">
                        <img src="/Public/images/index_pic01.png">
                    </div>
                    <div class="user clear">
                    	<span>加班费</span><span>管食费</span><span>过年福利</span><span>龙子网报名专享1000+奖学金</span>
                    </div>
                </a>
            </li>  -->
        </ul>
    </div>
</div>
<br>
<br>
<!-- 底部 -->
<div class="footer">
    <div class="foot">
        <ul class="clear">
            <li>
                <span><a href="http://www.miitbeian.gov.cn">豫ICP备15037064号</a></span>
                <span>技术支持</span><span>龙子科技</span>
            </li>
            <li>
                <span>Copyright@ 2017  龙子网人力资源</span>
            </li>
            <li>
                <span>郑东新区平安大道博学路学府广场B座501室</span>
            </li>
        </ul>
    </div>
</div>
<script>
    var sessionss = $("#sessionss").text();
    $(".caonima").click(function(enent) {
       if ($("#sessionss").text() == "") {
          $(".caonima a").attr("href","/index.php/Home/Login/index"); 
       }
    });
</script>
</body>
</html>