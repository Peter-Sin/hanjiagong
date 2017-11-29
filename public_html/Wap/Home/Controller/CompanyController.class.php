<?php
namespace Home\Controller;
use Think\Controller;
class CompanyController extends Controller {
    public function company(){
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
    	// $this->assign("list",$list);
      	$this->display('company');
    }

    public function companyinfo(){
        $page=$_POST['page'];
        $num=6;
        $total=$num*$page;
        $company=M("company");
        $cimg=M("company_image");
        $list=$company->limit($total,$num)->order("id desc")->select();
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
        $this->ajaxReturn($list,'json');
    }

    public function companyxq(){
    	$company=M("company");
        $cimg=M("company_image");
    	$cid=$_GET['cid'];
    	$list=$company->where("cuid='$cid'")->select();
    		$list[0]['time']=substr($list[0]['time'],5,5);
    		$treatment=$list[0]['treatment'];
    		$arr=explode(',',$treatment);
    		foreach($arr as $k=>$v){
    			$wages=M("wages");
    			$info=$wages->where("id='$v'")->find();
    			$arrwages[$k]=$info['title'];
    		}
    	$list[0]['residue']=$list[0]['total']-$list[0]['num'];
    	$list[0]['treatment']=$arrwages;

        $id=$list[0]['id'];
        $list[0]['image']=$cimg->where("cid='$id'")->field("img,title")->select();
        // dump($list);
    	$this->assign("list",$list);
      	$this->display('companyxq');
    }

    public function tuce(){
        $company=M("company");
        $id=$_GET['id'];
        $list['id']=$id;
        $list['name']=$company->where("id='$id'")->getField('title');
        $this->assign('list',$list);
        $this->display("tuce");
    }

    public function cimg(){
        $id=$_POST['pic_tuce'];
        
        $page=$_POST['page'];
        $num=6;
        $total=$num*$page;
        $cimg=M("company_image");
        $list=$cimg->where("cid='$id'")->limit($total,$num)->field("img,title")->select();
        $this->ajaxReturn($list,'json');
    }
}