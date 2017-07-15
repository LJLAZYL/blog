<?php

$hostname = "localhost";
$database = "ljl";
$username = "root";
$password = "";

$dbc = mysql_connect($hostname, $username, $password) OR die ('连接数据库失败：' . mysql_error());
@mysql_select_db($database) OR die ('选择数据库失败：' . mysql_error());
//设置字符编码
mysql_query(" set  names utf8 " ) ;

?>