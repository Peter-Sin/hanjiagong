<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="/Public/Wap/css/style.css" rel="stylesheet">
    <link href="/Public/Wap/css/index.css" rel="stylesheet">
    <link href="/Public/Wap/css/sports.css" rel="stylesheet">
    <link href="/Public/Wap/css/swiper.css" rel="stylesheet">
    <script src="/Public/Wap/js/jquery.js"></script>
    <script src="/Public/Wap/js/sports.js"></script>
    <script src="/Public/Wap/js/swiper.js"></script>
    <script src="/Public/Wap/js/style.js"></script>
    <script src="/Public/Wap/js/tab.js"></script>
    <title>龙子体育</title>
</head>
<body>
<div class="box"></div>
<div class="index_header">
    <a href="javascript:history.go(-1);" class="left"><img src="/Public/Wap/images/back.png"/></a>
    体育
    <a href="javascript:;" class="menu right"><img src="/Public/Wap/images/fenlei.png"/></a>
</div>
 <header>
    
<!--菜单页-->
<div class="menu_list">
    <div class="head">
        <a class="close" href="javascript:;"><img src="/Public/Wap/images/index_classify_gb.png"/></a>
        龙子网
    </div>
    <div class="list_l">
        <ul class="clear">
            <li>
                <a href="/index.php/Home/News/index">
                    <img src="/Public/Wap/images/index_classify_xw.png"/>
                    <span>新闻</span>
                </a>
            </li>
            <li>
                <a href="/index.php/Home/PE/index">
                    <img src="/Public/Wap/images/index_classify_ty.png"/>
                    <span>体育</span>
                </a>
            </li>
            <li>
                <a href="/index.php/Home/Activity/index">
                    <img src="/Public/Wap/images/index_classify_hd.png"/>
                    <span>活动</span>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <img src="/Public/Wap/images/index_classify_ly.png"/>
                    <span>旅游</span>
                </a>
            </li>
            <li>
                <a href="/index.php/Home/Literature/index">
                    <img src="/Public/Wap/images/index_classify_wx.png"/>
                    <span>文学</span>
                </a>
            </li>
            <li>
                <a href="/index.php/Home/Topic/index">
                    <img src="/Public/Wap/images/index_classify_ht.png"/>
                    <span>话题</span>
                </a>
            </li>
            <li>
                <a href="/index.php/Home/Wonder/video">
                    <img src="/Public/Wap/images/index_classify_sp.png"/>
                    <span>视频</span>
                </a>
            </li>
            <li>
                <a href="/index.php/Home/Wonder/pic">
                    <img src="/Public/Wap/images/index_classify_tk.png"/>
                    <span>图集</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="list_r">
        <ul>
            <li>
                <a href="/index.php/Home/Release/fabuenter">
                    发布入口
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    精选推荐
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    精选推荐
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    精选推荐
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    精选推荐
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    精选推荐<?php echo ($_SESSION['username']); ?>
                </a>
            </li>
        </ul>
    </div>
    <div id="user_data" style="display: none">
        <input class="user_type" value="<?php echo ($_SESSION['uuid']); ?>">
        <input class="user_head" value="<?php echo ($image); ?>">
    </div>
    <script>
        $(function () {
            var user_type = $(".user_type").val();
            var user_head = $(".user_head").val();
            if(user_type != ""){
                $(".index_header .user").attr("id","user_head");
                $(".index_header .user").attr("href","/index.php/Home/Personal/index");
                $(".index_header .user img").attr("src",user_head);
            }
        })
    </script>
</header>
<!--swiper轮播插件-->
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide"><a href="javascript:;"> <img src="/Public/Wap/images/index_banner.png"/></a></div>
        <div class="swiper-slide"><a href="javascript:;"> <img src="/Public/Wap/images/index_banner.png"/></a></div>
        <div class="swiper-slide"><a href="javascript:;"> <img src="/Public/Wap/images/index_banner.png"/></a></div>
        <div class="swiper-slide"><a href="javascript:;"> <img src="/Public/Wap/images/index_banner.png"/></a></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>
