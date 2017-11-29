<?php
namespace Home\Controller;
use Think\Controller;
class EnrollController extends Controller {
    public function index(){
    	// $cid=$_GET['cid'];
     //    if($cid==0){
            $list['id']='0';
        // }else{
        // 	$company=M("company");
        // 	$list=$company->where("cuid='$cid'")->field("id,title,earnest")->find();
        // }
    	$user=M("user");
    	$uuid=$_SESSION['uuid'];
    	$info=$user->where("uuid='$uuid'")->field("crenum,name,recode")->find();
        $crenum=$info['crenum'];
        if(empty($crenum) || $crenum=='NULL'){
            $info['cre_num']='0';
        }else{
            $info['cre_num']='1';
        }
        $recode=$_SESSION['recode'];
        $this->assign('recode',$recode);
    	$this->assign('info',$info);
    	$this->assign('list',$list);
      	$this->display('enroll');
    }

    public function getRecodeUserName(){
        $recode=$_POST['tjperson'];
        $isRecode=CheckRecode($recode);
        if($isRecode){
            $user=M("user");
            $where['recode']=$recode;
            $info['num']=1;//推荐人信息无误
            $info['recodename']=$user->where($where)->getField('username');
        }else{
            $info['num']=0;//推荐人有误，请核对后再报名
        }
        $this->ajaxReturn($info,'json');
    }

    public function enroll(){
        $data['recode']=$_POST['tjperson'];
        $data['myrecode']=$_POST['recode_id'];
        $checkrecode=CheckRecode($data['recode']);
        if(empty($data['recode']) || $checkrecode){
            if($data['recode']<>$data['myrecode']){
                $enroll=M("enroll");
                $data['uid']=$_SESSION['id'];
                $data['cid']=$_POST['qiye_id'];
                $data['money']=$_POST['enrolldj'];
                $data['time']=date("Y-m-d H:i:s");
                $data['order']=MD5($data['uid'].$data['myrecode'].$data['cid'].$data['recode'].$data['time']);
                $data['pay_order']=substr($data['order'],0,30);
                $data['grants']            ='0';
                $info=isenroll($data['uid']);
                if(!$info){
                    $res=$enroll->add($data);
                    if($res){
                    	$list['num']='1';//报名成功
                    	$list['order']=$data['order'];
                        $list['iswx']=is_weixin();
                    }else{
                        $list['num']='0';//报名失败
                    }
                }else{
                    $list['num']='2';//用户已报名
                }
            }else{
                $list['num']='3';//自己不能推荐自己
            }
        }else{
            $list['num']='4';//推荐码不正确
        }
        $this->ajaxReturn($list,'json');
    }
}