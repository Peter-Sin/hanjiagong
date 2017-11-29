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
    <link href="/Public/Wap/css/activitydetails.css" rel="stylesheet">
    <script src="/Public/Wap/js/jquery.js"></script>
    <script src="/Public/Wap/js/style.js"></script>
    <script src="/Public/Wap/js/tab.js"></script>
    <script src="/Public/Wap/js/nativeShare.js"></script>
    <title>活动</title>
</head>
<body>
<div class="box"></div>
<div class="index_header">
    <a href="javascript:history.go(-1);" class="left"><img src="/Public/Wap/images/back.png"/></a>
    活动详情
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
<!--活动介绍-->
<div class="activity inner">
    <div class="pic">
        <img class="bg" src="/Public/images/activity/<?php echo ($list[0][img]); ?>"/>
        <img class="he" src="/Public/Wap/images/load.png"/>
        <div class="modal">
            <a href="javascript:;" id="getdata">
                <img src="/Public/Wap/images/touxiang.png"/>
                <span class="user_name">龙子网龙龙</span>
                <span class="time"><?php echo ($list[0][uptime]); ?>发布</span>
            </a>
        </div>
    </div>
    <script>
        var userid = '<?php echo ($list[0][uid]); ?>';
        $("#getdata").attr("href","/index.php/Home/Personal/userdata?id="+userid)
    </script>
    <h1><?php echo ($list[0][title]); ?></h1>
    <div class="time clear"><img src="/Public/Wap/images/time_small.png"/><span><?php echo ($list[0][act_time]); ?></span> </div>
    <div class="address clear"><img src="/Public/Wap/images/address_small.png"/><span><?php echo ($list[0][address]); ?></span></div>
    <div class="money">￥<span><?php echo ($list[0][price]); ?></span>元/人</div>
    <div class="type clear">
        <div class="act"><?php echo ($list[0][act_fl]); ?>活动</div>
        <div class="people clear"><img src="/Public/Wap/images/total_small.png"/><span>1234</span></div>
        <div class="look clear"><img src="/Public/Wap/images/view.png"/><span>1234</span></div>
    </div>
