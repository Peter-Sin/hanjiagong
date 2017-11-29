<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="/Public/Wap/css/style.css" rel="stylesheet">
    <link href="/Public/Wap/css/userEnter.css" rel="stylesheet">
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
<!--用户信息-->
<div class="user_ms">
    <div class="user_head">
        <img src="<?php echo ($userinfo['image']); ?>"/>
        <span class="user_name"><?php echo ($userinfo['username']); ?></span>
    </div>
    <div class="did clear">
        <div class="fabu">发布<span>11111</span></div>
        <div class="iconic">|</div>
        <div class="likes">关注<span>11111</span></div>
    </div>
    <div class="modify">
        <a class="clear" href="/index.php/Home/Personal/editinfo">
            <img src="/Public/Wap/images/user_base_07.png">
            <span>编辑个人资料</span>
        </a>
    </div>
</div>
<!--功能区域-->
<div class="fun">
    <div class="margin">
        <a class="clear" href="/index.php/Home/Personal/fabu"><img src="/Public/Wap/images/user_base_11.png"/><div>发布</div><span>></span></a>
        <a class="clear" href="/index.php/Home/Personal/partic"><img src="/Public/Wap/images/partici.png"/><div>参与</div><span>></span></a>
    </div>
    <div class="margin">
        <a class="clear" href="/index.php/Home/Personal/foll"><img src="/Public/Wap/images/user_base_18.png"/><div>关注<p><i></i><span>123</span>个关注</p></div><span>></span></a>
        <a class="clear" href="/index.php/Home/Personal/likes"><img src="/Public/Wap/images/user_base_20.png"/><div>点赞<p><i></i><span>123</span>个点赞</p></div><span>></span></a>
        <a class="clear" href="javascript:;"><img src="/Public/Wap/images/user_base_22.png"/><div>留言评论<p><i></i><span>123</span>条留言</p></div><span>></span></a>
        <a class="clear" href="/index.php/Home/Personal/notice"><img src="/Public/Wap/images/user_base_24.png"/><div>系统消息<p><i></i><span>123</span>条消息</p></div><span>></span></a>
    </div>
    <div class="margin">
        <a class="clear" href="/index.php/Home/Personal/account"><img src="/Public/Wap/images/user_base_26.png"/><div>账号</div><span>></span></a>
        <!--<a class="clear" href="/index.php/Home/Personal/setinfo"><img src="/Public/Wap/images/user_base_28.png"/><div>设置</div><span>></span></a>-->
    </div>
    <div class="margin">
        <a class="clear" href="/index.php/Home/Personal/about"><img src="/Public/Wap/images/user_base_30.png"/><div>关于我们</div><span>></span></a>
        <a class="clear" href="javsscrept:;"><img src="/Public/Wap/images/user_base_32.png"/><div>招商合作</div><span>></span></a>
    </div>
</div>
<div class="showhead">
    <div class="img">
        <img src="<?php echo ($userinfo['image']); ?>" />
    </div>
</div>
</body>
<script>
    $(".user_head img").click(function () {
        $(".showhead").show();
        return false
    });
    $(document).bind("click",function(){
        $(".showhead").hide()
    });

</script>
</html>