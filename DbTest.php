<?php
/**
 * Created by PhpStorm.
 * User: jianlinz
 * Date: 2015/7/3
 * Time: 11:33
 */

include_once "config.php";
include_once "wechat.class.php";
include_once "wx_iot.class.php";
header("Content-type:text/html;charset=utf-8");

$timestap = time();

$content = "IA4AAAABAgMEBQECAwQFBg==";
$fromuser = "oS0Chv3Uum1TZqHaCEb06AoBfCvY";
$deviceid = "gh_70c714952b02_8cd47e1f6141e49a4e45f4b807cf41fe";

//$fromuser = strtoupper("$fromuser");

//$mysqli = new mysqli(WX_DBHOST, WX_DBUSER, WX_DBPSW, WX_DBNAME, WX_DBPORT);
//$result = $mysqli->query("SELECT * FROM `logswitch` WHERE ('appid'='$fromuser')");
//$row = $result->fetch_array();

$db = new class_mysql_db();
//$db->db_LogSwitchInfo_inqury($fromuser);

$db->db_LogSwitchInfo_set($fromuser,1);



$content = base64_decode($content);
$a = unpack('H*', $content);
$c = strtoupper($a["1"]);

$wxL3Obj = new class_L3_Process_Func();
$result = $wxL3Obj->L3_deviceMsgProcess("device_text", $c, $fromuser, $deviceid);

$result = $wxL3Obj->L3_device_text_process($c,$fromuser, $deviceid);


$result = $wxL3Obj->L3_deviceMsgProcess ("CLICK_READ", "", $fromuser, $deviceid);


$db = new class_mysql_db();
$db->db_LogSwitchInfo_inqury($fromuser);

$db->db_LogSwitchInfo_set($fromuser,1);

$wxL3Obj = new class_L3_Process_Func();




$result = $wxL3Obj->L3_device_text_process($content,$fromuser, $deviceid);


$result = $msgTest->L3_deviceMsgProcess ("CLICK_READ", "", $fromuser, $deviceid);





$result = $db->db_EmcAccumulationInfo_save("aaa", "bbb");


?>


$a = '2015-05-19';
$b = strtotime($a);
$c = date("ymd", $b);

$tmp = 1455629400;
$res = $db->db_EmcDataInfo_save("aaa", "bbb", $tmp, 155, 42433);


$tmp = 1435629400;
$res = $db->db_EmcDataInfo_save("aaa", "bbb", $tmp, 155, 42433);
$res = $db->db_EmcDataInfo_delete_3monold("aaa", "bbb", 80);

$t1 = date("ymd");
$t2 = date_create('2009-10-13');
$olddate = date_diff($t1,$t2);


$t1 = date("ymd");
$t3 = time();
$t2 = idate("m", $t1);
$t4 = idate("m", $t3);
$t5 = date_create($t1);
$t6 = idate("m", $t5->date);

$t1 ="";
$t2 = "00";
$tmp1 = $t1 . substr_replace("00", strtoupper(dechex(14&0xFF)),2,strlen(dechex(14&0xFF)));


$result = $db->db_EmcAccumulationInfo_save("aaa", "bbb");


$tm = intval(substr(date("ymd"),2,2));
$td = intval(substr(date("ymd"),4,2));
$index = $tm*31 + $td;
$index = intval(($index - intval($index/90)*90)/3);

for ($i=0;$i<32;$i++)
{
$daynum [$i] = 0;
$monthnum [$i] = 0;
}

$result = $db->db_EmcAccumulationInfo_inqury("aaa", "bbb");