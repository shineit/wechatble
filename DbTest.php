<?php
/**
 * Created by PhpStorm.
 * User: jianlinz
 * Date: 2015/7/3
 * Time: 11:33
 */

include_once "config.php";
include_once "wechat.class.php";
header("Content-type:text/html;charset=utf-8");

$obj = new class_L3_Process_Func();

$cmdid = 0x2001;

$res1 = $obj -> L3_msgBuild(CMDID_OPEN_LIGHT_PUSH, null, 0);

$aaobj = new aa;

$b = $aaobj ->ushort2string(0xFECF);
$res2 = $aaobj ->L3_msgBuild($cmdid, null, 0);

$resp = "This is my test!";
$cmdid = 0x2001;
$seq = 100;

$result = $obj -> L3_msgBuild($cmdid, null, 0);


$out = "0000";
$a1 = $magic & 0xFFFF;
$a2 = strtoupper(dechex($a1));
$a3 = substr_replace($out, $a2, strlen($out)-strlen($a2), strlen($a2));

$i =3;

while ($i<4)
{
    $output[$i] = "0";

    $i++;
}

$magic = pack('s', $magic);
//$output = $output . (dechex("$magic") & 0xFFFF);
$version = 1;
$length = HEAD_LENGTH + strlen($resp);
$errorcode = 0;
$output = array_merge($magic, $version, $length, $cmdid, $seq, $errorcode, $resp);



$output = "000000000000000000000000";
$magic = 0xFECF;
$output = $output . (dechex("$magic") & 0xFFFF);
$version = 1;
$output = $output . (dechex("$version") & 0xFFFF);
$length = 12 + strlen($resp);
$output = $output . (dechex("$length") & 0xFFFF);
$output = $output . (dechex("$cmdid") & 0xFFFF);
$output = $output . (dechex("$seq") & 0xFFFF);
$errorcode = 0;
$output = $output . (dechex("$seq") & 0xFFFF);

$output = $output . $resp;

$val = 1;





$obj = new aa;
$a1 = $obj->getBytes($input);


$bytecount = count($a1);
$a2 = $obj->bytesToShort($a1,0);
$a3 = $obj->bytesToShort($a1,2);
$a4 = $obj->bytesToShort($a1,4);
$a5 = $obj->bytesToShort($a1,6);
$a6 = $obj->bytesToShort($a1,8);
$a7 = $obj->bytesToShort($a1,10);



//$b = array_slice($a1, 12, $bytecount-12);

$a10 = 0;




$a1 = str_split($binarydata, 2);
$array = unpack("c4c", $binarydata);
$b1 = unpack("s", $a1[0]);
var_dump($array);



$b    = str_split($key, 1);//跟上面对应不同，在于，元素是字符，上面数组元素的是ASCII码，可以用ord转换
$a1 = ($b[0]-'0')*0X1000+($b[1]-'0')*0X100+($b[2]-'0')*0x10+($b[3]-'0');
$s    = join('', $b);


/**
 * 转换一个String字符串为byte数组
 * @param $str 需要转换的字符串
 * @param $bytes 目标byte数组
 */
class aa{

public static function getBytes($string) {
    $bytes = array();
    $len = strlen($string);
    $lenb = intval($len/2) + $len % 2;
    $b = str_split($string, 2);
    foreach ($b as $v)
    {
        $bytes[] = hexdec($v);
    }
    if ($len%2 ==1)
    {
        $lenb = $lenb -1;
        $bytes["$lenb"] = $bytes["$lenb"] <<4;
    }

    /*
    for($i = 0; $i < $lenb; $i++){
        $bytes[$i] = (hexdec(strtoupper(substr($string, 2*$i, 1)))<<4) + hexdec(strtoupper(substr($string, 2*$i+1, 1)));
    }
    if ($len % 2 == 1)  $bytes[$i] = (strtoupper(substr($string, 2*$i, 1))<<4);
    */

    return $bytes;
}

    /**
     * 将字节数组转化为String类型的数据
     * @param $bytes 字节数组
     * @param $str 目标字符串
     * @return 一个String类型的数据
     */
    public static function toStr($bytes) {
    $str = '';
    foreach($bytes as $ch) {
        $str .= chr($ch);
    }
    return $str;
}

