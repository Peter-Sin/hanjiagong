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
申请助学金
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
<!--申请助学金-->
<div class="sqzxj">
	<div class="sqzxj_name">
		<span>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名</span>
		<!-- <input type="text" name="name" value="<?php echo ($list[0]['username']); ?>" /> -->
        <span class='sqzxj_name1'><?php echo ($list['username']); ?></span>
	</div>
	<div class="sqzxj_gq">
		<div class="gqzt">
			<span>企业名称</span>
            <select name="type">
                <option selected="selected" style="display:none" value="0">请选择企业</option>
                <?php if(is_array($info)): foreach($info as $key=>$val): ?><option value="<?php echo ($val["id"]); ?>"><?php echo ($val["title"]); ?></option><?php endforeach; endif; ?>
               <!--  <option>昌硕科技（上海）有限公司</option>
                <option>世硕电子（昆山）有限公司</option>
                <option>铠嘉电脑配件有限公司立迅：电子&昆山联滔</option> -->
            </select>
          <!--   <input type="text" name="company" value="<?php echo ($list[0]['company']); ?>" placeholder="请输入企业名称"> -->
            <!-- <span class='gqzt1'><?php echo ($list['company']); ?></span> -->
		</div>
		<!-- <div class="gqsj">
			<span>工期时间</span>
			<input type="text" name="major" placeholder="请输入工作日期">
		</div> -->
		<div class="endtime">
			<span>助学金额</span>
            <input type="text" name="money" value="200-1000" readonly><span>元</span>
            <input type="hidden" name="uid" value="<?php echo ($list['uid']); ?>">
            <input type="hidden" name="order" value="<?php echo ($list['order']); ?>">
		</div>
	</div>
	
	<div class="zhuyi">
		<p>*助学金提示：报名并参加实习的学生可申请助学金，助学金额200-1000元，具体助学金额待定，我们将根据学生们实习期间的考核和综合表现来确定其最终的助学金额。</p>
	</div>
	<div class="sq_go">
		<p>信息无误，确认提交</p>
	</div>
</div>

<br>
<br>
<br>
<br>
<br>
<script>
    var sqzxj_name = $('.sqzxj_name .sqzxj_name1').text();
    var zxjmoney = $("input[name='money']").val();
    var gqzt = $("select[name='type']").val();
    $('.sq_go p').click(function(event) {
        $.ajax({
                url : "updategrants",
                type : 'post',
                data : {
                   sqzxj_name:sqzxj_name,
                   zxjmoney:$("input[name='money']").val(),
                   uid:$("input[name='uid']").val(),
                   order:$("input[name='order']").val(),
                   gqzt:$("select[name='type']").val()
                },
                success : function(data){
                   console.log(data)
                   if(data == 1) {
                      location.href='/index.php/Home/Person/wallet'
                   }else if(data == 2){
                      location.href='/index.php/Home/Person/wallet'
                   }else if(data == 3){
                      location.href='/index.php/Home/Person/wallet'
                   };
                }
            });
    });
</script>
<script>
    var ordersc = $("input[name='order']").val();
    // alert(ordersc);
    if (ordersc == "") {
       $('.sq_go p').click(function(event) {
           alert("您实习期还未结束，目前还不能申请助学金，同学们实习期结束后我们将统一时间开放！");
       });
    };
</script>
</body>
</html>