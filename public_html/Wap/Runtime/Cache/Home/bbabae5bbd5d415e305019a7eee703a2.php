<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="/Public/Wap/css/style.css" rel="stylesheet">
    <link href="/Public/Wap/css/userFoll.css" rel="stylesheet">
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
            <li class="active">
                <span>关注我的</span>
            </li>
            <li>
                <span>我关注的</span>
            </li>
        </ul>
    </div>
    <div class="list">
        <div>
            <ul>
                <li class="clear">
                    <div class="title clear">
                        <img src="/Public/Wap/images/user_attention_03.png"/>
                        <a href="javascript:;">李青</a>
                        <span>关注了你</span>
                    </div>
                    <div class="time">08.26 80:26</div>
                </li>
                <li class="clear">
                    <div class="title clear">
                        <img src="/Public/Wap/images/user_attention_03.png"/>
                        <a href="javascript:;">李青</a>
                        <span>关注了你</span>
                    </div>
                    <div class="time">08.26 80:26</div>
                </li>
                <li class="clear">
                    <div class="title clear">
                        <img src="/Public/Wap/images/user_attention_03.png"/>
                        <a href="javascript:;">李青</a>
                        <span>关注了你</span>
                    </div>
                    <div class="time">08.26 80:26</div>
                </li>
            </ul>
        </div>
        <div>
            <ul>
                <li class="clear">
                    <div class="title clear">
                        <img src="/Public/Wap/images/user_attention_03.png"/>
                        <span>你关注了</span>
                        <a href="javascript:;">李青</a>
                    </div>
                    <div class="time">08.26 80:26</div>
                </li>
                <li class="clear">
                    <div class="title clear">
                        <img src="/Public/Wap/images/user_attention_03.png"/>
                        <span>你关注了</span>
                        <a href="javascript:;">李青</a>
                    </div>
                    <div class="time">08.26 80:26</div>
                </li>
                <li class="clear">
                    <div class="title clear">
                        <img src="/Public/Wap/images/user_attention_03.png"/>
                        <span>你关注了</span>
                        <a href="javascript:;">李青</a>
                    </div>
                    <div class="time">08.26 80:26</div>
                </li>
            </ul>
        </div>
    </div>
</div>
<script>
    var page = 0;
    $.ajax({
        url:"focusme",
        type:"POST",
        data:{
            page:page
        },
        success:function (data) {
            console.log(data);
            var html="";
            for(var i=0; i<data.length; i++){
                var time = data[i].time.substring(5,16);
                html+=  "<li class='clear'>" +
                            "<div class='title clear'>" +
                                "<img src='/Public/Wap/images/user_attention_03.png'/>"+
                                "<a href='/index.php/Home/Personal/userdata?id="+data[i].uid+"'>"+data[i].user+"</a>"+
                                "<span>关注了你</span>"+
                            "</div>"+
                            "<div class='time'>"+time+"</div>"+
                        "</li>"
            }
            $(".list>div").eq(0).find("ul").html(html);
        }
    });
    $(".tab li").click(function () {
        var text = $(this).find("span").text();
        if(text == "关注我的"){
            $.ajax({
                url:"focusme",
                type:"POST",
                data:{
                    page:page
                },
                success:function (data) {
                    console.log(data)
                    var html="";
                    for(var i=0; i<data.length; i++){
                        var time = data[i].time.substring(5,16);
                        html+=  "<li class='clear'>" +
                            "<div class='title clear'>" +
                            "<img src='/Public/Wap/images/user_attention_03.png'/>"+
                            "<a href='/index.php/Home/Personal/userdata?id="+data[i].uid+"'>"+data[i].user+"</a>"+
                            "<span>关注了你</span>"+
                            "</div>"+
                            "<div class='time'>"+time+"</div>"+
                            "</li>"
                    }
                    $(".list>div").eq(0).find("ul").html(html);
                }
            })
        }else {
            $.ajax({
                url:"myfocus",
                type:"POST",
                data:{
                    page:page
                },
                success:function (data) {
                    var html="";
                    for(var i=0; i<data.length; i++){
                        var time = data[i].time.substring(5,16);
                        html+=  "<li class='clear'>" +
                                    "<div class='title clear'>" +
                                        "<img src='/Public/Wap/images/user_attention_03.png'/>"+
                                        "<span>你关注了</span>"+
                                        "<a href='/index.php/Home/Personal/userdata?id="+data[i].cuid+"'>"+data[i].user+"</a>"+
                                    "</div>"+
                                    "<div class='time'>"+time+"</div>"+
                                  "</li>"
                    }
                    $(".list>div").eq(1).find("ul").html(html);
                }
            })
        }
    })
</script>
</body>
</html>