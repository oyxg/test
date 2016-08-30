<?php

/**  PHP语言基础  **/

//传值与传引用

$num = 10;
//形参加&就是传引用
//这函数没有return，返回值，$num已经能输出100
function multiply(&$num){
    $num = $num * 10;
}
multiply($num);
echo $num;//100