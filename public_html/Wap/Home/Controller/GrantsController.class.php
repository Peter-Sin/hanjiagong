<?php
namespace Home\Controller;
use Think\Controller;
class GrantsController extends Controller {
	public function _empty(){
       redirect('../Person/wallet');
    }

    public function applygrants(){
    	$enroll=M("enroll");
        $company=M('company');
        $user=M("user");
    	$uid=$_SESSION['id'];
    	$list=$enroll->where("uid='$uid' AND statu=1")->order("id desc")->find();
        $info=$company->field('id,title')->select();
		// $cid=$list['cid'];	
        // if($cid=='0'){
        //     $list['company']="待分配";
        // }else{
        //     $list['company']=$company->where("id='$cid'")->getField('title');  
        // }
        $list['name']=$user->where("id='$uid'")->getField('name');
        $this->assign('info',$info);
    	$this->assign('list',$list);
      	$this->display('sqzxj');
    }

    //上传申请信息
    public function updategrants(){
    	$grants=M("grants");
    	$data['uid']=$_POST['uid'];
        $data['cid']=$_POST['gqzt'];
        $data['order']=$_POST['order'];
        $where['uid']=$data['uid'];
        $where['order']=$data['order'];
        $info=$grants->where($where)->order("id desc")->find();
        if(empty($info) || $info=='NULL'){
        	$data['sign']='1';
        	$data['amount']=$_POST['zxjmoney'];
        	$data['time']=date('Y-m-d H:i:s');
        	$data['statu']='0';
        	$res=$grants->add($data);
        	if($res){
        		$this->ajaxReturn('1');//申请助学金信息已提交成功
        	}else{
        		$this->ajaxReturn('0');//申请助学金信息提交失败
        	}
        }elseif($info['statu']=='3'){
            $data['sign']='1';
            $data['amount']=$_POST['zxjmoney'];
            $data['time']=date('Y-m-d H:i:s');
            $data['statu']='0';
            $res=$grants->add($data);
            if($res){
                $this->ajaxReturn('1');//申请助学金信息已提交成功
            }else{
                $this->ajaxReturn('0');//申请助学金信息提交失败
            }
        }else{
            $this->ajaxReturn('3');//你已申请该助学金，不能重复申请
        }
    }

    public function applyrecord(){
    	$this->display('sqmoney');
    }

    public function sqmx(){
        $classify=$_POST['name'];
        $page=$_POST['page'];
        $num='6';
        $total=$num*$page;
        $where['uid']=$_SESSION['id'];
        $where['sign']="1";
        $grants=M("grants");
        switch ($classify){
            case "所有":
              $where['statu']=array('LIKE',"%%");
              break;  
            case "待审核":
              $where['statu']=0;
              break;
            case "已到账":
              $where['statu']=1;
              break;
            case "无效":
              $where['statu']=3;
              break;
            }
        $list=$grants->where($where)->limit($total,$num)->order("id desc")->select();
        foreach ($list as $key=>$val){
          switch ($val['statu']){
            case "0":
              $list[$key]['statu']="待审核";
              break;  
            case "1":
              $list[$key]['statu']="已到账";
              break;
            case "2":
              $list[$key]['statu']="无效";
              break;
            }       
    }
        $this->ajaxReturn($list,'json');       
    }

    public function txrecord(){
    	$this->display('txlines');
    }

    public function iwanttx(){
        $uid=$_SESSION['id'];
        $user=M("user");
        $username=$user->where("id='$uid'")->getField("name");
        $grants=M("grants");
        $deposit=M("deposit");
        $where['uid']=$_SESSION['id'];
        $total=$grants->where($where)->where("sign=1 AND statu=1")->sum('amount');
        $num=$deposit->where($where)->where("sign=2 AND statu=2 AND style=2")->sum('amount');
        $num=isNull($num);
        $total=isNull($total);
        $balance=$total-$num;
        $list['name']=$username;
        $list['money']=$balance;
        $this->assign('list',$list);
    	$this->display('yj_tx');
    }

    public function updatetx(){
        $deposit=M("deposit");
        $uid=$_SESSION['id'];
        $info=$deposit->where("uid='$uid' AND style=2")->order("id desc")->find();
        if(empty($info) || $info=='NULL'){
            $data['uid']=$uid;
            $data['account']=$_POST['mytx_zh'];
            $data['amount']=$_POST['tx_money2'];
            $data['time']=date("Y-m-d H:i:s");
            $data['statu']=0;
            $data['sign']=2;
            $data['style']=2;
            $res=$deposit->add($data);
            if($res){
                $this->ajaxReturn('1');//提交成功
            }else{
                $this->ajaxReturn('2');//提交失败
            }
        }elseif($info['statu']==2 || $info['statu']==3){
            $data['uid']=$uid;
            $data['account']=$_POST['mytx_zh'];
            $data['amount']=$_POST['tx_money2'];
            $data['time']=date("Y-m-d H:i:s");
            $data['statu']=0;
            $data['sign']=2;
            $data['style']=2;
            $res=$deposit->add($data);
            if($res){
                $this->ajaxReturn('1');//提交成功
            }else{
                $this->ajaxReturn('2');//提交失败
            }
        }else{
            $this->ajaxReturn('3');//你已申请提现，请稍后再试
        }
    }

