<?php
/**
 * Created by PhpStorm.
 * User: jianlinz
 * Date: 2015/7/5
 * Time: 9:26
 */

//正式测试公号/服务公号的配置参数
define("WX_TOKEN", "weixin");  //TOKEN，必须和微信绑定的URL使用的TOKEN一致

define("WX_DEBUG", false);
define("WX_LOGCALLBACK", false);

//不同的方式来确定本机运行环境，还是服务器运行环境，本来想获取Localhost来进行判断，但没成功
//实验了不同的方式，包括$_SERVER['LOCAL_ADDR']， $_SERVER['SERVER_ADDR']， getenv('SERVER_ADDR')等方式
//GetHostByName($_SERVER['SERVER_NAME'])只能获取IP地址，也不稳定
//使用php_uname('n') == "CV0002816N4")也算是一个不错的方式，但依然丑陋，需要每个测试者单独配置，
//也可以使用云服务器的名字来反向匹配，因为服务器的名字是唯一的
//SAE官方的说法：可以使用isset(SAE_TMP_PATH)来判断是不是在SAE云上
//
if ($_SERVER['SERVER_NAME'] == "mfuncard.sinaapp.com") //LZH微信公号服务器数据库配置信息
{
    define("WX_APPID", "wx1183be5c8f6a24b4");  //微信测试号AppID
    define("WX_APPSECRET", "d52a63064ed543c5eecae6c3df35be55");  //填写高级调用功能的app id, 请在微信开发模式后台查询
    define("WX_ENCODINGAESKEY", "ihIyvJ8LLAnOHpHzKTG0yIJxlzl1Fzw5ygRgHO96ieW");   //填写加密用的EncodingAESKey，如接口为明文模式可忽略

    //测试公号的后台运行配置参数
    define("WX_TOOL_SERVICENUM", "gh_70c714952b02");//微信号
    define("WX_TOOL_APPID", "wx1183be5c8f6a24b4");//微信测试号信息
    define("WX_TOOL_APPSECRET", "d52a63064ed543c5eecae6c3df35be55");
    define("WX_TOOL_BLEMAC", "D03972A5EF11");

    define("WX_DBHOST", SAE_MYSQL_HOST_M);    //连接的服务器地址 w.rdc.sae.sina.com.cn
    define("WX_DBUSER",SAE_MYSQL_USER);     //连接数据库的用户名
    define("WX_DBPSW", SAE_MYSQL_PASS);        //连接数据库的密码
    define("WX_DBNAME","app_mfuncard");         //连接的数据库名称
    define("WX_DBPORT", SAE_MYSQL_PORT);
    define("WX_DBHOST_S", SAE_MYSQL_DB);
}
elseif ($_SERVER['SERVER_NAME'] == "smdzjl.sinaapp.com") //ZJL微信公号服务器数据库配置信息
{
    define("WX_APPID", "wx32f73ab219f56efb");  //微信测试号AppID
    define("WX_APPSECRET", "eca20c2a26a5ec5b64a89d15ba92a781");  //填写高级调用功能的app id, 请在微信开发模式后台查询
    define("WX_ENCODINGAESKEY", "7Tp1NIUzUa0JBezeJUjG8O61Kdjcu2ce6BQVukZlv3u");   //填写加密用的EncodingAESKey，如接口为明文模式可忽略

    //测试公号的后台运行配置参数
    define("WX_TOOL_SERVICENUM", "gh_9b450bb63282");
    define("WX_TOOL_APPID", "wx32f73ab219f56efb");
    define("WX_TOOL_APPSECRET", "eca20c2a26a5ec5b64a89d15ba92a781");
    define("WX_TOOL_BLEMAC", "D03972A5EF24");

    define("WX_DBHOST", SAE_MYSQL_HOST_M);    //连接的服务器地址 w.rdc.sae.sina.com.cn
    define("WX_DBUSER",SAE_MYSQL_USER);     //连接数据库的用户名
    define("WX_DBPSW", SAE_MYSQL_PASS);        //连接数据库的密码
    define("WX_DBNAME","app_smdzjl");         //连接的数据库名称
    define("WX_DBPORT", SAE_MYSQL_PORT);
    define("WX_DBHOST_S", SAE_MYSQL_DB);
}

