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