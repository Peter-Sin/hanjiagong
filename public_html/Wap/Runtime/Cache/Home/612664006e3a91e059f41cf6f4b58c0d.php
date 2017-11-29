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
确认支付
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
<!--确认付款-->
<div class="pay">
	<div class="payxq">
		<img src="/Public/images/BM-zhufu.png"/>
        <p><?php echo ($info['money']); ?></p>
	</div>
	<div class="pay_tab">
		<p>请选择支付方式</p>
    <span id="pay_type" style="display:none;"><?php echo ($info['iswx']); ?></span>
		<div class="pay_alipay">
			<a href="/index.php/Home/Pay/doalipay?order=<?php echo ($info['order']); ?>"><img src="/Public/images/BM-zhifubao.png"/></a>
		</div>
		<div class="pay_wechat">
			<a href="/index.php/Home/Pay/dowxpay?order=<?php echo ($info['order']); ?>"><img src="/Public/images/BM-zhifuwx.png"/></a>
		</div>
	</div>
</div>

<br>
<br>
<br>
<br>
<br>
<script>
// 获取url等号后边的值
   //     function getParameter(param){
   //           var query = window.location.search;
   //           var iLen = param.length;
   //           var iStart = query.indexOf(param);
   //           if (iStart == -1)
   //            return "";
   //           iStart += iLen + 1;
   //           var iEnd = query.indexOf("&", iStart);
   //           if (iEnd == -1)
   //            return query.substring(iStart);
   //           return query.substring(iStart, iEnd);
   //  }
   //      var temp = getParameter("order");

   // $.ajax({
   //              url : "doalipay",
   //              type : 'post',
   //              data : {
   //                  temp:temp,    
   //              },
   //              success : function(data){
   //                 console.log(data)
                   
   //              }
   //          });
</script>
<script>
  var pay_type = $('#pay_type').text();
    console.log(pay_type)
    if (pay_type == 0) {
       $('.pay_alipay').show();
       $('.pay_wechat').show();      
    }else if(pay_type == 1){
       $('.pay_wechat').show();
       $('.pay_alipay').hide();
    }
    
</script>
</body>
</html>