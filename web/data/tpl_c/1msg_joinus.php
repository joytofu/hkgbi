<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php $APP->tpl->p("head","","0");?>
<?php $APP->tpl->p("banner","","0");?>

<div class="main">
   <div class="left">
     
         <div class="lefttop">加入我们</div>
         <div class="leftmain">
         <?php $APP->tpl->p("inc/catelist","","0");?>
     
      </div>
   </div>
   	
   <div class="right">
       <div class="righttop"><div class="ll" style="width:300px;"><?php echo $rs[title];?></div><div class="rr" style="width:600px;">您当前的位置是：<a href="<?php echo $_sys[siteurl];?>">网站首页</a> > <a href="index.php?c=list&cs=joinus&"><?php echo $m_rs[title];?></a> > <a href="<?php echo $cate_rs[linkurl];?>"><?php echo $cate_rs[cate_name];?></a> > <?php echo $rs[title];?></div></div>
      
      <div class="rightmain">
      <?php echo $rs[content];?>
      </div>
      
   </div>
   
   
   
</div>

<?php $APP->tpl->p("foot","","0");?>