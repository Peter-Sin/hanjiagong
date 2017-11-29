<?php
namespace Admin\Controller;
use Think\Controller;
class CompanyController extends AllowController {
	//商品列表和搜索和分页
    public function index(){
      $where=array();
      if (!empty($_GET['title'])) {
        $where['title']=array("like","%{$_GET['title']}%");   
      }
      $mod=M("company");
      $sou=$mod->where($where)->count();
      $pan=new \Think\Page($sou,20);
      $pan->setConfig("prev","上一页");
      $pan->setConfig("next","下一页");
      $list=$mod->where($where)->order("id desc")->limit($pan->firstRow,$pan->listRows)->select();
      $this->assign("list",$list);
      $this->assign("pageinfo",$pan->show());
      $this->display("index");
    }

   
    public function details(){
      $id=$_GET["id"];
      $company=M("company");
      $list=$company->where("id='$id'")->select();
      $this->assign('list',$list);
      $this->display("xiangqing");
    }


    public function add(){
      $wages=M("wages");
      $list=$wages->select();
      $this->assign('list',$list);
      $this->display("add");  
    }


    //添加活动加活动图片
    public function insert(){  
      $data['title']=$_POST['title'];
      $data['classify']=$_POST['classify'];
      $data['wage']=$_POST['money'];;
      $data['town']=$_POST['town'];
      $data['time']=date('Y-m-d H:i:s');
      $data['address']=$_POST['address'];
      $data['total']=$_POST['total'];
      $data['earnest']=$_POST['dingjin'];
      $daiyu=$_POST['daiyu'];
      $string=implode(',',$daiyu);

      $data['treatment']=$string;
      $data['qq']=$_POST['qq'];
      $data["tel"]=$_POST["tel"];
      $data['cuid']=md5($data['title'].$data['tel'].$data['total'].$data['time']);
      $mod = M('company');
      $inf=$mod->add($data);
      if($inf){
        $this->success("添加成功",U("Company/index"));
      }else{
         $this->error("添加失败");
      }      
    }

    public function addcontent(){
      $company=M("company");
      $where['id']=$_GET['id'];
      $list=$company->where($where)->find();
      $this->assign('list',$list);
      $this->display("addcontent");
    }

    public function updatecontent(){
      $company=M("company");
      $where['id']=$_POST['id'];
      $style=$_POST['style'];
      switch($style){
        case 1:
        $data['content1']=$_POST['content'];
        break;
        case 2:
        $data['content2']=$_POST['content'];
        break;
        case 3:
        $data['content3']=$_POST['content'];
        break;
        case 4:
        $data['content4']=$_POST['content'];
        break;
        case 5:
        $data['content5']=$_POST['content'];
        break;
      }
      $res=$company->where($where)->save($data);
      if($res){
            $this->success("添加成功",U("Company/addcontent?id=$_POST[id]"));
        }else{
            $this->error("添加失败",U("Company/addcontent?id=$_POST[id]"));
        }
    }


   //删除活动
   public function del(){
      $id=$_GET['id'];
      $mod=M("company");
      // $list=$mod->where("id=$id")->select();
      $mod1=M("company_image");
      $lis=$mod1->where("cid='$id'")->select();
      foreach($lis as $file){
         $urlimg="./Public/images/company/".$file['img'];
         // $urlimg836="./Public/images/act_img/836_".$file['img'];
         // $urlimg418="./Public/images/act_img/418_".$file['img'];
         // $urlimg210="./Public/images/act_img/210_".$file['img'];
         // $urlimg140="./Public/images/act_img/140_".$file['img'];
         // $urlimg40="./Public/images/act_img/40_".$file['img'];
            // @unlink($urlimg836); 
            // @unlink($urlimg418); 
            // @unlink($urlimg210);
            // @unlink($urlimg140);
            // @unlink($urlimg40);
            @unlink($urlimg); 
      }
          //删除一个表的ID
      $res=$mod->where("id='$id'")->delete();
          //删除二个表的ID
      $img=$mod1->where("cid='$id'")->delete();
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
      $mod=M("company");
      $list=$mod->where("id=$id")->select();
      $this->assign("list",$list);
      //获取图
      $mod1=M("company_image");
      //var_dump($mod1);exit;
      $valus=$mod1->where("cid=$id")->select();
      $this->assign("valus",$valus);
      $this->display("manage");
    }


