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
    <link href="/Public/Wap/css/activity.css" rel="stylesheet">
    <script src="/Public/Wap/js/jquery.js"></script>
    <script src="/Public/Wap/js/style.js"></script>
    <script src="/Public/Wap/js/tab.js"></script>
    <title>活动</title>
</head>
<body>
<div class="box"></div>
<div class="index_header">
    <a href="javascript:history.go(-1);" class="left"><img src="/Public/Wap/images/back.png"/></a>
    活动
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
    <div class="tab">
        <ul class="clear">
            <li class="active" ><a href="javascript:;">全部</a></li>
            <li><a href="javascript:;">体育</a></li>
            <li><a href="javascript:;">文学</a></li>
            <li><a href="javascript:;">娱乐</a></li>
            <li><a href="javascript:;">公益</a></li>
            <li><a href="javascript:;">户外</a></li>
        </ul>
    </div>
    <div class="list inner">
        <div class="all">
            <ul></ul>
        </div>
        <div class="sports">
            <ul></ul>
        </div>
        <div class="litera">
            <ul></ul>
        </div>
        <div class="paly">
            <ul></ul>
        </div>
        <div class="gongyi">
            <ul></ul>
        </div>
        <div class="huwai">
            <ul></ul>
        </div>
    </div>
</div>
<script>
$(function () {
    //    加载首页
    var target = true;
    var page = 0;
    $.ajax({
        url:"lists",
        type:"POST",
        data:{
            name:"全部",
            page:page
        },
        success:function (data) {
            console.log(data);
            var html = "";
            for(var i=0; i<data.length; i++){
                html+="<li class='literature clear'>" +
                    "<a href='/index.php/Home/activity/details?id="+data[i].id+"'>" +
                    "<div class='literature_box clear'>" +
                    "<div class='pick'>" +
                    "<img class='focus' src='/Public/images/activity/"+data[i].img+"'/> "+
                    "<img class='decorate' src='/Public/Wap/images/load.png'/>"+
                    "<div class='user'>" +
                    "<span class='head'>" +
                    "<img src='/Public/images/faceimg/"+data[i].uimg+"'/>"+
                    "</span>"+
                    "<span class='name'>"+data[i].uname+"</span>"+
                    "<span class='time'>"+data[i].uptime+"发布</span>"+
                    "</div>"+
                    "</div>"+
                    "<p>"+data[i].title+"</p>"+
                    "</div>"+
                    "<div class='pruduct clear'>" +
                    "<span class='act'>"+data[i].act_fl+"活动</span>"+
                    "<div class='comment'>" +
                    "<img src='/Public/Wap/images/total_small.png'/>"+
                    "<span>"+data[i].num+"</span>"+
                    "</div>"+
                    "<div class='good'>" +
                    "<img src='/Public/Wap/images/view.png'/>"+
                    "<span>"+data[i].pnum+"</span>"+
                    "</div>"+
                    "</div>"+
                    "</a>"+
                    "</li>"
            }
            $(".all ul").html(html)
        }
    });
    $(".tab li").click(function(){
        page = 0;
        var index = $(this).index();
        var name = $(this).find("a").text();
        console.log(name);
        $(".list>div").eq(index).find("ul").html("");
        $.ajax({
            url:"lists",
            type:"POST",
            data:{
                name:name,
                page:page
            },
            success:function (data) {
                console.log(data);
                var html = "";
                for(var i=0; i<data.length; i++){
                    html+="<li class='literature clear'>" +
                        "<a href='/index.php/Home/activity/details?id="+data[i].id+"'>" +
                        "<div class='literature_box clear'>" +
                        "<div class='pick'>" +
                        "<img class='focus' src='/Public/images/activity/"+data[i].img+"'/> "+
                        "<img class='decorate' src='/Public/Wap/images/load.png'/>"+
                        "<div class='user'>" +
                        "<span class='head'>" +
                        "<img src='/Public/images/faceimg/"+data[i].uimg+"'/>"+
                        "</span>"+
                        "<span class='name'>"+data[i].uname+"</span>"+
                        "<span class='time'>"+data[i].uptime+"发布</span>"+
                        "</div>"+
                        "</div>"+
                        "<p>"+data[i].title+"</p>"+
                        "</div>"+
                        "<div class='pruduct clear'>" +
                        "<span class='act'>"+data[i].act_fl+"活动</span>"+
                        "<div class='comment'>" +
                        "<img src='/Public/Wap/images/total_small.png'/>"+
                        "<span>"+data[i].num+"</span>"+
                        "</div>"+
                        "<div class='good'>" +
                        "<img src='/Public/Wap/images/view.png'/>"+
                        "<span>"+data[i].pnum+"</span>"+
                        "</div>"+
                        "</div>"+
                        "</a>"+
                        "</li>"
                }
                $(".list>div").eq(index).find("ul").html(html)
            }
        })
    });
    $(document).scroll(function(){
        var name = $(".tab li.active").text();
        var index = $(".tab li.active").index();
        var top = $(document).scrollTop();
        var wintop = $(window).height();
        var docHeight=$(document).height();
        if(docHeight-top<=wintop*2 ){
            if(target){
                page++;
                $.ajax({
                    url:"lists",
                    type:"POST",
                    async: false,
                    data:{
                        name:name,
                        page:page
                    },
                    success:function(data){
                        if(data == ""){
                            target=false
                        }
                        var html ="";
                        for(var i=0; i<data.length; i++){
                            html+= "<li class='literature clear'>" +
                                "<a href='/index.php/Home/activity/details?id="+data[i].id+"'>" +
                                "<div class='literature_box clear'>" +
                                "<div class='pick'>" +
                                "<img class='focus' src='/Public/images/activity/"+data[i].img+"'/> "+
                                "<img class='decorate' src='/Public/Wap/images/load.png'/>"+
                                "<div class='user'>" +
                                "<span class='head'>" +
                                "<img src='/Public/images/faceimg/"+data[i].uimg+"'/>"+
                                "</span>"+
                                "<span class='name'>"+data[i].uname+"</span>"+
                                "<span class='time'>"+data[i].uptime+"发布</span>"+
                                "</div>"+
                                "</div>"+
                                "<p>"+data[i].title+"</p>"+
                                "</div>"+
                                "<div class='pruduct clear'>" +
                                "<span class='act'>"+data[i].act_fl+"活动</span>"+
                                "<div class='comment'>" +
                                "<img src='/Public/Wap/images/total_small.png'/>"+
                                "<span>"+data[i].num+"</span>"+
                                "</div>"+
                                "<div class='good'>" +
                                "<img src='/Public/Wap/images/view.png'/>"+
                                "<span>"+data[i].pnum+"</span>"+
                                "</div>"+
                                "</div>"+
                                "</a>"+
                                "</li>"
                        }
                        $(".list>div").eq(index).find("ul").append(html)
                    }
                })
            }
        }
    });
})
</script>
</body>
</html>