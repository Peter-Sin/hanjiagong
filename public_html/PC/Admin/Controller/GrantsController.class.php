<?php
namespace Admin\Controller;
use Think\Controller;
class GrantsController extends AllowController {
	//商品列表和搜索和分页
    public function index(){
      $where=array();
      if (!empty($_GET['title'])) {
        $where['title']=array("like","%{$_GET['title']}%");   
      }
      $mod=M("grants");
      $sou=$mod->where($where)->count();
      $pan=new \Think\Page($sou,20);
      $pan->setConfig("prev","上一页");
      $pan->setConfig("next","下一页");
      $list=$mod->where($where)->order("id desc")->limit($pan->firstRow,$pan->listRows)->select();
      $user=M("user");
      foreach ($list as $key=>$val){
        $uid=$val['uid'];
        $list[$key]['username']=$user->where("id=$uid")->getField('name');
      }
      $this->assign("list",$list);
      $this->assign("pageinfo",$pan->show());
      $this->display("index");
    }

    public function editstatu(){
      $mod=M("grants");
      $where['id']=$_GET['id'];
      $list=$mod->where($where)->select();
      $user=M("user");
      $datainfo['id']=$list[0]['uid'];
        $list[0]['username']=$user->where($datainfo)->getField('username');
      $this->assign('list',$list);
      $this->display("statu");
    }

   	public function statu(){
      	$where['id']=$_POST['id'];
      	$datas['statu']=$_POST['statu'];
      	$mod=M("grants");
        if($datas['statu']==1){
          	$commission=M("commission");
            $datainfo['order']=$mod->where($where)->getField("order");  
            $enroll=M("enroll");
            $list=$enroll->where($datainfo)->find();
            $data['recode']=$list["recode"];
            $data['uid']=$list["uid"];
            $data['cid']=$list["cid"];
            $data['sign']='1';
            $data['amount']='50';
            $data['batch']='2';
            $data['order']=$list["order"];
            $data['time']=date("Y-m-d H:i:s");
            $data['statu']='0';
            $info=$commission->add($data);
            if($info){
                $infodata['grants']='1';
                // $enroll=M("enroll");
                $result=$enroll->where($datainfo)->save($infodata);
                // echo $enroll->getLastSql();
                // dump($enroll);
                // dump($info);
                // dump($result);
                // dump($datainfo);
                // dump($infodata);exit;
                if($result){
          	      $res=$mod->where($where)->save($datas);
                }
            }
        }else{
        	$res=$mod->where($where)->save($datas);
        }
      	if($res){
        	$this->success("修改成功",'./index');
      	}else{
       	 	$this->error("修改失败",'./index');
      	}
   	}


    public function add(){
      	$mod=M('act_fenlei'); 
        $clist=$mod->order("concat(path,',',id)")->select();
        foreach($clist as $key=>$value){ 
           	$d=$value['path'];
            $emp=explode(',',$d); 
            $len=count($emp)-1;
            $clist[$key]['name']=str_repeat('|--',$len).$value['name'];    
        }
        $this->assign("clist",$clist);
        $this->display("add");  
    }


    //添加活动加活动图片
    public function insert(){  
      $c=$_POST['act_fl']; 
      $mod1 = M('act_fenlei');
      $cc=$mod1->where("id=$c")->select();
      $data['act_fl'] =$cc[0]['name'];
      // $data['richeng'] = $_POST['richeng'];   
      $data['title']=$_POST['title'];
      $data['price']=$_POST['price'];
      $data['deadline']=$_POST['deadline'];
      $data['act_time']=$_POST['acttime'];
      $data['uptime']=date('Y-m-d H:i:s');
      $data['address']=$_POST['address'];
      $data['total']=$_POST['total'];
      $data['wen']=$_POST['wen'];
      $data['xiangqing']=$_POST['xiangqing'];
      $data['zanzhushang']=$_POST['zanzhushang'];
      $data['fl_id']=$c;
      $data["tel"]=$_POST["tel"];
      $data["lianxiren"]=$_POST["lianxiren"];
      $data["uid"]='a'.$_SESSION['uid'];
      $mod = M('activities');
      $mod->create($data);
      $inf=$mod->add();
      // var_dump($inf);exit;
      if($inf){
        $this->success("添加成功",U("huodong/index"));
      }else{
         $this->error("添加失败");
      }      
    }


