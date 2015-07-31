<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><div class="clear"></div>
<div class="page">
	<!--共有记录：<?php echo $total;?>个，当前<?php echo $opt;?>/--><?php echo $total_page;?> <?php $_i=0;$pagelist=(is_array($pagelist))?$pagelist:array();foreach($pagelist AS  $key=>$value){$_i++; ?>
	<span><a href="<?php echo $value[url];?>"<?php if($value[status]){?> class="hover"<?php } ?>><?php echo $value[name];?></a></span>
	<?php } ?>
</div>