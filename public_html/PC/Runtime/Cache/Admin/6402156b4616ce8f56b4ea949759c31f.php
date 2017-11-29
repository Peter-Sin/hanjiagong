<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>

<html lang="en">

<head>

<title>龙子网</title>

<meta charset="UTF-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" href="/Public/Admin/css/bootstrap.min.css" />

<link rel="stylesheet" href="/Public/Admin/css/bootstrap-responsive.min.css" />

<link rel="stylesheet" href="/Public/Admin/css/colorpicker.css" />

<link rel="stylesheet" href="/Public/Admin/css/datepicker.css" />

<link rel="stylesheet" href="/Public/Admin/css/uniform.css" />

<link rel="stylesheet" href="/Public/Admin/css/select2.css" />

<link rel="stylesheet" href="/Public/Admin/css/matrix-style.css" />

<link rel="stylesheet" href="/Public/Admin/css/matrix-media.css" />

<link rel="stylesheet" href="/Public/Admin/css/bootstrap-wysihtml5.css" />

<link href="/Public/Admin/font-awesome/css/font-awesome.css" rel="stylesheet" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<script src="/Public/Admin/js/jquery.min.js"></script> 

</head>

<body>



<!--Header-part-->

<div id="header">

  <h1><a href="dashboard.html">龙子网</a></h1>

</div>

<!--close-Header-part--> 



<!--top-Header-menu-->





<!--start-top-serch-->

<!--sidebar-menu-->



