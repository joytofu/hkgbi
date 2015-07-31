<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php $APP->tpl->p("head","","0");?>
 <div id="banner">
 <div id="flashBg" >
<div id="flashLine">
<div id="flash">
        <?php $kflist = phpok('picplayer');?>
	<?php $_i=0;$kflist[rslist]=(is_array($kflist[rslist]))?$kflist[rslist]:array();foreach($kflist[rslist] AS  $key=>$value){$_i++; ?>
<div class="huir" <?php if($value[target]){?> target="_blank" <?php } ?> id="flash<?php echo $key+1;?>"  style="background-image: url(<?php echo $value[picture];?>);<?php if($key==0){?>display: block; <?php }else{ ?> display: none;<?php } ?> background-position: 50% 0%; padding-top:100px; background-repeat: no-repeat no-repeat; height:490px; " name="#0b0b0b">

<div style="width:1200px; margin:0 auto; height:100%; overflow:hidden; line-height:50px;">
 <?php echo $value[content];?>
    </div>

</div>		
    	<?php } ?>

  <div class="flash_bar">
	

<?php $kflist = phpok('picplayer');?>
	<?php $_i=0;$kflist[rslist]=(is_array($kflist[rslist]))?$kflist[rslist]:array();foreach($kflist[rslist] AS  $key=>$value){$_i++; ?>
    <div <?php if($key==0){?>class="dq" <?php }else{ ?> class="no"<?php } ?>  id="f<?php echo $key+1;?>" onclick="changeflash(<?php echo $key+1;?>)"></div>
    	<?php } ?>
  </div>
</div>
</div>
</div>
</div>


<div class="jingxuan">
<p align="center" style="padding:40px 0"><img src="tpl/www/images/01.jpg"></p>
<div class="clear"></div>

   <?php $any = phpok_m_list("products",6,'','','isvouch');?>

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

<?php $_i=0;$any[rslist]=(is_array($any[rslist]))?$any[rslist]:array();foreach($any[rslist] AS  $key1=>$value1){$_i++; ?>

    <div class="ipro" <?php if(($key1+1)%3==0){?>id="ipro"<?php } ?>>
     <img src="<?php echo $value1[picture];?>">
     <p><a style="font-size:24px; color:#da251d" href="<?php echo msg_url($value1);?>" title="<?php echo $value1[title];?>" target="_blank"><?php echo $value1[title];?></a></p>
     <div class="pro_txt"><?php echo $value1[note];?></div>
     <p id="nn">★ 单位净值:<?php echo $value1[a2];?></p>
     <p id="nn">★ 净值日期:<?php echo $value1[a3];?></p>
     <p id="nn">★ 成立日期:<?php echo $value1[a5];?></p>
     <p id="nn">★ 预计年化收益率:<script>annual_yield("<?php echo $value1[a5];?>","<?php echo $value1[a3];?>",<?php echo $value1[a4];?>);</script></p>
<a href="index.php?c=list&cs=reg&" title="<?php echo $value1[title];?>" target="_blank">
    <div class="button red" style="margin-top: 10px;margin-left: 29%;padding: 14px 25px 14px 25px;font-size: 20px;background-color: #9E1414;">
  <div class="shine"></div>
  立即预约
</div></a>

    </div>
    
               			<?php } ?>
  
  
  
    

</div>




<div class="clear"></div>
<div class="index_tu">
  <div class="index_tu1"><a href="index.php?c=list&ms=book" title="基金预约"><div class="button red" style="margin-top: 0px;margin-left: 210px;padding: 14px 25px 14px 25px;font-size: 16px;background-color: #9E1414;">
  <div class="shine"></div>
  立即预约
</div></a></div>
</div>


   <div class="index_news">

      <img src="tpl/www/images/news.jpg">
      <div class="news_main">
       <?php $dibu = phpok_msg("notice");?>
         <div class="ititle"><a href="index.php?c=msg&ts=notice" title="巨牛公告"><?php echo nl2br($dibu[title]);?></a></div>
         <div class="news_txt">
        <?php echo nl2br($dibu[note]);?>
         </div>
         <div class="i_more"><a href="index.php?c=list&cs=notice&" title="巨牛公告" style="color:#376db7">查看更多>></a></div>
      </div>
       
   </div>
   
   <div class="index_tu2">
       <a href="index.php?c=list&amp;cs=reg&amp;" title="基金预约"><div class="button red" style="margin-top: 0px;margin-right: 13px;padding: 14px 25px 14px 25px;font-size: 16px;background-color: #9E1414;">
  <div class="shine"></div>
  立即预约
</div></a>
       
       <div class="renz">
           <ul style="width: 100%">
            <?php $any = phpok_m_list("renzheng",10);?>
<?php $_i=0;$any[rslist]=(is_array($any[rslist]))?$any[rslist]:array();foreach($any[rslist] AS  $key1=>$value1){$_i++; ?>
<?php if($key1>0){?><img src="tpl/www/images/xx.jpg" style="float:left; margin-top:15px;"><?php } ?>
  <li><p><?php echo $value1[title];?></p>
      <a href="<?php echo $value1[auth_link];?>" target="_blank" rel="nofollow">
     <img src="<?php echo $value1[picture];?>">
          </a>
</li>
               			<?php } ?>
       </ul>
       </div>
       
       
   </div>
   
   <div class="index_3"><?php $dibu = phpok_msg("xinxi");?><?php echo nl2br($dibu[note]);?></div>
   <div class="index_4">
      
      <div class="feed_l">
         <form method="post" action="deal2.php" name="form1" id="form1" onsubmit="return check()">
            <!--<input type="hidden" value="在线预约" name="title" id="title">-->
             
