<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php $any = phpok_m_list('opic');?>
<?php $_i=0;$any[rslist]=(is_array($any[rslist]))?$any[rslist]:array();foreach($any[rslist] AS  $key=>$value){$_i++; ?>
<div class="nbanner" style="height:371px;background-image:url(<?php echo $value[picture];?>)">
    <div style="width:1200px; height:100%; overflow:hidden; line-height:25px;">
  <?php echo $value[content];?>
      </div>
    
</div>
<?php } ?>


    <!--<a href="index.php?c=list&cs=reg&"></a>-->