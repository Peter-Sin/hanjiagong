<?php
return array(
       /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'rm-bp1t695tlc335c0p7.mysql.rds.aliyuncs.com',//'rm-bp1t695tlc335c0p7.mysql.rds.aliyuncs.com', // 服务器地址
    'DB_NAME'               =>  'humanresource',          // 数据库名
    'DB_USER'               =>  'longzi',      // 用户名
    'DB_PWD'                =>  'uuWiPPvDc7*2BLXk',          // 密码
    'DB_PORT'               =>  '',        // 端口
    'DB_PREFIX'             =>  '',    // 数据库表前缀
    
    'TMPL_L_DELIM'          =>  '<{',       //左定界符
    'TMPL_R_DELIM'          =>  '}>',       //右定界符
    //'SHOW_PAGE_TRACE'     => true         //错误调试->干扰JS的AJAX->responseText

	//报名费用
	// 'ENROLL_FEE'=>120,//单位元
	
	// 'ENROLL_FEE_0'=>0,//单位元，志愿者是免费的
	// 'ENROLL_FEE_50'=>50,//单位元，男女十公里是50元
	// 'ENROLL_FEE_100'=>100,//单位元，校友是100元
	
	//支付宝配置参数
    'alipay_config'=>array(
		'partner' =>'2088911336424401',   //这里是你在成功申请支付宝接口后获取到的PID；
		'key'=>'kda7hdsoq90d405d6i5ai78t2mvx9iwi',//这里是你在成功申请支付宝接口后获取到的Key
		'sign_type'=>strtoupper('MD5'),
		'input_charset'=> strtolower('utf-8'),
		'cacert'=> getcwd().DIRECTORY_SEPARATOR.'ThinkPHP'.DIRECTORY_SEPARATOR.'Library'.DIRECTORY_SEPARATOR.'Vendor'.DIRECTORY_SEPARATOR.'Alipay'.DIRECTORY_SEPARATOR.'cacert.pem',
		'transport'=> 'http',
	),
	//以上配置项，是从接口包中alipay.config.php 文件中复制过来，进行配置；
	
	'alipay'   =>array(
		//这里是卖家的支付宝账号，也就是你申请接口时注册的支付宝账号
		'seller_email'=>'10000@longzi.cn',
		//这里是异步通知页面url，提交到项目的Pay控制器的notifyurl方法；
		'notify_url'=>'http://www.longzikeji.cn/index.php/Home/Pay/notifyurl', 
		//这里是页面跳转通知url，提交到项目的Pay控制器的returnurl方法；
		'return_url'=>'http://www.longzikeji.cn/index.php/Home/Pay/returnurl',
	),
		'config' => array (	
		//应用ID,您的APPID。
		'app_id' => "2017102709548533",
		//商户私钥，您的原始格式RSA私钥
		'merchant_private_key' => "MIIEowIBAAKCAQEA1/nz7JyURGqoBOXnu6+dTZ1E0Ixk2QJGtlShkaJUsyHGzp3Rs056KUwyK0amgAXNmfYQ1++EbwJRXAP4TxzzJZjv0QBFQ2xHJTkZTXkW+uORmK5fimCl5JldbBB40vdlS3AnQIhOwratDsXGBbfYW5ZDIyErZPL8aVyDuT04qgd2GfQJYpLqGlfmE2vnFErBFxc7rPCk5HtbvEt5WV5bIbX5KXRMRSBzQaT0ZLpiXCQxUcc2EtB+rrHelenL7dD+bYFSQ9TfEw/7I86CtoU5cpFWCBBQ5FeHfoRc7oIeChQZPyH+M619V4es7JNdfmjVFoW33XnOtYGXopagCUYCkQIDAQABAoIBAQCK1eoA01LYfDuQEn6Z/zU+nHeNHIMDoVv1f4fxR4ntMSxMy9Tuz+blv06M1TjZGWHms/B170mR1sqYPREVQkXniF25W9QqmGNPwVnLnKiyFTIWFRnjqWdbAV+1xQz2iQR7rxf8euMudiHfWjGGoX0auwhjf8IWfcDWthsTLBDN8xmUy0UOvYt6CnZNdYkqgQhTYNCuzYuXnjfV4WeB/xOl02f9SePp7eeJfoF2Mk2+xhF/6Od2FPooJM42aSCGflQex1FSm4M1G+OOSwL4ROv0pklhg2AI0HVp/e8QKtL1wu0imAjFEsmepd1sGX5rZ7SWX2b+BauBKGnOk/YsPVMlAoGBAO8gLurr2TSU1h/G2Q7J/VtNccaY/qT47IMbZsY6J+cYzXsU8a2DrF/ZZtziEqevjFFXFCQS1EAwJCaSOJ0y9l6GLtKnpHZfkOivTPQYsDbdSZvNvU6u2HfCkXI9Gkusu7eY50E5MiSrd88vODIJS2EQUmXxVDxLFt2YTYJQQuI3AoGBAOc3k2Ojsco7pYPSZiRNR1WPjB4eTfKwwZIY2wqqKYS1omy1hBCsn8BbMiVDcrYg4b126IYQBlqleWowv3NipbfedDFFeKeNr/XNjglqk6rVe9okqanP2Cq950egpBajMKjVT0l2TQCQsjtX655x8solpAauAoA2GRzKZ2vnFn13AoGAELfpT9dpejmlttcKOfR5WDbT65SqyRH2RzxVNSq/u3KKez59nyoDlTf37x2HPF4Tq2QxLkx6tnonLOMwPh1gCD/NakD6SKRp1zraYH6RY2SZTuFViPjEfasGzDvlaMEM5ssz7+V10gaC++NLRIRN1t1zRVlYEFcXpCqP0LqX0oUCgYAucW9dmEfiA1EfxWdW617kxMy0UAoAMZjwK6Xz4nIsgf96Lou0fbgo/yh3a7Di/H/besMCCr37/zkAJ4KNPsdiw4A7VWUC4ubxTLS3F31J10/lZW/e+CzHiRWnwZC0K1tezln6u5SEBIyIdwSQ8vp9uEnWPaWq8zLgIZfciLJvyQKBgGARCu7sjQE0uPWbh8QLUBbKotsy4N8d36/pAYdhKH22s2mrMc+9RoWJcOonDpSidCTLi3k6AOfNbWRjNP91llCWqDooAI+pe7R7ciaFsHkQS0JRgu0RwbHsdHy+D1cVOMubAf9j7md84E/eNoeJUD70RHxRFDyzz3PozrpfG+u3",
		//异步通知地址
		'notify_url' => "http://www.cusdc.cn/index.php/Home/pay/notify_url",
		//同步跳转
		'return_url' => "http://www.cusdc.cn/index.php/Home/pay/return_url",
		//编码格式
		'charset' => "UTF-8",
		//签名方式
		'sign_type'=>"RSA2",
		//支付宝网关
		'gatewayUrl' => "https://openapi.alipay.com/gateway.do",
		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxNl3HJUlEQXDBLkJctHATVqkeAdPjrnajQTafFV3ROEwMeceABfi+3VfvEkAlIPa/pUvgNisP0nsByXg0hKFXMvBX4BciHjd0UsvL1LnEM3dJh3sQHbUg1WsIQ9rKVZ+aPbG8aOvB3xTm2m1Kb+AzFOmEFD5Eqn0MRjwrz8FjbRlx1pURYKpBUcPBhIrAWuI6+iKaHCfCnf7P2rzFUVEnilNVJQrfIM3IAKsiscjLiATCRUvbmyYXOmEC063+kDQgVJ7SWeVCehkXLQKZ29a/QCheF+b58lCot/rf2kcsljaTyl/hJda8qNarcs0aan2eDlDQ22pVQ0NUxGekpRk8wIDAQAB",	
),
);
