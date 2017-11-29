<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="/Public/Wap/css/swiper.css" rel="stylesheet">
    <link href="/Public/Wap/css/style.css" rel="stylesheet">
    <link href="/Public/Wap/css/index.css" rel="stylesheet">
    <link href="/Public/Wap/css/litera.css" rel="stylesheet">
    <script src="/Public/Wap/js/jquery.js"></script>
    <script src="/Public/Wap/js/swiper.js"></script>
    <script src="/Public/Wap/js/style.js"></script>
    <script src="/Public/Wap/js/tab.js"></script>
    <script src="/Public/Wap/js/nativeShare.js"></script>
    <title>文学</title>
</head>
<body>
<!--占位用-->
<div class="box"></div>
<div class="index_header">
    <a href="javascript:history.go(-1);" class="left"><img src="/Public/Wap/images/back.png"/></a>
    文学
    <a href="javascript:;" class="menu right"><img src="/Public/Wap/images/fenlei.png"/></a>
</div>
<!--菜单-->
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
    <div class="swiper-pagination">1</div>
    <div class="swiper-pagination">2</div>
    <div class="swiper-pagination">3</div>
    <div class="swiper-pagination">4</div>
</div>
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
<div class="tabbox">
    <div class="tab" id="nav">
        <ul class="clear">
            <li class="active"><a href="JavaScript:;"><img src="/Public/Wap/images/all_03.png"/>全部</a></li>
            <li><a href="JavaScript:;"><img src="/Public/Wap/images/tan.png"/>访谈</a></li>
            <li><a href="JavaScript:;"><img src="/Public/Wap/images/wen.png"/>散文</a></li>
            <li><a href="JavaScript:;"><img src="/Public/Wap/images/shi.png"/>诗歌</a></li>
            <li><a href="JavaScript:;"><img src="/Public/Wap/images/shuo.png"/>小说</a></li>
            <li><a href="JavaScript:;"><img src="/Public/Wap/images/zuo.png"/>高校作者</a></li>
            <li><a href="JavaScript:;"><img src="/Public/Wap/images/she.png"/>文学社</a></li>
            <li><a href="JavaScript:;"><img src="/Public/Wap/images/jiang.png"/>文学奖</a></li>
            <li><a href="JavaScript:;"><img src="/Public/Wap/images/zi.png"/>文学资讯</a></li>
        </ul>
    </div>
    <div class="list inner">
        <div class="all">
            <ul></ul>
        </div>
        <!--访谈-->
        <div style="display: none" class="talk">
            1
            <ul>
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
                        <div class="user clear">
                            <img src="/Public/Wap/images/index_pic.png"/>
                            <span class="name">小莫</span>
                        </div>
                    </a>
                </li>
                <!--三张图-->
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
                        <div class="user clear">
                            <img src="/Public/Wap/images/index_pic.png"/>
                            <span class="name">小莫</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <!--散文-->
        <div  style="display: none" class="prose">
            2
            <ul>
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
                        <div class="user clear">
                            <img src="/Public/Wap/images/index_pic.png"/>
                            <span class="name">小莫</span>
                        </div>
                    </a>
                </li>
                <!--三张图-->
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
                        <div class="user clear">
                            <img src="/Public/Wap/images/index_pic.png"/>
                            <span class="name">小莫</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <!--诗歌-->
        <div style="display: none" class="poetr">
            3
            <ul>
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
                        <div class="user clear">
                            <img src="/Public/Wap/images/index_pic.png"/>
                            <span class="name">小莫</span>
                        </div>
                    </a>
                </li>
                <!--三张图-->
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
                        <div class="user clear">
                            <img src="/Public/Wap/images/index_pic.png"/>
                            <span class="name">小莫</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <!--小说-->
        <div style="display: none" class="novel">
            4
            <ul>
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
                        <div class="user clear">
                            <img src="/Public/Wap/images/index_pic.png"/>
                            <span class="name">小莫</span>
                        </div>
                    </a>
                </li>
                <!--三张图-->
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
                        <div class="user clear">
                            <img src="/Public/Wap/images/index_pic.png"/>
                            <span class="name">小莫</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <!--&lt;!&ndash;高校作者&ndash;&gt;-->
        <!--<div style="display: none" class="author">-->
            <!--<ul>-->
                <!--<li class="headlines clear">-->
                    <!--<a href="javascript:;">-->
                        <!--<div class="l_box clear">-->
                            <!--<h1><span class="name">高芳芳 | </span>选择了诗和远方我只顾风雨兼程</h1>-->
                            <!--<div class="pruduct">-->
                                <!--<span class="act">高校作者</span>-->
                                <!--<div class="good">-->
                                    <!--<img src="/Public/Wap/images/guanzhu.png">-->
                                    <!--<span>1233</span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="r_box clare">-->
                            <!--<img src="/Public/Wap/images/index_pic01.png">-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
                <!--<li class="headlines clear">-->
                    <!--<a href="javascript:;">-->
                        <!--<div class="l_box clear">-->
                            <!--<h1><span class="name">高芳芳 | </span>选择了诗和远方我只顾风雨兼程</h1>-->
                            <!--<div class="pruduct">-->
                                <!--<span class="act">高校作者</span>-->
                                <!--<div class="good">-->
                                    <!--<img src="/Public/Wap/images/guanzhu.png">-->
                                    <!--<span>1233</span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="r_box clare">-->
                            <!--<img src="/Public/Wap/images/index_pic01.png">-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
                <!--<li class="headlines clear">-->
                    <!--<a href="javascript:;">-->
                        <!--<div class="l_box clear">-->
                            <!--<h1><span class="name">高芳芳 | </span>选择了诗和远方我只顾风雨兼程</h1>-->
                            <!--<div class="pruduct">-->
                                <!--<span class="act">高校作者</span>-->
                                <!--<div class="good">-->
                                    <!--<img src="/Public/Wap/images/guanzhu.png">-->
                                    <!--<span>1233</span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="r_box clare">-->
                            <!--<img src="/Public/Wap/images/index_pic01.png">-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
                <!--<li class="headlines clear">-->
                    <!--<a href="javascript:;">-->
                        <!--<div class="l_box clear">-->
                            <!--<h1><span class="name">高芳芳 | </span>选择了诗和远方我只顾风雨兼程</h1>-->
                            <!--<div class="pruduct">-->
                                <!--<span class="act">高校作者</span>-->
                                <!--<div class="good">-->
                                    <!--<img src="/Public/Wap/images/guanzhu.png">-->
                                    <!--<span>1233</span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="r_box clare">-->
                            <!--<img src="/Public/Wap/images/index_pic01.png">-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
                <!--<li class="headlines clear">-->
                    <!--<a href="javascript:;">-->
                        <!--<div class="l_box clear">-->
                            <!--<h1><span class="name">高芳芳 | </span>选择了诗和远方我只顾风雨兼程</h1>-->
                            <!--<div class="pruduct">-->
                                <!--<span class="act">高校作者</span>-->
                                <!--<div class="good">-->
                                    <!--<img src="/Public/Wap/images/guanzhu.png">-->
                                    <!--<span>1233</span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="r_box clare">-->
                            <!--<img src="/Public/Wap/images/index_pic01.png">-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
                <!--<li class="headlines clear">-->
                    <!--<a href="javascript:;">-->
                        <!--<div class="l_box clear">-->
                            <!--<h1><span class="name">高芳芳 | </span>选择了诗和远方我只顾风雨兼程</h1>-->
                            <!--<div class="pruduct">-->
                                <!--<span class="act">高校作者</span>-->
                                <!--<div class="good">-->
                                    <!--<img src="/Public/Wap/images/guanzhu.png">-->
                                    <!--<span>1233</span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="r_box clare">-->
                            <!--<img src="/Public/Wap/images/index_pic01.png">-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
            <!--</ul>-->
        <!--</div>-->
        <!--&lt;!&ndash;文学社&ndash;&gt;-->
        <!--<div style="display: none" class="society">-->
            <!--<ul>-->
                <!--<li class="headlines clear">-->
                    <!--<a href="javascript:;">-->
                        <!--<div class="l_box clear">-->
                            <!--<h1>风云文学社</h1>-->
                            <!--<p class="school">河南农业大学</p>-->
                            <!--<div class="pruduct">-->
                                <!--<span class="act">文学社团</span>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="r_box clare">-->
                            <!--<img src="/Public/Wap/images/index_pic01.png">-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
                <!--<li class="headlines clear">-->
                    <!--<a href="javascript:;">-->
                        <!--<div class="l_box clear">-->
                            <!--<h1>风云文学社</h1>-->
                            <!--<p class="school">河南农业大学</p>-->
                            <!--<div class="pruduct">-->
                                <!--<span class="act">文学社团</span>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="r_box clare">-->
                            <!--<img src="/Public/Wap/images/index_pic01.png">-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
                <!--<li class="headlines clear">-->
                    <!--<a href="javascript:;">-->
                        <!--<div class="l_box clear">-->
                            <!--<h1>风云文学社</h1>-->
                            <!--<p class="school">河南农业大学</p>-->
                            <!--<div class="pruduct">-->
                                <!--<span class="act">文学社团</span>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="r_box clare">-->
                            <!--<img src="/Public/Wap/images/index_pic01.png">-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
                <!--<li class="headlines clear">-->
                    <!--<a href="javascript:;">-->
                        <!--<div class="l_box clear">-->
                            <!--<h1>风云文学社</h1>-->
                            <!--<p class="school">河南农业大学</p>-->
                            <!--<div class="pruduct">-->
                                <!--<span class="act">文学社团</span>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="r_box clare">-->
                            <!--<img src="/Public/Wap/images/index_pic01.png">-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
                <!--<li class="headlines clear">-->
                    <!--<a href="javascript:;">-->
                        <!--<div class="l_box clear">-->
                            <!--<h1>风云文学社</h1>-->
                            <!--<p class="school">河南农业大学</p>-->
                            <!--<div class="pruduct">-->
                                <!--<span class="act">文学社团</span>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="r_box clare">-->
                            <!--<img src="/Public/Wap/images/index_pic01.png">-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
                <!--<li class="headlines clear">-->
                    <!--<a href="javascript:;">-->
                        <!--<div class="l_box clear">-->
                            <!--<h1>风云文学社</h1>-->
                            <!--<p class="school">河南农业大学</p>-->
                            <!--<div class="pruduct">-->
                                <!--<span class="act">文学社团</span>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="r_box clare">-->
                            <!--<img src="/Public/Wap/images/index_pic01.png">-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
                <!--<li class="headlines clear">-->
                    <!--<a href="javascript:;">-->
                        <!--<div class="l_box clear">-->
                            <!--<h1>风云文学社</h1>-->
                            <!--<p class="school">河南农业大学</p>-->
                            <!--<div class="pruduct">-->
                                <!--<span class="act">文学社团</span>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="r_box clare">-->
                            <!--<img src="/Public/Wap/images/index_pic01.png">-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
            <!--</ul>-->
        <!--</div>-->
        <!--&lt;!&ndash;文学奖&ndash;&gt;-->
        <!--<div style="display: none" class="prize"></div>-->
    </div>
