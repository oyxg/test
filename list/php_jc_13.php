<?php

/**  PHP语言基础  **/

//将 1234567890 转换成 1,234,567,890 每 3 位用逗号隔开的形式。 （百度）

$str = '1234567890';

function str($str){
    //字符串反转
    $str = strrev($str);
    //用逗号分割
    $str = chunk_split($str,3,',');
    //再反转
    $str = strrev($str);
    //去掉左边的逗号
    $str = ltrim($str,',');
    return $str;
}
echo str($str);

echo '<hr>';

//strrev反转中文会出错，重新写个方法
//使用正则和数组实现
function strrev_utf8($str){
    return join("",array_reverse(
       preg_split("//u",$str)
    ));
}
$str = 'ABC学院';
echo strrev_utf8($str);

echo '<hr>';

//假设现在有一个字符串 www.baidu.com
//如何使用 PHP 对它进行操作使字符串以 moc.udiab.输出？ （亿邮）
$str3 = 'www.baidu.com';
//str_replace()匹配到www替换为空
echo strrev(str_replace('www','',$str3));