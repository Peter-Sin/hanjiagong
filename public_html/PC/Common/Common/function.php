 <?php


//判断身份证号是否正确
 function checkIdCard($idcard){  
    // 只能是18位  
    if(strlen($idcard)!=18){  
        return false;  
    }  
    // 取出本体码  
    $idcard_base = substr($idcard, 0, 17);  
    // 取出校验码  
    $verify_code = substr($idcard, 17, 1);  
    // 加权因子  
    $factor = array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2);  
    // 校验码对应值  
    $verify_code_list = array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2');  
    // 根据前17位计算校验码  
    $total = 0;  
    for($i=0; $i<17; $i++){  
        $total += substr($idcard_base, $i, 1)*$factor[$i];  
    }  
    // 取模  
    $mod = $total % 11;  
    // 比较校验码  
    if($verify_code == $verify_code_list[$mod]){  
        return true;  
    }else{  
        return false;  
    }  
} 


function isIdCard($ordid){
    $user=M('user');
    $ordstatus=$user->where("crenum='$ordid'")->getField('crenum');
    if($ordstatus){
        return true;
    }else{
        return false;    
    }
}

//检测用户是否报名该公司
function isenroll($uid,$cid){
    $enroll=M("enroll");
    $info=$enroll->where("uid='$uid' AND cid='$cid'")->find();
    if($info){
        return true;
    }else{
        return false;
    }
}

//查询订单支付状态
function checkorderstatus($ordid){
    $Ord=M('Orderlist');
    $ordstatus=$Ord->where('ordid='.$ordid)->getField('ordstatus');
    if($ordstatus==1){
        return true;
    }else{
        return false;    
    }
}

//检测推荐码是否正确
function CheckRecode($recode){
        $Ord=M('user');
        $condition['recode'] = $recode;
        $ordstatus=$Ord->where($condition)->getField('recode');
        if($ordstatus==$recode){
            return true;
        }else{
            return false;    
        }
    }
  
//处理订单函数
//更新订单状态，写入订单支付后返回的数据
function orderhandle($parameter){
    $ordid=$parameter['out_trade_no'];
    $data['payment_trade_no']      =$parameter['trade_no'];
    $data['payment_trade_status']  =$parameter['trade_status'];
    $data['payment_notify_id']     =$parameter['notify_id'];
    $data['payment_notify_time']   =$parameter['notify_time'];
    $data['payment_buyer_email']   =$parameter['buyer_email'];
    $data['ordstatus']             =1;
    $Ord=M('Orderlist');
    $Ord->where('ordid='.$ordid)->save($data);
} 
  
  
//获取一个随机且唯一的订单号；
function getordcode(){
    $Ord=M('Orderlist');
    $numbers = range (10,99);
    shuffle ($numbers); 
    $code=array_slice($numbers,0,4); 
    $ordcode=$code[0].$code[1].$code[2].$code[3];
    $oldcode=$Ord->where("ordcode='".$ordcode."'")->getField('ordcode');
    if($oldcode){
        getordcode();
    }else{
        return $ordcode;
    }
}

//获取一个随机且唯一的推荐码；
function getrecode(){
    $user=M('user');
    $arr= array(a,b,c,d,e,f,g,h,i,j,k,m,n,p,q,r,s,t,u,v,w,x,y,z,0,1,2,3,4,5,6,7,8,9);
    $str='';
    for($i=0;$i<6;$i++){
        $key=mt_rand(0,count($arr)-1);
        $str=$str.$arr[$key];
    }
  // return $str;
  // return strlen($str);
    $recode=$user->where("recode='$str'")->getField('recode');
    if($recode){
        getordcode();
    }else{
        return $str;
    }
}


