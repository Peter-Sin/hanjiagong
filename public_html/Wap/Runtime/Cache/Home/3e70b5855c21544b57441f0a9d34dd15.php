<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="/Public/css/style.css" rel="stylesheet">
    <link href="/Public/css/index.css" rel="stylesheet">
    <link href="/Public/css/walletmx.css" rel="stylesheet">  
    <link href="/Public/css/mobiscroll.css" rel="stylesheet"/>
    <link href="/Public/css/mobiscroll_date.css" rel="stylesheet"/> 
    <script src="/Public/js/jquery.js"></script>
    <script src="/Public/js/style.js"></script>
    <script src="/Public/js/mobiscroll_date.js" charset="gb2312"></script>
    <script src="/Public/js/mobiscroll.js"></script>
    <title>龙子人力资源</title>
</head>
<body style="background: #fff;height:48rem;">
<div class="box"></div>
<div class="index_header">
    <a href="javascript:history.go(-1);" class="left"><img src="/Public/images/XQY-fh.png"/></a>
出发时间
    <a href="javascript:;" class="menu right"><img src="/Public/images/XQY-gd.png"/></a>
</div>
<!--菜单页-->
<div class="menu_list">
    
   <div class="list_l">
        <ul class="clear">
            <li>
                <a href="/index.php/Home/Index/index">                    
                    <span>首页</span>
                </a>
            </li>
            <li>
                <a href="/index.php/Home/Company/company">                    
                    <span>企业</span>
                </a>
            </li>
            <li>
                <a href="/index.php/Home/Release/resource">                    
                    <span>资源圈</span>
                </a>
            </li>
            <li>
                <a href="/index.php/Home/News/news">                   
                    <span>消息</span>
                </a>
            </li>
            <li>
                <a href="/index.php/Home/Person/person">                    
                    <span>我的</span>
                </a>
            </li>
            
        </ul>
    </div>
    
</div>
<!--我的出发时间-->
<div class="Go_time">
	<div class="go_time">
		<p>我的出发时间：</p>
		<p><span><?php echo ($gotime); ?></span><span class='xiugai'><img src="/Public/images/SZ-shezhishijian.png"/></span></p>
	</div>
	<div class="go_time_tishi">
		<p>每个用户填写后只能修改两次，且于出发时间前10日修改</p>
	</div>
</div>

<!--我的出发时间(修改)-->
<div class="Go_time1" style="display:none">
	<div class="go_time">
		<p>我的出发时间：</p>
		<p>
			<input type="text" placeholder="请填写出发时间" id="USER_AGE" class="input" name='time'>
			<!-- <span><img src="/Public/images/SZ-shezhishijian.png"/></span> -->
		</p>
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
                startYear: currYear - 47, //开始年份
                endYear: currYear + 10 //结束年份
            };
            $("#USER_AGE").mobiscroll($.extend(opt['date'], opt['default']));
        });
    </script>
	</div>
	<div class="go_time_tishi">
		<p>每个用户填写后只能修改两次，且于出发时间前10日修改</p>
	</div>
	<div class="go_time_button">
		<p>确认修改</p>
	</div>
</div>

<br>
<br>
<br>
<br>
<br>
<script>
	// 修改
	$(".xiugai").click(function(event) {
		$(".Go_time1").show();
		$(".Go_time").hide();
	});
    
    var time = $("input[name='time']").val()
	$(".go_time_button p").click(function(event) {
		  $.ajax({
                url : "updategotime",
                type : 'post',
                data : {
                    
                    time:$("input[name='time']").val(),
                        
                },
                success : function(data){
                   console.log(data)
                   if (data == 1) {
	                   alert('修改成功');
	                   location.href="/index.php/Home/Person/index";
                   }else if(data == 0){
                       alert("修改失败");
                   };
                }
            });
	});
</script>
</body>
</html>