</div>
<div class="tabbox">
    <div class="tab clear">
        <ul class="clear">
            <li class="active">简介</li>
            <li>主办方</li>
            <li>报名通道</li>
            <li>评论</li>
        </ul>
    </div>
    <div class="list inner">
        <div class="jianjie ">
            <div class="title">
                <img src="/Public/Wap/images/tittle_tag.png"/>
                <span>活动简介</span>
            </div>
            <div class="text">
                <?php echo ($list[0][xiangqing]); ?>
            </div>
            <!-- <div class="title">
                <img src="/Public/Wap/images/tittle_tag.png"/>
                <span>报名条件</span>
            </div>
            <div class="text">
                <h5>60公里魔山越野赛组</h5>
                <p>A、比赛者须在2017年9月9日前年满18周岁，不超过65周岁;</p>
                <p>B、以下疾病患者不宜参加本次赛事：先天性心脏病和风湿性心脏病患者/高血压和脑血管疾病患者/心肌炎和其它心脏病患者/冠状动脉病患者和严重心率不齐者/糖尿病患者/其他不适合运动的疾病患者;</p>
                <p>C、参赛经历：选手需向组委会提交最近一年内一次全程马拉松赛（42.195公里）或其他同等级别赛事的完赛成绩证书，并保证成绩在4小时（含）以内。</p>
                <h5>30公里火山越野跑组</h5>
                <p>A、比赛者须在2017年9月9日前年满18周岁，不超过65周岁;</p>
                <p>B、以下疾病患者不宜参加本次赛事：先天性心脏病和风湿性心脏病患者/高血压和脑血管疾病患者/心肌炎和其它心脏病患者/冠状动脉病患者和严重心率不齐者/糖尿病患者/其他不适合运动的疾病患者;</p>
            </div> -->
        </div>
        <div class="zhuban">
            <div class="user clear">
                <img class="bg_pic" src="/Public/Wap/images/zanzhu_bg.jpg"/>
                <img class="head" src="/Public/Wap/images/zanzhu_logo.png"/>
                <span>XXX科技有限公司</span>
            </div>
            <div class="title">
                <img src="/Public/Wap/images/tittle_tag.png"/>
                <span>简介</span>
            </div>
            <div class="text">
                <p>比赛者须在2017年9月9日前年满18周岁，比赛者须在2017年9月9日前年满18周岁，比赛者须在2017年9月9日前年满18周岁，比赛者须在2017年9月9日前年满18周岁，比赛者须在2017年9月9日前年满18周岁，比赛者须在2017年9月9日前年满18周岁，比赛者须在2017年9月9日前年满18周岁，比赛者须在2017年9月9日前年满18周岁。</p>
            </div>
            <div class="other">
                <div class="title">
                    <img src="/Public/Wap/images/tittle_tag.png"/>
                    <span>其他活动</span>
                </div>
                <ul>
                    <li class="activity">
                        <div class="pic">
                            <img class="bg" src="/Public/Wap/images/activity_bg.png"/>
                            <img class="he" src="/Public/Wap/images/load.png"/>
                            <div class="modal">
                                <img src="/Public/Wap/images/touxiang.png"/>
                                <span class="user_name">龙子网龙龙</span>
                                <span class="time">2017.06.06发布</span>
                            </div>
                        </div>
                        <h1>2017龙子网首届河南省大学生马拉松赛</h1>
                        <div class="type clear">
                            <div class="act">户外活动</div>
                            <div class="people clear"><img src="/Public/Wap/images/total_small.png"/><span>1234</span></div>
                            <div class="look clear"><img src="/Public/Wap/images/view.png"/><span>1234</span></div>
                        </div>
                    </li>
                    <li class="activity">
                        <div class="pic">
                            <img class="bg" src="/Public/Wap/images/activity_bg.png"/>
                            <img class="he" src="/Public/Wap/images/load.png"/>
                            <div class="modal">
                                <img src="/Public/Wap/images/touxiang.png"/>
                                <span class="user_name">龙子网龙龙</span>
                                <span class="time">2017.06.06发布</span>
                            </div>
                        </div>
                        <h1>2017龙子网首届河南省大学生马拉松赛</h1>
                        <div class="type clear">
                            <div class="act">户外活动</div>
                            <div class="people clear"><img src="/Public/Wap/images/total_small.png"/><span>1234</span></div>
                            <div class="look clear"><img src="/Public/Wap/images/view.png"/><span>1234</span></div>
                        </div>
                    </li>
                    <li class="activity">
                        <div class="pic">
                            <img class="bg" src="/Public/Wap/images/activity_bg.png"/>
                            <img class="he" src="/Public/Wap/images/load.png"/>
                            <div class="modal">
                                <img src="/Public/Wap/images/touxiang.png"/>
                                <span class="user_name">龙子网龙龙</span>
                                <span class="time">2017.06.06发布</span>
                            </div>
                        </div>
                        <h1>2017龙子网首届河南省大学生马拉松赛</h1>
                        <div class="type clear">
                            <div class="act">户外活动</div>
                            <div class="people clear"><img src="/Public/Wap/images/total_small.png"/><span>1234</span></div>
                            <div class="look clear"><img src="/Public/Wap/images/view.png"/><span>1234</span></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="baoming">
            <form id="mes">
                <div class="name">
                    <div class="clear">
                        <span>姓名：</span>
                        <input type="text" value="" name="name">
                    </div>
                    <div class="error clear">
                        <p>*请输入姓名</p>
                    </div>
                </div>
                <div class="sex">
                    <div class="clear">
                        <span>性别：</span>
                        <select name="sex">
                            <option>请选择性别</option>
                            <option>男</option>
                            <option>女</option>
                        </select>
                    </div>
                    <div class="error clear">
                        <p>*请选择性别</p>
                    </div>
                </div>
                <div class="id">
                    <div class="clear">
                        <span>身份证号：</span>
                        <input type="text" value="" name="id">
                    </div>
                    <div class="error clear">
                        <p>*请输入身份证号</p>
                    </div>
                </div>
                <div class="phone">
                    <div class="clear">
                        <span>电话：</span>
                        <input type="text" value="" name="phone">
                    </div>
                    <div class="error clear">
                        <p>*请输入正确电话号码</p>
                    </div>
                </div>
                <div class="school">
                    <div class="clear">
                        <span>学校：</span>
                        <input type="text" value="" name="school">
                    </div>
                    <div class="error clear">
                        <p>*请输入学校</p>
                    </div>
                </div>
            </form>
            <div class="xieyi clear">
                <input type="checkbox">
                <span>我同意《龙子网活动协议》</span>
            </div>
            <input type="button" value="提交信息">
        </div>
        <div class="pinglun">
            <!--WAP版-->
            <div id="SOHUCS" sid="请将此处替换为配置SourceID的语句" ></div>
            <script id="changyan_mobile_js" charset="utf-8" type="text/javascript"
                    src="https://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=cytbnQIuW&conf=prod_fa6758b216b02b38b4c2eb9f555801d9">
            </script>
            <script>
                function getQueryString(name) {
                    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
                    var r = window.location.search.substr(1).match(reg);
                    if (r != null) return unescape(r[2]);
                    return null;
                }
                var SourceID= getQueryString("id");
                $("#SOHUCS").attr("sid","activity"+SourceID)
            </script>
        </div>
    </div>
