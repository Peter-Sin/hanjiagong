<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="/Public/Wap/css/style.css" rel="stylesheet">
    <link href="/Public/Wap/css/userdata.css" rel="stylesheet">
    <script src="/Public/Wap/js/jquery.js"></script>
    <script src="/Public/Wap/js/style.js"></script>
    <script src="/Public/Wap/js/tab.js"></script>
    <title>用户详情</title>
</head>
<body>
<div class="box"></div>
<div class="index_header">
    <a href="javascript:history.go(-1);" class="left"><img src="/Public/Wap/images/back.png"/></a>
    <a href="javascript:;" class="menu right"><img src="/Public/Wap/images/fenlei.png"/></a>
</div>
<!--顶部菜单页-->
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
<!--内容区域-->
<div class="content">
    <div class="title clear">
        <img class="bgp" src="/Public/Wap/images/shetuan_bg.jpg"/>
        <img class="head" src="<?php echo ($info[image]); ?>"/>
        <span class="name"><?php echo ($info[username]); ?></span>
        <div class="guanzhu clear">
            <img src="/Public/Wap/images/attention_large.png"/>
            <span>关注</span>
        </div>
    </div>
</div>
<div class="tabbox">
    <div class="tab clear">
        <ul>
            <li class="active">介绍</li>
            <li>文章</li>
            <li>话题</li>
            <li>活动</li>
        </ul>
    </div>
    <div class="list">
        <div class="jieshao">
            河南南阳人，1992年生，文学专业，2015年进入河南师范大学文学院，主要从事中国当代文学的教学与研究。先后师从雷达、罗成琰、张炯、白烨等著名当代文学研究专家，在《人民日报》理论版、《光明日报》理论版、《文艺理论与批评》、《文艺争鸣》、《南方文坛》、《中国图书评论》、《小说评论》、《当代文坛》、《文艺报》、《理论与创作》等专业核心期刊发表学术论文五十多篇，主持教育部人文社会科学规划项目、中国作家协会重点作品扶持项目、中国博士后科学基金项目、湖南省哲学社会科学规划项目、湖南省教育厅社会科学基金优秀青年项目等省部级课题十项，荣获湖南省文艺理论学会社会科学优秀成果奖五次
        </div>
        <div class="wenzhang inner">
            <p class="null">暂无发布的文章</p>
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
                    </a>
                </li>
            </ul>
        </div>
        <div class="huati">
            <p class="null">暂无发布的话题</p>
            <ul>
                <!--&lt;!&ndash;三张图&ndash;&gt;-->
                <!--<li>-->
                    <!--<a href="javascript:;">-->
                        <!--<div class="user clear">-->
                            <!--<img class="head" src="/Public/Wap/images/touxiang02.png"/>-->
                            <!--<span class="name">黑黑</span>-->
                            <!--<span class="time">昨天</span>-->
                        <!--</div>-->
                        <!--<h1>经历了中考，我决定放弃高考去留学，但我不后悔!</h1>-->
                        <!--<div class="picklist clear">-->
                            <!--<img src="/Public/Wap/images/index_pic03.png"/>-->
                            <!--<img src="/Public/Wap/images/index_pic04.png"/>-->
                            <!--<img src="/Public/Wap/images/index_pic05.png"/>-->
                        <!--</div>-->
                        <!--<div class="bot clear">-->
                            <!--<div class="left">-->
                                <!--<div class="act">风景</div>-->
                                <!--<span class="look">1234</span>-->
                            <!--</div>-->
                            <!--<div class="right">-->
                                <!--<div class="pl">-->
                                    <!--<img src="/Public/Wap/images/index_pinglun.png"/>-->
                                    <!--<span>1234</span>-->
                                <!--</div>-->
                                <!--<div class="fenxiang">-->
                                    <!--<img src="/Public/Wap/images/share_large.png"/>-->
                                    <!--<span>1234</span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
                <!--&lt;!&ndash;单张图&ndash;&gt;-->
                <!--<li>-->
                    <!--<a href="/index.php/Home/Topic/subdetails?id=<?php echo ($val["id"]); ?>">-->
                        <!--<div class="user clear">-->
                            <!--<img class="head" src="/Public/Wap/images/touxiang02.png"/>-->
                            <!--<span class="name">黑黑</span>-->
                            <!--<span class="time"><?php echo ($val["time"]); ?></span>-->
                        <!--</div>-->
                        <!--<h1><?php echo ($val["title"]); ?></h1>-->
                        <!--<div class="pic">-->
                            <!--<img src="/Public/images/topic/<?php echo ($val["image"]); ?>"/>-->
                        <!--</div>-->
                        <!--<div class="bot clear">-->
                            <!--<div class="left">-->
                                <!--<div class="act"><?php echo ($val["classify"]); ?></div>-->
                                <!--<span class="look">1234</span>-->
                            <!--</div>-->
                            <!--<div class="right">-->
                                <!--<div class="pl">-->
                                    <!--<img src="/Public/Wap/images/index_pinglun.png"/>-->
                                    <!--<span>1234</span>-->
                                <!--</div>-->
                                <!--<div class="fenxiang">-->
                                    <!--<img src="/Public/Wap/images/share_large.png"/>-->
                                    <!--<span>1234</span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
            </ul>
        </div>
        <div class="huodong">
            <p class="null">暂无发布的活动</p>
            <ul>
                <li class="clear">
                    <a href="javascript:;">
                        <div class="title clear inner">
                            <h1>阿斯达所多撒大所大撒所多多撒撒多撒大所多多撒</h1>
                            <span>6.26</span>
                        </div>
                        <div class="content clear">
                            <div class="pic inner">
                                <img src="/Public/images/activity/58ef1d494094d.png"/>
                            </div>
                            <div class="detaile">
                                <div class="time clear">
                                    <img src="/Public/Wap/images/time_small.png"/>
                                    <span>2016-11-11</span>
                                </div>
                                <div class="address clear">
                                    <img src="/Public/Wap/images/address_small.png"/>
                                    <span>阿斯达所付付付付</span>
                                </div>
                                <div class="money clear">
                                    <span>￥  60元</span>/人
                                </div>
                                <div class="state clear">
                                    <div class="type">已结束</div>
                                    <div class="people_num">
                                        <img src="/Public/Wap/images/total_small.png"/>
                                        <span>12321</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<script>
    var foll = "<?php echo ($info[focus]); ?>";
    var page = 0;
    var target = true;
    var id = getQueryString("id");
    function getQueryString(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) return unescape(r[2]);
        return null;
    }
    //登录状态以及关注状态
    if($("input.user_type").val()==""){
        $(".guanzhu").click(function () {
            alert("请先登录");
            window.location.href="/index.php/Home/login/index";
        })
    }else if($("input.user_type").val()!=""){
        if(foll == 1){
            $(".guanzhu").css("backgroundColor","#ff9911");
            $(".guanzhu span").text("已关注");
            $(".guanzhu").click(function () {
                return false
            })
        }else {
            $(".guanzhu").click(function () {
                $.ajax({
                    url:"focus",
                    type:"POST",
                    data:{
                        uid:id
                    },
                    success:function (data) {
                        if(data == 1){
                            $(".guanzhu").css("backgroundColor","#ff9911");
                            $(".guanzhu span").text("已关注");
                        }
                    }
                })
            })
        }
    }
    $(".tab li").click(function () {
        var text = $(this).text();
        var index = $(this).index();
        if(text == "介绍"){
            return
        }else {
            $.ajax({
                url:"userdatalist",
                type:"POST",
                data:{
                    uid:id,
                    name:text
                },
                success:function (data) {
                    console.log(data);
                    if(text == "文章" && data != ""){
                        $(".list>div").eq(index).find(".null").hide();
                        var html="";
                        for(var i=0; i<data.length; i++){
                            if(data[i].img1 == null && data[i].img2 == null){
                                html+=  "<li class='headlines clear'>" +
                                            "<a href='/index.php/Home/Literature/details?id="+data[i].id+"'>" +
                                                "<div class='l_box clear'>" +
                                                    "<h1>"+data[i].title+"</h1>"+
                                                    "<div class='pruduct'>" +
                                                        "<span class='act'>"+data[i].classify+"</span>"+
                                                        "<div class='comment'>" +
                                                            "<img src='/Public/Wap/images/index_pinglun.png'/> "+
                                                            "<span>"+data[i].click+"</span>"+
                                                        "</div>"+
                                                        "<div class='good'>" +
                                                            "<img src='/Public/Wap/images/index_dianzan.png'/> "+
                                                            "<span>"+data[i].click+"</span>"+
                                                        "</div>"+
                                                    "</div>"+
                                                "</div>"+
                                                "<div class='r_box clear'>" +
                                                    "<img src='/Public/Wap/images/"+data[i].img0+"'/> "+
                                                "</div>"+
                                            "</a> "+
                                        "</li>"
                            }else if(data[i].img1 != null && data[i].img2 != null){
                                html+=  "<li class='picklist clear'>" +
                                            "<a href='/index.php/Home/Literature/details?id="+data[i].id+"'>" +
                                                "<h1>"+data[i].title+"</h1>"+
                                                "<div class='pickbox clear'>" +
                                                    "<img src='/Public/Wap/images/"+data[i].img0+"'/>"+
                                                    "<img src='/Public/Wap/images/"+data[i].img1+"'/>"+
                                                    "<img src='/Public/Wap/images/"+data[i].img2+"'/>"+
                                                "</div>"+
                                                "<div class='pruduct'>" +
                                                    "<span class='act'>"+data[i].classify+"</span>"+
                                                    "<div class='comment'>" +
                                                        "<img src='/Public/Wap/images/index_pinglun.png'/> "+
                                                        "<span>"+data[i].click+"</span>"+
                                                    "</div>"+
                                                    "<div class='good'>" +
                                                        "<img src='/Public/Wap/images/index_dianzan.png'/> "+
                                                        "<span>"+data[i].click+"</span>"+
                                                    "</div>"+
                                                "</div>"+
                                            "</a>"+
                                        "</li>"
                            }
                        }
                        $(".list>div").eq(index).find("ul").html(html)
                    }else if(text == "文章" && data == ""){
                        $(".list>div").eq(index).find(".null").show();
                    }else if(text == "话题" && data != ""){
                        $(".list>div").eq(index).find(".null").hide();
                        var html = "";
                        for(var i=0; i<data.length;i++){
                            if(data[i].image1 == null && data[i].image2 == null){
                                html+=  "<li>" +
                                            "<a href='/index.php/Home/Topic/subdetails?id="+data[i].id+"'>" +
                                                "<div class='user clear'>" +
                                                    "<img class='head' src='<?php echo ($info[image]); ?>' />"+
                                                    "<span class='name'><?php echo ($info[username]); ?></span>"+
                                                    "<span class='time'>"+data[i].time+"</span>"+
                                                "</div>"+
                                                "<h1>"+data[i].title+"</h1>"+
                                                "<div class='pic'>" +
                                                    "<img src='/Public/Wap/images/"+data[i].image+"'/>"+
                                                "</div>"+
                                                "<div class='bot clear'>" +
                                                    "<div class='left'>" +
                                                        "<div class='act'>"+data[i].classify+"</div>"+
                                                        "<span class='look'>"+data[i].statu+"</span>"+
                                                    "</div>"+
                                                    "<div class='right'>" +
                                                        "<div class='pl'>" +
                                                            "<img src='/Public/Wap/images/index_pinglun.png'/>"+
                                                            "<span>"+data[i].statu+"</span>"+
                                                        "</div>"+
                                                        "<div class='fenxiang'>" +
                                                            "<img src='/Public/Wap/images/share_large.png'/>"+
                                                            "<span>"+data[i].statu+"</span>"+
                                                        "</div>"+
                                                    "</div>"+
                                                "</div>"+
                                            "</a> "+
                                        "</li>"
                            }else if(data[i].image1 != null && data[i].image2 != null){
                                html+=  "<li>" +
                                            "<a href='/index.php/Home/Topic/subdetails?id="+data[i].id+"'>" +
                                                "<div class='user clear'>" +
                                                    "<img class='head' src='<?php echo ($info[image]); ?>' />"+
                                                    "<span class='name'><?php echo ($info[username]); ?></span>"+
                                                    "<span class='time'>"+data[i].time+"</span>"+
                                                "</div>"+
                                                "<h1>"+data[i].title+"</h1>"+
                                                "<div class='picklist clear'>" +
                                                    "<img src='/Public/Wap/images/"+data[i].image+"'/> "+
                                                    "<img src='/Public/Wap/images/"+data[i].image1+"'/> "+
                                                    "<img src='/Public/Wap/images/"+data[i].image2+"'/> "+
                                                "</div>"+
                                                "<div class='bot clear'>" +
                                                    "<div class='left'>" +
                                                        "<div class='act'>"+data[i].classify+"</div>"+
                                                        "<span class='look'>"+data[i].statu+"</span>"+
                                                    "</div>"+
                                                    "<div class='right'>" +
                                                        "<div class='pl'>" +
                                                            "<img src='/Public/Wap/images/index_pinglun.png'/>"+
                                                            "<span>"+data[i].statu+"</span>"+
                                                        "</div>"+
                                                        "<div class='fenxiang'>" +
                                                            "<img src='/Public/Wap/images/share_large.png'/>"+
                                                            "<span>"+data[i].statu+"</span>"+
                                                        "</div>"+
                                                    "</div>"+
                                                "</div>"+
                                            "</a>"+
                                        "</li>"
                            }
                        }
                        $(".list>div").eq(index).find("ul").html(html)
                    }else if(text == "话题" && data == ""){
                        $(".list>div").eq(index).find(".null").show();
                    }else if(text == "活动" && data != ""){
                        var html="";
                        for(var i=0;i<data.length;i++){
                            var time = data[i].uptime.substring(0,10);
                            var deadline = data[i].deadline.substring(0,10);
                            html+=  "<li>" +
                                        "<a href='/index.php/Home/Activity/details?id="+data[i].id+"'>" +
                                            "<div class='title clear inner'>" +
                                                "<h1>"+data[i].title+"</h1>"+
                                                "<span>"+time+"</span>"+
                                            "</div>"+
                                            "<div class='content clear'>" +
                                                "<div class='pic inner'>" +
                                                    "<img src='/Public/images/activity/"+data[i].img+"'/>'"+
                                                "</div>"+
                                                "<div class='detaile'>" +
                                                    "<div class='time clear'>" +
                                                        "<img src='/Public/Wap/images/time_small.png'/>"+
                                                        "<span>"+deadline+"</span>"+
                                                    "</div>"+
                                                    "<div class='address clear'>" +
                                                        "<img src='/Public/Wap/images/address_small.png'/>"+
                                                        "<span>"+data[i].address+"</span>"+
                                                    "</div>"+
                                                    "<div class='money clear'>" +
                                                        "<span>￥&nbsp&nbsp"+data[i].price+"元</span>/人"+
                                                    "</div>"+
                                                    "<div class='state clear'>" +
                                                        "<div class='type'>没这个</div>"+
                                                        "<div class='people_num'>" +
                                                            "<img src='/Public/Wap/images/total_small.png'/>"+
                                                            "<span>"+data[i].num+"</span>"+
                                                        "</div>"+
                                                    "</div>"+
                                                "</div>"+
                                            "</div>"+
                                        "</a>"+
                                    "</li>"
                        }
                        $(".list>div").eq(index).find("ul").html(html)
                    }else if(text == "活动" && data == ""){
                        $(".list>div").eq(index).find(".null").show();
                    }
                }
            })
        }
    });

</script>
</body>
</html>