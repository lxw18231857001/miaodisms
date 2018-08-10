<?php
/**
 * 验证码通知短信接口
 */
require_once("include/config.php");
require_once("include/httpUtil.php");

/**
 * url中{function}/{operation}?部分
 */
$funAndOperate = "industrySMS/sendSMS";

// 参数详述请参考http://miaodiyun.com/https-xinxichaxun.html

// 生成body
$body = createBasicAuthData();
// 在基本认证参数的基础上添加短信内容和发送目标号码的参数
//$body['smsContent'] = "【青春阳光】登录验证码：123456，如非本人操作，请忽略此短信。";
$body['templateid']='5144205XX';//模板id
$code=rand(100000,999999);
$body['param']=$code.',5';//模板id

$body['to'] = '18231857XXX';

// 提交请求
$result = post($funAndOperate, $body);
echo("<br/>result:<br/><br/>");
var_dump($result);