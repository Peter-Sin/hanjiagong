<?php
namespace Home\Controller;
use Think\Controller;
class PayController extends Controller {
    //在类初始化方法中，引入相关类库
	public function _initialize() {
		vendor('Alipay.Corefunction');
		vendor('Alipay.Md5function');
		vendor('Alipay.Notify');
		vendor('Alipay.Submit');

		vendor('Alipay.AopClient');
		vendor('Alipay.SignData');
		vendor('Alipay.Logger');
		vendor('Alipay.AlipayTradeWapPayRequest');
		vendor('Alipay.AlipayTradeService');
		vendor('Alipay.AlipayTradeWapPayContentBuilder');
		vendor('Alipay.AlipayFundTransToaccountTransferRequest');
		vendor('Alipay.AlipayFundTransOrderQueryRequest');

		vendor('Wxpay.WxPayException');
		vendor('Wxpay.WxPayConfig');
		vendor('Wxpay.WxPayData');
		vendor('Wxpay.WxPayApi');
		vendor('Wxpay.WxPayNotify');
	}

	private function CheckOrderStatus($ordid){
		$Ord=M('enroll');
		$condition['pay_order'] = substr($ordid,0,30);
		$ordstatus=$Ord->where($condition)->getField('statu');
		if($ordstatus=='1'){
			return true;
		}else{
			return false;    
		}
	}