<!-- Swiper JS -->
<script src="/Public/Wap/js/swiper.js"></script>
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
<!--<div class="cptj_box">-->
    <!--<h1>推荐产品</h1>-->
<!--</div>-->

<!--<div class="inner">-->
    <!--<div class="tabbox">-->
        <!--<div class="tab">-->
            <!--<ul>-->
                <!--<li class="product clear">-->
                    <!--<a href="javascript:;">-->
                        <!--<div class="ification" style="margin-right:0.5rem; ">-->
                            <!--<div class="pick">-->
                                <!--<img src="/Public/Wap/images/index_pic02.png"/>-->
                                <!--<span class="txt">田赛激光测距系统</span>-->
                            <!--</div>-->
                            <!--<div class="money">-->
                                <!--学生专享价:&nbsp￥<span>2000</span>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</a>-->
                    <!--<a href="javascript:;">-->
                        <!--<div class="ification">-->
                            <!--<div class="pick">-->
                                <!--<img src="/Public/Wap/images/index_pic02.png"/>-->
                                <!--<span class="txt">田赛激光测距系统</span>-->
                            <!--</div>-->
                            <!--<div class="money">-->
                                <!--学生专享价:&nbsp￥<span>2000</span>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
                <!--<li class="product clear">-->
                    <!--<a href="javascript:;">-->
                        <!--<div class="ification" style="margin-right:0.5rem; ">-->
                            <!--<div class="pick">-->
                                <!--<img src="/Public/Wap/images/index_pic02.png"/>-->
                                <!--<span class="txt">田赛激光测距系统</span>-->
                            <!--</div>-->
                            <!--<div class="money">-->
                                <!--学生专享价:&nbsp￥<span>2000</span>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</a>-->
                    <!--<a href="javascript:;">-->
                        <!--<div class="ification">-->
                            <!--<div class="pick">-->
                                <!--<img src="/Public/Wap/images/index_pic02.png"/>-->
                                <!--<span class="txt">田赛激光测距系统</span>-->
                            <!--</div>-->
                            <!--<div class="money">-->
                                <!--学生专享价:&nbsp￥<span>2000</span>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
                <!--<li class="product clear">-->
                    <!--<a href="javascript:;">-->
                        <!--<div class="ification" style="margin-right:0.5rem; ">-->
                            <!--<div class="pick">-->
                                <!--<img src="/Public/Wap/images/index_pic02.png"/>-->
                                <!--<span class="txt">田赛激光测距系统</span>-->
                            <!--</div>-->
                            <!--<div class="money">-->
                                <!--学生专享价:&nbsp￥<span>2000</span>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</a>-->
                    <!--<a href="javascript:;">-->
                        <!--<div class="ification">-->
                            <!--<div class="pick">-->
                                <!--<img src="/Public/Wap/images/index_pic02.png"/>-->
                                <!--<span class="txt">田赛激光测距系统</span>-->
                            <!--</div>-->
                            <!--<div class="money">-->
                                <!--学生专享价:&nbsp￥<span>2000</span>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
            <!--</ul>-->
        <!--</div>-->
        <!--<div class="act">-->
            <!--<ul>-->
                <!--<li class="active"></li>-->
                <!--<li></li>-->
                <!--<li></li>-->
            <!--</ul>-->
        <!--</div>-->
    <!--</div>-->
<!--</div>-->
<!--体育图片？-->
<div class="sport clear">
    <ul>
        <li class="clear">
            <a href="javascript:;">
                <img src="/Public/Wap/images/tiyu_pic1.jpg"/>
            </a>
        </li>
        <li class="clear">
            <a href="javascript:;">
                <img src="/Public/Wap/images/tiyu_pic2.jpg"/>
            </a>
        </li>
        <li class="clear">
            <a href="javascript:;">
                <img src="/Public/Wap/images/tiyu_pic3.jpg"/>
            </a>
        </li>
        <li class="clear">
            <a href="javascript:;">
                <img src="/Public/Wap/images/tiyu_pic4.jpg"/>
            </a>
        </li>
    </ul>
