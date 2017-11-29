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
 职位详情
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
<!--我的发布-->
<div class="job">
	<!--职位-->
	<div class="job_xq">
		<ul class="clear">
			<li><p><?php echo ($list['title']); ?></p></li>
			<li><span><?php echo ($list["money"]); ?></span><span>元/天</span></li>
			<li><span><?php echo ($list["type"]); ?></span>|<span>个人</span>|<span>500人</span></li>
			<li><span>是否收费:</span><span>不收费</span></li>
			<li><span>工作日期:</span><span><?php echo ($list["begin_time"]); ?>至<?php echo ($list["end_time"]); ?>,<?php echo ($list["close_time"]); ?>截止报名</span></li>
			<li><span>工作时间:</span><span>6:00~21:00</span></li>
			<li><span>工作地点:</span><span><?php echo ($list["address"]); ?></span></li>
		</ul>
	</div>
	<!--招聘要求-->
	<div class="job_yq">
		<ul class="clear">
			<li>招聘要求</li>
			<li><?php echo ($list["demand"]); ?></li>
			<!-- <li>2、男身高1.6米以上;女士1.5米以上;</li>
			<li>3、受伤无大面积纹身及明显伤痕(伤痕主要指严重刀伤或烟头烫伤)，身体健康;</li>
			<li>注：寒假勤工俭学至少做满一个月</li> -->
		</ul>
	</div>
	<!--职位描述-->
	<div class="job_ms">
		<div class="job_ms_title">
			<p>职位描述</p>
		</div>
		<div class="job_ms_content">
			<p><?php echo ($list["content"]); ?></p>
		</div>
	</div>
	<!--联系方式-->
	<div class="job_lx">
		<ul class="clear">
			<li>联系方式</li>
			<li><span>联系人：</span><spna><?php echo ($list["contacts"]); ?></spna></li>
			<li><span>练习电话：</span><span><?php echo ($list["tel"]); ?></span></li>
			<li>*联系我时请说明是在龙子人力资源网站看到的信息，谢谢！</li>
		</ul>
	</div>
      		   
</div>

<br>
<br>
<br>
<br>
<br>

</body>
</html>