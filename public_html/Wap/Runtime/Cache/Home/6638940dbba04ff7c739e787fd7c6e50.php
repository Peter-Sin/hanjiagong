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
我推荐的人
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
<!--我推荐的人-->
<div class="tuijian">
	<div class="tuijian_tab">
		<ul class="clear Tab">
			<li class="active">所有</li>
			<li>未支付</li>
            <li>已支付</li>
			<!-- <li>工期中</li>
			<li>工期完</li>	 -->		
			<li>已申请</li>
		</ul>
	</div>
	<div class="tuijian_list">
		<!--所有-->
		<div class="tuijian_lines">
			<ul class="clear">
				<!-- <?php if(is_array($list)): foreach($list as $key=>$val): ?><li class="tuijian_line">
						<div class="tjline_left">
							<img src="/Public/images/TJ-touxiang.png"/>
						</div>
						<div class="tjline_right">
							<ul class="clear">
								<li><span>张碧晨</span><span>已报名</span></li>
								<li>
									<span>注册时间：</span>
									<span>2017-10-15</span>								
									<span>100元</span>
									<span>获得佣金：</span>
								</li>
							</ul>
						</div>
					</li><?php endforeach; endif; ?> -->
			</ul>
		</div>
		
		<!--已报名-->
		<div class="ybm_lines" style="display: none;">
			<ul class="clear">											
				<!-- <li class="tuijian_line">
					<div class="tjline_left">
						<img src="/Public/images/TJ-touxiang.png"/>
					</div>
					<div class="tjline_right">
						<ul class="clear">
							<li><span>张碧晨</span><span>已报名</span></li>
							<li>
								<span>注册时间：</span>
								<span>2017-10-15</span>								
								<span>100元</span>
								<span>获得佣金：</span>
							</li>
						</ul>
					</div>
				</li> -->
			</ul>
		</div>
		<!--工期中-->
		<div class="gqz_lines" style="display: none;">
			<ul class="clear">											
				<!-- <li class="tuijian_line">
					<div class="tjline_left">
						<img src="/Public/images/TJ-touxiang.png"/>
					</div>
					<div class="tjline_right">
						<ul class="clear">
							<li><span>张碧晨</span><span>工期中</span></li>
							<li>
								<span>注册时间：</span>
								<span>2017-10-15</span>								
								<span>100元</span>
								<span>获得佣金：</span>
							</li>
						</ul>
					</div>
				</li> -->
			</ul>
		</div>
		<!--工期完-->
		<div class="gqz_lines" style="display: none;">
			<ul class="clear">											
				<!-- <li class="tuijian_line">
					<div class="tjline_left">
						<img src="/Public/images/TJ-touxiang.png"/>
					</div>
					<div class="tjline_right">
						<ul class="clear">
							<li><span>张碧晨</span><span>工期完</span></li>
							<li>
								<span>注册时间：</span>
								<span>2017-10-15</span>								
								<span>100元</span>
								<span>获得佣金：</span>
							</li>
						</ul>
					</div>
				</li> -->
			</ul>
		</div>
		<!--已提现-->
		<div class="gqz_lines" style="display: none;">
			<ul class="clear">											
				<!-- <li class="tuijian_line">
					<div class="tjline_left">
						<img src="/Public/images/TJ-touxiang.png"/>
					</div>
					<div class="tjline_right">
						<ul class="clear">
							<li><span>张碧晨</span><span>已提现</span></li>
							<li>
								<span>注册时间：</span>
								<span>2017-10-15</span>								
								<span>100元</span>
								<span>获得佣金：</span>
							</li>
						</ul>
					</div>
				</li> -->
			</ul>
		</div>
	</div>
	<script>
    	 $(function () {
             $(".Tab li").click(function(){
                    $(this).addClass("active").siblings().removeClass("active");
                    var index = $(this).index();
                    $(".tuijian_list>div").eq(index).show().siblings().hide()
                });
            }); 
    </script>
</div>


