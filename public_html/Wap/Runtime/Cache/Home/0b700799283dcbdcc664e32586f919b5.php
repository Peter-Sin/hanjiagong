<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="/Public/Wap/css/style.css" rel="stylesheet">
    <link href="/Public/Wap/css/fabuhuodong.css" rel="stylesheet">
    <script src="/Public/Wap/js/jquery.js"></script>
    <script src="/Public/Wap/js/style.js"></script>
    <script src="/Public/Wap/js/uploadPreview.js"></script>
    <title>龙子网</title>
</head>
<body>
<!--占位用-->
<div class="box"></div>
<div class="index_header">
    <a href="javascript:history.go(-1);" class="left"><img src="/Public/Wap/images/back.png"/></a>
    发布话题
    <a href="javascript:;" class="menu right"><img src="/Public/Wap/images/fenlei.png"/></a>
</div>
<!--菜单页-->
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
<form class="form" enctype="multipart/form-data">
    <!--添加封面-->
    <div class="file inner" id="imgdiv">
        <span>+ 添加封面</span>
        <input id="up_img" name="face_img" type="file" accept="image/*"/>
        <img src="/Public/Wap/images/touming.png" id="imgShow"/>
    </div>
    <script>
        new uploadPreview({ UpBtn: "up_img", DivShow: "imgdiv", ImgShow: "imgShow" });
    </script>
    <!--投票主题-->
    <div class="zhuti">
        话题标题:<input name="title" type="text">
    </div>
    <!--投票类型-->
    <div class="leixing">
        话题类型:
        <select name="type">
            <option selected="selected">请选择话题类型</option>
            <option>社团</option>
            <option>心情</option>
            <option>人物</option>
            <option>风景</option>
            <option>美食</option>
            <option>投票</option>
            <option>就业创业</option>
        </select>
    </div>
    <div class="xiangqing">
        <span>活动详情：</span>
        <textarea name="content"></textarea>
    </div>
    <div class="zhuti">
        发起人联系方式:<input name="phone" type="number" style="width: 16rem">
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
        alert("请填写话题标题");
        return false
    }else if($(".xiangqing textarea").val() == ""){
        alert("请填写话题内容");
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
            url: "tzupload",
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