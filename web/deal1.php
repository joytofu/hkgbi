<?php
session_start();
 require_once('app/conn.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>-----</title>
</head>

<body>
<?php
$value= $_POST["xiezu"];
$xiezu=" ";
foreach($value AS $key=>$val){
	

$xiezu=$val.$xiezu;

}

//echo $xiezu;
//exit;

$title=$_POST["title"];;
$module_id=72; 
$cateid=$_POST["cate_id"];
$status=0;
$post_date=time("ymdhis");
mysql_select_db("db_cencencen", $webconn);
mysql_query("INSERT INTO jiuyue_list(module_id,title,post_date,status) VALUES ('$module_id','$title','$post_date','$status')");

$result=mysql_query("select * from jiuyue_list order by id asc");
while ($rs=mysql_fetch_array($result)){
	$rsid=$rs['id'];
	}
	//echo $rsid;
//exit;

$nl = $_POST["nl"];
$aa="nl";
mysql_query("INSERT INTO jiuyue_list_ext(id,field,val) VALUES ('$rsid','$aa','$nl')");

$sex = $_POST["sex"];
$aa="sex";
mysql_query("INSERT INTO jiuyue_list_ext(id,field,val) VALUES ('$rsid','$aa','$sex')");

$lb = $_POST["lb"];
$aa="lb";
mysql_query("INSERT INTO jiuyue_list_ext(id,field,val) VALUES ('$rsid','$aa','$lb')");

$mobile = $_POST["mobile"];
$aa="mobile";
mysql_query("INSERT INTO jiuyue_list_ext(id,field,val) VALUES ('$rsid','$aa','$mobile')");

$address = $_POST["address"];
$aa="address";
mysql_query("INSERT INTO jiuyue_list_ext(id,field,val) VALUES ('$rsid','$aa','$address')");

$quyu = $_POST["quyu"];
$aa="quyu";
mysql_query("INSERT INTO jiuyue_list_ext(id,field,val) VALUES ('$rsid','$aa','$quyu')");

$hangye = $_POST["hangye"];
$aa="hangye";
mysql_query("INSERT INTO jiuyue_list_ext(id,field,val) VALUES ('$rsid','$aa','$hangye')");

$email = $_POST["email"];
$aa="email";
mysql_query("INSERT INTO jiuyue_list_ext(id,field,val) VALUES ('$rsid','$aa','$email')");

$guihua = $_POST["guihua"];
$aa="guihua";
mysql_query("INSERT INTO jiuyue_list_ext(id,field,val) VALUES ('$rsid','$aa','$guihua')");

$qudao = $_POST["qudao"];
$aa="qudao";
mysql_query("INSERT INTO jiuyue_list_ext(id,field,val) VALUES ('$rsid','$aa','$qudao')");

$dianmian = $_POST["dianmian"];
$aa="dianmian";
mysql_query("INSERT INTO jiuyue_list_ext(id,field,val) VALUES ('$rsid','$aa','$dianmian')");

//$xiezu = $_POST["xiezu"];
$aa="xiezu";
mysql_query("INSERT INTO jiuyue_list_ext(id,field,val) VALUES ('$rsid','$aa','$xiezu')");


$content = $_POST["content"];
$aa="content";
mysql_query("INSERT INTO jiuyue_list_ext(id,field,val) VALUES ('$rsid','$aa','$content')");



mysql_close($webconn);

	echo "<script language=javascript>
window.alert('您的信息我们已收到，我们会尽快联系您!');
window.location.href='shenqing.html';
</script>";

?>

</body>
</html>