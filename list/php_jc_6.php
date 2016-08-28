<?php

/**  PHP语言基础  **/


//用最少的代码写一个求 3 值最大值的函数. (51.com 笔试题)
function getMax($a,$b,$c){
    return $a>$b?($a>$c?$a:$c):($b>$c?$b:$c);
}

echo getMax(3,29,19);