</div>
<script>
    $(function(){
        var page = 0;
        var name = "";
        var target=true;
        $.ajax({
            url:"wxlist",
            type:"POST",
            data:{
                name:"全部",
                page:0
            },
            success:function (data) {
                console.log(data);
                var html = "";
                for(var i=0; i<data.length; i++){
                    if(data[i].img1 == null && data[i].img2 == null){
                        html+=  "<li class='headlines clear'>" +
                                    "<a href='/index.php/Home/Literature/details?id="+data[i].id+"'>" +
                                        "<div class='l_box clear'>" +
                                            "<h1>"+data[i].title+"</h1>"+
                                            "<div class='pruduct'>" +
                                                "<span class='act'>"+data[i].classify+"</span>"+
                                                "<div class='comment'>" +
                                                    "<img src='/Public/Wap/images/index_pinglun.png'>"+
                                                    "<span>"+data[i].click+"</span>"+
                                                "</div>"+
                                                "<div class='good'>" +
                                                    "<img src='/Public/Wap/images/index_dianzan.png'>"+
                                                    "<span>"+data[i].click+"</span>"+
                                                "</div>"+
                                            "</div>"+
                                        "</div>"+
                                        "<div class='r_box clear'>" +
                                            "<img src='/Public/images/wenxue/"+data[i].img0+"'/> "+
                                        "</div>"+
                                        "<div class='user clear'>" +
                                            "<img src='/Public/images/wenxue/"+data[i].img0+"'/> "+
                                            "<span class='name'>"+data[i].bianji+"</span>"+
                                        "</div>"+
                                    "</a>"+
                                "</li>"
                    }else {
                        html+= "<li class='picklist clear'>" +
                                    "<a href='/index.php/Home/Literature/details?id="+data[i].id+"'>" +
                                        "<h1>"+data[i].title+"</h1>"+
                                        "<div class='pickbox clear'>" +
                                            "<img src='/Public/images/wenxue/"+data[i].img0+"'/> "+
                                            "<img src='/Public/images/wenxue/"+data[i].img1+"'/> "+
                                            "<img src='/Public/images/wenxue/"+data[i].img2+"'/> "+
                                        "</div>"+
                                        "<div class='pruduct clear'>" +
                                             "<span class='act'>"+data[i].classify+"</span>"+
                                             "<div class='comment'>" +
                                                "<img src='/Public/Wap/images/index_pinglun.png'>"+
                                                "<span>"+data[i].click+"</span>"+
                                             "</div>"+
                                             "<div class='good'>" +
                                                "<img src='/Public/Wap/images/index_dianzan.png'>"+
                                                "<span>"+data[i].click+"</span>"+
                                             "</div>"+
                                        "</div>"+
                                        "<div class='user clear'>" +
                                             "<img src='/Public/images/wenxue/"+data[i].img0+"'/> "+
                                             "<span class='name'>"+data[i].bianji+"</span>"+
                                         "</div>"+
                                    "</a> "+
                                "</li>"
                    }
                }
                $(".list>div").eq(0).find("ul").html(html)
            }
        });
        $(".tab li a").click(function(){
            var self = $(this);
            var index = self.parent().index();
            console.log(index);
            name = $(this).text();
            page = 0;
            target = true;
            $.ajax({
                url:"wxlist",
                type:"POST",
                data:{
                    name:name,
                    page:page
                },
                success:function(data){
                    var html = "";
                    for(var i=0; i<data.length; i++){
                        if(data[i].img1 ==null && data[i].img2 == null){
                            html+=  "<li class='headlines clear'>" +
                                "<a href='/index.php/Home/Literature/details?id="+data[i].id+"'>" +
                                "<div class='l_box clear'>" +
                                "<h1>"+data[i].title+"</h1>"+
                                "<div class='pruduct'>" +
                                "<span class='act'>"+data[i].classify+"</span>"+
                                "<div class='comment'>" +
                                "<img src='/Public/Wap/images/index_pinglun.png'>"+
                                "<span>"+data[i].click+"</span>"+
                                "</div>"+
                                "<div class='good'>" +
                                "<img src='/Public/Wap/images/index_dianzan.png'>"+
                                "<span>"+data[i].click+"</span>"+
                                "</div>"+
                                "</div>"+
                                "</div>"+
                                "<div class='r_box clear'>" +
                                "<img src='/Public/images/wenxue/"+data[i].img0+"'/> "+
                                "</div>"+
                                "<div class='user clear'>" +
                                "<img src='/Public/images/wenxue/"+data[i].img0+"'/> "+
                                "<span class='name'>"+data[i].bianji+"</span>"+
                                "</div>"+
                                "</a>"+
                                "</li>"
                        }else {
                            html+= "<li class='picklist clear'>" +
                                "<a href='/index.php/Home/Literature/details?id="+data[i].id+"'>" +
                                "<h1>"+data[i].title+"</h1>"+
                                "<div class='pickbox clear'>" +
                                "<img src='/Public/images/wenxue/"+data[i].img0+"'/> "+
                                "<img src='/Public/images/wenxue/"+data[i].img1+"'/> "+
                                "<img src='/Public/images/wenxue/"+data[i].img2+"'/> "+
                                "</div>"+
                                "<div class='pruduct clear'>" +
                                "<span class='act'>"+data[i].classify+"</span>"+
                                "<div class='comment'>" +
                                "<img src='/Public/Wap/images/index_pinglun.png'>"+
                                "<span>"+data[i].click+"</span>"+
                                "</div>"+
                                "<div class='good'>" +
                                "<img src='/Public/Wap/images/index_dianzan.png'>"+
                                "<span>"+data[i].click+"</span>"+
                                "</div>"+
                                "</div>"+
                                "<div class='user clear'>" +
                                "<img src='/Public/images/wenxue/"+data[i].img0+"'/> "+
                                "<span class='name'>"+data[i].bianji+"</span>"+
                                "</div>"+
                                "</a> "+
                                "</li>"
                        }
                    }
                    $(".list>div").eq(index).find("ul").html(html)
                }
            })
        });
        $(document).scroll(function(){
            name = $(".tab li.active a").text();
            var index = $(".tab li.active").index();
            var top = $(document).scrollTop();
            var wintop = $(window).height();
            var docHeight=$(document).height();
            if(docHeight-top<=wintop*2 ){
                console.log(name,page);
                if(target){
                    page ++;
                    console.log(name,page);
                    $.ajax({
                        url:"wxlist",
                        type:"POST",
                        async: false,
                        data:{
                            name:name,
                            page:page
                        },
                        success:function(data){
                            console.log(data);
                            if(data == ""){
                                target=false;
                                return
                            }else{
                                target = true;
                                var html ="";
                                for(var i=0; i<data.length; i++){
                                    if(data[i].img1 ==null && data[i].img2 == null){
                                        html+=  "<li class='headlines clear'>" +
                                            "<a href='/index.php/Home/Literature/details?id="+data[i].id+"'>" +
                                            "<div class='l_box clear'>" +
                                            "<h1>"+data[i].title+"</h1>"+
                                            "<div class='pruduct'>" +
                                            "<span class='act'>"+data[i].classify+"</span>"+
                                            "<div class='comment'>" +
                                            "<img src='/Public/Wap/images/index_pinglun.png'>"+
                                            "<span>"+data[i].click+"</span>"+
                                            "</div>"+
                                            "<div class='good'>" +
                                            "<img src='/Public/Wap/images/index_dianzan.png'>"+
                                            "<span>"+data[i].click+"</span>"+
                                            "</div>"+
                                            "</div>"+
                                            "</div>"+
                                            "<div class='r_box clear'>" +
                                            "<img src='/Public/images/wenxue/"+data[i].img0+"'/> "+
                                            "</div>"+
                                            "<div class='user clear'>" +
                                            "<img src='/Public/images/wenxue/"+data[i].img0+"'/> "+
                                            "<span class='name'>"+data[i].bianji+"</span>"+
                                            "</div>"+
                                            "</a>"+
                                            "</li>"
                                    }else {
                                        html+= "<li class='picklist clear'>" +
                                            "<a href='/index.php/Home/Literature/details?id="+data[i].id+"'>" +
                                            "<h1>"+data[i].title+"</h1>"+
                                            "<div class='pickbox clear'>" +
                                            "<img src='/Public/images/wenxue/"+data[i].img0+"'/> "+
                                            "<img src='/Public/images/wenxue/"+data[i].img1+"'/> "+
                                            "<img src='/Public/images/wenxue/"+data[i].img2+"'/> "+
                                            "</div>"+
                                            "<div class='pruduct clear'>" +
                                            "<span class='act'>"+data[i].classify+"</span>"+
                                            "<div class='comment'>" +
                                            "<img src='/Public/Wap/images/index_pinglun.png'>"+
                                            "<span>"+data[i].click+"</span>"+
                                            "</div>"+
                                            "<div class='good'>" +
                                            "<img src='/Public/Wap/images/index_dianzan.png'>"+
                                            "<span>"+data[i].click+"</span>"+
                                            "</div>"+
                                            "</div>"+
                                            "<div class='user clear'>" +
                                            "<img src='/Public/images/wenxue/"+data[i].img0+"'/> "+
                                            "<span class='name'>"+data[i].bianji+"</span>"+
                                            "</div>"+
                                            "</a> "+
                                            "</li>"
                                    }
                                }
                                $(".list>div").eq(index).find("ul").append(html)
                            }
                        }
                    })
                }
            }
        });
    })
</script>
</body>
</html>