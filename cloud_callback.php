<?php
/*
    方倍工作室原创，ZJL修改
*/
// 主程序MAIN()
include_once "config.php";
include_once "wechat.class.php";
header("Content-type:text/html;charset=utf-8");

// Main()
$wx_options = array(
    'token'=>WX_TOKEN, //填写你设定的key
    'encodingaeskey'=>WX_ENCODINGAESKEY, //填写加密用的EncodingAESKey，如接口为明文模式可忽略
    'appid'=>WX_APPID,
    'appsecret'=>WX_APPSECRET, //填写高级调用功能的密钥
    'debug'=> WX_DEBUG,
    'logcallback' => WX_LOGCALLBACK
);

$wxObj = new class_wechat_sdk($wx_options);

if (isset($_GET['echostr'])) {
    $wxObj->valid_sdk01();
}else{
    $wxObj->responseMsg();
}

?>

//使用SDK形成的初始化过程
/*

include "wechat.class.php";
$options = array(
    'token'=>'weixin', //填写你设定的key
    'encodingaeskey'=>'encodingaeskey', //填写加密用的EncodingAESKey，如接口为明文模式可忽略
    'appid'=>'wxdk1234567890', //填写高级调用功能的app id, 请在微信开发模式后台查询
    'appsecret'=>'xxxxxxxxxxxxxxxxxxx' //填写高级调用功能的密钥
);
$weObj = new class_wechat_sdk($options);
$weObj->valid();//明文或兼容模式可以在接口验证通过后注释此句，但加密模式一定不能注释，否则会验证失败
//CreateMenu
$weObj->createMenu($MenuData);
$type = $weObj->getRev()->getRevType();
switch($type) {
    case class_wechat_sdk::MSGTYPE_TEXT:
        $weObj->text("hello, I'm wechat")->reply();
        exit;
        break;
    case class_wechat_sdk::MSGTYPE_EVENT:
        break;
    case class_wechat_sdk::MSGTYPE_IMAGE:
        break;
    default:
        $weObj->text("help info")->reply();
}

*/