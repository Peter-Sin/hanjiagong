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
    <link href="/Public/css/walletxq.css" rel="stylesheet">   
    <script src="/Public/js/jquery.js"></script>
    <script src="/Public/js/style.js"></script>
    <title>龙子人力资源</title>
</head>
<body>
<div class="box"></div>
<div class="index_header">
    <a href="javascript:history.go(-1);" class="left"><img src="/Public/images/XQY-fh.png"/></a>
 佣金详情 <span class='yjmx_tab' style='display:none'><?php echo ($num); ?></span>
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
<!--钱包详情-->
<!-- 报名成功 -->
<div class="walletxq">
	<div class="dzje">
		<div class="daozhang">
			<span>到账金额</span>
			<span>+<?php echo ($list['amount']); ?></span>
		</div>
	</div>
	<div class="dzbz">
		<div class="beizhu">
			<span>到账备注</span><span>推荐<?php echo ($list['username']); ?>成功报名2018年寒假勤工俭学，<?php echo ($list['username']); ?>已于<?php echo ($list['time']); ?>完成报名。其中<?php echo ($list['amount']); ?>元佣金已到账可提现余额中，剩余的50元佣金在<?php echo ($list['username']); ?>完成工期并将助学金提现后到账可提现余额中。</span>
		</div>
		<div class="time">
			<span>时&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;间</span><span><?php echo ($list['time']); ?></span>
		</div>
		<!-- <div class="qbzh">
			<span>累计佣金</span><span>800.00</span>
		</div> -->
	</div>
</div>
<!-- 申请助学金成功 -->
<div class="walletxq2">
    <div class="dzje">
        <div class="daozhang">
            <span>到账金额</span>
            <span>+<?php echo ($list['amount']); ?></span>
        </div>
    </div>
    <div class="dzbz">
        <div class="beizhu">
            <span>到账备注</span><span><?php echo ($list['username']); ?>已于<?php echo ($list['time']); ?>成功申请2018年寒假勤工俭学助学金，剩余<?php echo ($list['amount']); ?>元佣金已到账可提现余额中。</span>
        </div>
        <div class="time">
            <span>时&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;间</span><span><?php echo ($list['time']); ?></span>
        </div>
        <!-- <div class="qbzh">
            <span>累计佣金</span><span>800.00</span>
        </div> -->
    </div>
</div>
<!-- 提现 -->
<div class="walletxq3">
    <div class="dzje">
        <div class="daozhang">
            <span>提现金额</span>
            <span>-<?php echo ($list['amount']); ?></span>
        </div>
    </div>
    <div class="dzbz">
        <div class="beizhu">
            <span>提现备注</span><span>你已于<?php echo ($list['time']); ?>通过佣金余额提现成功，提现金额<?php echo ($list['amount']); ?>元，请及时到你的提现账户<?php echo ($list['account']); ?>查询。</span>
        </div>
        <div class="time">
            <span>时&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;间</span><span><?php echo ($list['time']); ?></span>
        </div>
        <!-- <div class="qbzh">
            <span>累计佣金</span><span>800.00</span>
        </div> -->
    </div>
</div>

<br>
<br>
<br>
<br>
<br>
<script>
    var yjmx_tab = $(".yjmx_tab").text();
    if (yjmx_tab == 1){
       $(".walletxq").show();
       $(".walletxq2").hide();
       $(".walletxq3").hide();
    }else if(yjmx_tab == 2){
       $(".walletxq").hide();
       $(".walletxq2").show();
       $(".walletxq3").hide();
    }else if(yjmx_tab == 3){
       $(".walletxq").hide();
       $(".walletxq2").hide();
       $(".walletxq3").show();
    };
</script>
</body>
</html>