function sendinfo($num,$uid){
    switch($num){
        case 1:
        $data['uid']=$uid;
        $data['title']="注册成功";
        $data['content']="您已注册成功";
        break;
        case 2:
        $data['uid']=$uid;
        $data['title']="改密成功";
        $data['content']="您已改密成功";
        break;
        case 3:
        $data['uid']=$uid;
        $data['title']="报名成功";
        $data['content']="您已报名成功";
        break;
        case 4:
        $data['uid']=$uid;
        $data['title']="支付成功";
        $data['content']="您已支付成功";
        break;
        case 5:
        $data['uid']=$uid;
        $data['title']="发布成功";
        $data['content']="您已发布成功";
        break;
        // case 6:
        // $data['uid']=$uid;
        // $data['title']="找密成功";
        // $data['content']="您已找密成功";
        // break;
    }
    $systeminfo=M("systeminfo");
    $data['time']=date("Y-m-d H:i:s");
    $data['eye']=0;
    $res=$systeminfo->add($data);

}


//OSS返回json
function backJson($code,$info){ 
    $arr['status']=$code; 
    $arr['info']=$info; 
    print_r(json_encode($arr)); 
    exit; 
}



function ossUpPic($fFiles,$n,$ossClient,$bucketName,$web,$isThumb=0){ 
    $fType=$fFiles['type']; 
    $back=array( 
        'code'=>0, 
        'msg'=>'', 
    );
    if(!in_array($fType, C('oss_exts'))){ 
        $back['msg']='文件格式不tai正确'; 
        return $back; 
        exit; 
    } 
    $fSize=$fFiles['size']; 
    if($fSize>C('oss_maxSize')){ 
        $back['msg']='文件超过了1M'; 
        return $back; 
        exit; 
    } 
    $fname=$fFiles['name']; 
    $ext=substr($fname,stripos($fname,'.'));
    $fup_n=$fFiles['tmp_name']; 
    $file_n=time().'_'.rand(100,999); 
    $object = $n."/".$file_n.$ext;//目标文件名 
    if (is_null($ossClient)) exit(1);     
    $ossClient->uploadFile($bucketName, $object, $fup_n);
    if($isThumb==1){ 
        // 图片缩放，参考https://help.aliyun.com/document_detail/44688.html?spm=5176.doc32174.6.481.RScf0S  
        $back['thumb']= $web.$object."?x-oss-process=image/resize,h_300,w_300"; 
    }     
    $back['code']=1; 
    $back['msg']=$web.$object; 
    return $back; 
    exit;     
}
 


function getSignedUrl($ossClient, $bucket, $image){
    $object = "$image";
    $timeout = 3600; // URL的有效期是3600秒
    $signedUrl = $ossClient->signUrl($bucket, $object, $timeout);
    return $signedUrl;
}


function telVerifyCode($tel){
    Vendor('Alidayu.TopSdk','','.php');
    $c = new \TopClient;
    $appkey='23568236';
    $secret='15ab140e7b74fdf0a5f3146b0100936c';
    $code=mt_rand(100000,999999);
    $c->appkey = $appkey;
    $c->secretKey = $secret;
    $req = new \AlibabaAliqinFcSmsNumSendRequest;
    $req->setExtend("123456");
    $req->setSmsType("normal");
    $req->setSmsFreeSignName("龙子网");
    $req->setSmsParam("{\"code\":\"$code\",\"product\":\"龙子网\"}");
    $req->setRecNum("$tel");
    $req->setSmsTemplateCode("SMS_34435228");
    $resp = $c->execute($req);
    $resp=(array)$resp;
    $rrr=$resp["result"];
    $rrr=(array)$rrr;
    if($rrr['success']=="true"){
        $telcode['num']=1;
        $telcode['code']=$code;
        return $telcode;
    }elseif($resp["sub_code"]=="isv.BUSINESS_LIMIT_CONTROL"){
        $telcode['num']=2;
        return $telcode;
    }elseif($resp["sub_code"]=="isv.MOBILE_NUMBER_ILLEGAL"){
        $telcode['num']=0;
        return $telcode;
    }
}


function getimage(){
    $user=M("user");
    if($_SESSION["uuid"]){
        $uuid=$_SESSION["uuid"];
        $img=$user->where("uuid='$uuid'")->field('image')->find();
        if(strpos($img['image'],"/")){
            $image=$img["image"];
        }else{
            $image="/Public/images/faceimg/".$img["image"];
        }
    }
    return $image;
}

