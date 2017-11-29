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
		vendor('Wxpay.WxPayJsApi');

	}


    public function pay(){
    	$enroll=M("enroll");
    	$order=$_GET['order'];
    	$iswx=$_GET['iswx'];
    	$check=$this->CheckOrder($order);
    	if($check=='true'){
    		$condition['order'] = $order;
	    	$info=$enroll->where($condition)->find();
	    	$info['iswx']=$iswx;
	    	$this->assign('info',$info);
	    	$this->display('pay');
    	}
    }
	
	private function CheckOrderStatus($ordid){
		$Ord=M('enroll');
		$condition['order'] = $ordid;
		$ordstatus=$Ord->where($condition)->getField('statu');
		if($ordstatus==1){
			return true;
		}else{
			return false;    
		}
	}

	private function CheckOrder($order){
		$Ord=M('enroll');
		$condition['order'] = $order;
		$ordstatus=$Ord->where($condition)->getField('order');
		if($ordstatus==$order){
			return true;
		}else{
			return false;    
		}
	}



	private function getCompanyName($cid){
		$company=M('company');
		$condition['id'] = $cid;
		$name=$company->where($condition)->getField('title');
		return $name;
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
		$condition['order'] = $ordid;
		$res=$Ord->where($condition)->save($data);
		if($res){
			$commission=M("commission");
			$info=$Ord->where("order='$order'")->field("recode,uid,cid,order")->find();
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
				$result=$commission->add($information);
			}
		}
	}
	
	//支付宝支付
	public function doalipay() {
		$enroll=M('enroll');
		$order=$_GET["order"];
		$condition['order'] = $order;
		$info=$enroll->where($condition)->find();
		if(empty($info) || $info=='NULL'){
			$this->ajaxReturn('0');exit;//订单号不存在
		}else{
			$statu=$enroll->where($condition)->getField('statu');
			if($statu=='1'){
				$this->ajaxReturn('1');exit;//该订单已支付
			}else{
				$config=C("config"); 
			    $out_trade_no =$info['order'];//商户订单号，商户网站订单系统中唯一订单号，必填  
			    $subject ="龙子人力资源";//订单名称，必填    
			    $total_amount = C('ENROLL_FEE');//付款金额，必填   
			    $body = "";//商品描述，可空
			    $timeout_express="1m";//超时时间
			    $payRequestBuilder = new \AlipayTradeWapPayContentBuilder();
			    $payRequestBuilder->setBody($body);
			    $payRequestBuilder->setSubject($subject);
			    $payRequestBuilder->setOutTradeNo($out_trade_no);
			    $payRequestBuilder->setTotalAmount($total_amount);
			    $payRequestBuilder->setTimeExpress($timeout_express);
			    $payResponse = new \AlipayTradeService($config);
			    $result=$payResponse->wapPay($payRequestBuilder,$config['return_url'],$config['notify_url']);
			    return $result;
			}
		}
			
	}



function notify_url(){
	$config=C("config");
	file_put_contents('/www/web/renli/public_html/Public/images/a1.txt', "a1");
	$alipaySevice = new \AlipayTradeService($config); 
	$result = $alipaySevice->check($_POST);
	if($result) {//验证成功
	//请在这里加上商户的业务逻辑程序代
	//——请根据您的业务逻辑来编写程序（以下代码仅作参考）——
    //获取支付宝的通知返回参数，可参考技术文档中服务器异步通知参数列表
	//商户订单号
	$out_trade_no = $_POST['out_trade_no'];
	//支付宝交易号
	$trade_no = $_POST['trade_no'];
	//交易状态
	$trade_status = $_POST['trade_status'];
    if($_POST['trade_status'] == 'TRADE_FINISHED'){

    }else if ($_POST['trade_status'] == 'TRADE_SUCCESS'){
		//判断该笔订单是否在商户网站中已经做过处理
			//如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
			//请务必判断请求时的total_amount与通知时获取的total_fee为一致的
			//如果有做过处理，不执行商户的业务程序			
		//注意：
		//付款完成后，支付宝系统发送该交易状态通知
    }
		//——请根据您的业务逻辑来编写程序（以上代码仅作参考）——  
		echo "success";		//请不要修改或删除
	}else {
    	//验证失败
    	echo "fail";	//请不要修改或删除
	}
}