<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>

  <ul>

    <li><a href="/index.php/Admin/Index/index"><i class="icon icon-home"></i> <span>后台首页</span></a> </li>



    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>用户管理</span> <span class="label label-important"></span></a>

      <ul>

        <?php if($_SESSION['statu'] == 1): ?><li><a href="/index.php/Admin/User/userManager">管理员</a></li>
            <li><a href="/index.php/Admin/User/userManagerAdd">添加管理员</a></li>
            <li><a href="/index.php/Admin/User/userList">网站用户</a></li>

        <?php else: endif; ?>

        <li><a href="/index.php/Admin/User/userinfo">个人信息</a></li>

      </ul>

    </li>


    <li class="submenu" > <a href="#"><i class="icon icon-th-list"></i> <span>助学金</span> <span class="label label-important"></span></a>
        <ul>
            <li><a href="/index.php/Admin/Grants/index">助学金申请</a></li>
        </ul>
    </li> 



  <li class="submenu" > <a href="#"><i class="icon icon-th-list"></i> <span>提现</span> <span class="label label-important"></span></a>
      <ul>
          <!-- <li><a href="/index.php/Admin/shipin/add">添加视频</a></li> -->
          <li><a href="/index.php/Admin/Deposit/index">提现申请</a></li>
          
      </ul>
  </li>
    

  <li class="submenu" > <a href="#"><i class="icon icon-th-list"></i> <span>企业</span> <span class="label label-important"></span></a>
      <ul>
        <!-- <li><a href="/index.php/Admin/Company/add">添加企业</a></li> -->
        <li><a href="/index.php/Admin/Company/index">企业信息</a></li>
        <!-- <li><a href="/index.php/Admin/Lvyfenlei/add">添加分类</a></li> -->
        <!-- <li><a href="/index.php/Admin/Lvyfenlei/index">分类管理</a></li> -->
        <!-- <li><a href="/index.php/Admin/lvyou/addglue">添加攻略游记</a></li> -->
        <!-- <li><a href="/index.php/Admin/lvyou/glueindex">攻略游记信息</a></li> -->
      </ul>

  </li>





  <li class="submenu" > <a href="#"><i class="icon icon-th-list"></i> <span>资源</span> <span class="label label-important"></span></a>
      <ul>
        <!-- <li><a href="/index.php/Admin/shijian/add">发布实践</a></li> -->
        <li><a href="/index.php/Admin/Release/index">资源信息</a></li>
        <!-- <li><a href="/index.php/Admin/ershou/add">发布二手</a></li> -->
        <!-- <li><a href="/index.php/Admin/ershou/index">二手信息</a></li> -->
        <!-- <li><a href="/index.php/Admin/yule/add">发布娱乐</a></li> -->
        <!-- <li><a href="/index.php/Admin/yule/index">娱乐信息</a></li> -->
        <!-- <li><a href="/index.php/Admin/zufang/add">发布租房</a></li> -->
        <!-- <li><a href="/index.php/Admin/zufang/index">租房信息</a></li> -->
      </ul>
  </li>


   <li class="submenu" > <a href="#"><i class="icon icon-th-list"></i> <span>消息</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="/index.php/Admin/Info/index">官方消息</a></li>
      </ul>
  </li>


  <li class="submenu" > <a href="#"><i class="icon icon-th-list"></i> <span>分类</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="/index.php/Admin/Fenlei/index">分类</a></li>
        <!-- <li><a href="/index.php/Admin/Fenlei/add">添加分类</a></li> -->
      </ul>
    </li>
    <li class="submenu" > <a href="#"><i class="icon icon-th-list"></i> <span>新闻</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="/index.php/Admin/Xinwen/index">新闻管理</a></li>
        <!-- <li><a href="/index.php/Admin/Xinwen/add">添加新闻</a></li> -->
        <li><a href="/index.php/Admin/Xinwen/select">未审核</a></li>
        <li><a href="/index.php/Admin/Xinwen/hnnew">马拉松</a></li>
      </ul>
    </li>
    <li class="submenu" > <a href="#"><i class="icon icon-th-list"></i> <span>体育</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="/index.php/Admin/Tiyu/index">体育新闻管理</a></li>
        <!-- <li><a href="/index.php/Admin/Tiyu/add">添加体育新闻</a></li> -->
        <li><a href="/index.php/Admin/Ball/index">足球频道</a></li>
        <!-- <li><a href="/index.php/Admin/Ball/add">添加足球信息</a></li> -->
        <li><a href="/index.php/Admin/Mingshi/index">查看名师</a></li>
        <!-- <li><a href="/index.php/Admin/Mingshi/add">添加名师</a></li> -->
        <li><a href="/index.php/Admin/Star/index">查看明星</a></li>
        <!-- <li><a href="/index.php/Admin/Star/add">添加明星</a></li> -->
        <li><a href="/index.php/Admin/Saishi/index">赛事公告</a></li>
        <!-- <li><a href="/index.php/Admin/Saishi/add">添加公告</a></li> -->
        <li><a href="/index.php/Admin/Zhishi/index">体育知识</a></li>
        <!-- <li><a href="/index.php/Admin/Zhishi/add">添加知识</a></li> -->
      </ul>
    </li>
    <li class="submenu" > <a href="#"><i class="icon icon-th-list"></i> <span>文学</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="/index.php/Admin/Wenxue/index">文学管理</a></li>
        <!-- <li><a href="/index.php/Admin/Wenxue/add">添加文章</a></li> -->
        <li><a href="/index.php/Admin/Shetuan/index">社团管理</a></li>
        <li><a href="/index.php/Admin/Wenxue/select">未审核</a></li>
        <!-- <li><a href="/index.php/Admin/Shetuan/add">添加社团</a></li> -->
        <li><a href="/index.php/Admin/Writer/index">作家管理</a></li>
        <!-- <li><a href="/index.php/Admin/Writer/add">添加作家</a></li> -->
      </ul>
    </li>

    <li class="submenu" > <a href="#"><i class="icon icon-th-list"></i> <span>图册</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="/index.php/Admin/Tuce/index">图册管理</a></li>
        <li><a href="/index.php/Admin/Tuce/add">添加图册</a></li>
      </ul>
    </li>

    <li class="submenu" > <a href="#"><i class="icon icon-th-list"></i> <span>教育培训</span> <span class="label label-important"></span></a>
        <ul>
            <!-- <li><a href="/index.php/Admin/pxjigou/add">添加培训机构</a></li> -->
            <li><a href="/index.php/Admin/pxjigou/index">培训机构信息</a></li>

           <!--  <li><a href="/index.php/Admin/peixun/add">添加培训</a></li>
            <li><a href="/index.php/Admin/peixun/index">培训信息</a></li> -->

            <!-- <li><a href="/index.php/Admin/pxfenlei/add">添加分类</a></li> -->
            <li><a href="/index.php/Admin/pxfenlei/index">分类管理</a></li>
        </ul>
    </li> 