    public function txmx(){
        $classify=$_POST['name'];
        $page=$_POST['page'];
        $num=6;
        $total=$num*$page;
        $deposit=M("deposit");
        $where['sign']="2";
        $where['uid']=$_SESSION['id'];
        $where['style']="2";
        switch ($classify){
            case "所有":
              $where['statu']=array('LIKE',"%%");
              break;  
            case "待审核":
              $where['statu']=0;
              break;
            case "待打款":
              $where['statu']=1;
              break;
            case "已提现":
              $where['statu']=2;
              break;
            case "无效":
              $where['statu']=3;
              break;
            }

        $list=$deposit->where($where)->limit($total,$num)->order("id desc")->select();
        foreach ($list as $key=>$val){
          switch ($val['statu']){
            case "0":
              $list[$key]['statu']="待审核";
              break;  
            case "1":
              $list[$key]['statu']="待打款";
              break;
            case "2":
              $list[$key]['statu']="已提现";
              break;
            case "3":
              $list[$key]['statu']="无效";
              break;
            }       
    }
        $this->ajaxReturn($list,'json');       
    }

    public function grantsxq(){
        $grants=M("grants");
        $deposit=M("deposit");
        $where['uid']=$_SESSION['id'];
        $enroll=M("enroll");
        $company=M("company");
        $infodata['sign']=1;
        $infodata['statu']=1;

        $info['sign']=2;
        $info['statu']=2;
        $info['style']=2;
        $list1=$grants->where($where)->where($infodata)->select();
        $list2=$deposit->where($where)->where($info)->select();
        $list=array_merge($list1,$list2);
        $sort = array(
          'direction' => 'SORT_DESC', //排序顺序标志 SORT_DESC 降序；SORT_ASC 升序
          'field'     => 'time',       //排序字段
        );
        $arrSort = array();
        foreach($list AS $uniqid => $row){
            foreach($row AS $key=>$value){
                $arrSort[$key][$uniqid] = $value;
            }
        }
        if($sort['direction']){
          array_multisort($arrSort[$sort['field']], constant($sort['direction']), $list);
        }
        $total=$grants->where($where)->where("sign=1 AND statu=1")->sum('amount');
        $num=$deposit->where($where)->where("sign=2 AND statu=2 AND style=2")->sum('amount');
        $num=isNull($num);
        $total=isNull($total);
        $balance=$total-$num;
        $money=$balance;
        foreach ($list as $key=>$val){
            $num=$val['amount'];
            $order=$val['order'];
            $sign=$val['sign'];
            if($sign=="2"){
                $list[$key]['company']="提现";   
                $list[$key]['money']=$money;
                $money=$money+$num;
            }else{
                $contain['order']=$order;
                $cid=$enroll->where($contain)->getField('cid');
                $datainfo['id']=$cid;
                $list[$key]['company']=$company->where($datainfo)->getField('title');
                $list[$key]['money']=$money;
                $money=$money-$num;
            }
        }
        $this->assign('list',$list);
    	$this->display('walletmx');
    }

    public function yjdetail(){
        $id=$_GET['id'];
        $deposit=M("deposit");
        $list=$deposit->where("id=$id")->find();
         $list['classify']="助学金提现";
        $user=M("user");
        $id=$list['uid'];
        $list['username']=$user->where("id='$id'")->getField('username');
        $list['recode']=$user->where("id='$id'")->getField('recode');
        $this->assign('list',$list);
        $this->display('yjtxresult');
    }

    public function sqdetail(){
        $id=$_GET['id'];
        $grants=M("grants");
        $list=$grants->where("id=$id")->find();
        $list['classify']="申请助学金";
        $user=M("user");
        $id=$list['uid'];
        $list['username']=$user->where("id='$id'")->getField('username');
        $list['recode']=$user->where("id='$id'")->getField('recode');
        $enroll=M("enroll");
        $company=M("company");
        $contain['order']=$list['order'];
        $cid=$enroll->where($contain)->getField('cid');
        $list['startime']=$enroll->where($contain)->getField('startime');
        $datainfo['id']=$cid;
        $list['company']=$company->where($datainfo)->getField('title');
        $this->assign('list',$list);
        $this->display('sqresult');
    }
}
    