   //删除活动
   public function del(){
      $id=$_GET['id'];
      $mod=M("activities");
      $list=$mod->where("id=$id")->select();
      $mod1=M("act_img");
      $lis=$mod1->where("act_id=$id")->select();
      foreach($lis as $file){
         $urlimg="./Public/images/act_img/".$file['img'];
         $urlimg836="./Public/images/act_img/836_".$file['img'];
         $urlimg418="./Public/images/act_img/418_".$file['img'];
         $urlimg210="./Public/images/act_img/210_".$file['img'];
         $urlimg140="./Public/images/act_img/140_".$file['img'];
         $urlimg40="./Public/images/act_img/40_".$file['img'];
            @unlink($urlimg836); 
            @unlink($urlimg418); 
            @unlink($urlimg210);
            @unlink($urlimg140);
            @unlink($urlimg40);
            @unlink($urlimg); 
      }
          //删除一个表的ID
      $res=$mod->where("id=$id")->delete();
          //删除二个表的ID
      $img=$mod1->where("act_id=$id")->delete();
    	if($res){
            $this->success("删除成功",U("huodong/index"));
        }else{
            $this->error("删除失败",U("huodong/index"));
        }
  }


    // 获取传过来的ID值 和 图片库里面的图片
    public function manage(){
      //获取穿过来的ID值
       $id=$_GET['id'];
      // var_dump($id);exit;
      $mod=M("activities");
      $list=$mod->where("id=$id")->select();
      $this->assign("list",$list);
      //获取图
      $mod1=M("act_img");
      //var_dump($mod1);exit;
      $valus=$mod1->where("act_id=$id")->select();
      $this->assign("valus",$valus);
      $this->display("manage");
    }


  //id里面的图片上传
  public function upload(){
    $id=$_GET['id'];
    // var_dump($_POST);exit;
    $upload=new \Think\Upload();
    //初始化
    $upload->sizeMax=3147528;//初始化大小
    $upload->exts=array("png","gif","jpeg","jpg");//初始化上传类型
    $upload->rootPath="./Public/images/act_img/";//初始化上传路径
    $upload->autoSub=false;
    //var_dump($upload);exit;
    //执行上传
    $info=$upload->upload();
    //var_dump($info);exit;
    if(!$info){
        $this->error("请选择图片",U("huodong/manage?id=$id"));
        exit;
      }else{
        $image = new \Think\Image(); 
        $image->open("./Public/images/act_img/".$info['img']['savename']);

        
        // $image->open("./Public/images/life/yule/".$info['img']['savename']);
        $urlpic="./Public/images/act_img/".$info['img']['savename'];
        @unlink($urlpic);
        $image->text('','./Public/fonts/calibri.ttf',30,'#000000',\Think\Image::IMAGE_WATER_SOUTHWEST)->save("./Public/images/act_img/".$info['img']['savename']);


        $image->thumb(836,836,\Think\Image::IMAGE_THUMB_FIXED)->save("./Public/images/act_img/836_".$info['img']['savename']);
        $image->thumb(418,418,\Think\Image::IMAGE_THUMB_FIXED)->save("./Public/images/act_img/418_".$info['img']['savename']);
        $image->thumb(210,210,\Think\Image::IMAGE_THUMB_FIXED)->save("./Public/images/act_img/210_".$info['img']['savename']);
        $image->thumb(140,140,\Think\Image::IMAGE_THUMB_FIXED)->save("./Public/images/act_img/140_".$info['img']['savename']);
        $image->thumb(40,40,\Think\Image::IMAGE_THUMB_FIXED)->save("./Public/images/act_img/40_".$info['img']['savename']);
        foreach($info as $file){
          $urlimg =$file['savename'];
      }
    }
   
    $data['img'] = $urlimg;
    $data['act_id'] = $id;
    $mod=M("act_img");
    $res=$mod->data($data)->add();
    //var_dump($mod);exit;
    if($res){
        $this->success("添加成功",U("huodong/manage?id=$id"));
      }else{
        $urlimg1="./Public/images/act_img/".$urlimg;
        $urlimg836="./Public/images/act_img/836_".$urlimg;            
        $urlimg418="./Public/images/act_img/418_".$urlimg;
        $urlimg210="./Public/images/act_img/210_".$urlimg;
        $urlimg140="./Public/images/act_img/140_".$urlimg;
        $urlimg40="./Public/images/act_img/40_".$urlimg;
        @unlink($urlimg836);             
        @unlink($urlimg418); 
        @unlink($urlimg210);
        @unlink($urlimg140);
        @unlink($urlimg40);
        @unlink($urlimg1);
        $this->error("添加失败",U("huodong/manage?id=$id"));
    }      
    // $this->display("manage");
  }