  //id里面的图片上传
  public function upload(){
    $id=$_POST['id'];
    $upload=new \Think\Upload();
    //初始化
    $upload->sizeMax=3147528;//初始化大小
    $upload->exts=array("png","gif","jpeg","jpg");//初始化上传类型
    $upload->rootPath="./Public/images/company/";//初始化上传路径
    $upload->autoSub=false;
    //执行上传
    $info=$upload->upload();
    if(!$info){
        $this->error("请选择图片",U("Company/manage?id=$id"));
        exit;
      }else{
    $data['img'] = $info['img']['savename'];
    $data['cid'] = $id;
    $data['title']=$_POST["title"];
    $data['face']=0;
    $data['time']=date("Y-m-d H:i:s");
    $mod=M("company_image");
    $res=$mod->data($data)->add();
    if($res){
        $this->success("添加成功",U("Company/manage?id=$id"));
      }else{
        $urlimg1="./Public/images/company/".$urlimg;
        @unlink($urlimg1);
        $this->error("添加失败",U("Company/manage?id=$id"));
    }      
  }
}


  //修改图片封面图 
  public function face(){
    $id=$_GET['id'];
    $mod=M("company_image");
    $list=$mod->where("id='$id'")->select();//jiangyao no info
    $cid=$list[0]['cid'];//caozuode iqye info
    $data1['face']=0;
    $data2['face']=1;
    $info=$mod->where("cid=$cid")->save($data1);
    $res=$mod->where("id=$id")->save($data2);
    if($info && $res){
      $this->success("修改成功",U("Company/manage?id=$cid"));
    }
  }


    //删除图片
    public function delimg(){
      $id=$_GET['id'];
      $mod=M("company_image");
      $list=$mod->where("id=$id")->select();
      $cid=$list[0]['cid'];
      if($list[0]['face']==1){
        $this->success("封面图标不能删",U("Company/manage?id=$cid"));  
         exit; 
      }
      foreach($list as $file){
        $urlimg="./Public/images/company/".$file['img'];
        @unlink($urlimg); 
      }
      $res=$mod->where("id=$id")->delete();
      if($res){
          $this->success("删除成功",U("Company/manage?id=$cid"));
      }else{
          $this->error("删除失败",U("Company/manage?id=$cid"));
      }
    }



    public function edit(){
      $id=$_GET["id"];
      $mod=M("company");
      $list=$mod->where("id='$id'")->select();
      $list[0]['treatment']=explode(",",$list[0]['treatment']);
      $wages=M("wages");
      $list1=$wages->select();
      $this->assign("list",$list);
      $this->assign("list1",$list1);
      $this->display("edit");
    }



    public function update(){  
      $id=$_POST['id'];
      $data['title']=$_POST['title'];
      $data['classify']=$_POST['classify'];
      $data['wage']=$_POST['money'];;
      $data['town']=$_POST['town'];
      // $data['time']=date('Y-m-d H:i:s');
      $data['address']=$_POST['address'];
      $data['total']=$_POST['total'];
      $data['earnest']=$_POST['dingjin'];
      if(!empty($_POST['daiyu'])){
        $daiyu=$_POST['daiyu'];
        $string=implode(',',$daiyu);
        $data['treatment']=$string;
      }
      $data['qq']=$_POST['qq'];
      $data["tel"]=$_POST["tel"];
      $mod = M('company');
      $inf=$mod->where("id='$id'")->save($data);
      if($inf){
        $this->success("添加成功",U("Company/index"));
      }else{
         $this->error("添加失败");
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
   