</div>
<!--底部按钮-->
<div class="bot_menu">
    <ul>
        <li class="fenxiang" id="nativeShare">
            <span>分享</span>
        </li>
        <li class="pinglun">
            <img src="/Public/Wap/images/index_pinglun.png"/>
            <span>评论</span>
        </li>
        <li class="fabu">
            <a href="/index.php/Home/Release/fabuenter">
                <img src="/Public/Wap/images/publish_large.png"/>
                <span>发布</span>
            </a>
        </li>
        <li class="baoming active">
            <img src="/Public/Wap/images/total_large.png"/>
            <span>报名</span>
        </li>
    </ul>
</div>
<!--确认框-->
<div class="popup">
    <div class="sure">
        <div class="title">
            <span>确认报名信息</span>
            <span class="close1">X</span>
        </div>
        <div class="content">
            <div class="name"><span class="head">姓名：</span><span class="info">啊啊</span></div>
            <div class="sex"><span class="head">性别：</span><span class="info">男</span></div>
            <div class="id"><span class="head">身份证号：</span><span class="info">410603199502111112</span></div>
            <div class="phone"><span class="head">电话：</span><span class="info">15152260897</span></div>
            <div class="school"><span class="head">学校：</span><span class="info">阿斯达所打算大所大大多撒多端端</span></div>
        </div>
        <input type="button" value="下一步">
    </div>
</div>
<!--支付框-->
<div class="gopay">
    <div class="box"></div>
    <div class="activity inner">
        <h1>2017龙子网首届河南省大学生马拉松赛</h1>
        <div class="time clear"><img src="../images/time_small.png"/><span>2016-11-10</span> </div>
        <div class="address clear"><img src="../images/address_small.png"/><span>河南农业大学体育馆</span></div>
        <div class="money">￥<span><?php echo ($list[0][price]); ?></span>元</div>
    </div>
    <div class="pay_type">
        <div class="alipay clear active">
            <img src="/Public/Wap/images/ali_pay.png"/>
            <span></span>
        </div>
        <div class="wechat clear">
            <img src="/Public/Wap/images/wechat_pay.png"/>
            <span></span>
        </div>
    </div>
    <div class="pay clear">
        <div class="much">
            共计：<span><?php echo ($list[0][price]); ?></span>元
        </div>
        <a href="javascript:;">马上支付</a>
    </div>