elseif ($_SERVER['SERVER_NAME'] == "zscble.sinaapp.com") //ZSC微信公号服务器数据库配置信息
{
    define("WX_APPID", "wx6b0e904f5e91a404");  //微信测试号AppID
    define("WX_APPSECRET", "aeb0cf36a1aa37b0180711304f3f3131");  //填写高级调用功能的app id, 请在微信开发模式后台查询
    define("WX_ENCODINGAESKEY", "p1zUNVmJAOWX7QsnArWIbuAEYaqtRNFY6Rz1JcqEklu");   //填写加密用的EncodingAESKey，如接口为明文模式可忽略

    //测试公号的后台运行配置参数
    define("WX_TOOL_SERVICENUM", "gh_b6df3b7c56eb");
    define("WX_TOOL_APPID", "wx6b0e904f5e91a404");
    define("WX_TOOL_APPSECRET", "aeb0cf36a1aa37b0180711304f3f3131");
    define("WX_TOOL_BLEMAC", "D03972A5EF12");

    define("WX_DBHOST", SAE_MYSQL_HOST_M);    //连接的服务器地址 w.rdc.sae.sina.com.cn
    define("WX_DBUSER",SAE_MYSQL_USER);     //连接数据库的用户名
    define("WX_DBPSW", SAE_MYSQL_PASS);        //连接数据库的密码
    define("WX_DBNAME","app_zscble");         //连接的数据库名称
    define("WX_DBPORT", SAE_MYSQL_PORT);
    define("WX_DBHOST_S", SAE_MYSQL_DB);
}
elseif ($_SERVER['SERVER_NAME'] == "128.199.76.91") //QL微信公号服务器数据库配置信息
{
    define("WX_APPID", "wx39422daf6dd4b2ba");  //微信测试号AppID
    define("WX_APPSECRET", "c5f35fb2d6c47cc53df4c22ecd25369e");  //填写高级调用功能的app id, 请在微信开发模式后台查询
    define("WX_ENCODINGAESKEY", "");   //填写加密用的EncodingAESKey，如接口为明文模式可忽略

    //测试公号的后台运行配置参数
    define("WX_TOOL_SERVICENUM", "gh_2ae9c97585c5");
    define("WX_TOOL_APPID", "wx39422daf6dd4b2ba");
    define("WX_TOOL_APPSECRET", "c5f35fb2d6c47cc53df4c22ecd25369e");
    define("WX_TOOL_BLEMAC", "D03972A5EF13");

    define("WX_DBHOST", SAE_MYSQL_HOST_M);    //连接的服务器地址 w.rdc.sae.sina.com.cn
    define("WX_DBUSER",SAE_MYSQL_USER);     //连接数据库的用户名
    define("WX_DBPSW", SAE_MYSQL_PASS);        //连接数据库的密码
    define("WX_DBNAME","bxxh");         //连接的数据库名称
    define("WX_DBPORT", SAE_MYSQL_PORT);
    define("WX_DBHOST_S", SAE_MYSQL_DB);
}

else   //本地配置数据库信息,需要根据个人配置修改
{
    define("WX_DBHOST", "localhost");    //连接的服务器地址
    define("WX_DBUSER","TestUser");     //连接数据库的用户名
    define("WX_DBPSW", "123456");        //连接数据库的密码
    define("WX_DBNAME","BXXH");         //连接的数据库名称BXXH
    define("WX_DBPORT", 3306);           //缺省设置
    define("WX_DBHOST_S", "");          //无效

    define("WX_APPID", "wx1183be5c8f6a24b4");  //微信测试号AppID
    define("WX_APPSECRET", "d52a63064ed543c5eecae6c3df35be55");  //填写高级调用功能的app id, 请在微信开发模式后台查询
    define("WX_ENCODINGAESKEY", "ihIyvJ8LLAnOHpHzKTG0yIJxlzl1Fzw5ygRgHO96ieW");   //填写加密用的EncodingAESKey，如接口为明文模式可忽略

    //测试公号的后台运行配置参数
    define("WX_TOOL_SERVICENUM", "gh_70c714952b02");//微信号
    define("WX_TOOL_APPID", "wx1183be5c8f6a24b4");//微信测试号信息
    define("WX_TOOL_APPSECRET", "d52a63064ed543c5eecae6c3df35be55");
    define("WX_TOOL_BLEMAC", "D03972A5EF11");
}

//层三处理消息的定义
define("L3_HEAD_MAGIC", 0xFE);
define("L3_HEAD_VERSION",0x01);
define("L3_HEAD_LENGTH", 0x08);
define("CMDID_SEND_TEXT_REQ", 0x1);    //HW -> CLOUD
define("CMDID_SEND_TEXT_RESP", 0x1001);   //CLOUD ->HW
define("CMDID_OPEN_LIGHT_PUSH", 0x2001);  //CLOUD ->HW
define("CMDID_CLOSE_LIGHT_PUSH", 0x2002);   //CLOUD ->HW
define("CMDID_HW_VERSION_REQ", 0x3001);
define("CMDID_HW_VERSION_RESP", 0x3002);
define("CMDID_HW_VERSION_PUSH", 0x3003);
define("CMDID_TIME_SYN_PUSH", 0x3004);
define("CMDID_EMC_DATA_REQ", 0x20);    //电磁波辐射测试量，定时测量方式
define("CMDID_EMC_DATA_RESP", 0x4E22);
define("CMDID_EMC_DATA_PUSH", 0x7531);  //主动强制要求的测量
define("CMDID_EMC_DATA_REV", 0x2712);
define("CMDID_OCH_DATA_REQ", 0x4010);  //酒精测试量
define("CMDID_OCH_DATA_RESP", 0x4011);

?>