<br>
<br>
<br>
<br>
<br>
<script>
        var page = 0;
        var name = "";
        var target=true;
        $.ajax({
            url:"irecodeman",
            type:"POST",
            data:{
                name:"所有",
                page:0
            },
            success:function (data) {
                console.log(data);
                var html = "";
                for(var i=0; i<data.length; i++){
                    var time = data[i].time.substring(0,10)
                   
                        html+=  "<li class='tuijian_line'>" +
                                    "<div class='tjline_left'>"+
                                         "<img src='/Public/images/TJ-touxiang.png'/> "+
                                    "</div>"+
                                    "<div class='tjline_right'>"+
                                          "<ul class='clear'>"+
                                                "<li>"+
                                                	"<span>"+data[i].username+"</span>"+
                                                	"<span>"+data[i].statuinfo+"</span>"+												
                                               "</li>"+
                                               "<li>"+
                                                	"<span>注册时间:</span>"+
                                                	"<span>"+data[i].time+"</span>"+	
                                                	"<span>"+data[i].money+"</span>"+
                                                	"<span>获得佣金:</span>"+											
                                               "</li>"+
                                          "</ul>"+
                                    "</div>"+
                                "</li>"
                   
                }
                $(".tuijian_list>div").eq(0).find("ul").html(html)
            }
        });
        $(".tuijian_tab li").click(function(){
            var self = $(this);
            var index = self.index();            
            console.log(index);
            name = $(this).text();
            page = 0;
            target = true;
            $.ajax({
                url:"irecodeman",
                type:"POST",
                data:{
                    name:name,
                    page:page
                },
                success:function(data){
                    var html = "";
                    for(var i=0; i<data.length; i++){
                        var time = data[i].time.substring(0,10)
                       
                           html+=  "<li class='tuijian_line'>" +
                                    "<div class='tjline_left'>"+
                                         "<img src='/Public/images/TJ-touxiang.png'/> "+
                                    "</div>"+
                                    "<div class='tjline_right'>"+
                                          "<ul class='clear'>"+
                                                "<li>"+
                                                	"<span>"+data[i].username+"</span>"+
                                                	"<span>"+data[i].statuinfo+"</span>"+												
                                               "</li>"+
                                               "<li>"+
                                                	"<span>注册时间:</span>"+
                                                	"<span>"+data[i].time+"</span>"+	
                                                	"<span>"+data[i].money+"</span>"+
                                                	"<span>获得佣金:</span>"+											
                                               "</li>"+
                                          "</ul>"+
                                    "</div>"+
                                "</li>"
                   
                       
                    }
                   $(".tuijian_list>div").eq(index).find("ul").html(html)
                }
            })
        });
        $(document).scroll(function(){
            name = $(".tuijian_tab li.active").text();
            var index = $(".tuijian_tab li.active").index();
            var top = $(document).scrollTop();
            var wintop = $(window).height();
            var docHeight=$(document).height();
            if(docHeight-top<=wintop*2 ){
                console.log(name,page);
                if(target){
                    page ++;
                    console.log(name,page);
                    $.ajax({
                        url:"irecodeman",
                        type:"POST",
                        async: false,
                        data:{
                            name:name,
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
                                    
                                       html+=  "<li class='tuijian_line'>" +
                                    "<div class='tjline_left'>"+
                                         "<img src='/Public/images/TJ-touxiang.png'/> "+
                                    "</div>"+
                                    "<div class='tjline_right'>"+
                                          "<ul class='clear'>"+
                                                "<li>"+
                                                	"<span>"+data[i].username+"</span>"+
                                                	"<span>"+data[i].statuinfo+"</span>"+												
                                               "</li>"+
                                               "<li>"+
                                                	"<span>注册时间:</span>"+
                                                	"<span>"+data[i].time+"</span>"+	
                                                	"<span>"+data[i].money+"</span>"+
                                                	"<span>获得佣金:</span>"+											
                                               "</li>"+
                                          "</ul>"+
                                    "</div>"+
                                "</li>"
                   
                       
                    }
                   $(".tuijian_list>div").eq(index).find("ul").html(html)
                            }
                        }
                    })
                }
            }
        });
</script>
</body>
</html>