function return_url(){
	$config=C("config");
	$arr=$_GET;
	$alipaySevice = new \AlipayTradeService($config); 
	$result = $alipaySevice->check($arr);
	file_put_contents('/www/web/renli/public_html/Public/images/a2.txt',"a2");
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
		//——请根据您的业务逻辑来编写程序（以上代码仅作参考）——
		/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	}else {
	    //验证失败
	    echo "验证失败";
	}
}



// public function getalipaycom(){
// 	$config=C("config"); 
// 	dump($config);
// $aop = new \AopClient ();
// $aop->gatewayUrl = $config['gatewayUrl'];
// $aop->appId = $config['app_id'];
// $aop->rsaPrivateKey = $config['merchant_private_key'];
// $aop->alipayrsaPublicKey=$config['alipay_public_key'];
// $aop->apiVersion = '1.0';
// $aop->signType = 'RSA2';
// $aop->postCharset='UTF-8';
// $aop->format='json';
// $request = new \AlipayFundTransToaccountTransferRequest();
// $request->setBizContent("{" .
// 	"\"out_biz_no\":\"31423214234321\"," .
// 	"\"payee_type\":\"ALIPAY_LOGONID\"," .
// 	"\"payee_account\":\"xfscok6541@sandbox.com\"," .
// 	"\"amount\":\"0.01\"," .
// 	"\"payer_show_name\":\"龙子网返现\"," .
// 	"\"payee_real_name\":\"沙箱环境\"," .
// 	"\"remark\":\"转账备注\"" .
// 	"  }");
// 	$result = $aop->execute ( $request); 
// 	dump($result);

// 	$responseNode = str_replace(".", "_", $request->getApiMethodName()) . "_response";
// 	$resultCode = $result->$responseNode->code;
// 	if(!empty($resultCode)&&$resultCode == 10000){
// 	echo "成功";
// 	} else {
// 	echo "失败";
// 	}
// }

// function docallback(){
// 	$config=C("config"); 
// 	$aop = new \AopClient ();
// 	$aop->gatewayUrl = $config['gatewayUrl'];
// 	$aop->appId = $config['app_id'];
// 	$aop->rsaPrivateKey =  $config['merchant_private_key'];
// 	$aop->alipayrsaPublicKey=$config['alipay_public_key'];
// 	$aop->apiVersion = '1.0';
// 	$aop->signType = 'RSA2';
// 	$aop->postCharset='UTF-8';
// 	$aop->format='json';
// 	$request = new \AlipayFundTransOrderQueryRequest ();
// 	$request->setBizContent("{" .
// 	"\"out_biz_no\":\"31423214234321\"," .
// 	// "\"order_id\":\"20160627110070001502260006780837\"" .
// 	"  }");
// 	$result = $aop->execute ( $request); 
// dump($result);
// 	$responseNode = str_replace(".", "_", $request->getApiMethodName()) . "_response";
// 	$resultCode = $result->$responseNode->code;
// 	if(!empty($resultCode)&&$resultCode == 10000){
// 	echo "成功";
// 	} else {
// 	echo "失败";
// 	}
// 	// 响应示例
// }