</ul>

</div>


  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> 
        <a href="#" class="tip-bottom" data-original-title="回到后台">
          <i class="icon-home"></i>后台
        </a>
        <a href="#" class="current">官方消息</a> 
      </div>
      <h1>官方消息</h1>
    </div>


    <div class="container-fluid" style="TEXT-ALIGN:center;">
      <hr>
      <div class="row-fluid" >
        <div class="span12" >
          <div class="widget-box" >


            <div class="widget-title"> 
              <span class="icon">
                <i class="icon-th"></i>
              </span>
              <h5>官方消息</h5>
            </div>

            <form action="/index.php/Admin/Xinwen/index" method="get">
              <div class="widget-content nopadding">
                <div style="height:50px;">
                  <div style="float:left; margin:12px 0px 0px 30px;font:18px 微软雅黑;">搜索:</div>
                  <input type="text" name="name" style="width:160px; margin:10px 0px 0px 5px;float:left;" value="<?php echo ($_GET['name']); ?>">  
                  <div style="float:left; margin:0px 0px 0px 30px;font:18px 微软雅黑;">
                      <input type="submit" value="查询" style="width:60px; margin:10px 0px 0px 0px;">
                  </div>
                </div>
              </div>    
            </form>

          
            <a href="/index.php/Admin/Info/add/">
              <div style="float:right; font:18px 微软雅黑; margin:12px 50px 0px 0px;">添加消息
              </div>
            </a>
            <table class="table " >
              <thead>
                <tr>
                  <th><span style="font:15px 微软雅黑,黑体">ID</span></th>
                  <th><span style="font:15px 微软雅黑,黑体">标题</span></th>
                 <!--  <th><span style="font:15px 微软雅黑,黑体">金额</span></th>
                  <th><span style="font:15px 微软雅黑,黑体">账号</span></th>
                  <th><span style="font:15px 微软雅黑,黑体">类别</span></th> -->
                  <th><span style="font:15px 微软雅黑,黑体">时间</span></th>
                  <!-- <th><span style="font:15px 微软雅黑,黑体">状态</span></th> -->
                  <th><span style="font:15px 微软雅黑,黑体">操作</span></th>
                </tr>
              </thead>
              <tbody>
                <?php if(is_array($list)): foreach($list as $key=>$val): ?><tr class="gradeC">
                    <td style="text-align:center"><?php echo ($val["id"]); ?></td>
                    <td style="text-align:center"><?php echo ($val["title"]); ?></td>
                    <!-- <td style="text-align:center"><?php echo ($vale["amount"]); ?></td> -->
                    <!-- <td style="text-align:center"><?php echo ($vale["account"]); ?></td> -->
                    <!-- <td style="text-align:center"><?php echo ($vale["style"]); ?></td> -->
                    <td style="text-align:center"><?php echo ($val["time"]); ?></td>

                    <!-- /*<td style="text-align:center">*/ -->
                      <!-- <a href="/index.php/Admin/Deposit/editstatu/id/<?php echo ($vale["id"]); ?>"> -->
                        <!-- <div class="statu" gid="<?php echo ($vale["id"]); ?>"><?php echo ($vale["status"]); ?></div> -->
                      <!-- </a> -->
                    <!-- </td> -->
                  <!--   <td style="text-align:center">
                      <a href="/index.php/Admin/Xinwen/jiaodian/id/<?php echo ($vale["id"]); ?>">  <div class="jiaodian" gid="<?php echo ($vale["id"]); ?>">
                          <?php if($vale["jiaodian"] == 1): ?>√<?php else: ?>×<?php endif; ?>
                        </div>
                      </a>
                    </td> -->

                    <td class="center">
                      <div style="text-align:center;">
                        <!-- <?php if($vale["statu"] == 0): ?>-->
                            <a href="/index.php/Admin/Info/edit/id/<?php echo ($val["id"]); ?>">修改信息</a>|
                        <!-- <?php else: ?>
                            <?php if($vale["statu"] == 1): ?><a href="/index.php/Admin/Deposit/editstatu/id/<?php echo ($vale["id"]); ?>">修改状态</a>|
                            <?php else: endif; endif; ?> -->

                        <?php if($_SESSION['statu'] == 1): ?><a href="/index.php/Admin/Info/del/id/<?php echo ($val["id"]); ?>">删除</a>
                        <?php else: endif; ?> 
                      </div>
                    </td>

                  </tr><?php endforeach; endif; ?>
              </tbody>
            </table>
            <?php echo ($pageinfo); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
            <script type="text/javascript">
              //是否上架
              $(function(){
                $(".statu").css("cursor","pointer");
                $(".statu").click(function(){
                  var statu = $(this).text();
                  var gid = $(this).attr("gid");
                  var index = $(this).parent().parent().index();
                  $.ajax({
                    url:"editstatu",
                    type:"POST",
                    data:{
                      gid:gid
                    },
                    success:function(data){
                      if(data==1){
                           // var val = abs.html();
                           if(statu=="待审核"){
                              $(".statu").eq(index).text("待打款")
                           }else if(statu=="待打款"){
                              $(".statu").eq(index).text("已提现")
                           }
                        }
                    }
                  })
                })
              });

              //是否新品
              // $(function(){
              //     $(".xinpin").css("cursor","pointer");
              //     $(".xinpin").click(function(){
              //       var abs=$(this);
              //       var  sid=$(this).attr("sid");
              //         $.get("/index.php/Admin/Xinwen/news/",{"id":sid},function(data){
              //           if(data=='yes'){
              //              var val = abs.html();
              //              if(val=="√"){
              //                 abs.html("×");
              //              }else{
              //                 abs.html("√");
              //              }
              //           }
              //         },"text");
              //     });
              // });
              //是否热销
              // $(function(){
              //     $(".rexi").css("cursor","pointer");
              //     $(".rexi").click(function(){
              //         var abs=$(this);
              //         var  rid=$(this).attr("rid");
              //         $.get("/index.php/Admin/Xinwen/hot/",{"id":rid},function(data){
              //           if(data=='yes'){
              //              var val = abs.html();
              //              if(val=="√"){
              //                 abs.html("×");
              //              }else{
              //                 abs.html("√");
              //              }
              //           }
              //         },"text");
              //     });
              // });
          </script>







