<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="/Public/Wap/css/style.css" rel="stylesheet">
    <link href="/Public/Wap/css/normalize3.0.2.min.css" rel="stylesheet"/>
    <link href="/Public/Wap/css/mobiscroll.css" rel="stylesheet"/>
    <link href="/Public/Wap/css/mobiscroll_date.css" rel="stylesheet"/>
    <link href="/Public/Wap/css/jquery-weui.min.css" rel="stylesheet"/>
    <link href="/Public/Wap/css/fabuhuodong.css" rel="stylesheet">
    <script src="/Public/Wap/js/jquery.js"></script>
    <script src="/Public/Wap/js/style.js"></script>
    <script src="/Public/Wap/js/mobiscroll_date.js" charset="gb2312"></script>
    <script src="/Public/Wap/js/mobiscroll.js"></script>
    <script src="/Public/Wap/js/jquery-weui.min.js"></script>
    <script src="/Public/Wap/js/city-picker.min.js"></script>
    <script src="/Public/Wap/js/uploadPreview.js"></script>
    <title>龙子网</title>
</head>
<body>
<!--占位用-->
<div class="box"></div>
<div class="index_header">
    <a href="javascript:history.go(-1);" class="left"><img src="/Public/Wap/images/back.png"/></a>
    发布活动
    <a href="javascript:;" class="menu right"><img src="/Public/Wap/images/fenlei.png"/></a>
</div>
<!--菜单页-->
 <div>
    
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
</div>
<form class="form" enctype="multipart/form-data">
    <!--添加封面-->
    <div class="file inner" id="imgdiv">
        <span>+ 添加封面</span>
        <input id="up_img" name="fengmian_img" type="file" accept="image/*"/>
        <img id="imgShow" src="/Public/Wap/images/touming.png"/>
    </div>
    <script>
        new uploadPreview({ UpBtn: "up_img", DivShow: "imgdiv", ImgShow: "imgShow" });
    </script>
    <!--投票主题-->
    <div class="zhuti">
        活动主题:<input name="title" type="text">
    </div>
    <!--投票类型-->
    <div class="leixing">
        投票类型:
        <select name="type">
            <option selected="selected">请选择活动类型</option>
            <option>体育活动</option>
            <option>文学活动</option>
            <option>娱乐活动</option>
            <option>公益活动</option>
            <option>户外活动</option>
        </select>
    </div>
    <!--时间插件-->
    <div class="timebox">
        <section>
            <span>活动开始时间：</span>
            <input type="text" name="begin" class="begin" readonly />
        </section>
        <section>
            <span>活动结束时间：</span>
            <input type="text" name="end" class="end" readonly />
        </section>
        <section>
            <span>报名截止时间：</span>
            <input type="text" name="timeover" class="timeover" readonly />
        </section>
        <script>
                var currYear = (new Date()).getFullYear();
                var opt={};
                opt.date = {preset : 'datetime'};
                opt.datetime = {preset : 'datetime'};
                opt.time = {preset : 'time'};
                opt.default = {
                    theme: 'android-ics', //皮肤样式
                    display: 'bottom', //显示方式
                    mode: 'scroller', //日期选择模式
                    dateFormat: 'yyyy-mm-dd',
                    lang: 'zh',
                    showNow: false,
                    nowText: "今天",
                    startYear: currYear, //开始年份
                    endYear: currYear + 10 //结束年份
                };
                $(".begin").mobiscroll($.extend(opt['date'], opt['default']));
                $(".end").mobiscroll($.extend(opt['date'], opt['default']));
                $(".timeover").mobiscroll($.extend(opt['date'], opt['default']));
        </script>
    </div>
    <!--活动地点-->
    <div class="place">
        <span>活动地点:<input id="city" name="city" type="text"></span>
        <span>详细地址:<input class="citydetails" name="citydetails" type="text"></span>
    </div>
    <script>
        $("#city").cityPicker({
            title: "请选择活动地点"
        });
    </script>
    <!--投票详情-->
    <div class="xiangqing">
        <span>活动详情：</span>
        <textarea name="content"></textarea>
    </div>
    <div class="list">
        <span>活动费用:<input type="text" name="money" class="money"></span>
        <span>活动人数:<input type="text" name="maxpeople" class="maxpeople"></span>
        <span>活动主办方:<input type="text" name="master" class="master"></span>
        <span>主办方联系方式:<input type="number" name="phone" class="phone"></span>
    </div>
    <div class="go">
        <div class="look">预 览</div>
        <div class="upload">发 布</div>
    </div>
</form>
<script>
    $(".go .upload").click(function () {
        var phone =/^1[0-9]{10}$/;
        if($("#up_img").val() == ""){
            alert("请添加封面图片");
            return false
        }else if($(".zhuti input").val() == ""){
            alert("请填写活动标题");
            return false
        }else if($("select").val() == "请选择活动类型"){
            alert("请选择活动类型");
            return false
        }else if($(".begin").val() == ""){
            alert("请选择活动开始时间");
            return false
        }else if($(".end").val() == ""){
            alert("请选择活动结束时间");
            return false
        }else if($(".timeover").val() == ""){
            alert("请选择报名截止时间");
            return false
        }else if($("#city").val() == ""){
            alert("请选择活动地点");
            return false
        }else if($(".citydetails").val() == ""){
            alert("请填写详细地址");
            return false
        }else if($(".xiangqing textarea").val() == ""){
            alert("请填写活动详情");
            return false
        }else if($(".money").val() == ""){
            alert("请填写报名费用，若无报名费用请填写0");
            return false
        }else if($(".maxpeople").val() == ""){
            alert("请设置报名人数");
            return false
        }else if($(".master").val() == ""){
            alert("请填写活动主办方");
            return false
        }else if($("input[name='phone']").val() == ""){
            alert("请填写联系方式");
            return false
        }else if(!phone.test($("input[name='phone']").val())){
            alert("请填写正确的联系方式");
            return false
        }else {
            var formData = new FormData($(".form")[0]);
            $.ajax({
                url: "hdupload",
                type: "POST",
                data: formData,
                contentType: false, //必须false才会避开jQuery对 formdata 的默认处理 XMLHttpRequest会对 formdata 进行正确的处理
                processData: false, //必须false才会自动加上正确的Content-Type
                success: function (data) {
                    console.log(data)
                }
            });
        }
    })
</script>
</body>
</html>