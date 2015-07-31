<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php $APP->tpl->p("head","","0");?>
<?php $APP->tpl->p("banner","","0");?>

<div class="main">
   <div class="left">
     
         <div class="lefttop"><?php echo $m_rs[title];?></div>
         <div class="leftmain">
         <?php $APP->tpl->p("inc/catelist","","0");?>
     
      </div>
   </div>
   
   <div class="right">
      <div class="righttop"><div class="ll" style="width:300px;"><?php echo $rs[cate_name];?></div><div class="rr" style="width:600px;">您当前的位置是：<a href="<?php echo $_sys[siteurl];?>">网站首页</a> > 新闻动态 > <?php echo $rs[cate_name];?></div></div>
      
      <div class="rightmain">
   
   <?php if($total){?>
    <?php 
$arr_new = array();
foreach($rslist AS $key=>$value){
 $arr_new[] = $value;
 
};?>


<?php $_i=0;$arr_new=(is_array($arr_new))?$arr_new:array();foreach($arr_new AS  $key=>$value){$_i++; ?>

  <div style="width:100%; border-bottom:1px dashed #ccc; padding-bottom:10px; overflow:hidden; margin-bottom:10px;">
     <p><a style="font-size:16px;" href="<?php echo msg_url($value);?>" title="<?php echo $value[title];?>" target="_blank"><?php echo $value[title];?></a><span style="float:right">&nbsp;<?php echo date("Y-m-d",$value[post_date]);?></span></p>
    

    </div>

<?php } ?>


			<?php $APP->tpl->p("inc/pagelist","","0");?>    
<?php } ?>
   
   
   
      </div>
      
   </div>
   
   
   
</div>

<?php $APP->tpl->p("foot","","0");?>