<!--Footer-part-->

<div class="row-fluid">

  <div id="footer" class="span12"> 2016 &copy; Today <a href="http://themedesigner.in/">我们要一步一步迈向巅峰</a> </div>

</div>

<!--end-Footer-part-->


<script src="/Public/Admin/js/jquery.ui.custom.js"></script> 

<script src="/Public/Admin/js/bootstrap.min.js"></script> 

<script src="/Public/Admin/js/bootstrap-colorpicker.js"></script> 

<script src="/Public/Admin/js/bootstrap-datepicker.js"></script> 

<!-- <script src="/Public/Admin/js/jquery.toggle.buttons.html"></script>  -->

<script src="/Public/Admin/js/masked.js"></script> 

<script src="/Public/Admin/js/jquery.uniform.js"></script> 

<!-- <script src="/Public/Admin/js/select2.min.js"></script>  -->

<script src="/Public/Admin/js/matrix.js"></script> 

<script src="/Public/Admin/js/matrix.form_common.js"></script> 

<!-- <script src="/Public/Admin/js/wysihtml5-0.3.0.js"></script>  -->

<script src="/Public/Admin/js/jquery.peity.min.js"></script> 

<!-- <script src="/Public/Admin/js/bootstrap-wysihtml5.js"></script>  -->

<script src="/Public/Admin/js/jquery.dataTables.min.js"></script> 

<script>

  // $('.textarea_editor').wysihtml5();

</script>

</body>

</html>