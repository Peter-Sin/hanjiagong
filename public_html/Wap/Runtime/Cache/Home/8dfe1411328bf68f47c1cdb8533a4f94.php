<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="/Public/Wap/css/style.css" rel="stylesheet">
    <link href="/Public/Wap/css/swiper.css" rel="stylesheet">
    <link href="/Public/Wap/css/subject.css" rel="stylesheet">
    <script src="/Public/Wap/js/jquery.js"></script>
    <script src="/Public/Wap/js/swiper.js"></script>
    <script src="/Public/Wap/js/style.js"></script>
    <title>话题</title>
</head>
<body>
<!--占位用-->
<div class="box"></div>
<div class="index_header">
    <a href="javascript:history.go(-1);" class="left"><img src="/Public/Wap/images/back.png"/></a>
    话题
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
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide active"><a href="javascript:;">全部</a></div>
        <div class="swiper-slide"><a href="javascript:;">社团</a></div>
        <div class="swiper-slide"><a href="javascript:;">人物</a></div>
        <div class="swiper-slide"><a href="javascript:;">风景</a></div>
        <div class="swiper-slide"><a href="javascript:;">美食</a></div>
        <div class="swiper-slide"><a href="javascript:;">就业创业</a></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <script>
        var swiper = new Swiper('.swiper-container', {
//                pagination: '.swiper-pagination',
            width:200,
            slidesPerView:3,
            paginationClickable: true,
            spaceBetween: 0,
            freeMode: false
        });
    </script>
