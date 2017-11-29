<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="/Public/Wap/css/style.css" rel="stylesheet">
    <link href="/Public/Wap/css/userAccount.css" rel="stylesheet">
    <script src="/Public/Wap/js/jquery.js"></script>
    <script src="/Public/Wap/js/style.js"></script>
    <title>龙子网</title>
    <style>
        .yz_code input{
            width: 40%!important;
        }
    </style>
</head>
<body>
<!--占位用-->
<div class="box"></div>
<div class="index_header">
    <a href="javascript:history.go(-1);" class="left"><img src="/Public/Wap/images/back01.png"/></a>
    个人中心
    <a href="index.html" class="menu right"><img src="/Public/Wap/images/shouye.png"/></a>
</div>
<div class="content">
    <ul>
        <li class="password clear">
            <img src="/Public/Wap/images/pass.png"/>
            <span>密码</span>
            <div>修改</div>
        </li>
        <li class="phone clear">
            <img src="/Public/Wap/images/user_03.png"/>
            <span>15152260897</span>
            <div>修改</div>
        </li>
        <li class="email clear">
            <img src="/Public/Wap/images/user_16.png"/>
            <span>邮箱</span>
            <div>修改</div>
        </li>
        <li class="logout clear" style="text-align: center;">
            <span>退出登录</span>
        </li>
    </ul>
    <div>
        <span>*温馨提示：</span>
        <p>请尽早完善账户安全信息，更好地保护您的数据安全！</p>
    </div>
</div>

<div class="modal">
    <!--修改密码-->
    <div class="modifyPassword">
        <div class="title clear">
            <span class="txt">密码修改</span>
            <span class="close">X</span>
        </div>
        <form>
            <div class="oldword clear">
                <div class="clear data">
                    <img src="/Public/Wap/images/suo.png"/>
                    <input type="password" name="oldword" value="" maxlength="20" placeholder="输入旧密码">
                </div>
                <div class="error">
                    <span>密码填写错误</span>
                </div>
            </div>
            <div class="newword clear">
                <div class="clear data">
                    <img src="/Public/Wap/images/suo.png"/>
                    <input type="password" name="oldword" value="" maxlength="20" placeholder="输入新密码">
                </div>
                <div class="error">
                    <span>密码填写错误</span>
                </div>
            </div>
            <div class="sureword clear">
                <div class="clear data">
                    <img src="/Public/Wap/images/suo.png"/>
                    <input type="password" name="oldword" value="" maxlength="20" placeholder="确认密码">
                </div>
                <div class="error">
                    <span>密码填写错误</span>
                </div>
            </div>
        </form>
        <div class="go">确 定</div>
    </div>
    <!--修改手机号-->
    <div class="modifyPhone">
        <div class="title clear">
            <span class="txt">手机号码修改</span>
            <span class="close">X</span>
        </div>
            <div class="oldword clear">
                <div class="clear data">
                    <img src="/Public/Wap/images/suo.png"/>
                    <input type="password" name="oldword" value="" maxlength="20" placeholder="输入密码">
                </div>
                <div class="error">
                    <span>密码错误</span>
                </div>
            </div>
            <div class="newphone clear">
                <div class="clear data">
                    <img class="phonepic" src="/Public/Wap/images/phone.png"/>
                    <input type="tel" name="newphone" maxlength="11" value="" placeholder="输入新的手机号码">
                </div>
                <div class="error">
                    <span>请填写正确的手机号</span>
                </div>
            </div>
            <div class="yz_code clear">
                <div class="clear data">
                    <img src="/Public/Wap/images/dun.png"/>
                    <input type="tel" name="yz_code" value=""placeholder="请输入验证码">
                    <button class="getcode">获取验证码</button>
                </div>
                <div class="error">
                    <span>验证码错误</span>
                </div>
            </div>
        <div class="go">确 定</div>
    </div>
    <div class="modifyemail">
        <div class="title clear">
            <span class="txt">邮箱修改</span>
            <span class="close">X</span>
        </div>
            <div class="oldword clear">
                <div class="clear data">
                    <img src="/Public/Wap/images/suo.png"/>
                    <input type="password" name="oldword" value="" maxlength="20" placeholder="输入密码">
                </div>
                <div class="error">
                    <span>密码错误</span>
                </div>
            </div>
            <div class="newpemail clear">
                <div class="clear data">
                    <img class="email" src="/Public/Wap/images/email.png"/>
                    <input type="email" name="email" value=""placeholder="输入新的邮箱">
                </div>
                <div class="error">
                    <span>请填写正确邮箱</span>
                </div>
            </div>
        <div class="go">确 定</div>
    </div>
