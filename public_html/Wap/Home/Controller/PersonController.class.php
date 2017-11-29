<?php
namespace Home\Controller;
use Think\Controller;
class PersonController extends Controller {
	public function _empty(){
       redirect('./index');
    }

    public function index(){
        $user=M("user");
        $uuid=$_SESSION['uuid'];
        $userinfo=$user->where("uuid='$uuid'")->find();
        $grants=M("grants");
        $deposit=M("deposit");
        $where['uid']=$_SESSION['id'];
        $total=$grants->where($where)->where("sign=1 AND statu=1")->sum('amount');
        $num=$deposit->where($where)->where("sign=2 AND statu=2 AND style=2")->sum('amount');
        $num=isNull($num);
        $total=isNull($total);
        $balance=$total-$num;
        $commision=M("commission");
        $where1['id']=$_SESSION['id'];
        $datainfo['recode']=$user->where($where1)->getField("recode");
        $total1=$commision->where($datainfo)->where("sign=1")->sum('amount');
        $infodata["uid"]=$_SESSION['id'];
        $num1=$deposit->where($infodata)->where("statu=2 AND style=1")->sum('amount');
        $num1=isNull($num1);
        $total1=isNull($total1);
        $balance1=$total1-$num1;
        $enroll=M("enroll");
        $statu=$enroll->where($where)->getField("statu");
        if($statu==1){
            $statu="已支付";
        }else{
            $statu="未支付";
        }
        $this->assign('statu',$statu);
        $this->assign('balance',$balance);
        $this->assign('balance1',$balance1);
        $this->assign('list',$userinfo);
      	$this->display('person');
    }

    public function commision(){
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
        $count=$commision->where($datainfo)->where("batch=1")->count();
        $totalcount=$count*100;
        $this->assign('balance',$balance);
        $this->assign('num',$num);
        $this->assign('totalcount',$totalcount);
        $this->display('commision');
    }

    public function wallet(){
        $grants=M("grants");
        $deposit=M("deposit");
        $where['uid']=$_SESSION['id'];
        $total=$grants->where($where)->where("sign=1 AND statu=1")->sum('amount');
        $num=$deposit->where($where)->where("sign=2 AND statu=2 AND style=2")->sum('amount');
        $num=isNull($num);
        $total=isNull($total);
        $balance=$total-$num;
        $this->assign('balance',$balance);
        $this->assign('num',$num);
        $this->display('wallet');
    }

    public function invite(){
        $user=M("user");
        $uuid=$_SESSION['uuid'];
        $userinfo=$user->where("uuid='$uuid'")->find();
        $this->assign('list',$userinfo);
        $this->display('invite');
    }

    public function certification(){
        $user=M("user");
        $uuid=$_SESSION['uuid'];
        $userinfo=$user->where("uuid='$uuid'")->find();
        $crenum=$userinfo['crenum'];
        if(empty($crenum) || $crenum=='NULL'){
            $cre_num='0';
            $this->assign('list',$userinfo);
        }else{
            $cre_num='1';
        }
        $this->assign('cre_num',$cre_num);
        $this->display('certification');
    }


    public function certify(){
        $idcard=$_POST['idcard'];
        $uuid=$_SESSION['uuid'];
        $iscard=isIdCard($idcard);
        if(!$iscard){
        $check=checkIdCard($idcard);
            if($check){
                $data['username']=$_POST['user'];
                $data['name']=$_POST['name'];
                $data['tel']=$_POST['phone'];
                $data['sex']=$_POST['sex'];
                $data['birth']=$_POST['birthday'];
                $data['town']=$_POST['home'];
                $data['address']=$_POST['address'];
                $data['school']=$_POST['school'];
                $data['major']=$_POST['major'];
                $data['emertel']=$_POST['jinjiphone'];
                $data['crenum']=$_POST['idcard'];
                $user=M("user");
                $res=$user->where("uuid='$uuid'")->save($data);
                if($res){
                    $this->ajaxReturn("1");//认证成功
                }else{
                    $this->ajaxReturn("0");//认证失败
                }
            }else{
                $this->ajaxReturn('12');//证件号有误
            }
        }else{
            $this->ajaxReturn("11");//证件号已注册
        }
    }

    public function myrelease(){
        $this->display('release');
    }

    public function enrollline(){
        $this->display('enrollline');
    }

    public function enrollinfo(){
        $enroll=M("enroll");
        $company=M("company");
        $user=M("user");
        $uid=$_SESSION['id'];
        $list=$enroll->where("uid='$uid'")->select();
        $iswx=is_weixin();
        foreach ($list as $key=>$val){
            $recode=$val['recode'];
            $cid=$val['cid'];
            $list[$key]['company']=$company->where("id='$cid'")->getField('title');
            $recodeman=$user->where("recode='$recode'")->getField('username');
            if(empty($recodeman) || $recodeman=='NULL'){
                $list[$key]['recodeman']="无";
            }else{
                $list[$key]['recodeman']=$recodeman;
            }
            $list[$key]['username']=$user->where("id='$uid'")->getField('username');
            $list[$key]['iswx']=$iswx;
        }
        $this->ajaxReturn($list,'json');
    }

    public function personal(){
        $user=M("user");
        $uuid=$_SESSION['uuid'];
        $userinfo=$user->where("uuid='$uuid'")->find();
        $this->assign('list',$userinfo);
        $this->display('personal');
    }

    public function authorize(){
        $where['id']=$_SESSION['id'];
        $user=M("user");
        $agency=$user->where($where)->getField('agency');
        $this->assign('agency',$agency);
        $this->display("authorize");
    }

    public function about(){
        $this->display("about");
    }

    public function go_time(){
        $user=M("user");
        $uuid=$_SESSION['uuid'];
        $gotime=$user->where("uuid='$uuid'")->getField('go_time');
        if(empty($gotime) || $gotime=='NULL'){
            $gotime="请填写出发时间";
        }
        $this->assign('gotime',$gotime);
        $this->display("go_time");
    }

    public function updategotime(){
        $where['id']=$_SESSION['id'];
        $user=M("user");
        $data['go_time']=$_POST['time'];
        $res=$user->where($where)->save($data);
        if($res){
            $this->ajaxReturn('1');
        }else{
            $this->ajaxReturn('0');
        }
    }

    public function guarantee(){
        $this->display("guarantee");
    }
}