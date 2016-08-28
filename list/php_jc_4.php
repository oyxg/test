<?php

/**  PHP语言基础  **/

echo $_SERVER['DOCUMENT_ROOT'].'<br>'; //当前运行脚本所在的文档根目录
echo $_SERVER['HTTP_HOST'].'<br>'; //当前请求的 Host: 头部的内容
echo $_SERVER['REMOTE_ADDR'].'<br>'; //正在浏览当前页面用户的 IP 地址
echo $_SERVER['HTTP_REFERER'].'<br>'; //链接到当前页面的前一页面的 URL 地址
echo $_SERVER['SERVER_NAME']; //当前运行脚本所在服务器主机的名称