</div>
<script>
    var email =  /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var clock = ''; //定时器
    var nums= 60; //注册
    function doLoop() {
        nums--;
        if(nums>0){
            $(".modifyPhone .getcode").text(nums+'s后重新获取')
        }else {
            clearInterval(clock);
            $(".modifyPhone .getcode").attr("disabled",false).text("获取验证码");
            nums = 60;
        }
    }
    $(".password div").click(function () {
        $(".modal").show();
        $(".modifyPassword input").val("");
        $(".modifyPassword").show();

    });
    $(".content .phone div").click(function () {
        $(".modal").show();
        $(".modifyPhone input").val("");
        $(".modifyPhone").show();
    });
    $(".content .email div").click(function () {
        $(".modal").show();
        $(".modifyemail input").val("");
        $(".modifyemail").show();
    });
    $(".modifyPassword .close").click(function () {
        $(".modal").hide();
        $(".modifyPassword").hide();
    });
    $(".modifyPhone .close").click(function () {
        $(".modal").hide();
        $(".modifyPhone").hide();
    });
    $(".modifyemail .close").click(function () {
        $(".modal").hide();
        $(".modifyemail").hide();
    });
    //修改密码
    $(".modifyPassword .go").click(function () {
        var oldword =  $(".oldword input").val();
        var newword = $(".newword input").val();
        var sureword = $(".sureword input").val();
        if($(".modifyPassword input").val() == ""){
            alert("请确认信息填写是否完整")
        }else if(newword != sureword){
            alert("两次密码输入不相同")
        }else {
            $.ajax({
                url:"editpwd",
                type:"POST",
                data:{
                    oldword:oldword,
                    newword:newword
                },
                success:function (data) {
                    if(data == 1){
                        alert("修改成功")
                        window.location.href="/index.php/Home/Login/index"
                    }
                }
            })
        }
    });
    //获取手机验证码
    $(".modifyPhone .getcode").click(function(){
        var self = $(this);
        if($(".newphone input").val() == ""){
            alert("请输入手机号");
            return
        }else if($(".modifyPhone .oldword input").val() == ""){
            alert("请输入密码")
        } else {
            $.ajax({
                url:"tel_verify",
                type:"POST",
                data:{
                    phone:$(".newphone input").val()
                },
                success:function(data){
                    $(self).attr("disabled",true);
                    $(self).text(nums+"s后重新获取");
                    clock = setInterval(doLoop, 1000);
                    console.log(data);
                    if(data == 1){
                        alert("手机号码已经注册")
                    }else if(data == 0){
                        alert("手机号码错误")
                    }else if(data == 2){
                        alert("操作过于频繁")
                    }
                }
            })
        }
    });
    $(".modifyPhone .go").click(function () {
        if($(".modifyPhone input[name='oldword']").val() == ""){
            alert("请填写密码")
        }else if($(".modifyPhone input[name='newphone']").val() == ""){
            alert("请填写手机号")
        }else if($(".modifyPhone input[name='yz_code']").val() == ""){
            alert("请输入验证码")
        }else {
            $.ajax({
                url:"editel",
                type:"POST",
                data:{
                    password:$(".modifyPhone input[name='oldword']").val(),
                    phone:$(".modifyPhone input[name='newphone']").val(),
                    code:$(".modifyPhone input[name='yz_code']").val()
                },
                success:function (data) {
                    console.log(data);
                    if(data == 1){
                        alert("修改成功")
                    }
                }
            })
        }
    });
    $(".modifyemail .go").click(function () {
        if($(".modifyemail input[name='oldword']").val()==""){
            alert("请填写密码")
        }else if($(".modifyemail input[name='email']").val() == ""){
            alert("请填写邮箱")
        } else if(!email.test($(".modifyemail input[name='email']").val())){
            alert("请填写正确的邮箱")
        }else {
            $.ajax({
                url:"ediemail",
                type:"POST",
                data:{
                    password:$(".modifyemail input[name='oldword']").val(),
                    email:$(".modifyemail input[name='email']").val()
                },
                success:function (data) {
                    console.log(data);
                }
            })
        }
    });
    $(".logout").click(function () {
        $.ajax({
            url:"/index.php/Home/Login/logout",
            type:"GET",
            success:function (data) {
                if(data == 0){
                    alert("已退出");
                    window.location.href="/index.php/Home/Index/index"
                }
            }
        })
    })
</script>
</body>
</html>