</div>
<div class="list inner">
    <div>1
        <ul>
            <!--三张图-->
             <li>
                <a href="javascript:;">
                    <div class="user clear">
                        <img class="head" src="/Public/Wap/images/touxiang02.png"/>
                        <span class="name">黑黑</span>
                        <span class="time">昨天</span>
                    </div>
                    <h1>经历了中考，我决定放弃高考去留学，但我不后悔!</h1>
                    <div class="picklist clear">
                        <img src="/Public/Wap/images/index_pic03.png"/>
                        <img src="/Public/Wap/images/index_pic04.png"/>
                        <img src="/Public/Wap/images/index_pic05.png"/>
                    </div>
                    <div class="bot clear">
                        <div class="left">
                            <div class="act">风景</div>
                            <span class="look">1234</span>
                        </div>
                        <div class="right">
                            <div class="pl">
                                <img src="/Public/Wap/images/index_pinglun.png"/>
                                <span>1234</span>
                            </div>
                            <div class="fenxiang">
                                <img src="/Public/Wap/images/share_large.png"/>
                                <span>1234</span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <!--单张图-->
            <li>
                    <a href="/index.php/Home/Topic/subdetails?id=<?php echo ($val["id"]); ?>">
                        <div class="user clear">
                            <img class="head" src="/Public/Wap/images/touxiang02.png"/>
                            <span class="name">黑黑</span>
                            <span class="time"><?php echo ($val["time"]); ?></span>
                        </div>
                        <h1><?php echo ($val["title"]); ?></h1>
                        <div class="pic">
                            <img src="/Public/images/topic/<?php echo ($val["image"]); ?>"/>
                        </div>
                        <div class="bot clear">
                            <div class="left">
                                <div class="act"><?php echo ($val["classify"]); ?></div>
                                <span class="look">1234</span>
                            </div>
                            <div class="right">
                                <div class="pl">
                                    <img src="/Public/Wap/images/index_pinglun.png"/>
                                    <span>1234</span>
                                </div>
                                <div class="fenxiang">
                                    <img src="/Public/Wap/images/share_large.png"/>
                                    <span>1234</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
        </ul>
    </div>
    <div>2
        <ul>
            <!--三张图-->
            <li>
                <a href="javascript:;">
                    <div class="user clear">
                        <img class="head" src="/Public/Wap/images/touxiang02.png"/>
                        <span class="name">黑黑</span>
                        <span class="time">昨天</span>
                    </div>
                    <h1>经历了中考，我决定放弃高考去留学，但我不后悔!</h1>
                    <div class="picklist clear">
                        <img src="/Public/Wap/images/index_pic03.png"/>
                        <img src="/Public/Wap/images/index_pic04.png"/>
                        <img src="/Public/Wap/images/index_pic05.png"/>
                    </div>
                    <div class="bot clear">
                        <div class="left">
                            <div class="act">风景</div>
                            <span class="look">1234</span>
                        </div>
                        <div class="right">
                            <div class="pl">
                                <img src="/Public/Wap/images/index_pinglun.png"/>
                                <span>1234</span>
                            </div>
                            <div class="fenxiang">
                                <img src="/Public/Wap/images/share_large.png"/>
                                <span>1234</span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <!--单张图-->
            <li>
                <a href="javascript:;">
                    <div class="user clear">
                        <img class="head" src="/Public/Wap/images/touxiang02.png"/>
                        <span class="name">黑黑</span>
                        <span class="time">昨天</span>
                    </div>
                    <h1>经历了中考，我决定放弃高考去留学，但我不后悔!</h1>
                    <div class="pic">
                        <img src="/Public/Wap/images/index_pic03.png"/>
                    </div>
                    <div class="bot clear">
                        <div class="left">
                            <div class="act">风景</div>
                            <span class="look">1234</span>
                        </div>
                        <div class="right">
                            <div class="pl">
                                <img src="/Public/Wap/images/index_pinglun.png"/>
                                <span>1234</span>
                            </div>
                            <div class="fenxiang">
                                <img src="/Public/Wap/images/share_large.png"/>
                                <span>1234</span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <!--广告-->
            <li class="guanggao">
                <span class="close">X</span>
                <a class="clear" href="javascript:;">
                    <h1>瓜子二手车———没有中间商赚差价的个人
                        二手车网站</h1>
                    <div class="act">广告</div>
                </a>
            </li>
            <!--文字-->
            <li>
                <a href="javascript:;">
                    <div class="user clear">
                        <img class="head" src="/Public/Wap/images/touxiang02.png"/>
                        <span class="name">黑黑</span>
                        <span class="time">昨天</span>
                    </div>
                    <h1>经历了中考，我决定放弃高考去留学，但我不后悔!</h1>
                    <p>经历了中考，我决定放弃高考去留学，但我不后悔!经历了中考，我决定放弃高考去留学，但我不后悔!经历了中考，我决定放弃高考去留学，但我不后悔!</p>
                    <div class="bot clear">
                        <div class="left">
                            <div class="act">风景</div>
                            <span class="look">1234</span>
                        </div>
                        <div class="right">
                            <div class="pl">
                                <img src="/Public/Wap/images/index_pinglun.png"/>
                                <span>1234</span>
                            </div>
                            <div class="fenxiang">
                                <img src="/Public/Wap/images/share_large.png"/>
                                <span>1234</span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div>3
        <ul>
            <!--三张图-->
            <li>
                <a href="javascript:;">
                    <div class="user clear">
                        <img class="head" src="/Public/Wap/images/touxiang02.png"/>
                        <span class="name">黑黑</span>
                        <span class="time">昨天</span>
                    </div>
                    <h1>经历了中考，我决定放弃高考去留学，但我不后悔!</h1>
                    <div class="picklist clear">
                        <img src="/Public/Wap/images/index_pic03.png"/>
                        <img src="/Public/Wap/images/index_pic04.png"/>
                        <img src="/Public/Wap/images/index_pic05.png"/>
                    </div>
                    <div class="bot clear">
                        <div class="left">
                            <div class="act">风景</div>
                            <span class="look">1234</span>
                        </div>
                        <div class="right">
                            <div class="pl">
                                <img src="/Public/Wap/images/index_pinglun.png"/>
                                <span>1234</span>
                            </div>
                            <div class="fenxiang">
                                <img src="/Public/Wap/images/share_large.png"/>
                                <span>1234</span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <!--单张图-->
            <li>
                <a href="javascript:;">
                    <div class="user clear">
                        <img class="head" src="/Public/Wap/images/touxiang02.png"/>
                        <span class="name">黑黑</span>
                        <span class="time">昨天</span>
                    </div>
                    <h1>经历了中考，我决定放弃高考去留学，但我不后悔!</h1>
                    <div class="pic">
                        <img src="/Public/Wap/images/index_pic03.png"/>
                    </div>
                    <div class="bot clear">
                        <div class="left">
                            <div class="act">风景</div>
                            <span class="look">1234</span>
                        </div>
                        <div class="right">
                            <div class="pl">
                                <img src="/Public/Wap/images/index_pinglun.png"/>
                                <span>1234</span>
                            </div>
                            <div class="fenxiang">
                                <img src="/Public/Wap/images/share_large.png"/>
                                <span>1234</span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <!--广告-->
            <li class="guanggao">
                <span class="close">X</span>
                <a class="clear" href="javascript:;">
                    <h1>瓜子二手车———没有中间商赚差价的个人
                        二手车网站</h1>
                    <div class="act">广告</div>
                </a>
            </li>
            <!--文字-->
            <li>
                <a href="javascript:;">
                    <div class="user clear">
                        <img class="head" src="/Public/Wap/images/touxiang02.png"/>
                        <span class="name">黑黑</span>
                        <span class="time">昨天</span>
                    </div>
                    <h1>经历了中考，我决定放弃高考去留学，但我不后悔!</h1>
                    <p>经历了中考，我决定放弃高考去留学，但我不后悔!经历了中考，我决定放弃高考去留学，但我不后悔!经历了中考，我决定放弃高考去留学，但我不后悔!</p>
                    <div class="bot clear">
                        <div class="left">
                            <div class="act">风景</div>
                            <span class="look">1234</span>
                        </div>
                        <div class="right">
                            <div class="pl">
                                <img src="/Public/Wap/images/index_pinglun.png"/>
                                <span>1234</span>
                            </div>
                            <div class="fenxiang">
                                <img src="/Public/Wap/images/share_large.png"/>
                                <span>1234</span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div>4
        <ul>
            <!--三张图-->
            <li>
                <a href="javascript:;">
                    <div class="user clear">
                        <img class="head" src="/Public/Wap/images/touxiang02.png"/>
                        <span class="name">黑黑</span>
                        <span class="time">昨天</span>
                    </div>
                    <h1>经历了中考，我决定放弃高考去留学，但我不后悔!</h1>
                    <div class="picklist clear">
                        <img src="/Public/Wap/images/index_pic03.png"/>
                        <img src="/Public/Wap/images/index_pic04.png"/>
                        <img src="/Public/Wap/images/index_pic05.png"/>
                    </div>
                    <div class="bot clear">
                        <div class="left">
                            <div class="act">风景</div>
                            <span class="look">1234</span>
                        </div>
                        <div class="right">
                            <div class="pl">
                                <img src="/Public/Wap/images/index_pinglun.png"/>
                                <span>1234</span>
                            </div>
                            <div class="fenxiang">
                                <img src="/Public/Wap/images/share_large.png"/>
                                <span>1234</span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <!--单张图-->
            <li>
                <a href="javascript:;">
                    <div class="user clear">
                        <img class="head" src="/Public/Wap/images/touxiang02.png"/>
                        <span class="name">黑黑</span>
                        <span class="time">昨天</span>
                    </div>
                    <h1>经历了中考，我决定放弃高考去留学，但我不后悔!</h1>
                    <div class="pic">
                        <img src="/Public/Wap/images/index_pic03.png"/>
                    </div>
                    <div class="bot clear">
                        <div class="left">
                            <div class="act">风景</div>
                            <span class="look">1234</span>
                        </div>
                        <div class="right">
                            <div class="pl">
                                <img src="/Public/Wap/images/index_pinglun.png"/>
                                <span>1234</span>
                            </div>
                            <div class="fenxiang">
                                <img src="/Public/Wap/images/share_large.png"/>
                                <span>1234</span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <!--广告-->
            <li class="guanggao">
                <span class="close">X</span>
                <a class="clear" href="javascript:;">
                    <h1>瓜子二手车———没有中间商赚差价的个人
                        二手车网站</h1>
                    <div class="act">广告</div>
                </a>
            </li>
            <!--文字-->
            <li>
                <a href="javascript:;">
                    <div class="user clear">
                        <img class="head" src="/Public/Wap/images/touxiang02.png"/>
                        <span class="name">黑黑</span>
                        <span class="time">昨天</span>
                    </div>
                    <h1>经历了中考，我决定放弃高考去留学，但我不后悔!</h1>
                    <p>经历了中考，我决定放弃高考去留学，但我不后悔!经历了中考，我决定放弃高考去留学，但我不后悔!经历了中考，我决定放弃高考去留学，但我不后悔!</p>
                    <div class="bot clear">
                        <div class="left">
                            <div class="act">风景</div>
                            <span class="look">1234</span>
                        </div>
                        <div class="right">
                            <div class="pl">
                                <img src="/Public/Wap/images/index_pinglun.png"/>
                                <span>1234</span>
                            </div>
                            <div class="fenxiang">
                                <img src="/Public/Wap/images/share_large.png"/>
                                <span>1234</span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div>5
        <ul>
            <!--三张图-->
            <li>
                <a href="javascript:;">
                    <div class="user clear">
                        <img class="head" src="/Public/Wap/images/touxiang02.png"/>
                        <span class="name">黑黑</span>
                        <span class="time">昨天</span>
                    </div>
                    <h1>经历了中考，我决定放弃高考去留学，但我不后悔!</h1>
                    <div class="picklist clear">
                        <img src="/Public/Wap/images/index_pic03.png"/>
                        <img src="/Public/Wap/images/index_pic04.png"/>
                        <img src="/Public/Wap/images/index_pic05.png"/>
                    </div>
                    <div class="bot clear">
                        <div class="left">
                            <div class="act">风景</div>
                            <span class="look">1234</span>
                        </div>
                        <div class="right">
                            <div class="pl">
                                <img src="/Public/Wap/images/index_pinglun.png"/>
                                <span>1234</span>
                            </div>
                            <div class="fenxiang">
                                <img src="/Public/Wap/images/share_large.png"/>
                                <span>1234</span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <!--单张图-->
            <li>
                <a href="javascript:;">
                    <div class="user clear">
                        <img class="head" src="/Public/Wap/images/touxiang02.png"/>
                        <span class="name">黑黑</span>
                        <span class="time">昨天</span>
                    </div>
                    <h1>经历了中考，我决定放弃高考去留学，但我不后悔!</h1>
                    <div class="pic">
                        <img src="/Public/Wap/images/index_pic03.png"/>
                    </div>
                    <div class="bot clear">
                        <div class="left">
                            <div class="act">风景</div>
                            <span class="look">1234</span>
                        </div>
                        <div class="right">
                            <div class="pl">
                                <img src="/Public/Wap/images/index_pinglun.png"/>
                                <span>1234</span>
                            </div>
                            <div class="fenxiang">
                                <img src="/Public/Wap/images/share_large.png"/>
                                <span>1234</span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <!--广告-->
            <li class="guanggao">
                <span class="close">X</span>
                <a class="clear" href="javascript:;">
                    <h1>瓜子二手车———没有中间商赚差价的个人
                        二手车网站</h1>
                    <div class="act">广告</div>
                </a>
            </li>
            <!--文字-->
            <li>
                <a href="javascript:;">
                    <div class="user clear">
                        <img class="head" src="/Public/Wap/images/touxiang02.png"/>
                        <span class="name">黑黑</span>
                        <span class="time">昨天</span>
                    </div>
                    <h1>经历了中考，我决定放弃高考去留学，但我不后悔!</h1>
                    <p>经历了中考，我决定放弃高考去留学，但我不后悔!经历了中考，我决定放弃高考去留学，但我不后悔!经历了中考，我决定放弃高考去留学，但我不后悔!</p>
                    <div class="bot clear">
                        <div class="left">
                            <div class="act">风景</div>
                            <span class="look">1234</span>
                        </div>
                        <div class="right">
                            <div class="pl">
                                <img src="/Public/Wap/images/index_pinglun.png"/>
                                <span>1234</span>
                            </div>
                            <div class="fenxiang">
                                <img src="/Public/Wap/images/share_large.png"/>
                                <span>1234</span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div>7
        <ul>
            <!--三张图-->
            <li>
                <a href="javascript:;">
                    <div class="user clear">
                        <img class="head" src="/Public/Wap/images/touxiang02.png"/>
                        <span class="name">黑黑</span>
                        <span class="time">昨天</span>
                    </div>
                    <h1>经历了中考，我决定放弃高考去留学，但我不后悔!</h1>
                    <div class="picklist clear">
                        <img src="/Public/Wap/images/index_pic03.png"/>
                        <img src="/Public/Wap/images/index_pic04.png"/>
                        <img src="/Public/Wap/images/index_pic05.png"/>
                    </div>
                    <div class="bot clear">
                        <div class="left">
                            <div class="act">风景</div>
                            <span class="look">1234</span>
                        </div>
                        <div class="right">
                            <div class="pl">
                                <img src="/Public/Wap/images/index_pinglun.png"/>
                                <span>1234</span>
                            </div>
                            <div class="fenxiang">
                                <img src="/Public/Wap/images/share_large.png"/>
                                <span>1234</span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <!--单张图-->
            <li>
                <a href="javascript:;">
                    <div class="user clear">
                        <img class="head" src="/Public/Wap/images/touxiang02.png"/>
                        <span class="name">黑黑</span>
                        <span class="time">昨天</span>
                    </div>
                    <h1>经历了中考，我决定放弃高考去留学，但我不后悔!</h1>
                    <div class="pic">
                        <img src="/Public/Wap/images/index_pic03.png"/>
                    </div>
                    <div class="bot clear">
                        <div class="left">
                            <div class="act">风景</div>
                            <span class="look">1234</span>
                        </div>
                        <div class="right">
                            <div class="pl">
                                <img src="/Public/Wap/images/index_pinglun.png"/>
                                <span>1234</span>
                            </div>
                            <div class="fenxiang">
                                <img src="/Public/Wap/images/share_large.png"/>
                                <span>1234</span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <!--广告-->
            <li class="guanggao">
                <span class="close">X</span>
                <a class="clear" href="javascript:;">
                    <h1>瓜子二手车———没有中间商赚差价的个人
                        二手车网站</h1>
                    <div class="act">广告</div>
                </a>
            </li>
            <!--文字-->
            <li>
                <a href="javascript:;">
                    <div class="user clear">
                        <img class="head" src="/Public/Wap/images/touxiang02.png"/>
                        <span class="name">黑黑</span>
                        <span class="time">昨天</span>
                    </div>
                    <h1>经历了中考，我决定放弃高考去留学，但我不后悔!</h1>
                    <p>经历了中考，我决定放弃高考去留学，但我不后悔!经历了中考，我决定放弃高考去留学，但我不后悔!经历了中考，我决定放弃高考去留学，但我不后悔!</p>
                    <div class="bot clear">
                        <div class="left">
                            <div class="act">风景</div>
                            <span class="look">1234</span>
                        </div>
                        <div class="right">
                            <div class="pl">
                                <img src="/Public/Wap/images/index_pinglun.png"/>
                                <span>1234</span>
                            </div>
                            <div class="fenxiang">
                                <img src="/Public/Wap/images/share_large.png"/>
                                <span>1234</span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>
