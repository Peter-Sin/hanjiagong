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
 工作环境详情 <span class="pic_tuce" style="display:none;"><?php echo ($list["id"]); ?></span>
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

<!-- <div class="index_footer">
    <ul class="clear">
    	<li><a href="#"><img src="/Public/images/XQY-phone.png"/></a></li>
    	<li><a href="#"><img src="/Public/images/XQY-qq.png"/></a></li>
    	<li><a href="#"><img src="/Public/images/XQY-baoming.png"/></a></li>
    	<li><a href="#"><img src="/Public/images/XQY-share.png"/></a></li>
    </ul>   
</div> -->

<!--公司详情-->

<div class="company_tuce">
    <div class="tuce_title">
        <p><?php echo ($list["name"]); ?></p>
    </div>
    <div class="tuce_line">
       <ul class="clear">
           <li>
              <img src="/Public/images/XQY-picpic.png"/>
              <p>员工宿舍</p> 
           </li>
       </ul>
        
        <!-- <img src="/Public/images/XQY-picpic.png"/>
        <img src="/Public/images/XQY-picpic.png"/>
        <img src="/Public/images/XQY-picpic.png"/>
        <img src="/Public/images/XQY-picpic.png"/>
        <img src="/Public/images/XQY-picpic.png"/> -->
    </div>
</div>

<br>
<br>
<br>
<br>
<br>
<script>
        var pic_tuce = $('.pic_tuce').text();
        var page = 0;
        
        var target=true;
        $.ajax({
            url:"cimg",
            type:"POST",
            data:{
                pic_tuce:pic_tuce,
                page:0
            },
            success:function (data) {
                console.log(data);
                var html = "";
                for(var i=0; i<data.length; i++){
                    // var time = data[i].time.substring(0,10)
                   
                       html+= "<li>"+
                          "<img src='/Public/images/company/"+data[i].img+"'>"+
                          "<p>"+data[i].title+"</p>"+
                       "</li>"
                }
                $(".tuce_line ul").html(html)
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
                        url:"cimg",
                        type:"POST",
                        async: false,
                        data:{
                            pic_tuce:pic_tuce,
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
                                    // var time = data[i].time.substring(0,10)
                            
                        html+= "<li>"+
                              "<img src='/Public/images/company/"+data[i].img+"'>"+
                              "<p>"+data[i].title+"</p>"+
                           "</li>"
                    }
                   $(".tuce_line ul").append(html)
                            }
                        }
                    })
                }
            }
        });
</script>
</body>
</html>