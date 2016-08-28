<?php

/**  PHP语言基础  **/

//用 PHP 打印出前一天的时间格式是 2006-5-10 22:21:21

echo date("Y-m-d H:i:s",time() - 3600 * 24);
//使用strtotime,可以将任何字符串的时间表示转换成时间戳，仅对英文
echo '<br />';
echo date('Y-m-d H:i:s',strtotime("-1 day"));
//在实际开发的时候，strtotime非常有用，因为对于表单来说，提交的数据都是字符串
//比如，2013-4-27，需要将其转成时间戳然后存到数据库

echo '<br />';
//求两个日期的差数，例如 2009-3-1 ~ 2009-4-4 的日期差数
echo (strtotime("2016-3-24")-strtotime("2016-3-2"))/(3600*24);