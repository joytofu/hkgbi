<?php
session_start();
 require_once('app/conn.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>巨牛投资私募基金</title>
</head>

<body>
<?php

$title=$_POST["title"];
$departmetn=$_POST["department"];
$gid=$_POST["gid"];
$module_id=23; 
$cateid=$_POST["cate_id"];
$status=0;
$post_date=time("ymdhis");
mysql_select_db("db_cencencen", $webconn);
mysql_query("INSERT INTO juniu2_list(module_id,title,post_date,status) VALUES ('$module_id','$title','$post_date','$status')");

$result=mysql_query("select * from juniu2_list order by id asc");
while ($rs=mysql_fetch_array($result)){
	$rsid=$rs['id'];
	}

$department = $_POST["department"];
$aa="department";
mysql_query("INSERT INTO juniu2_list_ext(id,field,val) VALUES ('$rsid','$aa','$department')");


$content = $_POST["content"];
$aa="content";
mysql_query("INSERT INTO juniu2_list_ext(id,field,val) VALUES ('$rsid','$aa','$content')");

$mobile = $_POST["mobile"];
$aa="mobile";
mysql_query("INSERT INTO juniu2_list_ext(id,field,val) VALUES ('$rsid','$aa','$mobile')");

$fullname = $_POST["fullname"];
$aa="fullname";
mysql_query("INSERT INTO juniu2_list_ext(id,field,val) VALUES ('$rsid','$aa','$fullname')");

$email = $_POST["email"];
$aa="email";
mysql_query("INSERT INTO juniu2_list_ext(id,field,val) VALUES ('$rsid','$aa','$email')");

$fax = $_POST["fax"];
$aa="fax";
mysql_query("INSERT INTO juniu2_list_ext(id,field,val) VALUES ('$rsid','$aa','$fax')");
$danwei = $_POST["danwei"];
$aa="danwei";
mysql_query("INSERT INTO juniu2_list_ext(id,field,val) VALUES ('$rsid','$aa','$danwei')");


mysql_close($webconn);

	echo "<script language=javascript>
window.alert('您的信息我们已经收到，我们会尽快处理!');
window.history.back();
</script>";

?>

</body>
</html>