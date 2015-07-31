<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php $APP->tpl->p("head","","0");?>
<?php $APP->tpl->p("banner","","0");?>
<?php $APP->tpl->p("inc/saixuan","","0");?>


<div class="jingxuan">
<div class="clear"></div>


  <?php  

 require_once('app/conn.php');

$catid=$_GET["catid"];
if($catid<>0){
$tt="and cate_id='$catid'";

}
//echo $tt;
//exit;

$rg=$_GET["rg"];
$ns=$_GET["ns"];
$qx=$_GET["qx"];

$Page_size=6; 

if($rg==false and $ns==false and $qx==false){

$result=mysql_query("select * from juniu2_list where module_id=109 ".$tt."  order by id desc");}
elseif($rg==true and $ns==false and $qx==false){
$result=mysql_query("select * from juniu2_list where module_id=109 ".$tt."  and s_rg='$rg' order by id desc");}
elseif($rg==true and $ns==true and $qx==false){
$result=mysql_query("select * from juniu2_list where module_id=109 ".$tt."  and s_rg='$rg' and s_ns='$ns' order by id desc");}
elseif($rg==true and $ns==false and $qx==true){
$result=mysql_query("select * from juniu2_list where module_id=109 ".$tt."  and s_rg='$rg' and s_qx='$qx' order by id desc");}
elseif($rg==false and $ns==false and $qx==true){
$result=mysql_query("select * from juniu2_list where module_id=109 ".$tt."  and s_qx='$qx' order by id desc");}
elseif($rg==false and $ns==true and $qx==false){
$result=mysql_query("select * from juniu2_list where module_id=109 ".$tt."  and s_ns='$ns' order by id desc");}

elseif($rg==false and $ns==true and $qx==true){
$result=mysql_query("select * from juniu2_list where module_id=109 ".$tt."  and s_ns='$ns' and s_qx='$qx' order by id desc");}

else{
$result=mysql_query("select * from juniu2_list where module_id=109 ".$tt."  and s_rg='$rg' and s_qx='$qx' and s_ns='$ns' order by id desc");
}

$count = mysql_num_rows($result); 
$page_count = ceil($count/$Page_size); 

$init=1; 
$page_len=5; 
$max_p=$page_count; 
$pages=$page_count; 


if(empty($_GET["page"])||$_GET["page"]<0){ 
$page=1; 
}else { 
$page=$_GET['page']; 
} 

$offset=$Page_size*($page-1); 

if($rg==false and $ns==false and $qx==false){
$sql="select * from juniu2_list where module_id=109  ".$tt."  order by id desc limit $offset,$Page_size"; 
}
elseif($rg==true and $ns==false and $qx==false){
$sql="select * from juniu2_list where module_id=109 ".$tt."  and s_rg='$rg' order by id desc limit $offset,$Page_size"; 
}
elseif($rg==true and $ns==true and $qx==false){
$sql="select * from juniu2_list where module_id=109 ".$tt."  and s_rg='$rg' and s_ns='$ns' order by id desc limit $offset,$Page_size"; 
}
elseif($rg==true and $ns==false and $qx==true){
$sql="select * from juniu2_list where module_id=109 ".$tt."  and s_rg='$rg' and s_qx='$qx' order by id desc limit $offset,$Page_size"; 
}
elseif($rg==false and $ns==false and $qx==true){
$sql="select * from juniu2_list where module_id=109 ".$tt."  and s_qx='$qx' order by id desc limit $offset,$Page_size"; 
}
elseif($rg==false and $ns==true and $qx==false){
$sql="select * from juniu2_list where module_id=109 ".$tt."  and s_ns='$ns' order by id desc limit $offset,$Page_size"; 
}

elseif($rg==false and $ns==true and $qx==true){
$sql="select * from juniu2_list where module_id=109 ".$tt."  and s_ns='$ns' and s_qx='$qx' order by id desc limit $offset,$Page_size"; 
}

else{
$sql="select * from juniu2_list where module_id=109 ".$tt."  and s_rg='$rg' and s_qx='$qx' and s_ns='$ns' order by id desc limit $offset,$Page_size"; 
}




