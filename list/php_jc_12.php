<?php

/**  PHP语言基础  **/

//不使用第三个变量交换两个变量的值

//list()把数组中的值赋给一些变量
$a = 'PHP';
$b = 'MySQL';
echo $a,$b;
list($a,$b) = array($b,$a);
echo '<br />';
echo $a,$b;

//传值与传引用

$num = 10;
//形参加&就是传引用
//这函数没有return，返回值，$num已经能输出100
function multiply(&$num){
    $num = $num * 10;
}
multiply($num);
echo $num;//100