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
    <link href="/Public/Wap/css/news.css" rel="stylesheet">
    <script src="/Public/Wap/js/jquery.js"></script>
    <script src="/Public/Wap/js/style.js"></script>
    <script src="/Public/Wap/js/tab.js"></script>
    <title>龙子网</title>
</head>
<body>
<!--占位用-->
<div class="box"></div>
<div class="index_header">
    <a href="javascript:history.go(-1);" class="left"><img src="/Public/Wap/images/back.png"/></a>
    龙子网
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
            <li class="active"><a href="javascript:;">全部</a></li>
            <li><a href="javascript:;">体育新闻</a></li>
            <li><a href="javascript:;">高校头条</a></li>
            <li><a href="javascript:;">娱乐新闻</a></li>
            <li><a href="javascript:;">校园资讯</a></li>
            <li><a href="javascript:;">公告专栏</a></li>
        </ul>
    </div>
    <div class="list inner">
        <div class="quanbu">
            <ul>
                <!--&lt;!&ndash;单张图&ndash;&gt;-->
                <!--<li class="headlines clear">-->
                        <!--<a href="/index.php/Home/News/details?id=<?php echo ($val["id"]); ?>">-->
                            <!--<div class="l_box clear">-->
                                <!--<h1><?php echo ($val["title"]); ?></h1>-->
                                <!--<div class="pruduct">-->
                                    <!--<span class="act"><?php echo ($val["classify"]); ?></span>-->
                                    <!--<div class="comment">-->
                                        <!--<img src="/Public/Wap/images/index_pinglun.png">-->
                                        <!--<span>32213</span>-->
                                    <!--</div>-->
                                    <!--<div class="good">-->
                                        <!--<img src="/Public/Wap/images/index_dianzan.png">-->
                                        <!--<span>1233</span>-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                            <!--<div class="r_box clare">-->
                                <!--<img src="/Public/images/xinwen/<?php echo ($val["faceimg"]); ?>">-->
                            <!--</div>-->
                        <!--</a>-->
                    <!--</li>-->
                <!--&lt;!&ndash;广告&ndash;&gt;-->
                <!--<li class="guanggao">-->
                    <!--<span class="close">X</span>-->
                    <!--<a class="clear" href="javascript:;">-->
                        <!--<h1>瓜子二手车———没有中间商赚差价的个人-->
                            <!--二手车网站</h1>-->
                        <!--<div class="act">广告</div>-->
                    <!--</a>-->
                <!--</li>-->
                <!--&lt;!&ndash;三张图&ndash;&gt;-->
                <!--<li class="picklist clear">-->
                    <!--<a href="javascript:;">-->
                        <!--<h1>经历了中考，我决定放弃高考去留学，但我不后悔！</h1>-->
                        <!--<div class="pickbox clear">-->
                            <!--<img src="/Public/Wap/images/index_pic03.png"/>-->
                            <!--<img src="/Public/Wap/images/index_pic04.png"/>-->
                            <!--<img src="/Public/Wap/images/index_pic05.png"/>-->
                        <!--</div>-->
                        <!--<div class="pruduct clear">-->
                            <!--<span class="act">高校头条</span>-->
                            <!--<div class="comment">-->
                                <!--<img src="/Public/Wap/images/index_pinglun.png">-->
                                <!--<span>32213</span>-->
                            <!--</div>-->
                            <!--<div class="good">-->
                                <!--<img src="/Public/Wap/images/index_dianzan.png">-->
                                <!--<span>1233</span>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
            </ul>
        </div>
        <div class="tiyu">
            <ul></ul>
        </div>
        <div class="gaoxiao">
            <ul></ul>
        </div>
        <div class="yule">
            <ul></ul>
        </div>
        <div class="xiaoyuan">
            <ul></ul>
        </div>
        <div class="gonggao">
            <ul></ul>
        </div>
    </div>