    /**
     * 转换一个int为byte数组
     * @param $byt 目标byte数组
     * @param $val 需要转换的字符串
     * Big Endian
     */
    public static function integerToBytes($val) {
    $byt = array();
    $byt[3] = ($val & 0xff);
    $byt[2] = ($val >> 8 & 0xff);
    $byt[1] = ($val >> 16 & 0xff);
    $byt[0] = ($val >> 24 & 0xff);
    return $byt;
}

    /**
     * 从字节数组中指定的位置读取一个Integer类型的数据
     * @param $bytes 字节数组
     * @param $position 指定的开始位置
     * @return 一个Integer类型的数据'
     * Big Endian
     */
    public static function bytesToInteger($bytes, $position) {
    $val = 0;
    $val = $bytes[$position] & 0xff;
    $val <<= 8;
    $val |= $bytes[$position + 1] & 0xff;
    $val <<= 8;
    $val |= $bytes[$position + 2] & 0xff;
    $val <<= 8;
    $val |= $bytes[$position + 3] & 0xff;
    return $val;
}

    /**
     * 转换一个shor字符串为byte数组
     * @param $byt 目标byte数组
     * @param $val 需要转换的字符串
     * Big Endian
     */
    public static function shortToBytes($val) {
    $byt = array();
    $byt[1] = ($val & 0xff);
    $byt[0] = ($val >> 8 & 0xff);
    return $byt;
}

    /**
     * 从字节数组中指定的位置读取一个Short类型的数据。
     * @param $bytes 字节数组
     * @param $position 指定的开始位置
     * @return 一个Short类型的数据
     */
    public static function bytesToShort($bytes, $position) {
    $val = 0;
    $val = $bytes[$position + 0] & 0XFF;
    $val = $val << 8;
    $val += $bytes[$position + 1] & 0XFF;
    return $val;
    }
    public static function  bytesToShort2($bytes, $position)
    {
        $val = $bytes [$position] .  $bytes [$position+1];
        $val = hexdec($val);
        return $val;
    }



    function hex_chars($data) {
        $mb_chars = '';
        $mb_hex = '';
        for ($i=0; $i<mb_strlen($data, 'UTF-8'); $i++) {
            $c = mb_substr($data, $i, 1, 'UTF-8');
            $mb_chars .= '{'. ($c). '}';

            $o = unpack('N', mb_convert_encoding($c, 'UCS-4BE', 'UTF-8'));
            $mb_hex .= '{'. $this->hex_format($o[1]). '}';
        }
        $chars = '';
        $hex = '';
        for ($i=0; $i<strlen($data); $i++) {
            $c = substr($data, $i, 1);
            $chars .= '{'. ($c). '}';
            $hex .= '{'. $this->hex_format(ord($c)). '}';
        }
        return array(
            'data' => $data,
            'chars' => $chars,
            'hex' => $hex,
            'mb_chars' => $mb_chars,
            'mb_hex' => $mb_hex,
        );
    }
    function hex_format($o) {
        $h = strtoupper(dechex($o));
        $len = strlen($h);
        if ($len % 2 == 1)
            $h = "0$h";
        return $h;
    }

    public function L3_msgBuild($cmdid, $resp, $seq)
    {
        $magic = $this->ushort2string(L3_MAGIC_BL);
        $version = $this->ushort2string(1);
        $length = $this->ushort2string(L3_HEAD_LENGTH + strlen($resp));
        $cmdid = $this->ushort2string($cmdid);
        $seq = $this->ushort2string($seq);
        $errorcode = $this->ushort2string(0);
        $output = $magic . $version . $length . $cmdid . $seq . $errorcode . $resp;;
        return $output;
    }

    //BYTE转换到字符串
    public function byte2string($n)
    {
        $out = "00";
        $a1 = strtoupper(dechex($n & 0xFF));
        return substr_replace($out, $a1, strlen($out)-strlen($a1), strlen($a1));
    }

    //2*BYTE转换到字符串
    public function ushort2string($n)
    {
        $out = "0000";
        $a1 = strtoupper(dechex($n & 0xFFFF));
        return substr_replace($out, $a1, strlen($out)-strlen($a1), strlen($a1));
    }

    //4*BYTE转换到字符串
    public function int2string($n)
    {
        $out = "00000000";
        $a1 = strtoupper(dechex($n & 0xFFFFFFFF));
        return substr_replace($out, $a1, strlen($out)-strlen($a1), strlen($a1));
    }



}

?>
