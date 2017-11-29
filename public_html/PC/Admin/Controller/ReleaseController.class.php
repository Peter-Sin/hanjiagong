<?php
namespace Admin\Controller;
use Think\Controller;
class ReleaseController extends AllowController {
	//商品列表和搜索和分页
    public function index(){
      $where=array();
      if (!empty($_GET['title'])) {
        $where['title']=array("like","%{$_GET['title']}%");   
      }
      $mod=M("release");
      $sou=$mod->where($where)->count();
      $pan=new \Think\Page($sou,20);
      $pan->setConfig("prev","上一页");
      $pan->setConfig("next","下一页");
      $list=$mod->where($where)->order("id desc")->limit($pan->firstRow,$pan->listRows)->select();
      $user=M("user");
      foreach ($list as $key=>$val){
        $uid=$val['uid'];
        $list[$key]['username']=$user->where("id='$uid'")->getField('name');
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

   //设置状态
   public function statu(){
      $id=$_GET['id'];
      $mod=M("release");
      $list=$mod->where("id=$id")->find();
      $data['statu']=$list['statu']==0?1:0;
      $info=$mod->where("id=$id")->save($data);
      if($info){
         $this->ajaxReturn(1,'json');
      }
   }

  public function addcontent(){
    $id=$_GET['id'];
    $release=M("release");
    $list=$release->where("id='$id'")->find();
    $this->assign('list',$list);
    $this->display("addcontent");
  }

  public function updatecontent(){
      $release=M("release");
      $where['id']=$_POST['id'];
      $style=$_POST['style'];
      switch($style){
        case 1:
        $data['demand']=$_POST['content'];
        break;
        case 2:
        $data['content']=$_POST['content'];
        break;
      }
      $res=$release->where($where)->save($data);
      if($res){
            $this->success("添加成功",U("Release/addcontent?id=$_POST[id]"));
        }else{
            $this->error("添加失败",U("Release/addcontent?id=$_POST[id]"));
        }

  }

    public function add(){
      $mod=M('release');  
        // $clist=$mod->order("concat(path,',',id)")->select();
        // foreach($clist as $key=>$value){ 
        //    $d=$value['path'];
        //       $emp=explode(',',$d); 
        //       $len=count($emp)-1;
        //       //print_r($len);
        //       $clist[$key]['name']=str_repeat('|--',$len).$value['name'];    
        //   }
        // $this->assign("clist",$clist);
        $this->display("add");  
    }


    //添加活动加活动图片
    public function insert(){  
      $mod = M('release');   
      $data['title']=$_POST['title'];
      $data['begin_time']=$_POST['begin'];
      $data['end_time']=$_POST['end'];
      $data['close_time']=$_POST['close'];
      $data['time']=date('Y-m-d H:i:s');
      $data['address']=$_POST['address'];
      $data['total']=$_POST['total'];
      $data['town']=$_POST['town'];
      $data['money']=$_POST['money'];
      $data['type']=$_POST['type'];
      $data["tel"]=$_POST["tel"];
      $data["contacts"]=$_POST["contacts"];
      $data["uid"]='0';
      $mod->create($data);
      $inf=$mod->add();
      if($inf){
        $this->success("添加成功",U("Release/index"));
      }else{
        $this->error("添加失败");
      }      
    }


   //删除活动
   public function del(){
      $id=$_GET['id'];
      $mod=M("release");
      $res=$mod->where("id=$id")->delete();
    	if($res){
            $this->success("删除成功",U("Company/index"));
        }else{
            $this->error("删除失败",U("Company/index"));
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


    public function edit(){ 
      $id=$_GET["id"];
      $release=M("release");
      $list=$release->where("id='$id'")->select();
      $this->assign("list",$list);
      $this->display("edit");
    }


           //编辑商品
    public function update(){ 
       $id=$_POST['id'];
      $mod = M('release');   
      $data['title']=$_POST['title'];
      if(!empty($_POST['begin'])){
        $data['begin_time']=$_POST['begin'];
      }
      if(!empty($_POST['end'])){
        $data['end_time']=$_POST['end'];
      }
      if(!empty($_POST['close'])){
        $data['close_time']=$_POST['close'];
      }
      // $data['time']=date('Y-m-d H:i:s');
      $data['address']=$_POST['address'];
      $data['total']=$_POST['total'];
      $data['town']=$_POST['town'];
      $data['money']=$_POST['money'];
      if(!empty($_POST['type'])){
       $data['type']=$_POST['type'];
      }
      $data["tel"]=$_POST["tel"];
      $data["contacts"]=$_POST["contacts"];
      $inf=$mod->where("id='$id'")->save($data);
      if($inf){
        $this->success("修改成功",U("Release/index"));
      }else{
        $this->error("修改失败");
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
   