</div>
<!--底部占位-->
<div class="bot_box"><?php echo ($_SESSION['id']); ?></div>
<script>
    var target = true; //数据开关
    var id = true;
    var sex =true;
    var ok = true;
    var phone = true;
    var data={};
        function getQueryString(name) {
            var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
            var r = window.location.search.substr(1).match(reg);
            if (r != null) return unescape(r[2]);
            return null;
        }
    $("#mes input").on("change", function () {
        $(this).parent().siblings().css("opacity", 0)
    });
    $("#mes select").on("change", function () {
        if($("#mes select").val() =="男" || $("#mes select").val() =="女")
        $(this).parent().siblings().css("opacity", 0);
    });
    function getFormData(selector) {
        //获取表单内的值
        var dataArray = $(selector).serializeArray();
        var formData = {};
        dataArray.forEach(function (value, index) {
            formData[value.name] = value.value;
            if (!formData[value.name]) {
                formData[value.name] = value.value;
            }
        });
        return formData;
    }
    $("#mes .id input").blur(function () {
        $.ajax({
            url: "check_idcode",
            type: "POST",
            data: {
                id: $("#mes .id input").val()
            },
            success: function (data) {
                if(data == 12){
                    id = false;
                    $("#mes .id input").parent().siblings().css("opacity",1)
                }else {
                    id = true;
                }
            }
        });
    });
    $(".baoming>input").click(function () {
        var state = $("input.user_type").val();
        if(state == ""){
            alert("请先登录");
            window.location.href="http://www.cusdc.com/index.php/Home/Login/index";
            return
        }
        var re = /^1\d{10}$/;
        target = true;
        //如果是空的话显示错误
        var n = $("#mes input").length;
        for (var i = 0; i < n; i++) {
            if ($("#mes input").eq(i).val() == "") {
                $("#mes input").eq(i).parent().siblings().css("opacity", 1);
                target = false;
            }
        }
        if($("select").val() == "请选择性别"){
            sex =false;
            $("#mes .sex select").parent().siblings().css("opacity",1);
        }else {
            sex =true
        }
        $.ajax({
            url: "check_idcode",
            type: "POST",
            async: false,
            data: {
                id: $("#mes .id input").val()
            },
            success: function (data) {
                if(data == 12){
                    id = false;
                    $("#mes .id input").parent().siblings().css("opacity",1);
                }else {
                    id = true;
                }
            }
        });
        if (!re.test($("#mes input[name='phone']").val())) {
            $("#mes input[name='phone']").parent().siblings().css("opacity",1);
            phone = false
        }else {
            phone = true;
        }
        //是否同意参赛协议
        var ms = $(".xieyi input").prop('checked');
        if (ms == false) {
            alert("未同意参赛协议不允许报名");
            ok = false;
        } else {
            ok = true
        }
        //都验证没问题的时候
        if (target && sex && ok && id && phone) {
             data = getFormData($("#mes"));
            $(".content .name .info").text(data.name);
            $(".content .sex .info").text(data.sex);
            $(".content .id .info").text(data.id);
            $(".content .phone .info").text(data.phone);
            $(".content .school .info").text(data.school);
            $(".popup").show();
        }
    });
    $(".popup .close1").click(function(){
        $(".popup").hide();
    });
    $(".popup input").click(function(){
        var money =$(".pay .much span").text();
        var user_id = $(".bot_box").text();
        var url_id = getQueryString("id");
        data.act_id=url_id;
        data.money=money;
        data.userid = user_id;
        console.log(data);
        $.ajax({
            url:"enroll",
            type:"POST",
            data:data,
            success:function(data){
                console.log(data);
                if(data.num == 1){
                    if(data.iswx == 0){
                        $(".gopay .pay_type .alipay").show();
                        $(".pay a").attr("href","/index.php/Home/Pay/doalipay?uuid="+data.order);
                    }else {
                        $(".gopay .pay_type .wechat").show();
                        $(".pay a").attr("href","/index.php/Home/Pay/dowxpay?uuid="+data.order);
                    }
                }else{
                    alert("提交失败，请重试");
                }
            }
        });
        $(".popup").hide();
        $(".gopay").show();
    });
</script>
<script>
    //分享
    var config = {
        url:'21321',
        title:'21321',
        desc:'21321',
        img:'21231321',
        img_title:'32132123',
        from:'321321'
    };
    var share_obj = new nativeShare('nativeShare',config);
    $("#nativeShare").prepend('<img src="/Public/Wap/images/share_large.png"/>');
    //评论按钮
    $(".bot_menu .pinglun").click(function () {
        $(".tab ul li").eq(3).click()
    });
    $(".bot_menu .fabu").click(function () {
        window.locating.hrfe="http://www.cusdc.com/index.php/Home"
    });
    $(".bot_menu .baoming").click(function () {
        $(".tab ul li").eq(2).click()
    })
</script>
</body>
</html>