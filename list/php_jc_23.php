<?php

/**  PHP语言基础  **/

//常量如何定义? 如何检测一个常量是否被定义？

define("TEST","happy new year!");
if(defined("TEST")){
    echo TEST;
}