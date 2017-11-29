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
    <script src="/Public/js/clipboard.min.js"></script>
    <title>龙子人力资源</title>
</head>
<style type="text/css">
    .jiathis_style_32x32 a span{margin-right: 2.7rem;}
    .jiathis_style_32x32 a:nth-child(1) span{margin-left: 1rem;}
    .jiathis_style_32x32 a:nth-child(4) span{margin-right: 0rem;}
</style>
<body style="background: #fff;">
<div class="box"></div>
<div class="index_header">
    <a href="javascript:history.go(-1);" class="left"><img src="/Public/images/XQY-fh.png"/></a>
邀请好友
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
<!--邀请好友-->
<div class="invite">
	<div class="tgm">
		<span><?php echo ($list['recode']); ?></span>
	</div>
	<div class="invite_tab" style="display:none;">
		<!-- <a href="#"><img src="/Public/images/TG-weixin.png"/></a>
		<a href="#"><img src="/Public/images/TG-pyq.png"/></a>
		<a href="#"><img src="/Public/images/TG-qq.png"/></a>
		<a href="#"><img src="/Public/images/TG-qqkj.png"/></a> -->
        <div class="jiathis_style_32x32 jiathis_style_m">
            <a class="jiathis_button_cqq"></a>
            <a class="jiathis_button_qzone"></a>
            <a class="jiathis_button_weixin"></a>
            <a class="jiathis_button_tsina"></a>            
        </div>
	</div>

	<!-- 复制链接 -->
    <div class="invite_fuzhi">
    	<input id="foo4" type="text" value="www.cusdc.cn/?recode=<?php echo ($list['recode']); ?>" readonly="readonly"/>
    	<button class="btn" data-clipboard-action="copy" data-clipboard-target="#foo4">复制链接</button> 
    	<!-- <p>复制链接</p> -->
    </div>
    <script>
		var clipboard = new Clipboard('.btn');

		clipboard.on('success', function(e) {
			console.log(e);
		});

		clipboard.on('error', function(e) {
			console.log(e);
		});
	</script>

	<!-- <div class="look">
		<a href="#"><p>查看详情规则</p></a>
	</div> -->

</div>
<!-- JiaThis Button BEGIN -->

<script type="text/javascript" >
var jiathis_config={
    summary:"",
    shortUrl:false,
    hideMore:true
}
</script>
<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
 <!-- JiaThis Button END-->
<!-- JiaThis Button BEGIN -->
<!-- <div class="jiathis_style_m"></div> -->
<script type="text/javascript" src="http://v3.jiathis.com/code/jiathis_m.js" charset="utf-8"></script>
<!-- JiaThis Button END -->
<br>
<br>
<br>
<br>
<br>
<script>
    $(".btn").click(function(event) {
       alert("复制成功")
    });
</script>
</body>
</html>