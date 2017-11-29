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
龙子网官方号
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
<div class="lzwgfh">
    

   <!--  <?php if(is_array($list)): foreach($list as $key=>$val): ?>-->
      <!-- <a href="#">
    	<div class="lzwgfh_line">
    		<div class="lzwgfh_line1">
    			<p><span><?php echo ($val["time"]); ?></span></p>
    		</div>
    		<div class="lzwgfh_line2">
    			<p><?php echo ($val["title"]); ?></p>
    			<p><?php echo ($val["content"]); ?></p>
    		</div>
    	</div>
      </a>   -->
   <!--<?php endforeach; endif; ?> -->
   
</div>
<br>
<br>
<br>
<script>
        var page = 0;      
        var target=true;
        $.ajax({
            url:"officialinfo",
            type:"POST",
            data:{
                
                page:0
            },
            success:function (data) {
                console.log(data);
                var html = "";
                for(var i=0; i<data.length; i++){
                    // alert(data.length)
                    // var time = data[i].time.substring(0,10)
                       html+= "<a href='/index.php/Home/News/gfggxq?id="+data[i].id+"'>"+
                                   "<div class='lzwgfh_line'>"+
                                          "<div class='lzwgfh_line1'>"+
                                               "<p>"+
                                                   "<span>"+data[i].time+"</span>"+
                                               "</p>"+
                                          "</div>"+
                                          "<div class='lzwgfh_line2'>"+
                                                "<p>"+data[i].title+"</p>"+
                                                // "<p>"+data[i].content+"</p>"+
                                          "</div>"+
                                  "</div>"+
                             "</a>"
                }
                $(".lzwgfh").html(html)
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
                        url:"officialinfo",
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
                            
                             html+= "<a href='/index.php/Home/News/gfggxq?id="+data[i].id+"'>"+
                               "<div class='lzwgfh_line'>"+
                                  "<div class='lzwgfh_line1'>"+
                                       "<p>"+
                                           "<span>"+data[i].time+"</span>"+
                                       "</p>"+
                                  "</div>"+
                                  "<div class='lzwgfh_line2'>"+
                                        "<p>"+data[i].title+"</p>"+
                                        // "<p>"+data[i].content+"</p>"+
                                  "</div>"+
                          "</div>"+
                       "</a>"
                         }
                       $(".lzwgfh").append(html)
                            }
                        }
                    })
                }
            }
        });
</script>
</body>
</html>