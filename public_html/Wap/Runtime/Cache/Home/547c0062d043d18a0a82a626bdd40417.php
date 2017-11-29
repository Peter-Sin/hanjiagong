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
    <script src="/Public/js/jquery.js"></script>
    <script src="/Public/js/style.js"></script>
    <title>龙子人力资源</title>
</head>
<body>
<div class="box"></div>
<div class="index_header">
    <a href="javascript:history.go(-1);" class="left"><img src="/Public/images/XQY-fh.png"/></a>
 可提现佣金明细
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
<!--钱包明细-->
<div class="walletmx">
	<ul class="mx clear">
        <?php if(is_array($list)): foreach($list as $key=>$val): ?><a href="/index.php/Home/Commission/yjxq?id=<?php echo ($val["id"]); ?>&sign=<?php echo ($val["sign"]); ?>">
        		<li class="mxlines clear">
        			<div class="mxleft">
        				<p><?php echo ($val["company"]); ?></p>
        				<p><span><?php echo ($val["time"]); ?></span><span>可提现佣金：</span><span><?php echo ($val["money"]); ?></span></p>
        			</div>
        			<div class="mxright ccc">
        				<span class='bbb'></span>
                        <?php echo ($val["amount"]); ?>
                        <span class="aaa" style="display:none;"><?php echo ($val["sign"]); ?></span>
        			</div>
        		</li>
            </a><?php endforeach; endif; ?>
	</ul>
</div>

<br>
<br>
<br>
<br>
<br>
<script>
 var objLen = $(".bbb").length;
 for(var i=0; i<objLen; i++){
    var num = $(".ccc .aaa").eq(i).text()
    if(num == 1) {  
           $(".ccc .bbb").eq(i).text("+");
        }else if(num == 2){          
           $(".ccc .bbb").eq(i).text("-");
        }
 }

</script>
</body>
</html>