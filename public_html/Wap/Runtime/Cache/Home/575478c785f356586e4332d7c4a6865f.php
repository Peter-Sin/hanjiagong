<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="/Public/Wap/css/style.css" rel="stylesheet">
    <link href="/Public/Wap/css/fabutoupiao.css" rel="stylesheet">
    <link href="/Public/Wap/css/normalize3.0.2.min.css" rel="stylesheet"/>
    <link href="/Public/Wap/css/mobiscroll.css" rel="stylesheet"/>
    <link href="/Public/Wap/css/mobiscroll_date.css" rel="stylesheet"/>
    <script src="/Public/Wap/js/jquery.js"></script>
    <script src="/Public/Wap/js/style.js"></script>
    <script src="/Public/Wap/js/mobiscroll_date.js" charset="gb2312"></script>
    <script src="/Public/Wap/js/mobiscroll.js"></script>
    <script src="/Public/Wap/js/uploadPreview.js"></script>
    <title>龙子网</title>
</head>
<body>
<!--占位用-->
<div class="box"></div>
<div class="index_header">
    <a href="javascript:history.go(-1);" class="left"><img src="/Public/Wap/images/back.png"/></a>
    发布投票
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
    <div class="zhuti clear">
        <span>投票主题:</span>
        <input name="title" type="text">
    </div>
    <!--投票类型-->
    <div class="leixing">
        <span>投票类型:</span>
        <select name="type">
            <option selected="selected">请选择投票类型</option>
            <option>单选</option>
            <option>多选(最多选两个)</option>
            <option>多选(最多选三个)</option>
            <option>多选(无限制)</option>
        </select>
    </div>
    <!--时间插件-->
    <section class="timebox">
        <span>投票截止时间：</span>
        <input type="text" name="end" id="USER_AGE" readonly class="input"/>
        <div class="clear h10"></div>
    </section>
    <script>
        $(function () {
            var currYear = (new Date()).getFullYear();
            var opt={};
            opt.date = {preset : 'date'};
            opt.datetime = {preset : 'datetime'};
            opt.time = {preset : 'time'};
            opt.default = {
                theme: 'android-ics light', //皮肤样式
                display: 'modal', //显示方式
                mode: 'scroller', //日期选择模式
                dateFormat: 'yyyy-mm-dd',
                lang: 'zh',
                showNow: false,
                nowText: "今天",
                startYear: currYear, //开始年份
                endYear: currYear + 10 //结束年份
            };
            $("#USER_AGE").mobiscroll($.extend(opt['date'], opt['default']));
        });
    </script>
    <!--投票详情-->
    <div class="xiangqing">
        <span>投票详情 (选填)：</span>
        <textarea name="content"></textarea>
    </div>
    <!--投票规则-->
    <div class="guize">
        <span>投票规则 (选填)：</span>
        <textarea name="guize"></textarea>
    </div>
    <!--投票选项-->
    <div class="xuanxiang">
        <span>投票选项：</span>
        <ul>
            <li>
                <div class="name">
                    <span class="num">1.</span>
                    <input class="text" type="text" name="child_title1" placeholder="项目名称 (必填)">
                    <div class="file">
                        <input class="file" type="file" name="child_img1" accept="image/*">
                        <img src="/Public/Wap/images/xiangji.png"/>
                    </div>
                </div>
                <textarea name="child_content1" placeholder="选项简介(选填)"></textarea>
            </li>
            <li>
                <div class="name">
                    <span class="num">2.</span>
                    <input class="text" type="text" name="child_title2" placeholder="项目名称 (必填)">
                    <div class="file">
                        <input type="file" name="child_img2" accept="image/*">
                        <img src="/Public/Wap/images/xiangji.png"/>
                    </div>
                </div>
                <textarea name="child_content2" placeholder="选项简介(选填)"></textarea>
            </li>
        </ul>
        <a href="javsscript:;">＋ 添加选项</a>
    </div>
    <!--主办方电话-->
    <div class="tel">
        主办方联系方式:<input name="phone" type="number" maxlength="11"/>
    </div>
    <div class="go">
        <div class="look">预 览</div>
        <div class="upload">发 布</div>
    </div>
    <input style="display: none;" class="child_num" name="child_num" value="11">
</form>
</body>
<script>
//    添加选项
var num = 2;
$(".xuanxiang a").click(function(){
    num ++;
    $(".xuanxiang ul").append('<li>'+ '<div class="name">'+ '<span class="num">'+num+". "+'</span>'+ '<input class="text" type="text" name="child_title'+num+'" placeholder="项目名称 (必填)">'+ '<div class="file">'+ '<input type="file" name="child_img'+num+'" accept="image/*">'+ '<img src="/Public/Wap/images/xiangji.png"/>'+ '</div>'+ '</div>'+ '<textarea name="child_content'+num+'" placeholder="选项简介(选填)"></textarea>'+ '</li>')
});
    $(".xuanxiang ul").on("change","li .name .file input",function () {
        var reader = new FileReader(), val = $(this).get(0).files[0],self = $(this);
        reader.readAsDataURL(val);
        reader.onload = function () {
            self.siblings().attr("src",reader.result)
        }
    });
    $(".go .upload").click(function () {
        var phone =/^1[0-9]{10}$/;
        var len = $(".xuanxiang input").length;
        var child_num = $(".xuanxiang li").length;
        $(".child_num").val(child_num);
        console.log(len);
        var child = false;
        for(var i = 0; i < len; i++){
            if($(".xuanxiang input").eq(i).val() == ""){
                child =true;
            }
        }
        if($("#up_img").val() == ""){
            alert("请添加封面图片");
            return false
        }else if($(".zhuti input").val() == ""){
            alert("请填写投票主题");
            return false
        }else if($("select").val() == "请选择投票类型"){
            alert("请选择投票类型");
            return false
        }else  if(child){
            alert("请填写选项名称和图片");
            return false
        } else if($("input[name='phone']").val() == ""){
            alert("请填写联系方式");
            return false
        }else if(!phone.test($("input[name='phone']").val())){
            alert("请填写正确的联系方式");
            return false
        }else {
            var formData = new FormData($(".form")[0]);
            $.ajax({
                url: "tpupload",
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
</html>