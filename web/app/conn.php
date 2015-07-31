<?php
$webconn=mysql_connect("localhost","a0617095733","99819433")or die("数据库服务器连接错误".mysql_error());
mysql_select_db("a0617095733",$webconn) or die("数据库访问错误".mysql_error());
mysql_query("set character set utf8");
mysql_query("set names 'utf8'");
?>