function getUserOpenId(){
    	$appid="wx1023c9b4490b8cca";
    	$appsecret="79ae5365decbce25018d5c338c323514";
    	$code=$_GET['code'];
        dump($code);
    	$url="https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$appid."&secret=".$appsecret."code=".$code."&grant_type=authorization_code";
    	$res=$this->http_curl($url,'get');
    	dump($res);
    }

    public function getcode(){
        $appid="wx1023c9b4490b8cca";
        $redirect_uri=urlencode("http://www.cusdc.cn/index.php/Home/Pay/getUserOpenId");
        $url="https://open.weixin.qq.com/connect/qrconnect?appid=".$appid."&redirect_uri=".$redirect_uri."&response_type=code&scope=snsapi_login&state=STATE#wechat_redirect";
        header('location:'.$url);
    }


private function is_weixin(){ 
   	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false ) {
      	return 1;
   	}  
      	return 0;
	}


public function dowxpaycom(){
	$enroll=M('enroll');
	$order=$_GET["order"];
	$usernames="longziwang";
	$info="caisepao";
	//①、获取用户openid
	$tools = new \WxPayJsApi();
	$openId = $tools->GetOpenid();
	//②、统一下单
	$input = new \WxPayUnifiedOrder();
	$input->SetBody($usernames);//商品简单描述String(128)
	$input->SetAttach($info);//附加数据，在查询API和支付通知中原样返回，可作为自定义参数使用。String(127)
	$input->SetOut_trade_no($order);//商户系统内部订单号，要求32个字符内、且在同一个商户号下唯一
	$input->SetTotal_fee('1');//订单总金额，单位为分
	$input->SetTime_start(date("YmdHis"));//订单生成时间，格式为yyyyMMddHHmmss，如2009年12月25日9点10分10秒表示为20091225091010。
	$input->SetTime_expire(date("YmdHis", time() + 600));//订单失效时间，格式为yyyyMMddHHmmss，如2009年12月27日9点10分10秒表示为20091227091010。
	$input->SetGoods_tag('');//商品标记，使用代金券或立减优惠功能时需要的参数String(32)
	$input->SetNotify_url('http://www.cusdc.cn/index.php/Home/Pay/weipayverify');//异步接收微信支付结果通知的回调地址，通知url必须为外网可访问的url，不能携带参数
	//https://api.mch.weixin.qq.com/pay/unifiedorder
	$input->SetTrade_type('JSAPI');//取值如下：JSAPI，NATIVE，APP等
	$input->SetOpenid($openId);
	// $input->SetProduct_id($uuid);//trade_type=NATIVE时（即扫码支付），此参数必传。此参数为二维码中包含的商品ID，商户自行定义。String(32)
	// $input->SetSpbill_create_ip(get_client_ip());//APP和网页支付提交用户端ip，Native支付填调用微信支付API的机器IP，String(16)
	$result = \WxPayApi::unifiedOrder($input);
	$jsApiParameters = $tools->GetJsApiParameters($result);
	if ($result['return_code'] == 'FAIL') {
		$this->assign("wxalt", $result['return_msg']);
		$this->assign("wxewm", '');
	} elseif ($result['result_code'] == 'FAIL') {
		$this->assign("wxalt", $result['err_code'].':'.$result['err_code_des']);
		$this->assign("wxewm", '');
	} else {
		$this->assign('jsApiParameters',$jsApiParameters);
		$this->display("wxpay");

	}
}

