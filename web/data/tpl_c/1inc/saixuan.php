<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><div class="saixuan">
  <p style=" font-size:20px; color:#ee1c23; margin-bottom:15px;">私募产品筛选</p>
  <div class="ss">投资类型：
  <a href="index.php?c=list&ms=search&catid=0&rg=<?php echo $rg;?>&qx=<?php echo $qx;?>&ns=<?php echo $ns;?>" <?php if($catid==false){?>id="ss"<?php } ?>>不限</a>
  <?php $catelist = phpok_s_catelist('pros','ts');?>  
	<?php $_i=0;$catelist=(is_array($catelist))?$catelist:array();foreach($catelist AS  $key=>$value){$_i++; ?>
<a href="index.php?c=list&ms=search&catid=<?php echo $value[id];?>&rg=<?php echo $rg;?>&qx=<?php echo $qx;?>&ns=<?php echo $ns;?>" title="<?php echo $value[cate_name];?>" <?php if($catid==$value[id]){?> id="ss"<?php } ?>><?php echo $value[cate_name];?></a>
     <?php } ?>
</div>
  <div class="ss">投资年份：
  <a href="index.php?c=list&ms=search&qx=<?php echo $qx;?>&ns=<?php echo $ns;?>&catid=<?php echo $catid;?>" <?php if($rg==false){?>id="ss"<?php } ?>>不限</a>
  <?php $any = phpok_m_list('s_rg',22);?>
<?php $_i=0;$any[rslist]=(is_array($any[rslist]))?$any[rslist]:array();foreach($any[rslist] AS  $key=>$value){$_i++; ?>
<a href="index.php?c=list&ms=search&rg=<?php echo $value[title];?>&qx=<?php echo $qx;?>&ns=<?php echo $ns;?>&catid=<?php echo $catid;?>" <?php if($rg==$value[title]){?>id="ss"<?php } ?>><?php echo $value[title];?></a>
               			<?php } ?>
  
  </div>
  <div class="ss">基金净值：
  <a href="index.php?c=list&ms=search&qx=<?php echo $qx;?>&rg=<?php echo $rg;?>&catid=<?php echo $catid;?>" <?php if($ns==false){?>id="ss"<?php } ?>>不限</a>
  <?php $any = phpok_m_list('s_ns',22);?>
<?php $_i=0;$any[rslist]=(is_array($any[rslist]))?$any[rslist]:array();foreach($any[rslist] AS  $key=>$value){$_i++; ?>
<a href="index.php?c=list&ms=search&rg=<?php echo $rg;?>&qx=<?php echo $qx;?>&ns=<?php echo $value[title];?>&catid=<?php echo $catid;?>" <?php if($ns==$value[title]){?>id="ss"<?php } ?>><?php echo $value[title];?></a>
               			<?php } ?>
  </div>
  <div class="ss">投资门槛：
  <a href="index.php?c=list&ms=search&ns=<?php echo $ns;?>&rg=<?php echo $rg;?>&catid=<?php echo $catid;?>" <?php if($qx==false){?>id="ss"<?php } ?>>不限</a>
  <?php $any = phpok_m_list('s_qx',22);?>
<?php $_i=0;$any[rslist]=(is_array($any[rslist]))?$any[rslist]:array();foreach($any[rslist] AS  $key=>$value){$_i++; ?>
<a href="index.php?c=list&ms=search&rg=<?php echo $rg;?>&qx=<?php echo $value[title];?>&ns=<?php echo $ns;?>&catid=<?php echo $catid;?>" <?php if($qx==$value[title]){?>id="ss"<?php } ?>><?php echo $value[title];?></a>
               			<?php } ?>
  </div>
  
</div>