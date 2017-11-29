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
    <link href="/Public/css/companyxq.css" rel="stylesheet">   
    <script src="/Public/js/jquery.js"></script>
    <script src="/Public/js/style.js"></script>
    <title>龙子人力资源</title>
</head>
<body>
<div class="box"></div>
<div class="index_header">
    <a href="javascript:history.go(-1);" class="left"><img src="/Public/images/XQY-fh.png"/></a>
 公司详情
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

<!--点击top回到顶部-->
<div class="floatwindow">
    <div class="top">
        <img src="/Public/images/index_fanhuidingbu.png"/>
    </div>
    <div class="release">
          <a href="/index.php/Home/Release/release_job"><img src="/Public/images/index_fabu.png"/></a>
    </div>
</div>
<!--占位用-->

<div class="index_footer">
    <ul class="clear">
    	<li><a class="XQY-phone" href="tel:0371-68706975"><img src="/Public/images/XQY-phone.png"/></a></li>
    	<li><a class="XQY-qq" href="#"><img src="/Public/images/XQY-qq.png"/></a></li>
    	<li class="caonima"><a href="/index.php/Home/Enroll/index?cid=<?php echo ($list[0][cuid]); ?>"><img src="/Public/images/XQY-baoming.png"/></a></li>
    	<li class="caonima"><a href="/index.php/Home/Person/invite"><img src="/Public/images/XQY-share.png"/></a></li>
    </ul>   
</div>

<!--公司详情-->

<div class="companyxq">
	<!--地点-->
	<div class="companyxq_dz">
		<ul class="clear">
			<li><span><?php echo ($list[0][title]); ?></span><span><?php echo ($list[0][time]); ?></span></li>
			<li><span><img src="/Public/images/ZYQ-weizhi.png"/></span><span><?php echo ($list[0][town]); ?></span><span><?php echo ($list[0][wage]); ?>元</span></li>
			<li><span><?php echo ($list[0][treatment][0]); ?></span><span><?php echo ($list[0][treatment][1]); ?></span><span><?php echo ($list[0][treatment][2]); ?></span><span><?php echo ($list[0][treatment][3]); ?></span></li>
			<li>
				<span><img src="/Public/images/XQY-pin.png"/></span><span><?php echo ($list[0][total]); ?></span>
				<span style=""><img src="/Public/images/XQY-yu.png"/></span><span><?php echo ($list[0][residue]); ?></span>
				<span>定金</span><span>￥<?php echo ($list[0][earnest]); ?></span>
			</li>
			<li></li>
			<li><span>工作地点：<?php echo ($list[0][town]); echo ($list[0][address]); ?></span></li>
		</ul>
	</div>
	<!--寒假工-->
	<div class="companyxq_hjg">
		<span>寒假工</span>
		<span>龙子网报名专享助学金</span>
		<span><a href="http://www.cusdc.cn/index.php/Home/News/gfggxq?id=14">查看详情></a></span>
	</div>
	<!--薪资福利-->
	<div class="companyxq_fl">
		<div class="xqfl_title1">
			<p>薪资福利</p>
		</div>
		<div class="xqfl_title2">
			<!-- <p>薪资介绍</p> -->
			<p><?php echo ($list[0][content1]); ?></p>
		</div>
		<!-- <div class="xqfl_title3">
			<p>福利待遇</p>
			<p>基本工资+基本工资可以通过龙子网报名寒暑假工，工期结束后即可在龙子人力资源领取1000元助学金</p>
		</div> -->
	</div>
	<!--招聘要求-->
	<div class="companyxq_zp">
		<ul class="clear">
			<li>招聘要求</li>
			<li><?php echo ($list[0][content2]); ?></li>
			<!-- <li>2、男身高1.6米以上;女士1.5米以上;</li>
			<li>3、受伤无大面积纹身及明显伤痕(伤痕主要指严重刀伤或烟头烫伤)，身体健康;</li>
			<li>注：寒假勤工俭学至少做满一个月</li> -->
		</ul>
	</div>
	<!--企业介绍-->
	<div class="companyxq_js">
		<p>企业介绍</p>
		<!-- <p>龙子人力资源可以报名寒暑假勤工俭学啦通过龙子网报名寒暑假工，工期结束后即可在龙子人力资源领取1000元助学金</p> -->
		<p><?php echo ($list[0][content3]); ?></p>
	</div>
	<!--企业环境-->
	<div class="companyxq_hj">
		<div class="qyhj_title">
			<a href="/index.php/Home/Company/tuce?id=<?php echo ($list[0][id]); ?>"><p>企业环境</p><p>更多></p></a>
		</div>
		<div class="qyhj_tu">
			<ul class="clear">
				<li><a href="/index.php/Home/Company/tuce?id=<?php echo ($list[0][id]); ?>"><img src="/Public/images/company/<?php echo ($list[0][image][0][img]); ?>"/></a><?php echo ($list[0][image][0][title]); ?></li>
				<li><a href="/index.php/Home/Company/tuce?id=<?php echo ($list[0][id]); ?>"><img src="/Public/images/company/<?php echo ($list[0][image][1][img]); ?>"/></a><?php echo ($list[0][image][1][title]); ?></li>
			</ul>
		</div>
	</div>
	<!--其他说明-->
	<div class="companyxq_other">
		<div class="qtsm_title1">
			<p>其他说明</p>
		</div>
		<div class="qtsm_title2">
			<p><?php echo ($list[0][content4]); ?></p>
			<!-- <p>基本工资+基本工资可以通过龙子网报名寒暑假工，工期结束后即可在龙子人力资源领取1000元助学金</p>
		</div>
		<div class="qtsm_title3">
			<p>住宿说明</p>
			<p>基本工资+基本工资可以通过龙子网报名寒暑假工，工期结束后即可在龙子人力资源领取1000元助学金</p>
		</div> -->
	    </div>
	<!--招聘岗位-->
		<div class="companyxq_gw">
			<div class="zpgw_title1">
				<p>招聘岗位</p>
			</div>
			<div class="zpgw_title2">
				<p><?php echo ($list[0][content5]); ?></p>
				<!-- <p>基本工资+基本工资可以通过龙子网报名寒暑假工，工期结束后即可在龙子人力资源领取1000元助学金</p> -->
			</div>
			<!-- <div class="zpgw_title3">
				<p>2.普工</p>
				<p>基本工资+基本工资可以通过龙子网报名寒暑假工，工期结束后即可在龙子人力资源领取1000元助学金</p>
			</div> -->
		</div>
    </div>