public function dowxpay(){
	$enroll=M('enroll');
	$order=$_GET["order"];
	$condition['order'] = $order;
	$info=$enroll->where($condition)->find();
	if(empty($info) || $info=='NULL'){
		$this->ajaxReturn('0');exit;//订单号不存在
	}else{
		$statu=$enroll->where($condition)->getField('statu');
		if($statu=='1'){
			$this->ajaxReturn('1');exit;//该订单已支付
		}else{
			// $info['company']=$this->getCompanyName($info['cid']);
			$usernames="龙子人力资源";
			$datainfo=$info['order'].$info['time'];
			$order=substr($info['order'],0,30).getnumcode(2);//订单号
			$fee=C(ENROLL_FEE)*100;
			if(is_weixin()==1){
				//①、获取用户openid
				$tools = new \WxPayJsApi();
				$openId = $tools->GetOpenid();
				//②、统一下单
				$input = new \WxPayUnifiedOrder();
				$input->SetBody($usernames);//商品简单描述String(128)
				$input->SetAttach($datainfo);//附加数据，在查询API和支付通知中原样返回，可作为自定义参数使用。String(127)
				$input->SetOut_trade_no($order);//商户系统内部订单号，要求32个字符内、且在同一个商户号下唯一
				$input->SetTotal_fee($fee);//订单总金额，单位为分
				$input->SetTime_start(date("YmdHis"));//订单生成时间，格式为yyyyMMddHHmmss，如2009年12月25日9点10分10秒表示为20091225091010。
				$input->SetTime_expire(date("YmdHis", time() + 600));//订单失效时间，格式为yyyyMMddHHmmss，如2009年12月27日9点10分10秒表示为20091227091010。
				$input->SetGoods_tag('');//商品标记，使用代金券或立减优惠功能时需要的参数String(32)
				$input->SetNotify_url('http://www.cusdc.cn/index.php/Home/Pay/weipayverify');//异步接收微信支付结果通知的回调地址，通知url必须为外网可访问的url，不能携带参数
				//https://api.mch.weixin.qq.com/pay/unifiedorder
				$input->SetTrade_type('JSAPI');//取值如下：JSAPI，NATIVE，APP等
				$input->SetOpenid($openId);
				// $input->SetProduct_id($uuid);//trade_type=NATIVE时（即扫码支付），此参数必传。此参数为二维码中包含的商品ID，商户自行定义。String(32)
				// $input->SetSpbill_create_ip(get_client_ip());//APP和网页支付提交用户端ip，Native支付填调用微信支付API的机器IP，String(16)
				$result = \WxPayApi::unifiedOrder($input);
				// dump($result);exit;
				$jsApiParameters = $tools->GetJsApiParameters($result);
			}else{
				$input = new \WxPayUnifiedOrder();
				$input->SetBody($usernames);//商品简单描述String(128)
				$input->SetAttach($datainfo);//附加数据，在查询API和支付通知中原样返回，可作为自定义参数使用。String(127)
				$input->SetOut_trade_no($order);//商户系统内部订单号，要求32个字符内、且在同一个商户号下唯一
				$input->SetTotal_fee($fee);//订单总金额，单位为分
				$input->SetTime_start(date("YmdHis"));//订单生成时间，格式为yyyyMMddHHmmss，如2009年12月25日9点10分10秒表示为20091225091010。
				$input->SetTime_expire(date("YmdHis", time() + 600));//订单失效时间，格式为yyyyMMddHHmmss，如2009年12月27日9点10分10秒表示为20091227091010。
				$input->SetGoods_tag('');//商品标记，使用代金券或立减优惠功能时需要的参数String(32)
				$input->SetNotify_url('http://www.cusdc.cn/index.php/Home/Pay/weipayverify');//异步接收微信支付结果通知的回调地址，通知url必须为外网可访问的url，不能携带参数
				//https://api.mch.weixin.qq.com/pay/unifiedorder
				$input->SetTrade_type('MWEB');//取值如下：JSAPI，NATIVE，APP等
				$input->SetProduct_id($order);//trade_type=NATIVE时（即扫码支付），此参数必传。此参数为二维码中包含的商品ID，商户自行定义。String(32)
				$input->SetSpbill_create_ip(get_client_ip());//APP和网页支付提交用户端ip，Native支付填调用微信支付API的机器IP，String(16)
				$result = \WxPayApi::unifiedOrder($input);
			}
			if ($result['return_code'] == 'FAIL') {
				$this->assign("wxalt", $result['return_msg']);
				$this->assign("wxewm", '');
			} elseif ($result['result_code'] == 'FAIL') {
				$this->assign("wxalt", $result['err_code'].':'.$result['err_code_des']);
				$this->assign("wxewm", '');
			} else {
				if(is_weixin()==1){
					$this->assign('jsApiParameters',$jsApiParameters);
					$this->display("wxpay");
				}else{
					$redirect_url=urlencode("http://www.cusdc.cn");
			    	$url=$result['mweb_url']."&redirect_url=".$redirect_url;
					$this->assign('url',$url);
					$this->display("www");
				}
			}
		}
	}
}