</div>
<!--选项卡分类-->
<div class="news_tab clear">
    <div class="tab clear">
        <ul class="clear">
            <li class="active"><a href="javascript:;">体育热点</a></li>
            <li><a href="javascript:;">高校头条</a></li>
            <li><a href="javascript:;">运动装备</a></li>
            <li><a href="/index.php/Home/PE/list">更多分类</a></li>
        </ul>
    </div>
    <div class="list clear">
        <div class="column">
            <div class="inner">
                <ul>
                    <!--直播-->
                    <li class="direct clear">
                        <a href="javascript:;">
                            <div class="video_box clear">
                                <div class="video">
                                    <img class="focus" src="/Public/Wap/images/index_shipinbofang.png"/>
                                    <img class="begin" src="/Public/Wap/images/index_bofang.png"/>
                                    <img class="decorate" src="/Public/Wap/images/index_zhibo.png"/>
                                </div>
                                <p>2017龙子网首届河南省大学生马拉松赛直播中</p>
                            </div>
                            <div class="title clear">
                                <span class="act">视频直播</span>
                                <span class="user">龙子网龙龙</span>
                                <span class="num">13213</span>
                                <img src="/Public/Wap/images/index_guankan.png"/>
                            </div>
                        </a>
                    </li>
                    <!--单张图片列表-->
                    <li class="headlines clear">
                        <a href="javascript:;">
                            <div class="l_box clear">
                                <h1>经历了中考，我决定放弃高考去留学，但我不后悔</h1>
                                <div class="pruduct">
                                    <span class="act">高校头条</span>
                                    <div class="comment">
                                        <img src="/Public/Wap/images/index_pinglun.png">
                                        <span>32213</span>
                                    </div>
                                    <div class="good">
                                        <img src="/Public/Wap/images/index_dianzan.png">
                                        <span>1233</span>
                                    </div>
                                </div>
                            </div>
                            <div class="r_box clare">
                                <img src="/Public/Wap/images/index_pic01.png">
                            </div>
                        </a>
                    </li>
                    <li class="headlines clear">
                        <a href="javascript:;">
                            <div class="l_box clear">
                                <h1>经历了中考，我决定放弃高考去留学，但我不后悔</h1>
                                <div class="pruduct">
                                    <span class="act">心情话题</span>
                                    <div class="comment">
                                        <img src="/Public/Wap/images/index_pinglun.png">
                                        <span>32213</span>
                                    </div>
                                    <div class="good">
                                        <img src="/Public/Wap/images/index_dianzan.png">
                                        <span>1233</span>
                                    </div>
                                </div>
                            </div>
                            <div class="r_box clare">
                                <img src="/Public/Wap/images/index_pic01.png">
                            </div>
                        </a>
                    </li>
                    <!--商品(出租)-->
                    <li class="product clear">
                        <a href="javascript:;">
                            <div class="ification" style="margin-right:0.5rem; ">
                                <div class="pick">
                                    <img src="/Public/Wap/images/index_pic02.png"/>
                                    <span class="txt">田赛激光测距系统</span>
                                </div>
                                <div class="money">
                                    学生专享价:&nbsp￥<span>2000</span>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:;">
                            <div class="ification">
                                <div class="pick">
                                    <img src="/Public/Wap/images/index_pic02.png"/>
                                    <span class="txt">田赛激光测距系统</span>
                                </div>
                                <div class="money">
                                    学生专享价:&nbsp￥<span>2000</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--三张图列表-->
                    <li class="picklist clear">
                        <a href="javascript:;">
                            <h1>经历了中考，我决定放弃高考去留学，但我不后悔！</h1>
                            <div class="pickbox clear">
                                <img src="/Public/Wap/images/index_pic03.png"/>
                                <img src="/Public/Wap/images/index_pic04.png"/>
                                <img src="/Public/Wap/images/index_pic05.png"/>
                            </div>
                            <div class="pruduct clear">
                                <span class="act">高校头条</span>
                                <div class="comment">
                                    <img src="/Public/Wap/images/index_pinglun.png">
                                    <span>32213</span>
                                </div>
                                <div class="good">
                                    <img src="/Public/Wap/images/index_dianzan.png">
                                    <span>1233</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div></div>
        <div></div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</body>
</html>