<select name="title" type="text" id="title" class="text3"/>
                <option value="保盈一号">保盈一号</option>
                <option value="智选一号">智选一号</option>
            </select>
             
<input type="text" id="fullname" name="fullname" class="text3" onblur="this.style.color='#999';if(this.value=='') this.value='姓名';" 
onkeyup="if(event.keyCode==13){doSearch();}" onfocus="this.style.color='#000';if(this.value=='姓名') this.value='';" value="姓名">
             
<input type="text" id="mobile" name="mobile" class="text3" onblur="this.style.color='#999';if(this.value=='') this.value='手机号码';" 
onkeyup="if(event.keyCode==13){doSearch();}" onfocus="this.style.color='#000';if(this.value=='手机号码') this.value='';" value="手机号码">

<input type="text" id="email" name="email" class="text3" onblur="this.style.color='#999';if(this.value=='') this.value='电子邮箱';" 
onkeyup="if(event.keyCode==13){doSearch();}" onfocus="this.style.color='#000';if(this.value=='电子邮箱') this.value='';" value="电子邮箱">

<input name="subscribe" type="checkbox" checked="checked" style="float:left; margin-top:3px; margin-right:5px;"/>若有巨牛最新的产品服务及优惠信息，我们将会发送您的电子邮箱。

<input type="submit" value="立即预约" name="imageField" id="imageField" class="button red" style="float:right; margin-top: 20px;padding:15px;font-size:18px;background-color:#A90909">




  </form>
         
         <script type="text/javascript">
function check()
{
if (document.form1.fullname.value=="姓名")
{
window.alert("请输入姓名   ");
document.form1.fullname.focus();
return false;
}
if (document.form1.mobile.value=="手机号码")
{
window.alert("请输入手机号码 ");
document.form1.mobile.focus();
return false;
}

//
String.prototype.Trim = function() {
var m = this.match(/^\s*(\S+(\s+\S+)*)\s*$/);
return (m == null) ? "" : m[1];
}
String.prototype.isMobile = function() {
return (/^(?:18\d|14\d|13\d|15[123456789])-?\d{5}(\d{3}|\*{3})$/.test(this.Trim()));
}
String.prototype.isTel = function()
{
//"兼容格式: 国家代码(2到3位)-区号(2到3位)-电话号码(7到8位)-分机号(3位)"
    //return (/^(([0\+]\d{2,3}-)?(0\d{2,3})-)?(\d{7,8})(-(\d{3,}))?$/.test(this.Trim()));
    return (/^(([0\+]\d{2,3}-)?(0\d{2,3}))(\d{7,8})(-(\d{3,}))?$/.test(this.Trim()));
}

with(document.form1){
if (mobile.value.isMobile())  {

}
else {
alert("请输入正确的手机号码\n\n例如:13534596987");
mobile.focus();
return false;

}
}
//


if (document.form1.email.value=="电子邮箱")
{
window.alert("请输入电子邮箱   ");
document.form1.email.focus();
return false;
}

 var temp = document.getElementById("email");
        var myreg = /(\S)+[@]{1}(\S)+[.]{1}(\w)+/;
        if(temp.value!="")
        {
            if(!myreg.test(temp.value))
            {
               window.alert("您的E-mail格式有误，请重新输入!!       ");
            document.form1.email.focus();
return false;
            }
          
        }


}
</script>
      
      </div>
      <div class="feed_r">
         <li><?php $dibu = phpok_msg("w1");?><img src="tpl/www/images/w1.jpg" align="left"><?php echo nl2br($dibu[note]);?></li>
         <li><?php $dibu = phpok_msg("w2");?><a href="<?php echo nl2br($dibu[note]);?>" target="_blank"><img src="tpl/www/images/w2.jpg" align="left"><?php echo nl2br($dibu[note]);?></a></li>
         <li><img src="tpl/www/images/w3.jpg" align="left"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=3122616794&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:3122616794:41" alt="联系我们" title="联系我们" rel="nofollow"/></a>
             <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=3122139387&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:3122139387:41" alt="联系我们" title="联系我们" rel="nofollow"/></a>
          
          </li>
      </div>
      
   </div>
   <?php $APP->tpl->p("foot","","0");?>
<script>
var currentindex=1;
var length = $(".flash_bar div").length;
//$("#flashBg").css("background-color",$("#flash1").attr("name"));
function changeflash(i) {	
currentindex=i;
for (j=1;j<=length;j++){
	if (j==i) 
	{$("#flash"+j).fadeIn("normal");
	$("#flash"+j).css("display","block");
	$("#f"+j).removeClass();
	$("#f"+j).addClass("dq");
	//$("#flashBg").css("background-color",$("#flash"+j).attr("name"));
	}
	else
	{$("#flash"+j).css("display","none");
	$("#f"+j).removeClass();
	$("#f"+j).addClass("no");}
}}
function startAm(){
timerID = setInterval("timer_tick()",5000);
}
function stopAm(){
clearInterval(timerID);
}
function timer_tick() {
    currentindex=currentindex>=length?1:currentindex+1;
	changeflash(currentindex);}
$(document).ready(function(){
$(".flash_bar div").mouseover(function(){stopAm();}).mouseout(function(){startAm();});
startAm();
});
</script><!--
<a href="c2306.html">联系我们</a> | <a href="c2305.html">使用条款</a> | <a href="c2299.html">隐私条约</a> | <a href="c2298.html">风险提示</a> | <a href="index.php?c=list&ms=book">加入巨牛</a> | <a href="aboutus.html">关于巨牛</a><br />-->