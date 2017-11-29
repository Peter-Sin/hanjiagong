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
    <link href="/Public/css/mobiscroll.css" rel="stylesheet"/>
    <link href="/Public/css/mobiscroll_date.css" rel="stylesheet"/>
    <link href="/Public/css/jquery-weui.min.css" rel="stylesheet"/>
    <script src="/Public/js/jquery.js"></script>
    <script src="/Public/js/style.js"></script>
    <script src="/Public/js/mobiscroll_date.js" charset="gb2312"></script>
    <script src="/Public/js/mobiscroll.js"></script>
    <script src="/Public/js/jquery-weui.min.js"></script>
    <script src="/Public/js/city-picker.min.js"></script>
    <title>龙子人力资源</title>
</head>
<body>
<div class="box"></div>
<div class="index_header">
    <a href="javascript:history.go(-1);" class="left"><img src="/Public/images/XQY-fh.png"/></a>
个人基本信息
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
<!--实名认证-->
<div class="certification">
    <form class="form" enctype="multipart/form-data">
		<div class="user">
			<span>用户名</span>
			<input type="text" name="user" value="<?php echo ($list['username']); ?>" readonly="readonly" >
		</div>
		<div class="name">
			<span>姓名</span>
			<input type="text" name="name" value="<?php echo ($list['name']); ?>" readonly="readonly">
		</div>
		<div class="phone">
			<span>手机号</span>
			<input type="text" name="phone" value="<?php echo ($list['tel']); ?>" readonly="readonly">
		</div>
		<div class="sex">
			<span>性别</span>
			<input type="text" name="sex" value="<?php echo ($list['sex']); ?>" /> 
	        
		</div>
		<!-- 时间插件 -->
		<div class="birthday">
			<span>生日</span>
			<input type="text" name="birthday" value="<?php echo ($list['birth']); ?>" id="USER_AGE" class="input" readonly="readonly">
		</div>
		
        <!-- 家庭地址 -->
		<div class="home">
			<span>家乡</span>
			<input type="text" name="home" value="<?php echo ($list['town']); ?>" id="city" readonly="readonly">
		</div>
		<div class="address">
			<span>详细地址</span>
			<input type="text" name="address" value="<?php echo ($list['address']); ?>" readonly="readonly">
		</div>
		<div class="school">
			<span>学校</span>
			<input type="text" name="school" value="<?php echo ($list['school']); ?>" readonly="readonly">
		</div>
		<div class="major">
			<span>专业</span>
			<input type="text" name="major" value="<?php echo ($list['major']); ?>" readonly="readonly">
		</div>
		<div class="jinjiphone">
			<span>紧急联系人</span>
			<input type="text" name="jinjiphone" value="<?php echo ($list['emertel']); ?>" readonly="readonly">
		</div>
		<div class="idcard">
			<span>身份证号</span>
			<input type="text" name="idcard" value="<?php echo ($list['crenum']); ?>" readonly="readonly">
		</div>
		<div class="zhuyi">
			<p>*暂不支持修改个人信息，如需修改联系客服0371-68706975。</p>
		</div>
		<div class="go">
			<a href="/index.php/Home/Login/logout"><p>退出登录</p></a>
		</div>
	</form>	
</div>

<br>
<br>
<br>
<br>
<br>
<script>
    var sex = $("input[name='sex']").val();
    if (sex == 1) {
        $("input[name='sex']").val("男");
    }else if(sex == 2){
         $("input[name='sex']").val("女");
    };
</script>
</body>
</html>