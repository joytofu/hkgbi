<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录后台管理</title>
<meta name="keywords" content="后台管理" />
<meta name="description" content="后台管理" />
<script>
function SetFocus()
{
if (document.Login.username.value=="")
	document.Login.username.focus();
else
	document.Login.username.select();
}

</script>
<style type="text/css">
BODY {FONT-SIZE: 9pt; FONT-FAMILY: verdana; text-align:center; background-color:#fff; margin:0 auto;}
ul, ol { list-style-type:none;}
.paddleft20{ padding-left:48px;}
#divt,#divm{width:987px; margin:0 auto;clear:both;}
#divt #l{float:left;width:294px;}
#divt #m{float:left;width:370px;text-align:right;}
#divt #r{float:right;width:323px}
#divm #l{float:left;width:684px;}
#divm #r{float:right;width:303px;height:297px;background:url(./admin_files/loign_12.jpg); text-align:left;}
#divm #r ul{margin:20px 0 0 -16px !important;margin:20px 0 0 20px;}
#divm #r ul li{height:40px;}
#divm #r ul li #username,#divm #r ul li #password,#divm #r ul li #CodeStr{background:url(./admin_files/loign_12.jpg);width:138px;height:22px;border:1px solid #A6A6A6;}
#divm #r ul li #CodeStr{width:74px;}
</style>
</head>

<body>
<br><br><br><br><br><br>

<script language="javascript">
<!--
function CheckForm()
{
	if(document.Login.username.value=="")
	{
		alert("请输入用户名！");
		document.Login.username.focus();
		return false;
	}
	if(document.Login.password.value == "")
	{
		alert("请输入密码！");
		document.Login.password.focus();
		return false;
	}
	if (document.Login.chk.value==""){
       alert ("请输入您的验证码！");
       document.Login.chk.focus();
       return(false);
    }
}

//-->
</script>
<form name="Login" action="<?php echo site_url('login,login_ok','','&');?>" method="post" onSubmit="return CheckForm();">

<div id="divt">
<div id="l"><img src="./admin_files/loign_03.jpg" width="294" height="79" alt="" align="absmiddle"></div>
<div id="m"><img src="./admin_files/loign_04.jpg" width="201" height="79" alt="" align="absmiddle"><img src="./admin_files/loign_05.jpg" alt="" width="169" height="79" border="0" align="absmiddle" usemap="#loign_05"></div>
<div id="r"><img src="./admin_files/loign_06.jpg" width="323" height="79" alt=""></div>
</div>
<div id="divm">
<div id="l"><img src="./admin_files/loign_08.jpg" align="absmiddle"><img src="./admin_files/loign_09.jpg" border="0" align="absmiddle" usemap="#loign_09"><img src="./admin_files/loign_10.jpg" border="0" align="absmiddle" usemap="#loign_10"><img src="./admin_files/loign_11.jpg" align="absmiddle"><br>
  <img src="./admin_files/loign_13.jpg" align="absmiddle"><img src="./admin_files/loign_14.jpg" align="absmiddle"><img src="./admin_files/loign_15.jpg" align="absmiddle"></div>
<div id="r">
<ul>
<li>用户名：<input type="text" name="username" id="username" maxlength="20"></li>
<li>密&nbsp;&nbsp;&nbsp;码：<input type="password" name="password" id="password" maxlength="20"></li>
<li>验证码：<input type="text" name="chk" id="chk" maxlength="4" size="4">&nbsp;<img src="<?php echo site_url('login,codes','','&');?>" border="0" align="absmiddle" style="cursor:pointer;" onclick="adm_login_vcode()" id="phpok_vcode"> </li>
<li class="paddleft20"><input type="image" src="./admin_files/loginb_18.jpg" align="absmiddle"></li>

</ul>
</div>
</div>
<input type="hidden" value="CheckLogin" name="method">
</form>

<map name="loign_10" id="loign_10">
<area shape="rect" coords="26,23,148,47" href="http://www.dotodo.net/anli/anli.htm" target="_blank">
<area shape="rect" coords="26,52,189,76" href="http://www.dotodo.net/Caseinfo/Caseinfo_41.htm" target="_blank">
<area shape="rect" coords="26,81,154,104" href="http://www.dotodo.net/eshop/Eshop1.htm" target="_blank">
<area shape="rect" coords="27,107,169,132" href="http://www.dotodo.net/network/networkabout.htm" target="_blank"><area shape="rect" coords="27,135,286,161" href="http://www.dotodo.net/services/services_about_8.htm" target="_blank">
</map>
<map name="loign_05" id="loign_05">
  <area shape="rect" coords="-1,57,170,77" href="http://www.dotodo.net/" target="_blank">
</map>
<map name="loign_09" id="loign_09">
  <area shape="rect" coords="-1,3,109,50" href="http://www.dotodo.net/" target="_blank">
</map>
<script language="JavaScript" type="text/JavaScript">
SetFocus(); 
</script>

</body>
</html>