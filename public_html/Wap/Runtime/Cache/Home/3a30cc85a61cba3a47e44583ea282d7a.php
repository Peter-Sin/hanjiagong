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
    <a style="opacity: 0;" href="javascript:history.go(-1);" class="left"><img src="/Public/images/XQY-fh.png"/></a>
资源圈
    <a href="/index.php/Home/Release/release_job" class="menu right"><img src="/Public/images/ZYQ-fabu.png"/></a>
</div>
<p id="sessionss" style="display:none;"><?php echo ($_SESSION['id']); ?></p>
<!--点击top回到顶部-->
<div class="floatwindow">
    <div class="top">
        <img src="/Public/images/index_fanhuidingbu.png"/>
    </div>
    <div class="release">
        <img src="/Public/images/index_fabu.png"/>
    </div>
</div>
<!--占位用-->
<div class="index_footer">
    <ul class="clear">
    	<li><a href="/index.php/Home/Index/index"><img src="/Public/images/index_footerSY.png"/></a></li>
    	<li><a href="/index.php/Home/Company/company"><img src="/Public/images/index_footerQY.png"/></a></li>
    	<li><a href="/index.php/Home/Release/resource"><img src="/Public/images/index_footerZYQ1.png"/></a></li>
    	<li class="caonima"><a href="/index.php/Home/News/news"><img src="/Public/images/index_footerXX.png"/></a></li>
    	<li class="caonima"><a href="/index.php/Home/Person/person"><img src="/Public/images/index_footerWD.png"/></a></li>
    </ul>   
</div>

<!--菜单页-->

<!--资源圈-->
<div class="resource">
	<!--头部图-->
	<div class="resource_header">
		<img src="/Public/images/index_banner.png"/>
	</div>
	<!--列表详情-->
	 <div class="zxjlist">
		<div class="resource_line">
			<ul class="clear">
			  <!-- <a href="#">
					<li>
						<span>物流仓库包吃住一天150</span><span>个人</span>
					</li>
					<li>
						<span><img src="/Public/images/ZYQ-weizhi.png"/></span><span>郑州市金水区</span>
						<span></span>
					</li>
					<li>
						<span><img src="/Public/images/ZYQ-shijian.png"/></span>
						<span>2017年10月12日</span>
						<span>——</span>
						<span>2017年10月20日</span>
					</li>
					<li>
						<span>日结</span><span>元/天</span><span>150</span>
					</li>
			   </a> -->
			</ul>
		</div>				
	</div>	
</div>
<br>
<br>
<br>
<br>
<br>
<script>
        var page = 0;
       
        var target=true;
       $.ajax({
            url:"resourceinfo",
            type:"POST",
            data:{
                
                page:0
            },
            success:function (data) {
                console.log(data);
                var html = "";
                for(var i=0; i<data.length; i++){
                    var time = data[i].time.substring(0,10)
                   
                        html+=  "<ul class='clear'>"+ 
                                 "<a href='/index.php/Home/Release/details?id="+data[i].id+"'>"+
	                                "<li>"+
		                               "<span>"+data[i].title+"</span>"+
		                            "</li>"+
		                            "<li>"+
		                               "<span>"+
		                                   "<img src='/Public/images/ZYQ-weizhi.png'/>"+
		                               "</span>"+
		                               "<span>"+data[i].town+"</span>"+
		                               "<span>"+data[i].address+"</span>"+
		                            "</li>"+
		                            "<li>"+
		                               "<span>"+
		                                   "<img src='/Public/images/ZYQ-weizhi.png'/>"+
		                               "</span>"+
		                               "<span>"+data[i].begin_time+"</span>"+
		                               "<span>——</span>"+
		                               "<span>"+data[i].end_time+"</span>"+
		                            "</li>"+
		                            "<li>"+
		                               "<span>"+data[i].type+"</span>"+
		                               "<span>元/天</span>"+
		                               "<span>"+data[i].money+"</span>"+
		                            "</li>"+
	                            "</a>"+
	                           "</ul>"
                }
                $(".zxjlist>div").html(html)
            }
        });
        $(document).scroll(function(){
            var top = $(document).scrollTop();
            var wintop = $(window).height();
            var docHeight=$(document).height();
            if(docHeight-top<=wintop){
                console.log(name,page);
                if(target){
                    page ++;
                    console.log(name,page);
                    $.ajax({
                        url:"resourceinfo",
                        type:"POST",
                        async: false,
                        data:{
                            // name:name,
                            page:page
                        },
                        success:function(data){
                            console.log(data);
                            if(data == ""){
                                target=false;
                                return
                            }else{
                                target = true;
                                var html ="";
                                for(var i=0; i<data.length; i++){
                                    var time = data[i].time.substring(0,10)
                                    
                                        html+= "<ul class='clear'>"+ 
                                                "<a href='/index.php/Home/Release/details?id="+data[i].id+"'>"+
	                                                "<li>"+
	                                                   "<span>"+data[i].title+"</span>"+
	                                                "</li>"+
	                                                "<li>"+
	                                                   "<span>"+
	                                                       "<img src='/Public/images/ZYQ-weizhi.png'/>"+
	                                                   "</span>"+
	                                                   "<span>"+data[i].town+"</span>"+
	                                                   "<span>"+data[i].address+"</span>"+
	                                                "</li>"+
	                                                "<li>"+
	                                                   "<span>"+
	                                                       "<img src='/Public/images/ZYQ-weizhi.png'/>"+
	                                                   "</span>"+
	                                                   "<span>"+data[i].begin_time+"</span>"+
	                                                   "<span>——</span>"+
	                                                   "<span>"+data[i].end_time+"</span>"+
	                                                "</li>"+
	                                                "<li>"+
	                                                   "<span>"+data[i].type+"</span>"+
	                                                   "<span>元/天</span>"+
	                                                   "<span>"+data[i].money+"</span>"+
	                                                "</li>"+
                                                "</a>"+
                                               "</ul>"
                    }
                   $(".zxjlist>div").append(html)
                            }
                        }
                    })
                }
            }
        });
</script>
<script>
    var sessionss = $("#sessionss").text();
    // alert(sessionss)
    $(".caonima").click(function(event) {
        
       if ($("#sessionss").text() == "") {
          // alert("请先登录")
          $(".caonima a").attr("href","/index.php/Home/Login/index"); 
       };
    });
</script>
</body>
</html>