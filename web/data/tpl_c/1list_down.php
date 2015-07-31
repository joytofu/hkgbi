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
      <div class="righttop"><div class="ll"><?php echo $rs[cate_name];?></div><div class="rr">您当前的位置是：<a href="<?php echo $_sys[siteurl];?>">网站首页</a> > <?php echo $m_rs[title];?> > <?php echo $rs[cate_name];?></div></div>
      
      <div class="rightmain">
       
       
       	<?php $_i=0;$rslist=(is_array($rslist))?$rslist:array();foreach($rslist AS  $key=>$value){$_i++; ?>
			<li style=" float:left; width:100%; height:30px; line-height:30px; border-bottom:1px dashed #CCCCCC">
            <span style="float:right">&nbsp;<?php echo date("Y-m-d",$value[post_date]);?></span><a href="<?php echo site_url('download','id='.$value[down]);?>" style="<?php echo $value[style];?>" title="<?php echo $value[title];?>">▶ <?php echo $value[title];?></a></li>
			<?php } ?>
			</ul>
			<?php $APP->tpl->p("inc/pagelist","","0");?>
       
      
      </div>
      
   </div>
   
   
   
</div>

<?php $APP->tpl->p("foot","","0");?>