$result=mysql_query($sql,$webconn); 
$key1=1;
while ($row=mysql_fetch_array($result)) { 

$result1=mysql_query("select * from juniu2_list_ext  where id='$row[id]' and field='a2'");
while ($rs1=mysql_fetch_array($result1)){
	$a2=$rs1[val];
   
	}
    $result1=mysql_query("select * from juniu2_list_ext  where id='$row[id]' and field='a3'");
while ($rs1=mysql_fetch_array($result1)){
	$a3=$rs1[val];
   
	}
       $result1=mysql_query("select * from juniu2_list_ext  where id='$row[id]' and field='a5'");
while ($rs1=mysql_fetch_array($result1)){
	$a5=$rs1[val];
   
	}
    
    $result1=mysql_query("select * from juniu2_upfiles where id='$row[thumb_id]' order by id desc limit 0,1");
while ($rs1=mysql_fetch_array($result1)){

    $picture=$rs1['filename'];
	};?>

    <!--计算预计年化收益率-->
    <script type="text/javascript">

        function annual_yield(createDate,valueDate,fundvalue) {
            var startDate = Date.parse(createDate);   //转化成时间戳格式
            var endDate = Date.parse(valueDate);   //转化成时间戳格式
            var daysStamp = (endDate - startDate) / 86400000;
            var days = daysStamp + 1;   //基金发行了的天数
            var yr = (Number(fundvalue) - 1) * 12 / (days / 30);   //预计年化收益率
            var yr = (yr*100).toFixed(2)+'%';
            document.write(yr);
        }

    </script>

  <div class="ipro" <?php if(($key1)%3==0){?>id="ipro"<?php } ?>>
     <a style="font-size:24px; color:#da251d" href="index.php?c=msg&id=<?php echo $row[id];?>" title="<?php echo $row[title];?>" target="_blank"><img src="<?php echo $picture;?>"></a>
     <p><a style="font-size:24px; color:#da251d" href="index.php?c=msg&id=<?php echo $row[id];?>" title="<?php echo $row[title];?>" target="_blank"><?php echo $row[title];?></a></p>
     <div class="pro_txt"><?php echo $row[note];?></div>
     <p id="nn">★ 单位净值：<?php echo $a2;?></p>
     <p id="nn">★ 净值日期：<?php echo $a3;?></p>
     <p id="nn">★ 成立日期：<?php echo $a5;?></p>
     <p id="nn">★ 预计年化收益率:<script>annual_yield("<?php echo $a5;?>","<?php echo $a3;?>",<?php echo $a2;?>);</script></p>
<p align="center"><a href="index.php?c=list&cs=reg&" title="<?php echo $row[title];?>" target="_blank">
    <img src="tpl/www/images/01.png" style="width:140px; height:57px;"></a></p>

    </div>

        <?php  
        $key1++;
} 
if($count==0){
echo "<p class=npop>没有符合条件的信息！</p>";

}else{

$page_len = ($page_len%2)?$page_len:$pagelen+1;//頁??? 
$pageoffset = ($page_len-1)/2;//頁???左右偏移量 

$key='<div class="clear"></div><div class="page">搜索结果总数：'; 
$key.=$count; 
$key.="&nbsp;&nbsp;&nbsp;&nbsp;$page/$pages &nbsp;&nbsp;&nbsp;&nbsp;"; //第几頁,共几頁 
if($page!=1){ 
$key.="<a href=\"".$_SERVER['PHP_SELF']."?c=list&ms=search&page=1&catid=".$catid."&qx=".$qx."&ns=".$ns."&rg=".$rg."\">首页</a> "; //Frist 
$key.="<a href=\"".$_SERVER['PHP_SELF']."?c=list&ms=search&page=".($page-1)."&catid=".$catid."&qx=".$qx."&ns=".$ns."&rg=".$rg."\">上页</a>"; //Back 
}else { 
$key.="首页 ";//Frist 
$key.="上页"; //Back 
} 
if($pages>$page_len){ 
//如果?前頁小于等于左偏移 
if($page<=$pageoffset){ 
$init=1; 

$max_p = $page_len; 
}else{//如果?前頁大于左偏移 
//如果?前頁?右偏移超出最大分頁? 
if($page+$pageoffset>=$pages+1){ 
$init = $pages-$page_len+1; 
}else{ 
//左右偏移都存在?的?算 
$init = $page-$pageoffset; 
$max_p = $page+$pageoffset; 
} 
} 
} 
for($i=$init;$i<=$max_p;$i++){ 
if($i==$page){ 
$key.=' <span  style=color:red>'.$i.'</span>'; 
} else { 
$key.=" <a href=\"".$_SERVER['PHP_SELF']."?c=list&ms=search&catid=".$catid."&page=".$i."&qx=".$qx."&ns=".$ns."&rg=".$rg."\">".$i."</a>"; 
} 
} 
if($page!=$pages){ 
$key.=" <a href=\"".$_SERVER['PHP_SELF']."?c=list&ms=search&catid=".$catid."&page=".($page+1)."&qx=".$qx."&ns=".$ns."&rg=".$rg."\">下页</a> ";//Next 
$key.="<a href=\"".$_SERVER['PHP_SELF']."?c=list&ms=search&catid=".$catid."&page={$pages}&qx=".$qx."&ns=".$ns."&rg=".$rg."\">末页</a>"; //Last 
}else { 
$key.="下页 ";//Next 
$key.="末页"; //Last 
} 

echo $key;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<?php  echo "</div>"; };?>
 </div>

<?php $APP->tpl->p("foot","","0");?>