<?php
namespace Admin\Controller;
use Think\Controller;
class DepositController extends AllowController {
  //新闻列表和搜索和分页
    public function index(){
        // $where=array();
   // if (!empty($_GET['title'])) {
   //      // $where['title']=array("like","%{$_GET['title']}%");   
   //       }
        $mod=M("deposit");
        $user=M("user");
        $sou=$mod->where($where)->count();
        $pan=new \Think\Page($sou,50);
        $pan->setConfig("prev","上一页");
        $pan->setConfig("next","下一页");
        $list=$mod->order("id desc")->limit($pan->firstRow,$pan->listRows)->select();
        foreach ($list as $key=>$val){
          switch ($val['statu']){
            case "0":
              $list[$key]['status']="待审核";
              break;  
            case "1":
              $list[$key]['status']="待打款";
              break;
            case "2":
              $list[$key]['status']="已提现";
              break;
            case "3":
              $list[$key]['status']="无效";
              break;
            }
            switch ($val['style']){
            case "1":
              $list[$key]['style']="佣金";
              break;  
            case "2":
              $list[$key]['style']="助学金";
              break;
            }
            $where['id']=$val['uid'];
            $list[$key]['username']=$user->where($where)->getField('username');
          }
          // dump($list);
        $this->assign("list",$list);
        $this->assign("pageinfo",$pan->show());
        $this->display("index");
    }

    public function editstatu(){
      $where['id']=$_GET['id'];
      $deposit=M("deposit");
      $list=$deposit->where($where)->select();
      $user=M("user");
      $datainfo['id']=$list[0]['uid'];
        $list[0]['username']=$user->where($datainfo)->getField('username');
      $this->assign('list',$list);
      $this->display("statu");
    } 

  public function statu(){
      $where['id']=$_POST['id'];
      $data['statu']=$_POST['statu'];
      $deposit=M("deposit");
      $res=$deposit->where($where)->save($data);
      if($res){
        $this->success("修改成功",'./index');
      }else{
        $this->error("修改失败",'./index');
      }
  }
//设置状态
        // public function statu1(){
        //     $id=$_GET['id'];
        //     //var_dump($id);
        //     $mod=M("xinwen");
        //     $list=$mod->where("id=$id")->find();
        //     $data['statu']=$list['statu']==0?1:0;

        //     $ros=$mod->where("id=$id")->save($data);

        //     if($mod){
        //             $this->success("修改成功",U("Xinwen/index"));

        //     }else{
        //             $this->error("修改失败",U("Xinwen/index"));
        //     }
        //         $this->display("index");
        // }


    
    //新闻遍历
     public function add(){
       //$mod=M("goodsbrand");
      // $blist=$mod->select();
       $mod=M("goodsclass");
       $clist=$mod->order("concat(path,id,',')")->where("pid=273")->select();
      // $this->assign("blist",$blist);
       //var_dump($clist);exit;
       for($i=0;$i<count($clist);$i++) {
            $num = substr_count($clist[$i]['path'],",");
            $replace = str_repeat('-',($num-1)*2);
            $clist[$i]['num']= $replace; 
       }           
            $this->assign("clist",$clist);
           // var_dump($clist);
       $this->display("add");
    }

// -------------------添加附图--------------------
    public function inse(){
        // var_dump($_GET);die;
        $upload=new \Think\Upload();
        $upload->sizeMax=3147528;
        $upload->exts=array("png","gif","jpeg","jpg");
        $upload->rootPath="./Public/images/xinwen/";
        $upload->autoSub=false;
        $info=$upload->upload();
        // var_dump($upload);die;
         // var_dump($info);die;
        if(!$info){
            $this->error("请选择图片",U("Xinwen/add"));
            exit;
        }else{
            $image = new \Think\Image(); 
            $image->open("./Public/images/xinwen/".$info[image1]['savename']);
            $image->thumb(40,40,\Think\Image::IMAGE_THUMB_FIXED)->save("./Public/images/xinwen/40_".$info[image1]['savename']);
            $image->open("./Public/images/xinwen/".$info[image2]['savename']);
            $image->thumb(40,40,\Think\Image::IMAGE_THUMB_FIXED)->save("./Public/images/xinwen/40_".$info[image2]['savename']);
        }      
   
    //获取post传过来的值转换插入数据库
        $data['image1']=$info[image1]['savename'];
        $data['image2']=$info[image2]['savename'];
         // var_dump($data);die;
         $mod = M('xinwen');
         $id=$_GET['id'];
         $list=$mod->where("id=$id")->data($data)->save();
            // var_dump($list);die;

       if($list){
            // $mod->data($data)->filter('strip_tags')->add();
            $this->success("添加成功",U("Xinwen/index"));
        }else{
            // var_dump($list);die;

             $this->error("添加失败",U("Xinwen/index"));
        }      
// ------------------查看附图---------------

        $mod=M("xinwen");
        $list=$mod->where("id=$id")->select();
        $this->assign("list",$list);
        $this->display("mamnge");
    }