</div>


<!--qq群-->
<div class="QQ_qun" style="display: none;">
	<div class="qq_qun">
		<div class="qq_qun_title">
			<span>龙子人力资源QQ群</span>
			<span class='XQY-qq-gb'><img src="/Public/images/XQY-qq-gb.png"/></span>
		</div>
		<div class="qq_qun_content">
			<p>250611820</p>
		</div>
		<div class="qq_qun_fz">
			<p>复制QQ群号添加官方QQ群</p>
		</div>
	</div>
</div>

<!--电话咨询-->
<div class="Phone_zixun" style="display: none;">
	<div class="phone_zixun">
		<div class="phone_zixun_title">
			<span>提示</span>
		</div>
		<div class="phone_zixun_content">
			<p><a href="tel:0371-68706975">是否呼叫</a></p>
		</div>
		<div class="phone_zixun_fz">
			<span class='quxiao'>取消</span>
			<span class='hujiao'>呼叫</span>
		</div>
	</div>
</div>
<br>
<br>
<br>
<br>
<br>
<p id="sessionss" style="display:none;"><?php echo ($_SESSION['id']); ?></p>
<script>
// 电话
	// $(".XQY-phone").click(function(event) {
	// 	$(".Phone_zixun").show();
	// 	$(".QQ_qun").hide();
	// });
// qq群
    $(".XQY-qq").click(function(event) {
    	$(".QQ_qun").show();
    	$(".Phone_zixun").hide();

    	$(".XQY-qq-gb").click(function(event) {
    		$(".QQ_qun").hide();
    	});
    });
</script>
<script>
    var sessionss = $("#sessionss").text();
    $(".caonima").click(function(event) {
        if ($("#sessionss").text() == "") {
            $(".caonima a").attr("href","/index.php/Home/Login/index");
        }
    });
</script>
</body>
</html>