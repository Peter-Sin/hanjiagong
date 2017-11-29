<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $user=M("user");
        $code=$_GET['recode'];
        $recode=$user->where("recode='$code'")->getField('recode');
        if($recode){
            $_SESSION['recode']=$recode;
        } 
        
    	$company=M("company");
        $cimg=M("company_image");
    	$list=$company->order("id desc")->select();
    	foreach($list as $key=>$val){
    		$list[$key]['time']=substr($val['time'],5,5);
    		$treatment=$val['treatment'];
    		$arr=explode(',',$treatment);
    		foreach($arr as $k=>$v){
    			$wages=M("wages");
    			$info=$wages->where("id='$v'")->find();
    			$arrwages[$k]=$info['title'];
    		}
            $id=$val['id'];
            $list[$key]['image']=$cimg->where("cid='$id' AND face='1'")->getField('img');
    		$list[$key]['treatment']=$arrwages;
    	}

        $mod=M("officialinfo");
        $info=$mod->order("id desc")->limit("3")->select();
        $this->assign("info",$info);
    	$this->assign("list",$list);
      	$this->display('index');
    }
}