    //添加新闻
    public function insert(){
      $data['title'] = $_POST['title'];   
      $mod1=M("goodsclass");
      $a=$_POST['wz_id'];
      $b=$mod1->where("id=$a")->select();
      $data['wz_id']=$b[0]['class'];
      $data['bianji']=$_POST['bianji'];
      $data['laiyuan']=$_POST['laiyuan'];
      $data['dianji']=$_POST['dianji'];
      $data['tuijian_shou']=$_POST['tuijian_shou'];
      $data['tuijian_zi']=$_POST['tuijian_zi'];
      $data['statu']=$_POST['statu'];
      $data['jiaodian']=$_POST['jiaodian'];
      $data['xiang']=$_POST['xiang'];
      $data['guanjian']=$_POST['title'];
      $data['time']=date('Y-m-d H:i:s');
      $mod = M('xinwen');
      if($mod->create()){
        $mod->data($data)->filter('strip_tags')->add();
        $this->success("添加成功",U("Xinwen/index"));
      }else{
        $this->error("添加失败",U("Xinwen/index"));
      }      
    }

    //-------------------------------删除--------------------------
    //编辑删除新闻
    public function del(){
            $id=$_GET['id'];
           $mod=M("xinwen");
           $list=$mod->where("id=$id")->select();
           //删除所有图片
           foreach($list as $file){
                $urlimg="./Public/images/xinwen/".$file['fimg'];
                $urlimg40="./Public/images/xinwen/40_".$file['fimg'];
                    @unlink($urlimg);
                    @unlink($urlimg40); 
            }
        
        //删除里面的图片
            $mod1=M("Wenzhang");
            $lis=$mod1->where("gid=$id")->select();

            foreach($lis as $file){
                $urlimg="./Public/images/xinwen/".$file['fimg'];
                $urlimg1="./Public/images/xinwen/".$file['image1'];
                $urlimg2="./Public/images/xinwen/".$file['image2'];

               
                $urlimg40="./Public/images/xinwen/40_".$file['fimg'];
                $urlimg50="./Public/images/xinwen/40_".$file['image1'];
                $urlimg60="./Public/images/xinwen/40_".$file['image2'];
                @unlink($urlimg40);
                @unlink($urlimg);
                @unlink($urlimg50);
                @unlink($urlimg1);
                   
                @unlink($urlimg60);
                @unlink($urlimg2); 
            }
                //删除一个表的ID
                $res=$mod->where("id=$id")->delete();
                    //删除二个表的ID
                $img=$mod1->where("gid=$id")->delete();

              if($res){
                    $this->success("删除成功",U("Xinwen/index"));
                }else{
                    $this->error("删除失败",U("Xinwen/index"));
                }
                $this->display("index");
      }

           //--------------------------------修改-----------------------
         //便利给编辑新闻
    public function edit(){
        //查询新闻表  
            $id=$_GET['id'];
            $mod=M("xinwen");
            $list=$mod->where("id=$id")->select();
            $this->assign("list",$list);

            //查询分类表
       $mod1=M("goodsclass");
       $clist=$mod1->order("concat(path,id,',')")->where("pid=273")->select();
       for($i=0;$i<count($clist);$i++) {
            $num = substr_count($clist[$i]['path'],",");
            $replace = str_repeat('-',($num-1)*2);
            $clist[$i]['num']= $replace; 
       }           
            $this->assign("clist",$clist);
        $this->display("edit");
    }
    //编辑新闻

    public function manage(){
        //获取穿过来的ID值
        $id=$_GET['id'];
        //var_dump($id);
        $mod=M("xinwen");
        $list=$mod->where("id=$id")->select();
        $this->assign("list",$list);
        
        $mod1=M("xinwen");
        $valus=$mod1->where("id=$id")->select();
        $this->assign("valus",$valus);
        $this->display("mamnge");
    }

    public function update(){
         $id=$_GET['id']; 
         $mod=M("xinwen");    
         $data['title'] = $_POST['title'];     
         $mod1=M("goodsclass");
         $a=$_POST['wz_id'];
         $b=$mod1->where("id=$a")->select();
         $data['wz_id']=$b[0]['class'];
         $data['bianji']=$_POST['bianji'];
         $data['laiyuan']=$_POST['laiyuan'];
         $data['dianji']=$_POST['dianji'];
         $data['xiang']=$_POST['xiang'];
        $list=$mod->where("id=$id")->data($data)->save();
        if($list){
            $this->success("修改成功",U("Xinwen/index"));
        }else{
            $this->error("修改失败",U("Xinwen/index"));
        }
        $this->display("edit");

    }


