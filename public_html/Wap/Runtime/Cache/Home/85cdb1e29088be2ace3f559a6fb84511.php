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
    <link href="/Public/css/gonggao.css" rel="stylesheet">   
    <script src="/Public/js/jquery.js"></script>
    <script src="/Public/js/style.js"></script>
    <title>龙子人力资源</title>
</head>
<body>
<div class="box"></div>
<div class="index_header">
    <a href="javascript:history.go(-1);" class="left"><img src="/Public/images/XQY-fh.png"/></a>
龙子人力资源
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
<!--龙子人力资源-->
<div class="lzrlzy">
    <!-- <?php if(is_array($list)): foreach($list as $key=>$val): ?>-->
    	<!-- <div class="lzrlzy_line">
    		<div class="lzrlzy_line1">
    			<p><span><?php echo ($val["time"]); ?></span></p>
    		</div>
    		<div class="lzrlzy_line2">
    			<p><?php echo ($val["title"]); ?></p>
    			<p><?php echo ($val["content"]); ?></p>
    		</div>
    	</div> -->
   <!--<?php endforeach; endif; ?> -->
	<!-- <div class="lzrlzy_line">
		<div class="lzrlzy_line1">
			<p><span>2017年10月20日</span><span>18:00</span></p>
		</div>
		<div class="lzrlzy_line2">
			<p>系统信息</p>
			<p>亲爱的迪丽热巴，您好，您已成功报名龙子人力资源寒假勤工俭学，放假时间出来后，记得去个人中心填写您的出发时间哦~</p>
		</div>
	</div> -->
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
            url:"systeminfo",
            type:"POST",
            data:{
                
                page:0
            },
            success:function (data) {
                console.log(data);
                var html = "";
                for(var i=0; i<data.length; i++){
                    var time = data[i].time.substring(0,10)
                   
                       html+= "<div class='lzrlzy_line'>"+
                                  "<div class='lzrlzy_line1'>"+
                                       "<p>"+
                                           "<span>"+data[i].time+"</span>"+
                                       "</p>"+
                                  "</div>"+
                                  "<div class='lzrlzy_line2'>"+
                                        "<p>"+data[i].title+"</p>"+
                                        "<p>"+data[i].content+"</p>"+
                                  "</div>"+
                       "</div>"
                }
                $(".lzrlzy").html(html)
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
                        url:"systeminfo",
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
                            
                             html+= "<div class='lzrlzy_line'>"+
                                      "<div class='lzrlzy_line1'>"+
                                           "<p>"+
                                               "<span>"+data[i].time+"</span>"+
                                           "</p>"+
                                     "</div>"+
                                  "<div class='lzrlzy_line2'>"+
                                        "<p>"+data[i].title+"</p>"+
                                        "<p>"+data[i].content+"</p>"+
                                  "</div>"+
                              "</div>"
                         }
                       $(".lzrlzy").append(html)
                            }
                        }
                    })
                }
            }
        });
</script>
</body>
</html>