<script>
    $(".list>div").eq(0).show().siblings().hide();
    $(".swiper-slide").click(function(){
        $(this).addClass("active").siblings().removeClass("active");
        var index = $(this).index();
        $(".list>div").eq(index).show().siblings().hide()
    })
</script>
<script>
    var page = 0;
    var target = true;
    var index = null;
        $.ajax({
        url:"toplist",
        type:"POST",
        data:{
            name:"全部",
            page:0
        },
        success:function (data) {
            console.log(data);
            var html = "";
            for(var i=0; i<data.length; i++){
                //如果是单张图
                var strTime= data[i].time;
                var time = strTime.substring(0,10);
                if(data[i].image1==null && data[i].image2==null){
                    html+=  "<li>" +
                                "<a href='/index.php/Home/Topic/subdetails?id="+data[i].id+"'>" +
                                    "<div class='user clear'>" +
                                        "<img class='head' src='"+data[i].userimg+"'/>"+
                                        "<span class='name'>"+data[i].username+"</span>"+
                                        "<span class='time'>"+time+"</span>"+
                                    "</div>"+
                                    "<h1>"+data[i].title+"</h1>"+
                                    "<div class='pic clear'>" +
                                        "<img src='/Public/images/topic/"+data[i].image+"'/>"+
                                    "</div>"+
                                    "<div class='bot clear'>" +
                                        "<div class='left'>" +
                                            "<div class='act'>"+data[i].classify+"</div>"+
                                            "<span class='look'>"+data[i].hot+"</span>"+
                                        "</div>"+
                                        "<div class='right'>" +
                                            "<div class='pl'>" +
                                                "<img src='/Public/Wap/images/index_pinglun.png'/>"+
                                                "<span>"+data[i].hot+"</span>"+
                                            "</div>"+
                                            "<div class='fenxiang'>" +
                                                "<img src='/Public/Wap/images/share_large.png'/>"+
                                                "<span>"+data[i].hot+"</span>"+
                                            "</div>"+
                                        "</div>"+
                                    "</div>"+
                                "</a> "+
                            "</li>"
                }else {
                    html+=  "<li>" +
                        "<a href='/index.php/Home/Topic/subdetails?id="+data[i].id+"'>" +
                        "<div class='user clear'>" +
                        "<img class='head' src='"+data[i].userimg+"'/>"+
                        "<span class='name'>"+data[i].username+"</span>"+
                        "<span class='time'>"+time+"</span>"+
                        "</div>"+
                        "<h1>"+data[i].title+"</h1>"+
                        "<div class='picklist clear'>" +
                        "<img src='/Public/images/topic/"+data[i].image+"'/>"+
                        "<img src='/Public/images/topic/"+data[i].image1+"'/>"+
                        "<img src='/Public/images/topic/"+data[i].image2+"'/>"+
                        "</div>"+
                        "<div class='bot clear'>" +
                        "<div class='left'>" +
                        "<div class='act'>"+data[i].classify+"</div>"+
                        "<span class='look'>"+data[i].hot+"</span>"+
                        "</div>"+
                        "<div class='right'>" +
                        "<div class='pl'>" +
                        "<img src='/Public/Wap/images/index_pinglun.png'/>"+
                        "<span>"+data[i].hot+"</span>"+
                        "</div>"+
                        "<div class='fenxiang'>" +
                        "<img src='/Public/Wap/images/share_large.png'/>"+
                        "<span>"+data[i].hot+"</span>"+
                        "</div>"+
                        "</div>"+
                        "</div>"+
                        "</a> "+
                        "</li>"
                }
            }
            $(".list>div").eq(0).find("ul").html(html)
        }
    });
    $(".swiper-slide").click(function () {
         name = $(this).text();
         page = 0;
         index = $(".swiper-wrapper .active").index();
         console.log(index);
         $.ajax({
             url:"toplist",
             type:"POST",
             data:{
                 name:name,
                 page:page
             },
             success:function (data) {
                 console.log(data);
                 var html = "";
                 for(var i=0; i<data.length; i++){
                     //如果是单张图
                     var strTime= data[i].time;
                     var time = strTime.substring(0,9);
                     if(data[i].image1==null && data[i].image2==null){
                         html+=  "<li>" +
                             "<a href='/index.php/Home/Topic/subdetails?id="+data[i].id+"'>" +
                             "<div class='user clear'>" +
                             "<img class='head' src='"+data[i].userimg+"'/>"+
                             "<span class='name'>"+data[i].username+"</span>"+
                             "<span class='time'>"+time+"</span>"+
                             "</div>"+
                             "<h1>"+data[i].title+"</h1>"+
                             "<div class='pic clear'>" +
                             "<img src='/Public/images/topic/"+data[i].image+"'/>"+
                             "</div>"+
                             "<div class='bot clear'>" +
                             "<div class='left'>" +
                             "<div class='act'>"+data[i].classify+"</div>"+
                             "<span class='look'>"+data[i].hot+"</span>"+
                             "</div>"+
                             "<div class='right'>" +
                             "<div class='pl'>" +
                             "<img src='/Public/Wap/images/index_pinglun.png'/>"+
                             "<span>"+data[i].hot+"</span>"+
                             "</div>"+
                             "<div class='fenxiang'>" +
                             "<img src='/Public/Wap/images/share_large.png'/>"+
                             "<span>"+data[i].hot+"</span>"+
                             "</div>"+
                             "</div>"+
                             "</div>"+
                             "</a> "+
                             "</li>"
                     }else {
                         html+=  "<li>" +
                             "<a href='/index.php/Home/Topic/subdetails?id="+data[i].id+"'>" +
                             "<div class='user clear'>" +
                             "<img class='head' src='"+data[i].userimg+"'/>"+
                             "<span class='name'>"+data[i].username+"</span>"+
                             "<span class='time'>"+time+"</span>"+
                             "</div>"+
                             "<h1>"+data[i].title+"</h1>"+
                             "<div class='picklist clear'>" +
                             "<img src='/Public/images/topic/"+data[i].image+"'/>"+
                             "<img src='/Public/images/topic/"+data[i].image1+"'/>"+
                             "<img src='/Public/images/topic/"+data[i].image2+"'/>"+
                             "</div>"+
                             "<div class='bot clear'>" +
                             "<div class='left'>" +
                             "<div class='act'>"+data[i].classify+"</div>"+
                             "<span class='look'>"+data[i].hot+"</span>"+
                             "</div>"+
                             "<div class='right'>" +
                             "<div class='pl'>" +
                             "<img src='/Public/Wap/images/index_pinglun.png'/>"+
                             "<span>"+data[i].hot+"</span>"+
                             "</div>"+
                             "<div class='fenxiang'>" +
                             "<img src='/Public/Wap/images/share_large.png'/>"+
                             "<span>"+data[i].hot+"</span>"+
                             "</div>"+
                             "</div>"+
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
        name = $(".swiper-wrapper .active").text();
        index = $(".swiper-wrapper .active").index();
        var top = $(document).scrollTop();
        var wintop = $(window).height();
        var docHeight=$(document).height();
        if(docHeight-top<=wintop){
            if(target){
                page ++;
                $.ajax({
                    url:"toplist",
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
                                //如果是单张图
                                var strTime= data[i].time;
                                var time = strTime.substring(0,9);
                                if(data[i].image1==null && data[i].image2==null){
                                    html+=  "<li>" +
                                        "<a href='/index.php/Home/Topic/subdetails?id="+data[i].id+"'>" +
                                        "<div class='user clear'>" +
                                        "<img class='head' src='"+data[i].userimg+"'/>"+
                                        "<span class='name'>"+data[i].username+"</span>"+
                                        "<span class='time'>"+time+"</span>"+
                                        "</div>"+
                                        "<h1>"+data[i].title+"</h1>"+
                                        "<div class='pic clear'>" +
                                        "<img src='/Public/images/topic/"+data[i].image+"'/>"+
                                        "</div>"+
                                        "<div class='bot clear'>" +
                                        "<div class='left'>" +
                                        "<div class='act'>"+data[i].classify+"</div>"+
                                        "<span class='look'>"+data[i].hot+"</span>"+
                                        "</div>"+
                                        "<div class='right'>" +
                                        "<div class='pl'>" +
                                        "<img src='/Public/Wap/images/index_pinglun.png'/>"+
                                        "<span>"+data[i].hot+"</span>"+
                                        "</div>"+
                                        "<div class='fenxiang'>" +
                                        "<img src='/Public/Wap/images/share_large.png'/>"+
                                        "<span>"+data[i].hot+"</span>"+
                                        "</div>"+
                                        "</div>"+
                                        "</div>"+
                                        "</a> "+
                                        "</li>"
                                }else {
                                    html+=  "<li>" +
                                        "<a href='/index.php/Home/Topic/subdetails?id="+data[i].id+"'>" +
                                        "<div class='user clear'>" +
                                        "<img class='head' src='"+data[i].userimg+"'/>"+
                                        "<span class='name'>"+data[i].username+"</span>"+
                                        "<span class='time'>"+time+"</span>"+
                                        "</div>"+
                                        "<h1>"+data[i].title+"</h1>"+
                                        "<div class='picklist clear'>" +
                                        "<img src='/Public/images/topic/"+data[i].image+"'/>"+
                                        "<img src='/Public/images/topic/"+data[i].image1+"'/>"+
                                        "<img src='/Public/images/topic/"+data[i].image2+"'/>"+
                                        "</div>"+
                                        "<div class='bot clear'>" +
                                        "<div class='left'>" +
                                        "<div class='act'>"+data[i].classify+"</div>"+
                                        "<span class='look'>"+data[i].hot+"</span>"+
                                        "</div>"+
                                        "<div class='right'>" +
                                        "<div class='pl'>" +
                                        "<img src='/Public/Wap/images/index_pinglun.png'/>"+
                                        "<span>"+data[i].hot+"</span>"+
                                        "</div>"+
                                        "<div class='fenxiang'>" +
                                        "<img src='/Public/Wap/images/share_large.png'/>"+
                                        "<span>"+data[i].hot+"</span>"+
                                        "</div>"+
                                        "</div>"+
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
</script>
</body>
</html>