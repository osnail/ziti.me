<?php
//
//迷字网-字体爱好者社区
//EMAIL:tangdiwen@163.com    
//$Id: index.php by LAOYA $


define('APP_PATH',dirname(__FILE__));
define('IN_APP',TRUE);
define("SP_PATH",APP_PATH.'/init');


date_default_timezone_set('PRC');
//设置session name
session_name('zimi');

//session生效时间为24小时
$lefttime = 24 * 3600;

// 设置session有关参数
session_set_cookie_params($lefttime,'/');
ini_set('session.gc_maxlifetime',$lefttime);

if(isset($_COOKIE['zimi'])){ session_id($_COOKIE['zimi']);}  //从cookie获取session id
if(isset($_POST['ssid'])) {session_id($_POST['ssid']); }     //swfupload 提交也要判断

if(!is_file(APP_PATH."/config.php")){header('Location:install/');}

require(APP_PATH."/config.php");    //载入配置文件
require(SP_PATH."/init.php");       //初始化sp框架
require(SP_PATH."/Extensions/thFunctions.php"); //载入自定义函数集
import(APP_PATH.'/controller/top.php');         //继承main 作为所有控制器父类

header("Content-type: text/html; charset=utf-8"); //设置统一Content-type标头

spRun();
?>