</div>
<script>
    $(function(){
        var page = 0;
        var name = "";
        target=true;
        $.ajax({
            url:"newlist",
            type:"POST",
            data:{
                name:"全部",
                page:0
            },
            success:function (data) {
                var html = "";
                for(var i=0; i<data.length; i++){
                    if(data[i].image1 == "" && data[i].image2 == ""){
                        html+= "<li class='headlines clear'>" +
                            "<a href='/index.php/Home/News/details?id="+data[i].id+"'>" +
                            "<div class='l_box clear'>" +
                            "<h1>"+data[i].title+"</h1>"+
                            "<div class='pruduct'>" +
                            "<span class='act'>"+data[i].classify+"</span>"+
                            "<div class='comment'>" +
                            "<img src='/Public/Wap/images/index_pinglun.png'/>"+
                            "<span>"+data[i].click+"</span>"+
                            "</div>"+
                            "<div class='good'>" +
                            "<img src='/Public/Wap/images/index_dianzan.png'>"+
                            "<span>"+data[i].tuijian_shou+"</span>"+
                            "</div>"+
                            "</div>"+
                            "</div>"+
                            "<div class='r_box clare'>" +
                            "<img src='/Public/images/xinwen/"+data[i].faceimg+"'/>"+
                            "</div>"+
                            "</a>"+
                            "</li>"
                    }else {
                        html+="<li class='picklist clear'>" +
                            "<a href='/index.php/Home/News/details?id="+data[i].id+"'>" +
                            "<h1>"+data[i].title+"</h1>"+
                            "<div class='pickbox clear'>" +
                            "<img src='/Public/images/xinwen/"+data[i].faceimg+"'/>"+
                            "<img src='/Public/images/xinwen/"+data[i].image1+"'/>"+
                            "<img src='/Public/images/xinwen/"+data[i].image2+"'/>"+
                            "</div>"+
                            "<div class='pruduct clear'>" +
                            "<span class='act'>"+data[i].classify+"</span>"+
                            "<div class='comment'>" +
                            "<img src='/Public/Wap/images/index_pinglun.png'/>"+
                            "<span>"+data[i].click+"</span>"+
                            "</div>"+
                            "<div class='good'>" +
                            "<img src='/Public/Wap/images/index_dianzan.png'>"+
                            "<span>"+data[i].tuijian_shou+"</span>"+
                            "</div>"+
                            "</div>"+
                            "</a>"+
                            "</li>"
                    }
                }
                $(".list>div").eq(0).find("ul").html(html)
            }
        });
        $(".tab li a").click(function(){
            var self = $(this);
            name = $(this).text();
            page = 0;
            target = true;
            $.ajax({
                url:"newlist",
                type:"POST",
                data:{
                    name:name,
                    page:page
                },
                success:function(data){
                    var html = "";
                    var index = self.parent().index();
                    console.log(index);
                    for(var i=0; i<data.length; i++){
                        if(data[i].image1 == "" && data[i].image2 == ""){
                            html+= "<li class='headlines clear'>" +
                                "<a href='/index.php/Home/News/details?id="+data[i].id+"'>" +
                                "<div class='l_box clear'>" +
                                "<h1>"+data[i].title+"</h1>"+
                                "<div class='pruduct'>" +
                                "<span class='act'>"+data[i].classify+"</span>"+
                                "<div class='comment'>" +
                                "<img src='/Public/Wap/images/index_pinglun.png'/>"+
                                "<span>"+data[i].click+"</span>"+
                                "</div>"+
                                "<div class='good'>" +
                                "<img src='/Public/Wap/images/index_dianzan.png'>"+
                                "<span>"+data[i].tuijian_shou+"</span>"+
                                "</div>"+
                                "</div>"+
                                "</div>"+
                                "<div class='r_box clare'>" +
                                "<img src='/Public/images/xinwen/"+data[i].faceimg+"'/>"+
                                "</div>"+
                                "</a>"+
                                "</li>"
                        }else {
                            html+="<li class='picklist clear'>" +
                                "<a href='/index.php/Home/News/details?id="+data[i].id+"'>" +
                                "<h1>"+data[i].title+"</h1>"+
                                "<div class='pickbox clear'>" +
                                "<img src='/Public/images/xinwen/"+data[i].faceimg+"'/>"+
                                "<img src='/Public/images/xinwen/"+data[i].image1+"'/>"+
                                "<img src='/Public/images/xinwen/"+data[i].image2+"'/>"+
                                "</div>"+
                                "<div class='pruduct clear'>" +
                                "<span class='act'>"+data[i].classify+"</span>"+
                                "<div class='comment'>" +
                                "<img src='/Public/Wap/images/index_pinglun.png'/>"+
                                "<span>"+data[i].click+"</span>"+
                                "</div>"+
                                "<div class='good'>" +
                                "<img src='/Public/Wap/images/index_dianzan.png'>"+
                                "<span>"+data[i].tuijian_shou+"</span>"+
                                "</div>"+
                                "</div>"+
                                "</a>"+
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
                if(target == true){
                    page ++;
                    console.log(name,page);
                    $.ajax({
                        url:"newlist",
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
                            }
                            var html ="";
                            for(var i=0; i<data.length; i++){
                                if(data[i].image1 == "" && data[i].image2 == ""){
                                    html+= "<li class='headlines clear'>" +
                                        "<a href='/index.php/Home/News/details?id="+data[i].id+"'>" +
                                        "<div class='l_box clear'>" +
                                        "<h1>"+data[i].title+"</h1>"+
                                        "<div class='pruduct'>" +
                                        "<span class='act'>"+data[i].classify+"</span>"+
                                        "<div class='comment'>" +
                                        "<img src='/Public/Wap/images/index_pinglun.png'/>"+
                                        "<span>"+data[i].click+"</span>"+
                                        "</div>"+
                                        "<div class='good'>" +
                                        "<img src='/Public/Wap/images/index_dianzan.png'>"+
                                        "<span>"+data[i].tuijian_shou+"</span>"+
                                        "</div>"+
                                        "</div>"+
                                        "</div>"+
                                        "<div class='r_box clare'>" +
                                        "<img src='/Public/images/xinwen/"+data[i].faceimg+"'/>"+
                                        "</div>"+
                                        "</a>"+
                                        "</li>"
                                }else {
                                    html+="<li class='picklist clear'>" +
                                        "<a href='/index.php/Home/News/details?id="+data[i].id+"'>" +
                                        "<h1>"+data[i].title+"</h1>"+
                                        "<div class='pickbox clear'>" +
                                        "<img src='/Public/images/xinwen/"+data[i].faceimg+"'/>"+
                                        "<img src='/Public/images/xinwen/"+data[i].image1+"'/>"+
                                        "<img src='/Public/images/xinwen/"+data[i].image2+"'/>"+
                                        "</div>"+
                                        "<div class='pruduct clear'>" +
                                        "<span class='act'>"+data[i].classify+"</span>"+
                                        "<div class='comment'>" +
                                        "<img src='/Public/Wap/images/index_pinglun.png'/>"+
                                        "<span>"+data[i].click+"</span>"+
                                        "</div>"+
                                        "<div class='good'>" +
                                        "<img src='/Public/Wap/images/index_dianzan.png'>"+
                                        "<span>"+data[i].tuijian_shou+"</span>"+
                                        "</div>"+
                                        "</div>"+
                                        "</a>"+
                                        "</li>"
                                }
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