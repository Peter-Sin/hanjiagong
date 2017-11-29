<?php
namespace Home\Controller;
use Think\Controller;
class CommissionController extends Controller {
	public function _empty(){
       redirect('../Person/commission');
    }

    public function myrecord(){
        $enroll=M("enroll");
        $user=M("user");
        $where['id']=$_SESSION['id'];
        $recode=$user->where($where)->getField('recode');
        $list=$enroll->where("recode='$recode'")->order('id desc')->select();
        $this->assign('list',$list);
      	$this->display('recommendlines');
    }

    public function irecodeman(){
    	$classify=$_POST['name'];
        $page=$_POST['page'];
        $num=6;
        $total=$num*$page;
        $enroll=M("enroll");
        $user=M("user");
        $commission=M("commission");
        $datainfo['id']=$_SESSION['id'];
        $recode=$user->where($datainfo)->getField('recode');
        $where['recode']=$recode;
        switch ($classify){
            case "所有":
              $where['statu']=array('LIKE',"%%");
              break;  
            case "已支付":
              $where['statu']=1;
              $where['grants']=0;
              break;
            case "未支付":
              $where['statu']=0;
              break;
            // case "工期完":
            //   $where['statu']=2;
            //   break;
            case "已申请":
              $where['statu']=1;
              $where['grants']=1;
              break;
            }
        $list=$enroll->where($where)->limit($total,$num)->field("time,order,uid,statu,grants,money")->order("id desc")->select();
        foreach ($list as $key=>$val){
          $list[$key]['time']=substr($val['time'],0,10);
          $order=$val['order'];
          $contain['order']=$order;
          $amount=$commission->where($contain)->sum('amount');
          if(empty($amount) || $amount=="NULL"){
            $list[$key]['amount']=0;
          }else{
            $list[$key]['amount']=$amount;
          }
          $datainfo['id']=$val['uid'];
          $list[$key]['username']=$user->where($datainfo)->getField('username');
          if($val['statu']==0 ){
            $list[$key]['statuinfo']="已报名，未支付";
          }elseif($val['statu']==1 && $val['grants']==0){
            $list[$key]['statuinfo']="已支付，未申助";
          }elseif($val['statu']==1 && $val['grants']==1){
            $list[$key]['statuinfo']="已申请助学金";
          }
        }
        $this->ajaxReturn($list,'json');       
    }


    public function txrecord(){
    	$this->display('commisionlines');
    }

    public function iwanttx(){
      $uid=$_SESSION['id'];
      $user=M("user");
      $username=$user->where("id='$uid'")->getField("name");
       $commision=M("commission");
        $user=M("user");
        $where['id']=$_SESSION['id'];
        $datainfo['recode']=$user->where($where)->getField("recode");
        $total=$commision->where($datainfo)->where("sign=1")->sum('amount');
        $infodata["uid"]=$_SESSION['id'];
        $deposit=M("deposit");
        $num=$deposit->where($infodata)->where("statu=2 AND style=1")->sum('amount');
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
        $info=$deposit->where("uid='$uid' AND style=1")->order("id desc")->find();
        if(empty($info) || $info=='NULL'){
          $data['uid']=$uid;
          $data['account']=$_POST['mytx_zh'];
          $data['amount']=$_POST['tx_money2'];
          $data['time']=date("Y-m-d H:i:s");
          $data['statu']=0;
          $data['sign']=2;
          $data['style']=1;
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
          $data['style']=1;
          $res=$deposit->add($data);
          if($res){
              $this->ajaxReturn('1');//提交成功
          }else{
              $this->ajaxReturn('2');//提交失败
          }
        }else{
              $this->ajaxReturn('3');//正在提现，请稍候
        }
    }


    public function txmx(){
    	$classify=$_POST['name'];
        $page=$_POST['page'];
        $num=6;
        $total=$num*$page;
        $deposit=M("deposit");
        $where['uid']=$_SESSION['id'];
        $where['style']=1;
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

    public function commisionmx(){
      $commision=M("commission");
      $deposit=M("deposit");
      $user=M("user");
      $where['id']=$_SESSION['id'];
      $infodata["uid"]=$_SESSION['id'];
      $infodata["statu"]=2;
      $infodata["style"]=1;
      $datainfo['recode']=$user->where($where)->getField("recode");
      $comm=$commision->where($datainfo)->field('id,uid,batch,amount,order,time,sign')->select();
      $depos=$deposit->where($infodata)->field('id,uid,amount,statu,time,sign')->select();
      $list=array_merge($comm,$depos);
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
        $enroll=M("enroll");
        $company=M("company");
        $total=$commision->where($datainfo)->where("sign=1")->sum('amount');
        $num=$deposit->where($infodata)->sum('amount');
        $num=isNull($num);
        $total=isNull($total);
        $balance=$total-$num;
        $money=$balance;
        foreach ($list as $key=>$val){
          $num=$val['amount']; 
          if($val['sign']=='1'){
            $uid=$val['uid'];
            $username=$user->where("id='$uid'")->getField("username");
            if($val['batch']=='1'){
              $list[$key]['company']="推荐".$username."报名成功";
            }elseif($val['batch']=='2'){
              $list[$key]['company']=$username."申请助学金成功";
            }
            // $order=$val['order'];
            // $contain['order']=$order;
            // $cid=$enroll->where($contain)->getField('cid');
            // $datainfo['id']=$cid;
            // $list[$key]['company']=$company->where($datainfo)->getField('title');
            
            $list[$key]['money']=$money;
            $money=$money-$num;
          }elseif($val['sign']=='2'){
            $list[$key]['company']="提现";
            
            $list[$key]['money']=$money;
            $money=$money+$num;
          }
          $list[$key]['time']=substr($val['time'],0,10);
        }
        $this->assign('list',$list);
    	$this->display('ljyj_mx');
    }

    public function yjdetail(){
      	$id=$_GET['id'];
       	$deposit=M("deposit");
       	$list=$deposit->where("id='$id'")->find();
       	$list['classify']="佣金提现";
       	$user=M("user");
       	$id=$list['uid'];
       	$list['username']=$user->where("id='$id'")->getField('username');
        $list['recode']=$user->where("id='$id'")->getField('recode');
       	$this->assign('list',$list);
    	$this->display('yjtxresult');
    }

    public function yjxq(){
      $id=$_GET['id'];
      $sign=$_GET['sign'];
      if($sign=='1'){
        $commision=M("commission");
        $list=$commision->where("id='$id'")->find();
        $user=M("user");
        $uid=$list['uid'];
        $list['username']=$user->where("id='$uid'")->getField("username");
        if($list['batch']=='1'){
          $num='1';
        }elseif($list['batch']=='2'){
          $num='2';
        }
      }else{
        $num='3';
        $deposit=M('deposit');
        $list=$deposit->where("id='$id'")->find();
      }
      $this->assign('num',$num);
      $this->assign('list',$list);
      $this->display("yjxq");
    }
}

    