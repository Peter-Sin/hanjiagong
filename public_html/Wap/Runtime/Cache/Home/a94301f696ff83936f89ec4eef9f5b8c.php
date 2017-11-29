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
    <link href="/Public/css/wallet.css" rel="stylesheet">   
    <script src="/Public/js/jquery.js"></script>
    <script src="/Public/js/style.js"></script>
    <title>龙子人力资源</title>
</head>
<body>
<div class="box"></div>
<div class="index_header">
    <a href="javascript:history.go(-1);" class="left"><img src="/Public/images/XQY-fh.png"/></a>
 我的助学金
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
<!--我的钱包-->
<div class="wallet">
	<div class="walletmx">
		<p>助学金 (元)</p>
		<div class="money">
			<span><?php echo ($balance); ?></span>
			<span><a href="/index.php/Home/Grants/grantsxq">助学金明细</a></span>
		</div>
	</div>
	<div class="fun">
	<div class="margin">
        <a class="clear" href="#">
             <img src="/Public/images/WD-qb-yitixian.png"/>
             <div>已提现</div>
             <span style="margin-right: 1rem;"><?php echo ($num); ?>元</span>
        </a>        
    </div>
    <ul class="gonggao">
        <a href="http://www.cusdc.cn/index.php/Home/News/gfggxq?id=14"><span>*助学金金额在工期完成之后才能申请提现哦，详情请查看公告</span><span>《龙子人力资源助学金提现规则》</span></a>
    </ul> 
    <div style="margin-top: 0;" class="margin">
    	<a class="clear ordersc" href="javascript:;"><img src="/Public/images/WD-qb-shenqing.png"/><div>申请助学金</div><span><img src="/Public/images/WD-xyy.png"/></span></a>
        <a style="border-top:1px solid #e7e7e7;" class="clear" href="/index.php/Home/Grants/applyrecord">
             <img src="/Public/images/WD-qb-lishi.png"/>
             <div>助学金申请记录</div>
             <span><img src="/Public/images/WD-xyy.png"/></span>
         </a>
        
    </div>
    <div class="margin">
    	<a class="clear" href="/index.php/Home/Grants/txrecord"><img src="/Public/images/WD-qb-lishi.png"/><div>提现记录</div><span><img src="/Public/images/WD-xyy.png"/></span></a>
       <!--  <a style="border-top:1px solid #e7e7e7;" class="clear" href="#"><img src="/Public/images/WD-qb-dengdai.png"/><div>待审核提现申请</div><span><img src="/Public/images/WD-xyy.png"/></span></a>
        <a style="border-top:1px solid #e7e7e7;" class="clear" href="#"><img src="/Public/images/WD-qb-wuxiao.png"/><div>待打款记录</div><span><img src="/Public/images/WD-xyy.png"/></span></a>
        <a style="border-top:1px solid #e7e7e7;" class="clear" href="#"><img src="/Public/images/WD-qb-yitixian.png"/><div>已提现记录</div><span><img src="/Public/images/WD-xyy.png"/></span></a>
        <a style="border-top:1px solid #e7e7e7;" class="clear" href="#"><img src="/Public/images/WD-qb-wuxiao.png"/><div>无效提现申请</div><span><img src="/Public/images/WD-xyy.png"/></span></a> -->
        <!--<a class="clear" href="/index.php/Home/Personal/likes"><img src="/Public/Wap/images/user_base_20.png"/><div>点赞<p><i></i><span>123</span>个点赞</p></div><span>></span></a>
        <a class="clear" href="javascript:;"><img src="/Public/Wap/images/user_base_22.png"/><div>留言评论<p><i></i><span>123</span>条留言</p></div><span>></span></a>
        <a class="clear" href="/index.php/Home/Personal/notice"><img src="/Public/Wap/images/user_base_24.png"/><div>系统消息<p><i></i><span>123</span>条消息</p></div><span>></span></a>-->
    </div>
    <div class="margin">
        
        <!--<a class="clear" href="/index.php/Home/Personal/setinfo"><img src="/Public/Wap/images/user_base_28.png"/><div>设置</div><span>></span></a>-->
    </div>
    <div class="margin">
        
        <!--<a class="clear" href="/index.php/Home/Personal/setinfo"><img src="/Public/Wap/images/user_base_28.png"/><div>设置</div><span>></span></a>-->
    </div>
    <div class="margin">
        
        <!--<a class="clear" href="javsscrept:;"><img src="/Public/Wap/images/user_base_32.png"/><div>招商合作</div><span>></span></a>-->
    </div>
</div>

<div class="go">
    <a class="clear" href="/index.php/Home/Grants/iwanttx">
    	<div class="moneygo">
    		我要提现
    	</div>
    </a>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<script>
    $('.ordersc').click(function(event) {
           alert("您实习期还未结束，目前还不能申请助学金，同学们实习期结束后我们将统一时间开放！");
       });
</script>
</body>
</html>