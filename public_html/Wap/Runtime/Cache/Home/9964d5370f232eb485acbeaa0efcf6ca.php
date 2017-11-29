<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="/Public/Wap/css/style.css" rel="stylesheet">
    <link href="/Public/Wap/css/userData.css" rel="stylesheet">
    <script src="/Public/Wap/js/jquery.js"></script>
    <script src="/Public/Wap/js/style.js"></script>
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
<form>
    <ul class="clear">
        <li class="user_head">
            <span>个人头像</span>
            <img src="<?php echo ($userinfo['image']); ?>"/>
            <input type="file" name="userHead" >
        </li>
        <li class="user_bgp">
            <span>个性背景图片</span>
            <img src="/Public/Wap/images/user_introduction_06.png"/>
            <input type="file" name="userBgp" >
        </li>
        <li>
            <span>用户名</span>
            <input type="text" readonly="readonly" class="show" name="suerName" value="<?php echo ($userinfo['username']); ?>">
        </li>
        <li>
            <span>性别</span>
            <input type="text" readonly="readonly" class="show" name="sex" value="<?php echo ($userinfo['sex']); ?>">
        </li>
    </ul>
    <ul>
        <li>
            <span>出生日期</span>
            <input type="date" dir="rtl" class="show" name="birth" value="2016.1.1">
        </li>
        <li>
            <span>所在地区</span>
            <input type="text" readonly="readonly" class="show" name="city" value="河南省 郑州市 金水区 什么什么街 什么什么路">
        </li>
        <li>
            <span>就读大学</span>
            <input type="text" readonly="readonly" class="show" name="school" value="按时大撒啊啊啊啊啊啊啊">
        </li>
    </ul>
    <ul>
        <li>
            <span>个人简介</span>
            <input type="text" readonly="readonly" class="show" name="intr" value="啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊">
        </li>
    </ul>
</form>
<div class="go">保 存</div>
</body>
</html>