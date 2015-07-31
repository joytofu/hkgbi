<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if($sitetitle){?><?php echo $sitetitle;?> - <?php } ?><?php if($_sys[seotitle]){?> <?php echo $_sys[seotitle];?> - <?php } ?><?php echo $_sys[sitename];?></title>
<?php if($_sys[google_site_verification]){?><meta name="google-site-verification" content="<?php echo $_sys[google_site_verification];?>" /><?php } ?>
<?php if($_sys[yahoo_site_key]){?><meta name="y_key" content="<?php echo $_sys[yahoo_site_key];?>" /><?php } ?>
<?php if($_sys[ms_site_validate]){?><meta name="msvalidate.01" content="<?php echo $_sys[ms_site_validate];?>" /><?php } ?>
<?php if($_sys[baidu_union_verify]){?><meta name="baidu_union_verify" content="<?php echo $_sys[baidu_union_verify];?>" /><?php } ?>
<meta name="keywords" content="<?php echo $_sys[keywords];?>">
<meta name="description" content="<?php echo $_sys[description];?>">
<link href="tpl/www/images/style.css" rel="stylesheet" type="text/css" />
<link href="tpl/www/images/product.css" rel="stylesheet" type="text/css" />
<link href="../../css/button.css" rel="stylesheet" type="text/css" />
    <!--载入JQuery和highcharts-->
    <script type="text/javascript" src="http://cdn.hcharts.cn/jquery/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="http://cdn.hcharts.cn/highcharts/highcharts.js"></script>
    <script type="text/javascript" src="js/exporting.js"></script>
</head>

<body>
<div id="top">
<div class="top">
<div class="logo"><a href="<?php echo $_sys[siteurl];?>" title="<?php echo $_sys[sitename];?>"><img src="<?php echo $_sys[logo] ? $_sys[logo] : 'tpl/www/images/logo.png';?>"  /></a></div>
<div class="rtop"> <p style="margin-bottom:10px; ">  <a href="<?php echo $_sys[siteurl];?>" style="color:#BF2600;font-size: 15px" title="返回首页">返回首页</a>
<A id=StranLink href="" name=StranLink style="margin-left:10px;" rel="nofollow">
<font color="#BF2600"><span style="font-size: 15px; ">繁體中文版</span></font></A></p>

    <ul class="nav_type">
       <?php $menulist = phpok_menu($id,$cid,$mid);?>
		<?php $_i=0;$menulist=(is_array($menulist))?$menulist:array();foreach($menulist AS  $key=>$value){$_i++; ?>
    <li class="li_type"><a href="<?php echo $value[link];?>" <?php if($value[target]){?>  target="_blank"<?php } ?> title="<?php echo $value[title];?>" <?php if($value[my_highlight]){?>  id="menubg"<?php } ?>><?php echo $value[title];?></a></li>
		<?php } ?>
		<?php unset($menulist);?> 
    </ul>



</div>
</div></div>