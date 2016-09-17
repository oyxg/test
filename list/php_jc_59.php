<?php

/**  PHP语言基础  **/

//写出如下程序的输出结果

$a1 = null;
$a2 = false;
$a3 = 0;
$a4 = '';
$a5 = '0';
$a6 = 'null';
$a7 = array();
$a8 = array(array());

echo empty($a1) ? 'true' : 'false';//true
echo empty($a2) ? 'true' : 'false';//true
echo empty($a3) ? 'true' : 'false';//true
echo empty($a4) ? 'true' : 'false';//true
echo empty($a5) ? 'true' : 'false';//true
echo empty($a6) ? 'true' : 'false';//false
echo empty($a7) ? 'true' : 'false';//true
echo empty($a8) ? 'true' : 'false';//false


echo isset($a1) ? 'true' : 'false';//false
echo isset($a2) ? 'true' : 'false';//true
echo isset($a3) ? 'true' : 'false';//true
echo isset($a4) ? 'true' : 'false';//true
echo isset($a5) ? 'true' : 'false';//true
echo isset($a6) ? 'true' : 'false';//true
echo isset($a7) ? 'true' : 'false';//true
echo isset($a8) ? 'true' : 'false';//true