    public function mamng(){
      $id=$_GET['id'];
      $mod=M("xinwen");
      $list=$mod->where("id=$id")->select();
      $this->assign("list",$list);
      $this->display("mamng");
    }

    public function inser(){
        $mod=M('xinwen');
        $id=$_POST['id'];
        $upload=new \Think\Upload();
        $upload->sizeMax=3147528;
        $upload->exts=array("png","gif","jpeg","jpg");
        $upload->rootPath="./Public/images/xinwen/";
        $upload->autoSub=false;
        $info=$upload->upload();
        $lis=$mod->where("id=$id")->select();
        foreach($lis as $file){
            $urlimg="./Public/images/xinwen/".$file['fimg'];
            $urlimg40="./Public/images/xinwen/40_".$file['fimg'];
                @unlink($urlimg40);
                @unlink($urlimg);
        }
        if(!$info){
            $this->error("请选择图片",U("Xinwen/mamng"));
            exit;
        }else{
            $image = new \Think\Image(); 
            $image->open("./Public/images/xinwen/".$info[fimg]['savename']);
            $image->thumb(40,40,\Think\Image::IMAGE_THUMB_FIXED)->save("./Public/images/xinwen/40_".$info[fimg]['savename']);
        }      
    //获取post传过来的值转换插入数据库
         $data['fimg']=$info[fimg]['savename'];
         
        
         $listq=$mod->where("id=$id")->data($data)->save();

       if($listq){
            $this->success("添加成功",U("Xinwen/index"));
        }else{
             $this->error("添加失败",U("Xinwen/mamng"));
        }      
// ------------------查看附图---------------

        $list=$mod->where("id=$id")->select();
        $this->assign("list",$list);
        $this->display("mamng");
    }













       
        public function integral(){
                $id=$_GET['id'];
                $mod=M("xinwen");
                $list=$mod->select();
                $this->assign("list",$list);


          $this->display("integral");   
        }
        public function upde(){
            
               //var_dump($_POST);exit;

                $id=$_GET['id'];
                $mod=M("xinwen");

                $data['integral']=$_POST['integral'];
                $data['g_integrate']=$_POST['g_integrate'];

                $mod->where("id=$id")->data($data)->save();

                if($mod){

                        $this->success("修改成功",U("Xinwen/index"));

                }else{
                        $this->error("修改失败",U("Xinwen/index"));
                }
                    $this->display("integral");  
        }
        //设置是否设为焦点
        public function jiaodian(){
                $id=$_GET['id'];
                //var_dump($id);
                $mod=M("xinwen");
                $list=$mod->where("id=$id")->find();
                $data['jiaodian']=$list['jiaodian']==0?1:0;

                $ros=$mod->where("id=$id")->save($data);

                if($mod){
                        $this->success("修改成功",U("Xinwen/index"));

                }else{
                        $this->error("修改失败",U("Xinwen/index"));
                }
                    $this->display("index");

        }
    // 设置新闻是否首页推荐
        public function tuijian_shou(){
               
                $id=$_GET['id'];
                //var_dump($id);exit;
                $mod=M("xinwen");
                $list=$mod->where("id=$id")->find();
                //var_dump($list);exit;
                $data['tuijian_shou']=$list['tuijian_shou']==0?1:0;
                $pin= $mod->where("id=$id")->save($data);
                
                if($mod){
                      $this->success("修改成功",U("Xinwen/index"));
                }else{
                      $this->error("修改失败",U("Xinwen/index"));
                }
                      $this->display("index");
        }

        //设置新闻是否子夜推荐
        public function tuijian_zi(){
                $id=$_GET['id'];
                $mod=M("xinwen");
                $list=$mod->where("id=$id")->find();
              
                $data['tuijian_zi']=$list['tuijian_zi']==0?1:0;
                //$date['hot']=
                $rexi= $mod->where("id=$id")->save($data);
                
                if($mod){
                      $this->success("修改成功",U("Xinwen/index"));
                }else{
                      $this->error("修改失败",U("Xinwen/index"));
                }
                    $this->display("index");
        }
        //设置新闻是否加入头条

       
        
        public function select(){
            $mod=M('xinwen');
            $list=$mod->where("statu=0")->order("id desc")->select();
            $this->assign("list",$list);
            $this->display("select");
        }
        public function hnnew(){
            $mod=M('xinwen');
            $list=$mod->where("wz_id='马拉松'")->order("id desc")->select();
            $this->assign("list",$list);
            $this->display("malasong");
        }

}

