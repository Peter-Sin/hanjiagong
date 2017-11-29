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
    <a href="javascript:history.go(-1);" class="left"><img src="../images/XQY-fh.png"/></a>
我的发布
    <a href="javascript:;" class="menu right"><img src="../images/XQY-gd.png"/></a>
</div>
<!--菜单页-->
<div class="menu_list">
    <div class="list_l">
        <ul class="clear">
            <li>
                <a href="../html/index.html">                    
                    <span>首页</span>
                </a>
            </li>
            <li>
                <a href="../company/company.html">                    
                    <span>企业</span>
                </a>
            </li>
            <li>
                <a href="../resource/resource.html">                    
                    <span>资源圈</span>
                </a>
            </li>
            <li>
                <a href="../news/news.html">                   
                    <span>消息</span>
                </a>
            </li>
            <li>
                <a href="../person/person.html">                    
                    <span>我的</span>
                </a>
            </li>
            
        </ul>
    </div>
</div>
<!--我的发布-->
<div class="release">
	<div class="release_tab">
		<ul class="clear Tab">
			<li>所有</li>
			<li>审核中</li>
			<li>无效</li>
		</ul>
	</div>
	
    <div class="fblist">
		<!--所有-->
		<div class="fb_all">
			<!--列表详情-->
			<a href="#">
				<div class="resource_line">
					<ul class="clear">
						<li>
							<span>物流仓库包吃住一天150</span><span>个人</span>
						</li>
						<li>
							<span><img src="../images/ZYQ-weizhi.png"/></span><span>郑州市金水区</span>
						</li>
						<li>
							<span><img src="../images/ZYQ-shijian.png"/></span><span>2017年10月12日——2017年10月20日</span>
						</li>
						<li>
							<span>日结</span><span>元/天</span><span>150</span>
						</li>
					</ul>
				</div>
			</a>
			<a href="#">
				<div class="resource_line">
					<ul class="clear">
						<li>
							<span>物流仓库包吃住一天150</span><span>个人</span>
						</li>
						<li>
							<span><img src="../images/ZYQ-weizhi.png"/></span><span>郑州市金水区</span>
						</li>
						<li>
							<span><img src="../images/ZYQ-shijian.png"/></span><span>2017年10月12日——2017年10月20日</span>
						</li>
						<li>
							<span>日结</span><span>元/天</span><span>150</span>
						</li>
					</ul>
				</div>
			</a>
			<a href="#">
				<div class="resource_line">
					<ul class="clear">
						<li>
							<span>物流仓库包吃住一天150</span><span>个人</span>
						</li>
						<li>
							<span><img src="../images/ZYQ-weizhi.png"/></span><span>郑州市金水区</span>
						</li>
						<li>
							<span><img src="../images/ZYQ-shijian.png"/></span><span>2017年10月12日——2017年10月20日</span>
						</li>
						<li>
							<span>日结</span><span>元/天</span><span>150</span>
						</li>
					</ul>
				</div>
			</a>
	    </div>
        <!--审核中-->
        <div class="fb_shz" style="display: none;">
			<a href="#">
				<div class="resource_line">
					<ul class="clear">
						<li>
							<span>物流仓库包吃住一天150</span><span><img src="../images/SHZ-shenhez.png"/></span>
						</li>
						<li>
							<span><img src="../images/ZYQ-weizhi.png"/></span><span>郑州市金水区</span>
						</li>
						<li>
							<span><img src="../images/ZYQ-shijian.png"/></span><span>2017年10月12日——2017年10月20日</span>
						</li>
						<li>
							<span>日结</span><span>元/天</span><span>150</span>
						</li>
					</ul>
				</div>
			</a>
	    </div>
        <!--无效-->
        <div class="fb_wx" style="display: none;">
			<a href="#">
				<div class="resource_line">
					<ul class="clear">
						<li>
							<span>物流仓库包吃住一天150</span><span><img src="../images/SHZ-wuxiao.png"/></span>
						</li>
						<li>
							<span><img src="../images/ZYQ-weizhi.png"/></span><span>郑州市金水区</span>
						</li>
						<li>
							<span><img src="../images/ZYQ-shijian.png"/></span><span>2017年10月12日——2017年10月20日</span>
						</li>
						<li>
							<span>日结</span><span>元/天</span><span>150</span>
						</li>
					</ul>
				</div>
			</a>
	    </div>     		   
    </div>
    <script>
    	 $(function () {
             $(".Tab li").click(function(){
                    $(this).addClass("active").siblings().removeClass("active");
                    var index = $(this).index();
                    $(".fblist>div").eq(index).show().siblings().hide()
                });
            }); 
    </script>
</div>

<br>
<br>
<br>
<br>
<br>

</body>
</html>