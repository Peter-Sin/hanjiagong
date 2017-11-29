<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="/Public/Wap/css/style.css" rel="stylesheet">
    <link href="/Public/Wap/css/highlights.css" rel="stylesheet">
    <script src="/Public/Wap/js/jquery.js"></script>
    <script src="/Public/Wap/js/style.js"></script>
    <script src="/Public/Wap/js/tab.js"></script>
    <title>龙子网</title>
    <style>
        .list ul{
            width: 100%;
        }
        .list iframe{
            width: 100%;
            height: 14.45rem;
        }
    </style>
</head>
<body>
<!--占位用-->
<div class="box"></div>
<div class="index_header">
    <a href="javascript:history.go(-1);" class="left"><img src="/Public/Wap/images/back.png"/></a>
    视频
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
<div class="tabbox">
    <div class="list inner">
        <div class="video clear">
            <ul class="clear list1">
                <!--视频-->
                <li class="videos">

                    <h1>校园毕业采集</h1>
                    <div class="clear">
                        <span class="act">校园</span>
                        <span class="time">2017/05/01</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--<img class="pop_pic" src="/Public/Wap/images/jj1.jpg"/>-->
<!--<img class="play_icon" src="/Public/Wap/images/shipin_player.png"/>-->
<script>
    var page = 0;
    var target = true;
    $.ajax({
        url:"videolist",
        type:"POST",
        data:{
            page:page
        },
        success:function (data) {
            var html="";
            for(var i=0; i<data.length; i++){
                var time = data[i].time.substring(0,10);
                var iframe = data[i].address.substring(1,7);
                if(iframe == "iframe"){
                    html+=  "<li>" +
                        data[i].address+
                        "<h1>"+data[i].title+"</h1>"+
                        "<div class='clear'>" +
                        "<span class='act'>"+data[i].class+"</span>"+
                        "<span class='time'>"+time+"</span>"+
                        "</div>"+
                        "</li>"
                }
            }
            $(".list ul").html(html)
        }
    });
    $(document).scroll(function(){
        var top = $(document).scrollTop();
        var wintop = $(window).height();
        var docHeight=$(document).height();
        if(docHeight-top<=wintop*2 ){
            if(target){
                page ++;
                $.ajax({
                    url:"videolist",
                    type:"POST",
                    async: false,
                    data:{
                        page:page
                    },
                    success:function(data){
                        console.log(data);
                        if(data == ""){
                            target=false;
                            return
                        }else{
                            var html = "";
                            for(var i=0;i<data.length;i++){
                                var iframe = data[i].address.substring(1,7);
                                var time = data[i].time.substring(0,10);
                                if(iframe == "iframe"){
                                    html+= "<li>" +
                                        data[i].address+
                                        "<h1>"+data[i].title+"</h1>"+
                                        "<div class='clear'>" +
                                        "<span class='act'>"+data[i].class+"</span>"+
                                        "<span class='time'>"+time+"</span>"+
                                        "</div>"+
                                        "</li>"
                                }
                            }
                            $(".list ul").append(html)
                        }
                    }
                })
            }
        }
    });
</script>
</body>
</html>