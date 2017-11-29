<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="/Public/Wap/css/style.css" rel="stylesheet">
    <link href="/Public/Wap/css/literadetails.css" rel="stylesheet">
    <script src="/Public/Wap/js/jquery.js"></script>
    <script src="/Public/Wap/js/style.js"></script>
    <script src="/Public/Wap/js/tab.js"></script>
    <script src="/Public/Wap/js/nativeShare.js"></script>
    <title>文学</title>
    <style>
        #SOHUCS #SOHU_MAIN .module-mobile-cmt-header{
            background-color:#fcf5ed!important;
        }
    </style>
</head>
<body>
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
<div class="content">
    <div class="title clear">
        <h1><?php echo ($list[0][title]); ?></h1>
        <div class="time"><?php echo ($list[0][time]); ?></div>
        <a href="javascript:;" id="getdata">
            <div class="people">作者: <span><?php echo ($list[0][author]); ?>123456</span></div>
        </a>
        <div class="look clear"><span>1234</span><img src="/Public/Wap/images/view.png"/></div>
    </div>
    <script>
        var state = "<?php echo ($list[0][uid]); ?>";
        $("#getdata").attr("href","/index.php/Home/Personal/userdata?id="+state)
    </script>
    <div class="text">
        <?php echo ($list[0][contents]); ?>
    </div>
    <div class="tabbox inner">
            <div class="pinglun">
                <!--WAP版-->
                <div id="SOHUCS"></div>
                <script id="changyan_mobile_js" charset="utf-8" type="text/javascript"
                        src="https://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=cysTJyoTz&conf=prod_8a4abb36f4a4cc5512ac00833b333117">
                </script>
                <script>
                    function getQueryString(name) {
                        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
                        var r = window.location.search.substr(1).match(reg);
                        if (r != null) return unescape(r[2]);
                        return null;
                    }
                    var id = getQueryString('id');
                    $("#SOHUCS").attr("sid","Literature."+id)
                </script>
        </div>
    </div>
</div>
<div class="bot_menu">
    <ul>
        <li class="fenxiang active"  id="nativeShare">
            <span>分享</span>
        </li>
        <li class="likes">
            <img src="/Public/Wap/images/thumbup_small.png"/>
            <span>点赞</span>
        </li>
        <li class="pinglun">
            <a href="#SOHUCS">
                <img src="/Public/Wap/images/index_pinglun.png"/>
                <span>评论</span>
            </a>
        </li>
        <li class="tougao">
            <img src="/Public/Wap/images/tougao_large.png"/>
            <span>投稿</span>
        </li>
    </ul>
</div>
<script>
    var config = {
        url:'21321',
        title:'21321',
        desc:'21321',
        img:'21231321',
        img_title:'32132123',
        from:'321321'
    };
    var share_obj = new nativeShare('nativeShare',config);
    $("#nativeShare").prepend('<img src="/Public/Wap/images/share_large02.png"/>');
</script>
<div class="bot_box"></div>
<script>
    var target = "<?php echo ($list[thumb]); ?>";
    function getQueryString(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) return unescape(r[2]);
        return null;
    }
    if(target == 0){
        $(".likes").click(function () {
            if($("#user_data .user_type").val() == ""){
                alert("请先登录");
                window.location.href="http://www.cusdc.com/index.php/Home/Login/index"
            }else {
                var id = getQueryString("id");
                $.ajax({
                    url:"thumb",
                    type:"POST",
                    data:{
                        type:"文学",
                        id:id
                    },
                    scuuess:function (data) {
                        if(data == 1){
                            $(".likes span").text("已赞");
                            $(".likes img").attr("src","/Public/Wap/images/attrdianzan.png")
                        }else {
                            $(".likes span").text("点赞")
                        }
                    }
                })
            }
        })
    }else {
        $(".likes span").text("已赞");
        $(".likes img").attr("src","/Public/Wap/images/attrdianzan.png")
    }
    $(".tougao").click(function () {
        window.location.href="http://www.cusdc.com/index.php/Home/Release/fabuenter";
    })
</script>
<!--限制样式-->
<script>
    $(".content .text").children().css("background","#fcf5ed")
</script>
</body>
</html>