function getusername($uid){
    $user=M("user");
    if($uid){
        $username=$user->where("id='$uid'")->field('username')->find();
    }
    return $username['username'];
}

function getuserimage($uid){
    $user=M("user");
    if($uid){
        $img=$user->where("id='$uid'")->field('image')->find();
        if(strpos($img['image'],"/")){
            $image=$img["image"];
        }else{
            $image="/Public/images/faceimg/".$img["image"];
        }
    }
    return $image;
}


function getsex($sex){
    if($sex==1){
        $sex="男";
    }elseif($sex==2){
        $sex="女";
    }else{
        $sex="保密哦";
    }
    return $sex;
}

function getuid(){
    $user=M("user");
    if($_SESSION["uuid"]){
        $uuid=$_SESSION["uuid"];
        $uid=$user->where("uuid='$uuid'")->field('id')->find();
    }
    return $uid;    
}




 function sendMail($to, $title, $content) {
    Vendor('PHPMailer.PHPMailerAutoload');     
    $mail = new PHPMailer(); //实例化
    $mail->IsSMTP(); // 启用SMTP
    $mail->Host=C('MAIL_HOST'); //smtp服务器的名称（这里以QQ邮箱为例）
    $mail->SMTPAuth = C('MAIL_SMTPAUTH'); //启用smtp认证
    $mail->Username = C('MAIL_USERNAME'); //你的邮箱名
    $mail->Password = C('MAIL_PASSWORD') ; //邮箱密码
    $mail->From = C('MAIL_FROM'); //发件人地址（也就是你的邮箱地址）
    $mail->FromName = C('MAIL_FROMNAME'); //发件人姓名
    $mail->AddAddress($to,"尊敬的客户");
    $mail->WordWrap = 50; //设置每行字符长度
    $mail->IsHTML(C('MAIL_ISHTML')); // 是否HTML格式邮件
    $mail->CharSet=C('MAIL_CHARSET'); //设置邮件编码
    $mail->Subject =$title; //邮件主题
    $mail->Body = $content; //邮件内容
    $mail->AltBody = "这是一个纯文本的身体在非营利的HTML电子邮件客户端"; //邮件正文不支持HTML的备用显示
    // return($mail->Send());
    dump($mail);
    if(!$mail->Send()){
        return $mail->ErrorInfo; 
    }else{ 
        return true; 
    }
}




function ismobile() {
    // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
    if (isset ($_SERVER['HTTP_X_WAP_PROFILE']))
        return true;
    //此条摘自TPM智能切换模板引擎，适合TPM开发
    if(isset ($_SERVER['HTTP_CLIENT']) &&'PhoneClient'==$_SERVER['HTTP_CLIENT'])
        return true;
    //如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
    if (isset ($_SERVER['HTTP_VIA']))
        //找不到为flase,否则为true
        return stristr($_SERVER['HTTP_VIA'], 'wap') ? true : false;
    //判断手机发送的客户端标志,兼容性有待提高
    if (isset ($_SERVER['HTTP_USER_AGENT'])) {
        $clientkeywords = array(
            'nokia','sony','ericsson','mot','samsung','htc','sgh','lg','sharp','sie-','philips','panasonic','alcatel','lenovo','iphone','ipod','blackberry','meizu','android','netfront','symbian','ucweb','windowsce','palm','operamini','operamobi','openwave','nexusone','cldc','midp','wap','mobile'
        );
        //从HTTP_USER_AGENT中查找手机浏览器的关键字
        if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {
            return true;
        }
    }
    //协议法，因为有可能不准确，放到最后判断
    if (isset ($_SERVER['HTTP_ACCEPT'])) {
        // 如果只支持wml并且不支持html那一定是移动设备
        // 如果支持wml和html但是wml在html之前则是移动设备
        if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {
            return true;
        }
    }
    return false;
}
?>