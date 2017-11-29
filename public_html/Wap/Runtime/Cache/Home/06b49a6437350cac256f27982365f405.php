<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
	</body>
</html>
<!DOCTYPE html>
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
    <script src="/Public/js/jquery.js"></script>
    <script src="/Public/js/style.js"></script>
    <title>龙子人力资源</title>
</head>
<body>
<div class="box"></div>
<div class="index_header">
    <a href="javascript:history.go(-1);" class="left"><img src="/Public/images/XQY-fh.png"/></a>
我的报名记录
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
<!--填写报名信息-->
<div class="enrollline">

    <!--<div class="line1">-->
        <!--<ul class="clear">-->
             <!--<li><span><?php echo ($val["company"]); ?></span><span>待支付</span></li>-->
            <!--<li><span>姓名</span><span><?php echo ($val["username"]); ?></span></li>-->
            <!--<li><span>推荐人</span><span><?php echo ($val["recodeman"]); ?></span></li>-->
            <!--<li><span>报名时间</span><span><?php echo ($val["time"]); ?></span></li>-->
            <!--<li><span>报名状态</span><span>信息已提交，未支付</span></li>-->
             <!--&lt;!&ndash;<p class="status"><?php echo ($val["statu"]); ?></p>&ndash;&gt;-->
        <!--</ul>-->
        <!--<div class="nopay">-->
            <!--<a href="#">去付款></a>-->
        <!--</div>-->
    <!--</div>-->
	<!--<div class="line2">-->
		<!--<ul class="clear">-->
			 <!--<li><span>富士康郑州园区</span><span>已付款</span></li>-->
			<!--<li><span>姓名</span><span>迪丽热巴</span></li>-->
			<!--<li><span>推荐人</span><span>张碧晨</span></li>-->
			<!--<li><span>报名时间</span><span>2017-12-20 17:40</span></li>-->
			<!--<li><span>报名状态</span><span>信息已提交，未支付</span></li>-->
		<!--</ul>-->
	<!--</div>-->

</div>

<br>
<br>
<br>
<br>
<br>
<script>
    $.ajax({
        url:"enrollinfo",
        type:"POST",
        success:function (data) {
            console.log(data)
            for(var i=0; i<data.length;i++){
                if(data[i].statu == 1){
                    $(".enrollline").append(
                        "<div class='line2'>" +
                        "<ul class='clear'>" +
                        // "<li><span>"+data[i].company+"</span><span>已付款</span></li>"+
                        "<li><span>姓名</span><span>"+data[i].username+"</span></li>"+
                        "<li><span>推荐人</span><span>"+data[i].recodeman+"</span></li>"+
                        "<li><span>报名时间</span><span>"+data[i].time+"</span></li>"+
                        "<li><span>报名状态</span><span>报名成功,已支付</span></li>"+
                        "</ul>"+
                        "</div>"
                    )
                }else {
                    $(".enrollline").append(
                       "<div class='line1'>" +
                            "<ul class='clear'>" +
                                // "<li><span>"+data[i].company+"</span><span>待支付</span></li>"+
                                "<li><span>姓名</span><span>"+data[i].username+"</span></li>"+
                                "<li><span>推荐人</span><span>"+data[i].recodeman+"</span></li>"+
                                "<li><span>报名时间</span><span>"+data[i].time+"</span></li>"+
                                "<li><span>报名状态</span><span>信息已提交，未支付</span></li>"+
                            "</ul>"+
                            "<div class='nopay'>"+
                                  "<a href='http://www.cusdc.cn/Pay/pay?order=" + data[i].order +"&iswx="+data[i].iswx+"'>去付款</a>"+
                                  
                            "</div>"+
                        "</div>" 
                    )
                }
            }
        }
    })
</script>
 
</body>
</html>