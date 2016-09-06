<?php

/**  PHP语言基础  **/

//写个函数用来对二维数组排序（新浪）

/**
 * 根据某列对二维数组进行排序
 * @param $arr array 要排序的数组
 * @param $row string 排序依据列
 * @param $type string asc 表示正序，默认值，desc表示逆序
 * @return array 返回排序好的数组
 */

function array_sort($arr,$row,$type='asc'){
    $arr_temp = array();
    //将排序依据作为数组的键名
    foreach($arr as $v){
        $arr_temp[$v[$row]] = $v;
    }
    //然后按照键名对数组排序，并保持索引关系
    if($type == 'asc'){
        ksort($arr_temp);
    }elseif($type == 'desc'){
        krsort($arr_temp);
    }else{
        #code..
    }
    return $arr_temp;
}

$person =  array(
  array('id'=>2,'name'=>'zhangsan','age'=>23),
  array('id'=>5,'name'=>'lisi','age'=>28),
  array('id'=>3,'name'=>'apple','age'=>17)
);

$person = array_sort($person,'name');
print_r($person);