  //修改图片封面图 
  public function dis(){
    $id=$_GET['id'];
    //var_dump($_GET);exit;
    $mod=M("act_img");
    $list=$mod->where("id=$id")->select();
    $act_id=$list[0]['act_id'];
    $list=$mod->where("act_id=$act_id")->select();
    $data1['face']=1;
    $data2['face']=2;
    // var_dump($data1);
    // var_dump($data2);exit;
    $mod->where("act_id=$act_id")->save($data1);
    $mod->where("id=$id")->save($data2);
    $this->success("修改成功",U("huodong/manage?id=$act_id"));
    // $this->display("huodong/manage");
  }


    //删除图片
    public function delimg(){
      $id=$_GET['id'];
      $mod=M("act_img");
      $list=$mod->where("id=$id")->select();
      $act_id=$list[0]['act_id'];
      if($list[0]['face']==2){
        $this->success("封面图标不能删",U("huodong/manage?id=$act_id"));  
         exit; 
      }
      foreach($list as $file){
        $urlimg="./Public/images/act_img/".$file['img'];
        $urlimg836="./Public/images/act_img/418_".$file['img'];
        $urlimg418="./Public/images/act_img/418_".$file['img'];
        $urlimg210="./Public/images/act_img/210_".$file['img'];
        $urlimg140="./Public/images/act_img/140_".$file['img'];
        $urlimg40="./Public/images/act_img/40_".$file['img'];
        @unlink($urlimg836); 
        @unlink($urlimg418); 
        @unlink($urlimg210);
        @unlink($urlimg140);
        @unlink($urlimg40);
        @unlink($urlimg); 
      }
      $res=$mod->where("id=$id")->delete();
      if($res){
          $this->success("删除成功",U("huodong/manage?id=$act_id"));
      }else{
          $this->error("删除失败",U("huodong/manage?id=$act_id"));
      }
      // $this->display("huodong/manage");
      // $this->display("index");
    }


         //便利给编辑商品
    public function edit(){
      //查询商品表  
       $mod=M('act_fenlei');  
            // concat(path,id,',')  
            $clist=$mod->order("concat(path,',',id)")->select();    
                $id=$_GET['id'];
                $mod=M("activities");
                $list=$mod->where("id=$id")->select();
                $this->assign("clist",$clist);
                $this->assign("list",$list);
                $this->display("edit");
              }


