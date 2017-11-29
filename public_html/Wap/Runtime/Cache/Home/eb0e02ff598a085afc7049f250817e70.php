<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="/Public/Wap/css/style.css" rel="stylesheet">
    <link href="/Public/Wap/css/userLikes.css" rel="stylesheet">
    <script src="/Public/Wap/js/jquery.js"></script>
    <script src="/Public/Wap/js/style.js"></script>
    <script src="/Public/Wap/js/tab.js"></script>
    <title>龙子网</title>
</head>
<body>
<!--占位用-->
<div class="box"></div>
<div class="index_header">
    <a href="javascript:history.go(-1);" class="left"><img src="/Public/Wap/images/back01.png"/></a>
    个人中心
    <a href="index.html" class="menu right"><img src="/Public/Wap/images/shouye.png"/></a>
</div>
<div class="tabbox">
    <div class="tab clear">
        <ul>
            <li class="active"><span>赞过我的</span></li>
            <li><span>我赞过的</span></li>
        </ul>
    </div>
    <div class="list">
        <div><ul></ul></div>
        <div><ul></ul></div>
    </div>
</div>
<script>
    var page = 0;
    var target = true;
    $.ajax({
        url:"thumbme",
        type:"POST",
        data:{
            page:page
        },
        success:function (data) {
            console.log(data);
            var html = "";
            for (var i=0;i<data.length; i++){
                html+="<li class='clear'>" +
                            "<div class='pic clear'>" +
                                "<img src='/Public/Wap/images/user_thumbup_03.png'/>"+
                            "</div>"+
                            "<div class='content clear'>" +
                                "<a href='/index.php/Home/Personal/userdata?id="+data[i].userid+"' class='other'>"+data[i].username+"</a> "+
                                "<span>赞了你的"+data[i].type+"</span> "+
                                "<a href='"+data[i].url+"' class='self'>"+data[i].title+"</a> "+
                                "<div class='time'>"+data[i].time+"</div>"+
                            "</div>"+
                      "</li>"
            }
            $(".list>div").eq(0).find("ul").html(html)
        }
    });
    $(".tab li").click(function () {
        page = 0;
        target = true;
        var act = $(this).text();
        if(act == "赞过我的"){
            $.ajax({
                url:"thumbme",
                type:"POST",
                data:{
                    page:page
                },
                success:function (data) {
                    console.log(data);
                    var html = "";
                    for (var i=0;i<data.length; i++){
                        html+="<li class='clear'>" +
                            "<div class='pic clear'>" +
                            "<img src='/Public/Wap/images/user_thumbup_03.png'/>"+
                            "</div>"+
                            "<div class='content clear'>" +
                            "<a href='/index.php/Home/Personal/userdata?id="+data[i].userid+"' class='other'>"+data[i].username+"</a> "+
                            "<span>赞了你的"+data[i].type+"</span>"+
                            "<a href='"+data[i].url+"' class='self'>"+data[i].title+"</a> "+
                            "<div class='time'>"+data[i].time+"</div>"+
                            "</div>"+
                            "</li>"
                    }
                    $(".list>div").eq(0).find("ul").html(html)
                }
            });
        }else {
            $.ajax({
                url:"methumb",
                type:"POST",
                data:{
                    page:page
                },
                success:function (data) {
                    console.log(data);
                    var html = "";
                    for(var i=0;i<data.length;i++){
                        html+= "<li class='clear'>" +
                                    "<div class='pic clear'>" +
                                        "<img src='/Public/Wap/images/user_thumbup_03.png'/>"+
                                    "</div>"+
                                    "<div class='content clear'>" +
                                        "<span>你赞了<a href='/index.php/Home/Personal/userdata?id="+data[i].userid+"'>"+data[i].username+"</a>的"+data[i].type+"</span>"+
                                        "<a href='"+data[i].url+"' class='self'>"+data[i].title+"</a>"+
                                        "<div class='time'>"+data[i].time+"</div>"+
                                    "</div>"+
                                "</li>"
                    }
                    $(".list>div").eq(1).find("ul").html(html);
                }
            });
        }
    });
    $(document).scroll(function(){
        name = $(".tab li.active").text();
        var top = $(document).scrollTop();
        var wintop = $(window).height();
        var docHeight=$(document).height();
        if(docHeight-top<=wintop){
            if(target){
                if(name == "赞过我的"){
                    page ++;
                    $.ajax({
                        url:"thumbme",
                        type:"POST",
                        async: false,
                        data:{
                            page:page
                        },
                        success:function(data){
                            console.log(data);
                            if(data == null){
                                target=false;
                                return
                            }else{
                                target = true;
                                var html ="";
                                for(var i=0; i<data.length; i++){
                                    html+="<li class='clear'>" +
                                        "<div class='pic clear'>" +
                                        "<img src='/Public/Wap/images/user_thumbup_03.png'/>"+
                                        "</div>"+
                                        "<div class='content clear'>" +
                                        "<a href='javascriot:;' class='other'>"+data[i].username+"</a> "+
                                        "<span>点赞了你的"+data[i].type+"</span>"+
                                        "<a href='javascript:;' class='self'>"+data[i].title+"</a> "+
                                        "<div class='time'>"+data[i].time+"</div>"+
                                        "</div>"+
                                        "</li>"
                                }
                                $(".list>div").eq(0).find("ul").append(html)
                            }
                        }
                    })
                }else {
                    page ++;
                    $.ajax({
                        url:"methumb",
                        type:"POST",
                        async: false,
                        data:{
                            page:page
                        },
                        success:function(data){
                            console.log(data);
                            if(data == null){
                                target=false;
                                return
                            }else{
                                target = true;
                                var html ="";
                                for(var i=0; i<data.length; i++){
                                    html+="<li class='clear'>" +
                                        "<div class='pic clear'>" +
                                        "<img src='/Public/Wap/images/user_thumbup_03.png'/>"+
                                        "</div>"+
                                        "<div class='content clear'>" +
                                        "<span>你赞了<a href='javascript:;'>"+data[i].username+"</a>的"+data[i].type+"</span>"+
                                        "<a href='javascript:;' class='self'>"+data[i].title+"</a>"+
                                        "<div class='time'>"+data[i].time+"</div>"+
                                        "</div>"+
                                        "</li>"
                                }
                                $(".list>div").eq(1).find("ul").append(html)
                            }
                        }
                    })
                }
            }
        }
    });
</script>
</body>
</html>