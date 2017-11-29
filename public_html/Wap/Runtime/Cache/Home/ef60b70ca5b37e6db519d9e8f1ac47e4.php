<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="/Public/Wap/css/style.css" rel="stylesheet">
    <link href="/Public/Wap/css/fabuwenzhang.css" rel="stylesheet">
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
    发布文章
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
        <img id="imgShow" src="/Public/Wap/images/touming.png"/>
    </div>
    <script>
        new uploadPreview({ UpBtn: "up_img", DivShow: "imgdiv", ImgShow: "imgShow" });
    </script>
    <!--投票主题-->
    <div class="zhuti">
        投稿标题:<input name="title" type="text">
    </div>
    <!--投票类型-->
    <div class="leixing">
        投稿类型:
        <select name="type">
            <option selected="selected">请选择投稿类型</option>
            <option>诗歌</option>
            <option>小说</option>
            <option>散文</option>
            <option>新闻</option>
        </select>
    </div>
    <div class="xiangqing">
        <span>文章内容：</span>
        <textarea name="content"></textarea>
    </div>
    <div class="picbox clear">
        <div class="addpic clear"></div>
        <div class="filebox">
            <div class="file_modal"><span>＋</span><span>添加图片(最多四张)</span></div>
            <input type="file" id="img_btn1" name="image1" accept="image/*">
        </div>
    </div>
    <div class="zhuti">
        投稿人联系方式:<input name="phone" type="number"style="width: 16rem">
    </div>
    <div class="go">
        <div class="upload">发 布</div>
    </div>
</form>
<script>
    //添加图片
var num = 1;
$(".filebox").on("change","input",function(){
    var picLen = $(".addpic>div").length;
    if(picLen >= 4){
        alert("最多只能添加四张图片")
    }else {
        var reader = new FileReader(), val = $(this).get(0).files[0];
        reader.readAsDataURL(val);
        reader.onload = function () {
            num++;
            $(".addpic").append(
                "<div class='"+num+"'>" +
                "<span>X</span>"+
                "<img src='"+reader.result+"'>"+
                "</div>"
            );
            $(".filebox").append("<input type='file' id='file"+num+"' name='image"+num+"' accept='image/*'>");
        };
        $(".addpic").on("click","span",function(){
            var index =  $(this).parent().index();
            if(index >= 0 ){
                $(this).parent().remove();
                $(".filebox input").eq(index).remove();
            }else if(index<0){
                return
            }
        })
    }
});
    //上传文件
    //    form 添加属性 enctype="multipart/form-data"
    $(".go .upload").click(function(){
        var phone =/^1[0-9]{10}$/;
        if($("#up_img").val() == ""){
            alert("请添加封面图片");
            return false
        }else if($(".zhuti input").val() == ""){
            alert("请填写文章标题");
            return false
        }else if($("select").val() == "请选择投稿类型"){
            alert("请选择投稿类型");
            return false
        }else if($(".xiangqing textarea").val() == ""){
            alert("请填写文章内容");
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
                url: "wzupload",
                type: "POST",
                data: formData,
                contentType: false, //必须false才会避开jQuery对 formdata 的默认处理 XMLHttpRequest会对 formdata 进行正确的处理
                processData: false, //必须false才会自动加上正确的Content-Type
                success: function (data) {
                    if(data == 1){
                        alert("提交成功");
                        window.location.href="http://www.cusdc.com/index.php/Home/Release/fabuenter"
                    }else if(data == 0){
                        alert("提交失败")
                    }else if(data == 3){
                        alert("图片有误")
                    }
                }
            });
        }
    });
</script>
</body>
</html>