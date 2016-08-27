<?php

/**  PHP语言基础  **/

/**1-1
  *实现中文字串截取无乱码的方法。
  *方法一，使用 php 内置函数 mb_substr()
  *方法二，自定义函数，以 utf8 为例
  */

header('Content-Type:text/html;charset=utf8');

/**utf8编码字符串截取无乱码
 *@param $str string 要处理的字符串
 *@param $start int 从哪个位置开始截取
 *@param $length int 要截取字符串的个数
 *@return string 截取后的字符串
 */

function substr_utf8($str, $start,$length = null){
	return join("",array_slice(preg_split("//u", $str, -1,PREG_SPLIT_NO_EMPTY), $start,$length));
}

$str = '传智播客PHP学院';
echo substr_utf8($str,2,4);//输出 播客PH