<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="/Public/Wap/css/normalize3.0.2.min.css" rel="stylesheet"/>
    <link href="/Public/Wap/css/mobiscroll.css" rel="stylesheet"/>
    <link href="/Public/Wap/css/mobiscroll_date.css" rel="stylesheet"/>
    <link href="/Public/Wap/css/jquery-weui.min.css" rel="stylesheet"/>
    <link href="/Public/Wap/css/style.css" rel="stylesheet">
    <link href="/Public/Wap/css/userData.css" rel="stylesheet">
    <script src="/Public/Wap/js/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="/Public/Wap/js/style.js"></script>
    <script src="/Public/Wap/js/iscroll-zoom.js"></script>
    <script src="/Public/Wap/js/hammer.js"></script>
    <script src="/Public/Wap/js/jquery.photoClip.js"></script>
    <script src="/Public/Wap/js/mobiscroll_date.js" charset="gb2312"></script>
    <script src="/Public/Wap/js/mobiscroll.js"></script>
    <script src="/Public/Wap/js/jquery-weui.min.js"></script>
    <script src="/Public/Wap/js/city-picker.min.js"></script>
    <script src="/Public/Wap/js/uploadPreview.js"></script>
    <title>龙子网</title>
    <style>
        input{
            outline: none;
        }
        .dw-persp, .dwo{
            position: fixed;
        }
        .error {width: 21.5rem;height: 2.8rem;line-height: 2.8rem;background: #000;font-size: 1rem;color: #fff;border-radius: 5px;opacity: 0.5;text-align: center;position: absolute;left: 12.2%;top: 9rem;display: none;}
        #clipArea_box{width:100%;height:100%;position:absolute;top:0;background-color:#f5f5f5;display:none;padding-top:100px}
        #clipArea{height:300px}
        #file{display:none}
        #clipBtn,#file{margin:20px}
        #upload span{position:relative}
        #view{width:40px;height:40px;display:none}
        #clipcancel{background-color:#f08700;color:#fff;border-width:0;border-radius:4px;padding:3px 20px}
        #clipBtn{background-color:#f08700;color:#fff;border-width:0;border-radius:4px;padding:3px 20px}
        .tou{text-align:center}
        .sex_modal{  width: 100%;  height: 100%;  position: fixed;  background: rgba(0,0,0,.5);  z-index: 99999;display: none;  }
        .sex_modal .box{position: absolute;  left: 11%;  top: 25%;  background: #fff;  width: 21rem;  height: 10rem;  border-radius: 10px; }
        .sex_modal .title{  width: 100%;  height: 2rem;  line-height: 2rem;  text-align: center;  color: #000;  }
        .sex_modal .boy ,.sex_modal .girl{  width: 100%;  height: 4rem;  line-height: 4rem;  color: #333; }
        .sex_modal .sex{  margin-left: 1rem;}
        .sex_modal .act{ float: right;  width: 1rem;  height: 1rem;  display: inline-block;margin-top: 1.6rem;  margin-right: 1rem;  border-radius: 50%;  }
        .boy .act{  background: #3fafe3;  }
        .girl .act{  background: #ff9911;  }
    </style>
</head>
<body>
<div class="error"></div>
<div class="sex_modal">
    <div class="box">
        <div class="title">选择性别</div>
        <div class="boy active">
            <span class="sex">男</span>
            <span class="act"></span>
        </div>
        <div class="girl active">
            <span class="sex">女</span>
            <span class="act"></span>
        </div>
    </div>
</div>
<!--占位用-->
<div class="box"></div>
<div class="index_header">
    <a href="javascript:history.go(-1);" class="left"><img src="/Public/Wap/images/back01.png"/></a>
    个人中心
    <a href="index.html" class="menu right"><img src="/Public/Wap/images/shouye.png"/></a>
</div>
<form class="form"  enctype="multipart/form-data">
    <!--enctype="multipart/form-data"-->
    <ul class="clear">
        <li class="user_head" id="upload">
            <span>个人头像</span>
            <img src="<?php echo ($userinfo['image']); ?>"/>
        </li>
        <li class="user_bgp" id="imgdiv">
            <span>个性背景图片</span>
            <img id="imgShow" src="/Public/Wap/images/user_introduction_06.png"/>
            <input id="up_img" type="file" name="userBgp" >
        </li>
        <li>
            <span>用户名</span>
            <input type="text"  class="show" name="suerName" value="<?php echo ($userinfo['username']); ?>">
        </li>
        <li>
            <span>性别</span>
            <input type="text" readonly="readonly" class="show" name="sex" value="<?php echo ($userinfo['sex']); ?>">
        </li>
    </ul>
    <ul>
        <li>
            <span>出生日期</span>
            <input type="text" readonly="readonly" dir="rtl" class="show" name="birth" value="2016.1.1">
        </li>
        <li>
            <span>所在地区</span>
            <input type="text" readonly="readonly" class="show" name="city" value="">
        </li>

        <li>
            <span>就读大学</span>
            <input type="text"  class="show" name="school" value="<?php echo ($userinfo['school']); ?>">
        </li>
    </ul>
    <ul>
        <li>
            <span>个人简介</span>
            <input type="text"  class="show" name="intr" value="<?php echo ($userinfo['content']); ?>">
        </li>
    </ul>
    <div id="clipArea_box">
        <div id="clipArea"></div>
        <div class="tou">
            <input type="button" id="clipcancel" value="取消"/>
            <input type="button" id="clipBtn" value="确定"/>
        </div>
        <input type="file" name="userHead" id="file">
        <div id="view"></div>
    </div>
</form>
<div class="go">保 存</div>

<script type="text/javascript">
    var userName = $("input[name='suerName']").val();
    function error(str) {
        $(".error").text(str).show();
        setTimeout(function(){
            $(".error").hide()
        },3000)
    }
    //上传头像
    var h=$(window).height();
    $('#clipArea_box').attr({
        'padding-top': h*1/4
    });
    var click_this=function(event){
        $('#clipArea_box').show();
        $('#file').click();
        $("#clipArea").photoClip({
            width: 200,
            height: 200,
            file: "#file",
            view: "#view",
            ok: "#clipBtn",
            outputType: "jpg",
            strictSize: false,
            loadStart: function(file) {},
            loadComplete: function(src) {},
            loadError: function(event) {},
            clipFinish: function(dataURL) {
                //完成后执行的回调
                $('#clipArea_box').hide();
                $('#upload img').attr({
                    src: dataURL
                });
                $("#file").val(dataURL)
            }
        });
    };

    $('#upload').click(click_this);
    $('#clipcancel').click(function(event) {
        $('#clipArea_box').hide();
    });
    //选择性别
    $("input[name='sex']").click(function () {
        $(".sex_modal").show();
    });
    $(".sex_modal .active").click(function () {
        var sex = $(this).find(".sex").text();
        $("input[name='sex']").val(sex);
        $(".sex_modal").hide();
    })
    //选择城市三级联动插件的title
    $("input[name='city']").cityPicker({
        title: "请选择所在地区"
    });
    //选择时间插件
    var currYear = (new Date()).getFullYear();
    var opt={};
    opt.date = {preset : 'date'};
    opt.datetime = {preset : 'datetime'};
    opt.time = {preset : 'time'};
    opt.default = {
        theme: 'android-ics light', //皮肤样式
        display: 'bottom', //显示方式
        mode: 'scroller', //日期选择模式
        dateFormat: 'yyyy-mm-dd',
        lang: 'zh',
        showNow: true,
        nowText: "今天",
        startYear: currYear - 50, //开始年份
        endYear: currYear + 10 //结束年份
    };
    $("input[name='birth']").mobiscroll($.extend(opt['date'], opt['default']));
    //上传封面
    new uploadPreview({ UpBtn: "up_img", DivShow: "imgdiv", ImgShow: "imgShow" });
    $(".go").click(function () {
        if($("input[name='suerName']").val()== ""){
            alert("未填写用户名");
            $("input[name='suerName']").val(userName);
        }else {
            var formData = new FormData($(".form")[0]);
            $.ajax({
                url: "editimg",
                type: "POST",
                data: formData,
                contentType: false, //必须false才会避开jQuery对 formdata 的默认处理 XMLHttpRequest会对 formdata 进行正确的处理
                processData: false, //必须false才会自动加上正确的Content-Type
                success: function (data) {
                    console.log(data);
                    error("保存成功")
//                    window.history.go(-1);  //返回上一页
                }
            });
        }
    });
</script>
</body>
</html>