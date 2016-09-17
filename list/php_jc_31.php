<?php

/**  PHP语言基础  **/

//写 5 个不同的自己的函数，来获取一个全路径的文件的扩展名，允许封装 php 库中已有的函数。 （新浪）

$path = str_replace('\\','/',__FILE__);

//echo $path;

function ext_name1($path){
    return strrchr($path,'.');// 查找字符串在另一个字符串中最后一次出现的位置，并返回从该位置到字符串结尾的所有字符。
}

function ext_name2($path){
    return substr($path, strrpos($path,'.'));//strrpos查找字符串在另一字符串中最后一次出现的位置。
}

function ext_name3($path){
    $path_parts = pathinfo($path);
//    var_dump($path_parts);
    return $path_parts['extension'];//以数组的形式返回关于文件路径的信息。extension后缀
}

function ext_name4($path){
    $arr = explode('.',$path);
    return $arr[count($arr) - 1];//返回最后一个下标
}

function ext_name5($path){
    $pattern = '/^[^\.]+\.([\w]+)$/';
    return preg_replace($pattern,'${1}',basename($path));//执行一个正则表达式的搜索和替换;
    //${1}就是引用第一个参数中的内容
    //basename()返回路径中的文件名部分
}

//print_r(ext_name1($path));
//print_r(ext_name2($path));
//print_r(ext_name3($path));
//print_r(ext_name4($path));
print_r(ext_name5($path));