           //编辑商品
    public function update(){      
            $id=$_GET['id']; 
            $mod=M("activities"); 
            $c=$_POST['act_fl']; 
            $mod1 = M('act_fenlei');
            $cc=$mod1->where("id=$c")->select();
            $data['act_fl'] =$cc[0][name];
            $data['title']=$_POST['title'];
            $data['price']=$_POST['price'];
            if(!empty($_POST['acttime'])){
                $data['act_time']=$_POST['acttime'];
            }
            
            if(!empty($_POST['deadline'])){
                $data['deadline']=$_POST['deadline'];
            }
            if(!empty($_POST['endtime'])){
                $data['end_time']=$_POST['endtime'];
            }       
            $data['news']=0;
            $data['uptime']=date('Y-m-d H:i:s');
            $data['address']=$_POST['address'];
            $data['total']=$_POST['total'];
            $data['xiangqing']=$_POST['xiangqing'];
            $data['zanzhushang']=$_POST['zanzhushang'];
            $data['fl_id']=$c;
            $data["tel"]=$_POST["tel"];
            $data["lianxiren"]=$_POST["lianxiren"];
            $list=$mod->where("id=$id")->data($data)->save();
            if($list){
                $this->success("修改成功",U("huodong/index"));
            }else{
                $this->error("修改失败",U("huodong/index"));
            }
          }


        //详情编辑遍历商品名信息
        public  function xiangqin(){
              $id=$_GET['id'];
              //var_dump($id);
              $mod=M("activities");
              $list=$mod->where("id=$id")->select();
              $this->assign("list",$list);
              $this->display("xiangqing");   
              //var_dump($list); 
            }


   
        //设置是否上下架商品
        public function inon(){
          $id=$_GET['id'];
          //var_dump($id);exit;
          $mod=M("activities");
          $list=$mod->where("id=$id")->find();
          $data['inon']=$list['inon']==1?0:1;
          $ros=$mod->where("id=$id")->save($data);
          if($ros){
            $this->success("修改成功",U("huodong/index"));
              // echo"yes";
          }else{
            $this->error("修改失败",U("huodong/index"));
              // echo"no";
          }
        }


    // 设置商品是否新品
        public function news(){              
          $id=$_GET['id'];
          //var_dump($id);exit;
          $mod=M("activities");
          $list=$mod->where("id=$id")->find();
          //var_dump($list);exit;
          $data['news']=$list['news']==1?0:1;
          $pin= $mod->where("id=$id")->save($data);
          if($pin){
              $this->success("修改成功",U("huodong/index"));
              // echo"yes";
          }else{
            $this->error("修改失败",U("huodong/index"));
          }
          //$this->display("index");
        }


        //设置是否为文学活动
        public function wen(){              
          $id=$_GET['id'];
          //var_dump($id);exit;
          $mod=M("activities");
          $list=$mod->where("id=$id")->find();
          //var_dump($list);exit;
          $data['wen']=$list['wen']==1?0:1;
          $pin= $mod->where("id=$id")->save($data);
          if($pin){
              $this->success("修改成功",U("huodong/index"));
              // echo"yes";
          }else{
            $this->error("修改失败",U("huodong/index"));
          }
          //$this->display("index");
        }




        //设置活动是否热门
        public function hot(){
                $id=$_GET['id'];
                $mod=M("activities");
                $list=$mod->where("id=$id")->find();
                $data['hot']=$list['hot']==1?0:1;
                $rexi= $mod->where("id=$id")->save($data);
      if($rexi){
            $this->success("修改成功",U("huodong/index"));
          }else{
            $this->error("修改失败",U("huodong/index"));
          }
               //$this->display("index");
        }


        public function bmer(){
          // dump($_GET);
          $id=$_GET['id'];
          $where=array();
        if (!empty($_GET['username'])){
           $where['name']=array("like","%{$_GET['username']}%"); 
        }
        $where['hd_id']=$id;

        $mod=M("activities");

        $lis=$mod->where("id=$id")->select();
        $act=$lis[0]["title"];
         //实例化
        $user = M('act_bming');
        //统计用户个数
        $tot=$user->where($where)->count();
        //分页
        $page = new \Think\MyPage($tot,10);
        $this->assign("tot",$tot);
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
          //查询用户信息
        $list=$user->where($where)->limit($page->firstRow,$page->listRows)->select();
        // dump($list);
        //配置分页
        $this->assign("pageinfo",$page->show());
        //配置用户查询信息
        $this->assign("list",$list);
        $this->assign("act",$act);
        //加载模板
       $this->display("reindex");
        }
      }    
   



