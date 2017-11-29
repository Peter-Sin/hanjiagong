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
  助学金提现结果<span class='yjtx_statu' style='display:none'><?php echo ($list['statu']); ?></span>
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
<!--提现审核中-->
<div class="txresult1">
	<div class="sqresult3">
		<img src="/Public/images/shenhezhong.gif"/>
		<p>信息提交成功，正在审核中...</p>
		<div class="sqresult4">
			<p>*预计3个工作日内审核完毕，审核结果会以系统信息发送到您的账号上，请注意查收。</p>
		</div>
	</div>
	<!--信息详情-->
	<div class="resultxx">
		<ul class="clear">
			<li class="result_lines"><span>申请类型</span><span><?php echo ($list['classify']); ?></span></li>
			<li class="result_lines"><span>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名</span><span><?php echo ($list['username']); ?></span></li>
			<li class="result_lines"><span>提现账号</span><span><?php echo ($list['account']); ?></span></li>
			<!-- <li class="result_lines"><span>工期时间</span><span>2017-10-20到2018-2-20</span></li> -->
			<li class="result_lines"><span>申请时间</span><span><?php echo ($list['time']); ?></span></li>	
			<li class="result_lines"><span>提现金额</span><span><?php echo ($list['amount']); ?></span></li>			
		</ul>
	</div>
	<!--提现流程-->
	<div class="txliucheng">
		<img src="/Public/images/TX-jindu1.png"/>
	</div>
</div>
<!--审核通过待打款-->
<div class="txresult2">
	<div class="sqresult3">
		<img src="/Public/images/daidakuan.gif"/>
		<p>审核已通过，请耐心等待打款...</p>
		<div class="sqresult4">
			<p>*预计15个工作日内审核完毕，打款成功后会以系统信息发送到您的账号上，人多请耐心等待，感谢您的配合。</p>
		</div>
	</div>
	<!--信息详情-->
	<div class="resultxx">
		<ul class="clear">
			<li class="result_lines"><span>申请类型</span><span><?php echo ($list['classify']); ?></span></li>
			<li class="result_lines"><span>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名</span><span><?php echo ($list['username']); ?></span></li>
			<li class="result_lines"><span>提现账号</span><span><?php echo ($list['account']); ?></span></li>
			<!-- <li class="result_lines"><span>工期时间</span><span>2017-10-20到2018-2-20</span></li> -->
			<li class="result_lines"><span>申请时间</span><span><?php echo ($list['time']); ?></span></li>	
			<li class="result_lines"><span>提现金额</span><span><?php echo ($list['amount']); ?></span></li>			
		</ul>
	</div>
	<!--提现流程-->
	<div class="txliucheng">
		<img src="/Public/images/TX-jindu3.png"/>
	</div>
</div>
<!--审核未通过-->
<div class="txresult3">
	<div class="sqresult3">
		<img src="/Public/images/weichenggong.gif"/>
		<p>抱歉，您的申请由于个人原因未通过我们的审核。如果疑问，请拨打我们的客服电话：0371-68706975。</p>
		<!--<div class="sqresult4">
			<p>*预计3个工作日内审核完毕，审核结果会以系统信息发送到您的账号上，请注意查收。</p>
		</div>-->
	</div>
	<!--信息详情-->
	<div class="resultxx">
		<ul class="clear">
			<li class="result_lines"><span>申请类型</span><span><?php echo ($list['classify']); ?></span></li>
			<li class="result_lines"><span>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名</span><span><?php echo ($list['username']); ?></span></li>
			<li class="result_lines"><span>提现账号</span><span><?php echo ($list['account']); ?></span></li>
			<!-- <li class="result_lines"><span>工期时间</span><span>2017-10-20到2018-2-20</span></li> -->
			<li class="result_lines"><span>申请时间</span><span><?php echo ($list['time']); ?></span></li>	
			<li class="result_lines"><span>提现金额</span><span><?php echo ($list['amount']); ?></span></li>			
		</ul>
	</div>
	<!--提现流程-->
	<div class="txliucheng">
		<img src="/Public/images/TX-jindu2.png"/>
	</div>
</div>
<!--提现成功-->
<div class="txresult4">
	<div class="sqresult3">
		<img src="/Public/images/tixianchenggong.gif"/>
		<p>您的助学金提现已到账</p>
		<!--<div class="sqresult4">
			<p>*预计3个工作日内审核完毕，审核结果会以系统信息发送到您的账号上，请注意查收。</p>
		</div>-->
	</div>
	<!--信息详情-->
	<div class="resultxx">
		<ul class="clear">
			<li class="result_lines"><span>申请类型</span><span><?php echo ($list['classify']); ?></span></li>
			<li class="result_lines"><span>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名</span><span><?php echo ($list['username']); ?></span></li>
			<li class="result_lines"><span>提现账号</span><span><?php echo ($list['account']); ?></span></li>
			<!-- <li class="result_lines"><span>工期时间</span><span>2017-10-20到2018-2-20</span></li> -->
			<li class="result_lines"><span>申请时间</span><span><?php echo ($list['time']); ?></span></li>	
			<li class="result_lines"><span>提现金额</span><span><?php echo ($list['amount']); ?></span></li>			
		</ul>
	</div>
	<!--提现流程-->
	<div class="txliucheng">
		<img src="/Public/images/TX-jindu4.png"/>
	</div>
</div>

<!--分享-->
<div class="share">
	<div class="share_title">
		<p>分享给我的朋友，赚取佣金</p>
		<p><span>我的推广码:</span><span>000000</span></p>
	</div>
	<div class="share_go">
		<p><a href="/index.php/Home/Person/invite">去分享</a></p>
	</div>
</div>
<br>
<br>
<br>
<br>
<br>
<script>

	  var statu = $('.yjtx_statu').text();
      // alert(statu)
	    console.log(statu)
	    if (statu == 0) {
	    	// alert("待审核")
	       $('.txresult1').show();  
	       $('.txresult2').hide(); 
	       $('.txresult3').hide(); 
	       $('.txresult4').hide(); 
	    }else if(statu == 1){
	    	// alert("审核通过，待打款")
	       $('.txresult2').show();
	       $('.txresult1').hide(); 
	       $('.txresult3').hide(); 
	       $('.txresult4').hide(); 
	    }else if(statu == 2){
	    	// alert("已打款")
	       $('.txresult4').show();
	       $('.txresult2').hide(); 
	       $('.txresult3').hide(); 
	       $('.txresult1').hide(); 
	    }else if(statu == 3){
	    	// alert("审核未通过")
	       $('.txresult3').show();
	       $('.txresult2').hide(); 
	       $('.txresult1').hide(); 
	       $('.txresult4').hide(); 
	    }
</script>
</body>
</html>