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
助学金提现记录
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
<!--助学金申请记录-->
<div class="tx_jilu">
	<div class="zxj_tab">
		<ul class="clear Tab">
			<li class="active">所有</li>
			<li>待审核</li>
			<li>待打款</li>
			<li>已提现</li>			
			<li>无效</li>
		</ul>
	</div>
	                                                                                                         
    <div class="zxjlist">
		<!--所有-->
		<div class="zxj_lines">
			<ul class="clear">
				<!-- <li class="tx_line">
					<div class="zxj_line0">
						<ul class="clear">
							<li>
								<span>提现申请</span><span>待审核</span>
							</li>
							<li>
								<span>申请时间</span><span>2017-10-20 18:00</span>
							</li>
							<li>
								<span>提现金额</span><span>100元</span>
							</li>
							<li><a href="#">查看详情></a></li>
						</ul>
					</div>
				</li>
				<li class="tx_line">
					<div class="zxj_line0">
						<ul class="clear">
							<li>
								<span>提现申请</span><span>待打款</span>
							</li>
							<li>
								<span>申请时间</span><span>2017-10-20 18:00</span>
							</li>
							<li>
								<span>提现金额</span><span>100元</span>
							</li>
							<li><a href="#">查看详情></a></li>
						</ul>
					</div>
				</li>
				<li class="tx_line">
					<div class="zxj_line0">
						<ul class="clear">
							<li>
								<span>提现申请</span><span>无效</span>
							</li>
							<li>
								<span>申请时间</span><span>2017-10-20 18:00</span>
							</li>
							<li>
								<span>提现金额</span><span>100元</span>
							</li>
							<li><a href="#">查看详情></a></li>
						</ul>
					</div>
				</li>
				<li class="tx_line">
					<div class="zxj_line0">
						<ul class="clear">
							<li>
								<span>提现申请</span><span>已提现</span>
							</li>
							<li>
								<span>申请时间</span><span>2017-10-20 18:00</span>
							</li>
							<li>
								<span>提现金额</span><span>100元</span>
							</li>
							<li><a href="#">查看详情></a></li>
						</ul>
					</div>
				</li> -->
			</ul>
	    </div>
        <!--待审核-->
        <div class="dsh_lines">
			<ul class="clear">
				<!-- <li class="tx_line">
					<div class="zxj_line0">
						<ul class="clear">
							<li>
								<span>提现申请</span><span>待审核</span>
							</li>
							<li>
								<span>申请时间</span><span>2017-10-20 18:00</span>
							</li>
							<li>
								<span>提现金额</span><span>100元</span>
							</li>
							<li><a href="#">查看详情></a></li>
						</ul>
					</div>
				</li>			 -->
			</ul>
	    </div>
        <!--待打款-->
        <div class="ydz_lines">
			<ul class="clear">
				<!-- <li class="tx_line">
					<div class="zxj_line0">
						<ul class="clear">
							<li>
								<span>提现申请</span><span>待打款</span>
							</li>
							<li>
								<span>申请时间</span><span>2017-10-20 18:00</span>
							</li>
							<li>
								<span>提现金额</span><span>100元</span>
							</li>
							<li><a href="#">查看详情></a></li>
						</ul>
					</div>
				</li>			 -->
			</ul>
	    </div>
        <!--已提现-->
        <div class="wx_lines">
			<ul class="clear">
				<!-- <li class="tx_line">
					<div class="zxj_line0">
						<ul class="clear">
							<li>
								<span>提现申请</span><span>已提现</span>
							</li>
							<li>
								<span>申请时间</span><span>2017-10-20 18:00</span>
							</li>
							<li>
								<span>提现金额</span><span>100元</span>
							</li>
							<li><a href="#">查看详情></a></li>
						</ul>
					</div>
				</li>			 -->						
			</ul>
	    </div>
	    <!--无效-->
        <div class="ydz_lines">
			<ul class="clear">
				<!-- <li class="tx_line">
					<div class="zxj_line0">
						<ul class="clear">
							<li>
								<span>提现申请</span><span>无效</span>
							</li>
							<li>
								<span>申请时间</span><span>2017-10-20 18:00</span>
							</li>
							<li>
								<span>提现金额</span><span>100元</span>
							</li>
							<li><a href="#">查看详情></a></li>
						</ul>
					</div>
				</li>		 -->	
			</ul>
	    </div>
    </div>
    <script>
    	 $(function () {
             $(".Tab li").click(function(){
                    $(this).addClass("active").siblings().removeClass("active");
                    var index = $(this).index();
                    $(".zxjlist>div").eq(index).show().siblings().hide()
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
            url:"txmx",
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
                   
                        html+=  "<li class='tx_line'>" +
                                    "<div class='zxj_line0'>" +
                                       "<ul class='clear'>"+
                                            "<li>"+
                                               "<span>提现申请</span>"+
                                               "<span>"+data[i].statu+"</span>"+
                                            "</li>"+
                                            "<li>"+
                                               "<span>申请时间</span>"+
                                               "<span>"+data[i].time+"</span>"+
                                            "</li>"+
                                            "<li>"+
                                               "<span>提现金额</span>"+
                                               "<span>"+data[i].amount+"</span>"+
                                            "</li>"+
                                            "<li>"+
                                               "<a href='/index.php/Home/Grants/yjdetail?id="+data[i].id+"'>查看详情></a>"+                                            
                                            "</li>"+
                                       "</ul>"+
                                    "</div>"+
                                "</li>"
                   
                }
                $(".zxjlist>div").eq(0).find("ul").html(html)
            }
        });
        $(".zxj_tab li").click(function(){
            var self = $(this);
            var index = self.index();            
            console.log(index);
            name = $(this).text();
            page = 0;
            target = true;
            $.ajax({
                url:"txmx",
                type:"POST",
                data:{
                    name:name,
                    page:page
                },
                success:function(data){
                    var html = "";
                    for(var i=0; i<data.length; i++){
                        var time = data[i].time.substring(0,10)
                       
                           html+=  "<li class='tx_line'>" +
                                    "<div class='zxj_line0'>" +
                                       "<ul class='clear'>"+
                                            "<li>"+
                                               "<span>提现申请</span>"+
                                               "<span>"+data[i].statu+"</span>"+
                                            "</li>"+
                                            "<li>"+
                                               "<span>申请时间</span>"+
                                               "<span>"+data[i].time+"</span>"+
                                            "</li>"+
                                            "<li>"+
                                               "<span>提现金额</span>"+
                                               "<span>"+data[i].amount+"</span>"+
                                            "</li>"+
                                            "<li>"+
                                               "<a href='/index.php/Home/Grants/yjdetail?id="+data[i].id+"'>查看详情></a>"+                                            
                                            "</li>"+
                                       "</ul>"+
                                    "</div>"+
                                "</li>"
                       
                    }
                   $(".zxjlist>div").eq(index).find("ul").html(html)
                }
            })
        });
        $(document).scroll(function(){
            name = $(".zxj_tab li .active").text();
            var index = $(".zxj_tab li .active").index();
            var top = $(document).scrollTop();
            var wintop = $(window).height();
            var docHeight=$(document).height();
            if(docHeight-top<=wintop){
                console.log(name,page);
                if(target){
                    page ++;
                    console.log(name,page);
                    $.ajax({
                        url:"txmx",
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
                                    
                                        html+=  "<li class='tx_line'>" +
                                    "<div class='zxj_line0'>" +
                                       "<ul class='clear'>"+
                                            "<li>"+
                                               "<span>提现申请</span>"+
                                               "<span>"+data[i].statu+"</span>"+
                                            "</li>"+
                                            "<li>"+
                                               "<span>申请时间</span>"+
                                               "<span>"+data[i].time+"</span>"+
                                            "</li>"+
                                            "<li>"+
                                               "<span>提现金额</span>"+
                                               "<span>"+data[i].amount+"</span>"+
                                            "</li>"+
                                            "<li>"+
                                               "<a href='/index.php/Home/Grants/yjdetail?id="+data[i].id+"'>查看详情></a>"+                                            
                                            "</li>"+
                                       "</ul>"+
                                    "</div>"+
                                "</li>"
                       
                    }
                   $(".zxjlist>div").eq(index).find("ul").html(html)
                            }
                        }
                    })
                }
            }
        });
</script>
</body>
</html>