<?php
namespace Home\Controller;
use Think\Controller;
class ReleaseController extends Controller {
	public function _empty(){
       redirect('./index');
    }

    public function resource(){
    	$this->display("resource");
    }

    public function resourceinfo(){
        $release=M("release");
        $page=$_POST['page'];
        $num=6;
        $total=$num*$page;
        $list=$release->limit($total,$num)->order("id desc")->select();
        foreach($list as $key=>$val){
            $list[$key]['begin_time']=substr($val['begin_time'],0,10);
            $list[$key]['end_time']=substr($val['end_time'],0,10);
        }
        $this->ajaxReturn($list,'json');      
    }

    public function details(){
        $id=$_GET['id'];
        $release=M("release");
        $list=$release->where("id='$id'")->find();
        $this->assign('list',$list);
        $this->display('job');
    }

    public function release_job(){
    	$this->display("release_job");
    }

    public function updateinfo(){
    	$data['title']=$_POST["title"];
    	$data['begin_time']=$_POST["begin_time"];
    	$data['end_time']=$_POST["end_time"];
    	$data['close_time']=$_POST["close_time"];
    	$data['total']=$_POST["people_num"];
    	$data['money']=$_POST["money"];
    	$data['type']=$_POST["type"];
    	$data['town']=$_POST["city"];
    	$data['address']=$_POST["cityDetails"];
    	$data['demand']=$_POST["demand"];
    	$data['content']=$_POST["treat"];
    	$data['contacts']=$_POST["contacts"];
    	$data['tel']=$_POST["tel"];
    	$data['time']=date("Y-m-d H:i:s");
        $uid=$_SESSION['id'];
        $data['uid']=$uid;
    	$data['statu']=0;
    	$release=M("release");
    	$res=$release->add($data);
    	if($res){
            sendinfo('5',$uid);
    		$this->ajaxReturn('1');
    	}else{
    		$this->ajaxReturn('0');
    	}
    }

}