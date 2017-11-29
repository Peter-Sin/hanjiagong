<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
	public function _empty(){
       redirect('./index');
    }

    public function index(){
    	$mod=M("user");
      	$this->display('index');
    }

    //网站账号登陆
    public function login(){
        $user=M("user");
        $username=$_POST["id"];
        $password=$_POST["password"];
        $where['password'] = md5($password);
        $info=$user->where("username='$username' OR tel='$username'")->where($where)->select();
        if($info){
            $_SESSION['id']=$info[0]["id"];
            $_SESSION['uuid']=$info[0]["uuid"];
            $this->ajaxReturn(1,'json');//登陆成功
        }else{
            $this->ajaxReturn(0);//登录失败
        }
    }


    //检测账号是否存在
    public function check_username(){
        $user=M("user");
        $where['username']=$_POST['id'];
        $count=$user->where($where)->count();
        if($count>0){
            $this->ajaxReturn(1,'json');//用户名已存在
        }else{
            $this->ajaxReturn(0,'json');//用户名可用
        }
    }


    //注册信息上传  存储
    public function register(){
        $user=M("user");
        $idcode=md5($_POST['code']);
        $time=time()-$_SESSION['lifetime'];
        if($_SESSION['idcode']==$idcode && $time<60){
            $data['username']=$_POST["id"];
            $data['password']=md5($_POST["password"]);
            $data['tel']=$_POST["phone"];
            $data['time']=date('Y-m-d H:i:s');
            $data['recode']=getrecode();
            $data['uuid']=MD5($data['username'].$data['password'].$data['tel'].$data['time']);
            $info=$user->add($data);
            if($info){
                sendinfo('1',$info);
                $this->ajaxReturn(1,'json');//注册成功   
            }else{
                $this->ajaxReturn(0,'json');//注册失败
            }
        }else{
            $this->ajaxReturn(10,'json');//验证码有误
        }   
        unset($_SESSION['lifetime']);
        unset($_SESSION['idcode']);        
    }


    //注册短信验证码
    public function tel_verify(){
        $user=M("user");
        $tel=$_POST['phone'];
        $count=$user->where("tel='$tel'")->count();
        if($count>0){
            $this->ajaxReturn(3,'json');//手机号已被绑定
        }else{
            $sms='SMS_109530154';
            $code = telVerifyCode($tel,$sms);
            if($code['num']==1){
                $idcode=md5($code['code']);
                $_SESSION['lifetime'] = time();  
                $_SESSION['idcode']=$idcode;
                $this->ajaxReturn(1,'json');//短信发送成功
            }elseif($code['num']==2){
                $this->ajaxReturn(2,'json');//操作过于频繁
            }elseif($code['num']==0){
                $this->ajaxReturn(0,'json');//手机号格式不正确
            }
        }
    }

    //找回密码短信验证码
    public function get_tel_verify(){
        $user=M("user");
        $tel=$_POST['phone'];
        $count=$user->where("tel='$tel'")->count();
        if($count==0){
            $this->ajaxReturn(3,'json');//该手机号未被绑定
        }else{
            $sms='SMS_109440151';
            $code = telVerifyCode($tel,$sms);
            if($code['num']==1){
                $idcode=md5($code['code']);
                $_SESSION['lifetime'] = time();  
                $_SESSION['idcode']=$idcode;
                $this->ajaxReturn(1,'json');//短信发送成功
            }elseif($code['num']==2){
                $this->ajaxReturn(2,'json');//操作过于频繁
            }elseif($code['num']==0){
                $this->ajaxReturn(0,'json');//手机号格式不正确
            }
        }
    }

    //登录短信验证码
    public function login_tel_verify(){
        $user=M("user");
        $tel=$_POST['phone'];
        // $count=$user->where("tel='$tel'")->count();
        // if($count==0){
        //     $this->ajaxReturn(3,'json');//该手机号未被绑定
        // }else{
            $sms='SMS_109440151';
            $code = telVerifyCode($tel,$sms);
            if($code['num']==1){
                $idcode=md5($code['code']);
                $_SESSION['lifetime'] = time();  
                $_SESSION['idcode']=$idcode;
                $this->ajaxReturn(1,'json');//短信发送成功
            }elseif($code['num']==2){
                $this->ajaxReturn(2,'json');//操作过于频繁
            }elseif($code['num']==0){
                $this->ajaxReturn(0,'json');//手机号格式不正确
            }
        // }
    }


    public function  tel_login(){
        $user=M("user");
        $where['tel']=$_POST['phone'];
        $count=$user->where($where)->count();
        if($count==0){
            $data['username']=$_POST["phone"];
            $data['password']='';
            $data['tel']=$_POST["phone"];
            $data['time']=date('Y-m-d H:i:s');
            $data['recode']=getrecode();
            $data['uuid']=MD5($data['username'].$data['password'].$data['tel'].$data['time']);
            $user->add($data);
        }
        $idcode=md5($_POST['code']);
        $time=time()-$_SESSION['lifetime'];
        if($_SESSION['idcode']==$idcode && $time<60){
            $info=$user->where($where)->select();
            if($info){
                $_SESSION['id']=$info[0]["id"];
                $_SESSION['uuid']=$info[0]["uuid"];
                $this->ajaxReturn(1,'json');//登陆成功
            }else{
                $this->ajaxReturn(0);//登录失败
            }
        }else{
            $this->ajaxReturn(10,'json');//验证码有误
        }   
        unset($_SESSION['lifetime']);
        unset($_SESSION['idcode']);        
    }



    public function editpassword(){
        $user=M("user");
        $where['tel']=$_POST['phone'];
        $idcode=md5($_POST['code']);
        $time=time()-$_SESSION['lifetime'];
        if($_SESSION['idcode']==$idcode && $time<60){
            $data['password']=md5($_POST["password"]);
            $info=$user->where($where)->save($data);
            $id=$user->where($where)->getField("id");
            if($info){
                sendinfo('2',$id);
                $this->ajaxReturn(1,'json');//修改成功
            }else{
                $this->ajaxReturn(0,'json');//修改失败
            }
        }else{
            $this->ajaxReturn(10,'json');//验证码有误
        }   
        unset($_SESSION['lifetime']);
        unset($_SESSION['idcode']);        
    }





    //退出登录
    public function logout(){
    	$_SESSION['statu']=array();
        $_SESSION['user_id']=array();
        $_SESSION=array();
        $_SESSION['user_name']=array();
    	//删除服务器端的session文件
    	session_destroy();
        if(empty($_SESSION['uuid'])){
            // $this->ajaxReturn('0');
            header('Location:../Index/index');
        }
    }

    //QQ登录
    public function qqlogin(){
        Vendor('Connect.qqConnectAPI','','.php');
        $oauth = new \Oauth();
        $oauth->qq_login();
        echo "123123123123";
    }
    
    public function callback(){
        Vendor('Connect.qqConnectAPI','','.php');
        $oauth = new \Oauth();
        $accesstoken = $oauth->qq_callback();
        $openid = $oauth->get_openid();
        setcookie('qq_accesstoken', $accesstoken, time()+86400);
        setcookie('qq_openid', $openid, time()+86400);
        header('Location:qqupdate');
    }
    public function qqupdate(){
        $openid=$_COOKIE['qq_openid'];
        setcookie("qq_accesstoken", "", time()-3600);
        setcookie("qq_openid", "", time()-3600);
        $user=M("user");
        $uuid=$user->where("qq='$openid'")->field('uuid,id')->find();
        if($uuid){
            $_SESSION['uuid']=$uuid['uuid'];
            $_SESSION['id']=$uuid['id'];

        }else{
            Vendor('Connect.qqConnectAPI','','.php');
            $qc = new \QC($_COOKIE['qq_accesstoken'],$_COOKIE['qq_openid']);
            $userinfo = $qc->get_user_info();
            $data['username']=$userinfo['nickname'];
            if($userinfo['gender']=="男"){
                $data['sex']=1;
            }elseif($userinfo['gender']=="女"){
                $data['sex']=2;
            }
            $data['image']=$userinfo['figureurl_qq_2'];
            $data['qq']=$openid;
            $data['recode']=getrecode();
            $data['time']=date('Y-m-d H:i:s');
            $data['uuid']=md5($data['username'].$data['image'].$data['qq'].$data['time']);
            $res=$user->add($data);     
            if($res){
                $_SESSION['uuid']=$data['uuid'];
                $_SESSION['id']=$res;
            }  
        }
        header('Location:../Index/index');
    }
}