	private function OrderHandle($parameter){
		$ordid=$parameter['out_trade_no'];
		$data['pay_time']          =date("Y-m-d H:i:s");
		$data['pay_type']          =$parameter['pay_type'];
		$data['pay_return_no']     =$parameter['trade_no'];
		$data['pay_return_sts']    =$parameter['trade_status'];
		$data['buyer_email']       =$parameter['buyer_email'];
		$data['statu']             ='1';
		$data['pay_money']         =$parameter['total_fee'];
		$data['grants']			   ='0';
		$Ord=M('enroll');
		$condition['pay_order']=substr($ordid,0,30);
		$res=$Ord->where($condition)->save($data);
		if($res){
			$info=$Ord->where($condition)->find();
			$checkrecode=CheckRecode($info['recode']);
			if($info['recode'] && $checkrecode){
				$information['uid']=$info['uid'];
				$information['cid']=$info['cid'];
				$information['recode']=$info['recode'];
				$information['order']=$info['order'];
				$information['batch']=1;
				$information['sign']=1;
				$information['amount']=50;
				$information['time']=date('Y-m-d H:i:s');
				$commission=M("commission");
				$result=$commission->add($information);
			}
			$uid=$info['uid'];
			sendinfo('3',$uid);
		}
	}

	
function notify_url(){
	file_put_contents('/www/web/renli/public_html/Public/images/a3.txt', "a3");
	$config=C("config");
	$alipaySevice = new \AlipayTradeService($config); 
	$result = $alipaySevice->check($_POST);
	if($result) {//验证成功
	//请在这里加上商户的业务逻辑程序代
	//——请根据您的业务逻辑来编写程序（以下代码仅作参考）——
    //获取支付宝的通知返回参数，可参考技术文档中服务器异步通知参数列表
		$out_trade_no   = $_POST['out_trade_no'];        //商户订单号
		$trade_no       = $_POST['trade_no'];        //支付宝交易号
		$trade_status   = $_POST['trade_status'];    //交易状态
		$total_fee      = $_POST['buyer_pay_amount'];       //交易金额
		$notify_id      = $_POST['notify_id'];       //通知校验ID
		$notify_time    = $_POST['notify_time'];     //通知的发送时间。格式为yyyy-MM-dd HH:mm:ss。
		$buyer_email    = $_POST['buyer_logon_id'];     //买家支付宝帐号
		$parameter = array(
			"out_trade_no" => $out_trade_no, //商户订单编号
			"trade_no"     => $trade_no,     //支付宝交易号
			"trade_status" => $trade_status, //交易状态
			"total_fee"    => $total_fee,    //交易金额
			"notify_id"    => $notify_id,    //通知校验ID
			"notify_time"  => $notify_time,  //通知的发送时间
			"buyer_email"  => $buyer_email,  //买家支付宝帐号
			"pay_type"     => 'alipay',
		);
    if($_POST['trade_status'] == 'TRADE_FINISHED'){

    }else if ($_POST['trade_status'] == 'TRADE_SUCCESS'){
		//判断该笔订单是否在商户网站中已经做过处理
			//如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
			//请务必判断请求时的total_amount与通知时获取的total_fee为一致的
			//如果有做过处理，不执行商户的业务程序			
		//注意：
		//付款完成后，支付宝系统发送该交易状态通知
		if(!$this->CheckOrderStatus($out_trade_no)){
			$this->OrderHandle($parameter);  //进行订单处理，并传送从支付宝返回的参数；
		}
    }
		//——请根据您的业务逻辑来编写程序（以上代码仅作参考）——  
		echo "success";		//请不要修改或删除
	}else {
    	//验证失败
    	echo "fail";	//请不要修改或删除
	}
}

function return_url(){
	file_put_contents('/www/web/renli/public_html/Public/images/a4.txt', "a4");
	$config=C("config");
	$arr=$_GET;
	$alipaySevice = new \AlipayTradeService($config); 
	$result = $alipaySevice->check($arr);
	/* 实际验证过程建议商户添加以下校验。
	1、商户需要验证该通知数据中的out_trade_no是否为商户系统中创建的订单号，
	2、判断total_amount是否确实为该订单的实际金额（即商户订单创建时的金额），
	3、校验通知中的seller_id（或者seller_email) 是否为out_trade_no这笔单据的对应的操作方（有的时候，一个商户可能有多个seller_id/seller_email）
	4、验证app_id是否为该商户本身。
	*/
	if($result) {//验证成功
	//请在这里加上商户的业务逻辑程序代码
	//——请根据您的业务逻辑来编写程序（以下代码仅作参考）——
    //获取支付宝的通知返回参数，可参考技术文档中页面跳转同步通知参数列表
	//商户订单号
		// $out_trade_no = htmlspecialchars($_GET['out_trade_no']);
		// //支付宝交易号
		// $trade_no = htmlspecialchars($_GET['trade_no']);	
		// echo "验证成功<br />外部订单号：".$out_trade_no;
		header('Location: http://www.cusdc.cn');
		// $this->redirect('/Home/Enroll/pay?uuid='.$out_trade_no.'&trade_status='.$_GET['trade_status']);
		//——请根据您的业务逻辑来编写程序（以上代码仅作参考）
	}else{
	    //验证失败
	    echo "验证失败";
	}
}

public function dowxpay(){
	$usernames="longziwang";
	$info="caisepao";
	$uuid="111111111111111121212121212121";
	$input = new \WxPayUnifiedOrder();
	$input->SetBody($usernames);//商品简单描述String(128)
	$input->SetAttach($info);//附加数据，在查询API和支付通知中原样返回，可作为自定义参数使用。String(127)
	$input->SetOut_trade_no($uuid);//商户系统内部订单号，要求32个字符内、且在同一个商户号下唯一
	$input->SetTotal_fee('1');//订单总金额，单位为分
	$input->SetTime_start(date("YmdHis"));//订单生成时间，格式为yyyyMMddHHmmss，如2009年12月25日9点10分10秒表示为20091225091010。
	$input->SetTime_expire(date("YmdHis", time() + 600));//订单失效时间，格式为yyyyMMddHHmmss，如2009年12月27日9点10分10秒表示为20091227091010。
	$input->SetGoods_tag('');//商品标记，使用代金券或立减优惠功能时需要的参数String(32)
	$input->SetNotify_url('http://www.hnusit.com/pay/weipayverify');//异步接收微信支付结果通知的回调地址，通知url必须为外网可访问的url，不能携带参数
	//https://api.mch.weixin.qq.com/pay/unifiedorder
	$input->SetTrade_type('MWEB');//取值如下：JSAPI，NATIVE，APP等
	$input->SetProduct_id($uuid);//trade_type=NATIVE时（即扫码支付），此参数必传。此参数为二维码中包含的商品ID，商户自行定义。String(32)
	$input->SetSpbill_create_ip(get_client_ip());//APP和网页支付提交用户端ip，Native支付填调用微信支付API的机器IP，String(16)
	//dump($input);exit;
	$result = \WxPayApi::unifiedOrder($input);
	if ($result['return_code'] == 'FAIL') {
		$this->assign("wxalt", $result['return_msg']);
		$this->assign("wxewm", '');
	} elseif ($result['result_code'] == 'FAIL') {
		$this->assign("wxalt", $result['err_code'].':'.$result['err_code_des']);
		$this->assign("wxewm", '');
	} else {
		// $url2 = $result["code_url"];
		// $this->assign("wxalt", $result['return_msg']);
		// $this->assign("wxewm",'http://paysdk.weixin.qq.com/example/qrcode.php?data='.urlencode($url2));
		$redirect_url=urlencode("http://www.hnusit.com");
    	$url=$result['mweb_url']."&redirect_url=".$redirect_url;
    	// dump($url);exit;
		$this->assign('url',$url);
		$this->display("www");

	}
}

