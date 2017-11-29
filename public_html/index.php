<?php
// echo "111111111111111111111111111111";
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

header('Content-type:text/html;charset=utf-8');
// 应用入口文件
// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

 // 开启调试模式 
define('APP_DEBUG', true);
$theusagt = $_SERVER["HTTP_USER_AGENT"];
if(strpos($theusagt , "Windows")!==false){
	define("APP_PATH","./PC/");
}elseif(strpos($theusagt , "Android")!==false){
	define("APP_PATH","./Wap/");
}elseif(strpos($theusagt , "iPhone")!==false){
	define("APP_PATH","./Wap/");
}else{	
	define("APP_PATH","./PC/");
}
// 引入ThinkPHP入口文件
require("./ThinkPHP/ThinkPHP.php");

?>