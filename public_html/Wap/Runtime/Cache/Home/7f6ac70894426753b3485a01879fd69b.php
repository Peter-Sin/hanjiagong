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
填写报名信息
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

<div id="lll" style="display:none"><?php echo ($info['cre_num']); ?></div>
<!-- 已认证 -->
<div class="yirenzheng" style="display:none">
    <div class="yesrenzheng">
        <span style='margin-right:2rem'>认证状态</span>
        <span>已认证</span>
    </div>
</div>
<!-- 未认证 -->
<div class="weirenzheng" style="display:none">
    <div class="norenzheng">
        <span>认证状态</span>
        <span>您还未认证，赶快填写<a href="/index.php/Home/Person/certification">认证</a>吧</span>
    </div>
</div>
<!--填写报名信息-->
<div class="enroll" >
	
	<div class="enroll_xx">
		<!-- <div class="rzzt">
			<span>认证状态</span>
			<span>您还未实名认证，赶快去<a href="#">认证</a>吧</span>
		</div> -->
		<div class="qiye">
			<span>企业</span>
			<span>龙子人力资源合作的企业</span>
			<!-- <span class='qiye_xiala'><img src="/Public/images/BM-ck02.png"></span> -->
		</div>
		<!-- 企业详情 -->
		<div class="qiye_xq">
			<a href="#">昆山联滔电子有限公司</a><a href="#">昌硕科技（上海）有限公司</a><a href="#">世硕电子（昆山）有限公司</a>
			<a href="#">铠嘉电脑配件有限公司立迅：电子&昆山联滔</a><!-- <a href="#">富士康郑州园区</a><a href="#">富士康郑州园区</a>
			<a href="#">富士康郑州园区</a><a href="#">富士康郑州园区</a><a href="#">富士康郑州园区</a> -->
		</div>

        <div class="qiye_id" style="display:none">            
            <span><?php echo ($list['id']); ?></span>
        </div>
        <div class="recode_id" style="display:none">            
            <span><?php echo ($info['recode']); ?></span>
        </div>
        <div class="user">
            <span>姓名</span>
            <span><?php echo ($info['name']); ?></span>
        </div>
		<div class="tjperson">
			<span>推荐人</span>
			<input type="text" name="tjperson" value="<?php echo ($recode); ?>" id='tjperson' placeholder="选填">
			<span ontouchstart = "return false;" class='changan'>长按验证推荐人</span>
		</div>
		<div class="enrolldj">
			<span>报名定金</span>
			<span class='enrolldj1'>100</span>元
		</div>
        <!-- 弹框 -->
		<div class="xxxx" style="display:none;">
		    <ul class="clear">
		    	<li><span>推荐码:</span><span class='user_tjm'>AAAAAA</span></li>
		    	<li><span>用户名:</span><span class='user_name'>独舞的影子</span></li>
		    </ul>
		</div>

	</div>
	
	<div class="zhuyi">
		<input type="checkbox"/>
		<span>我已阅读并同意</span><span><a href="http://www.cusdc.cn/index.php/Home/News/gfggxq?id=11">《龙子人力资源勤工俭学用户协议》</a></span>
	</div>
	<div class="sq_go">
		<p>提交信息，去支付</p>
	</div>
	<div class="tishi">
		<p>*提示：因各个学校的放假时间不同，所以出发时间待定，我们将会根据实际情况安排大家的出发时间，并分配大家到相应的用人单位实习，报名后必须服从安排与分配！</p>
	</div>
</div>


<br>
<br>
<br>
<br>
<br>
<script>

    var jkl = $('#lll').text();
   
    console.log(jkl)
    if (jkl == 0) {
       $('.weirenzheng').show();  
       $('.enroll').hide();
    }else if(jkl == 1){
       $('.yirenzheng').show();
    }
    
</script>
    
<script>
    var qiye_id = $('.qiye_id span').text();
    var tjperson = $("input[name='tjperson']").val();
    var enrolldj = $('.enrolldj .enrolldj1').text();
    var recode_id = $('.recode_id span').text();
    $(".sq_go p").click(function(event) {
        
        //是否同意参赛协议
        var ms = $(".zhuyi input").prop('checked');
        if (ms == false) {
            alert("未同意协议不允许报名");
            ok = false;
            return false;
        } else {
            ok = true
        }

            $.ajax({
                url : "enroll",
                type : 'post',
                data : {
                    qiye_id:qiye_id,
                    tjperson:$("input[name='tjperson']").val(),
                    enrolldj:enrolldj,
                    recode_id:recode_id      
                },
                success : function(data){
                   console.log(data)
                   if (data.num == 1) {
                      alert('报名信息已提交，点击确定跳转支付页面')
                       // $.ajax({
                       //      url : "/index.php/Home/Pay/pay",
                       //      type : 'post',
                       //      data : {
                       //          order:data.order,    
                       //      },
                       //      success : function(data){
                       //         console.log(data)
                   
                       //      }
                       //  });
                      location.href="/index.php/Home/Pay/pay?order=" + data.order +"&iswx="+data.iswx;
                   }else if(data.num == 2){
                      alert('用户已报名该工作');  
                   }else if(data.num == 0){
                      alert('报名失败')
                   }else if(data.num == 3){
                      alert('自己不能推荐自己')
                   };
                }
            });
       
    });
</script>

<script>
    $('.changan').on("touchstart",function(event) {
    	 var tjperson = $("input[name='tjperson']").val();
          $.ajax({
                    url : "getRecodeUserName",
                    type : 'post',
                    data : {
                          tjperson:$("input[name='tjperson']").val(),
                    },
                    success : function(data){
                       console.log(data)
                       if (data.num == 1) {
                       
                       	    $('.xxxx').show();
                       	    $('.user_name').html(data.recodename);
                            $('.user_tjm').html(tjperson);
                       }else {
                       	    
                            $('.xxxx').show();
                            $('.xxxx ul').hide();
                            $('.xxxx').css("background","url(/Public/images/BM-bg2.png) no-repeat");
                            $('.xxxx').css({                            	
                            	"background-size":"15.9rem 2.9rem",
                            	// "background":"no-repeat",
                            	"bottom":"4.5rem"
                            	});
                       };
           
                    }
                });

      
    });
    
    $('.changan').on("touchend",function(event) {
       $('.xxxx').hide();
    });



    // 企业下拉
    // $('.qiye_xiala').click(function(event) {
    // 	$(".qiye_xq").fadeToggle(500);
    // });
</script>
</body>
</html>