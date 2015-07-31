<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php $APP->tpl->p("head","","0");?>
<?php $APP->tpl->p("banner","","0");?>
<?php $APP->tpl->p("inc/saixuan","","0");?>


<div class="jingxuan">
<div class="clear"></div>

<?php if($total){?>
    <?php 
$arr_new = array();
foreach($rslist AS $key=>$value){
 $arr_new[] = $value;
 
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
<?php $_i=0;$arr_new=(is_array($arr_new))?$arr_new:array();foreach($arr_new AS  $key=>$value){$_i++; ?>

  <div class="ipro" <?php if(($key+1)%3==0){?>id="ipro"<?php } ?>>
     <a style="font-size:24px; color:#da251d" href="<?php echo msg_url($value);?>" title="<?php echo $value[title];?>" target="_blank"><img src="<?php echo $value[picture];?>"></a>
     <p><a style="font-size:24px; color:#da251d" href="<?php echo msg_url($value);?>" title="<?php echo $value[title];?>" target="_blank"><?php echo $value[title];?></a></p>
     <div class="pro_txt"><?php echo $value[note];?></div>
     <p id="nn">★ 最新净值：<?php echo $value[a2];?></p>
     <p id="nn">★ 净值日期：<?php echo $value[a3];?></p>
     <p id="nn">★ 成立日期：<?php echo $value[a5];?></p>
     <p id="nn">★ 预计年化收益率:<script>annual_yield("<?php echo $value[a5];?>","<?php echo $value[a3];?>",<?php echo $value[a4];?>);</script></p>
     <p align="center"><a href="index.php?c=list&cs=reg&" title="<?php echo $value[title];?>" target="_blank"><img src="tpl/www/images/01.png" style="width:140px; height:57px;"></a></p>

    </div>

<?php } ?>


			<?php $APP->tpl->p("inc/pagelist","","0");?>    
<?php } ?>
 </div>

<?php $APP->tpl->p("foot","","0");?>