 public function wxnotify() {
      $notify = new \WxPayNotify();
      $res=$notify->Handle(true);
   }


   public function weipayverify(){
        //写支付记录，WEB_PATH是我网站的根目录
        libxml_disable_entity_loader(true);
        $postStr = $this->postdata();//接收post数据
        $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
        $arr = $this->object2array($postObj);//对象转成数组
        ksort($arr);// 对数据进行排序
        $str =$this-> ToUrlParams($arr);//对数据拼接成字符串
        $user_sign = strtoupper(md5($str));
        if($user_sign == $arr['sign']){//验证成功
        	$out_trade_no   = $arr['out_trade_no'];        //商户订单号
			$trade_no       = $arr['transaction_id'];      //微信交易号
			$trade_status   = $arr['result_code'];    	   //交易状态
			$total_fee      = $arr['total_fee']/100;       //交易金额
			$buyer_email    = $arr['openid'];     
			$parameter = array(
				"out_trade_no" => $out_trade_no, //商户订单编号
				"trade_no"     => $trade_no,     //支付宝交易号
				"trade_status" => $trade_status, //交易状态
				"total_fee"    => $total_fee,    //交易金额
				"buyer_email"  => $buyer_email,  
				"pay_type"     => 'wxpay',
			);
			if(!$this->CheckOrderStatus($out_trade_no)){
				$this->OrderHandle($parameter);  //进行订单处理
			}
        }
    }
    
    // 接收post数据
    /*
    *  微信是用$GLOBALS['HTTP_RAW_POST_DATA'];这个函数接收post数据的
    */
    function postdata(){
        $receipt = $_REQUEST;
        if($receipt==null){
            $receipt = file_get_contents("php://input");
            if($receipt == null){
                $receipt = $GLOBALS['HTTP_RAW_POST_DATA'];
            }
        }
        return $receipt;
    }
    
    //把对象转成数组
    function object2array($array){
	    if(is_object($array)) {
	        $array = (array)$array;
	    } if(is_array($array)) {
	        foreach($array as $key=>$value) {
	            $array[$key] = $this->object2array($value);
	        }
	    }
	    return $array;
    }
    
    //格式化参数格式化成url参数
    private function ToUrlParams($arr){
        $weipay_key = 'xCsqIyGjUvsjHHhrtSIkoGDJ0HAyZMdd';//微信的key,这个是微信支付给你的key，不要瞎填。
        $buff = "";
        foreach($arr as $k => $v){
            if($k != "sign" && $v != "" && !is_array($v)){
                $buff .= $k . "=" . $v . "&";
            }
        }
        $buff = trim($buff, "&");
        return $buff.'&key='.$weipay_key;
    }
}