public function weipayverify(){
        //写支付记录，WEB_PATH是我网站的根目录
        // create_pay_log(WEB_PATH.'/Public/apilog/weipay_ajax/',date('Y-m-d').'.log');
        libxml_disable_entity_loader(true);
        $postStr = $this->postdata();//接收post数据
        $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
        $arr = $this->object2array($postObj);//对象转成数组
        ksort($arr);// 对数据进行排序
        $str =$this-> ToUrlParams($arr);//对数据拼接成字符串
        dump($arr);
        // file_put_contents('/www/web/renli/public_html/Public/images/aaa.txt', "135123".$arr['appid']);
        $user_sign = strtoupper(md5($str));
        dump($user_sign);exit;
        if($user_sign == $arr['sign']){//验证成功
        	$out_trade_no   = $arr['out_trade_no'];        //商户订单号
			$trade_no       = $arr['transaction_id'];        //微信交易号
			$trade_status   = $arr['result_code'];    //交易状态
			$total_fee      = $arr['total_fee']/100;       //交易金额
			// $notify_id      = $arr['notify_id'];       //通知校验ID
			// $notify_time    = $arr['notify_time'];     //通知的发送时间。格式为yyyy-MM-dd HH:mm:ss。
			$buyer_email    = $arr['openid'];     //买家支付宝帐号
			$parameter = array(
				"out_trade_no" => $out_trade_no, //商户订单编号
				"trade_no"     => $trade_no,     //支付宝交易号
				"trade_status" => $trade_status, //交易状态
				"total_fee"    => $total_fee,    //交易金额
				// "notify_id"    => $notify_id,    //通知校验ID
				// "notify_time"  => $notify_time,  //通知的发送时间
				"buyer_email"  => $buyer_email,  //买家支付宝帐号
				"pay_type"     => 'wxpay',
			);
			
			if(!$this->CheckOrderStatus($out_trade_no)){
				$this->OrderHandle($parameter);  //进行订单处理，并传送从支付宝返回的参数；
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
        file_put_contents('/www/web/renli/public_html/Public/images/aaa.txt', $receipt);
    //     $receipt="<xml><appid><![CDATA[wx1023c9b4490b8cca]]></appid>
				// <attach><![CDATA[caisepao]]></attach>
				// <bank_type><![CDATA[CFT]]></bank_type>
				// <cash_fee><![CDATA[1]]></cash_fee>
				// <fee_type><![CDATA[CNY]]></fee_type>
				// <is_subscribe><![CDATA[Y]]></is_subscribe>
				// <mch_id><![CDATA[1234880602]]></mch_id>
				// <nonce_str><![CDATA[q01ru2d01k23mqkprjoez2ftwhyurnlg]]></nonce_str>
				// <openid><![CDATA[oBZWgt4ACiT_7s6tXIyshUt-eYW4]]></openid>
				// <out_trade_no><![CDATA[111111111111111121212121212121]]></out_trade_no>
				// <result_code><![CDATA[SUCCESS]]></result_code>
				// <return_code><![CDATA[SUCCESS]]></return_code>
				// <sign><![CDATA[63326AF089746C21AF97396D2AC96E8E]]></sign>
				// <time_end><![CDATA[20171021143622]]></time_end>
				// <total_fee>1</total_fee>
				// <trade_type><![CDATA[MWEB]]></trade_type>
				// <transaction_id><![CDATA[4200000028201710219411025069]]></transaction_id>
				// </xml>";
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