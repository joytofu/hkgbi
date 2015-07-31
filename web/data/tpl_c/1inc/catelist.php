<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php if($cid){?>
<?php $_catelist = phpok_catelist($cid);?>
<?php if($_catelist[rslist]){?>

		<?php $_i=0;$_catelist[rslist]=(is_array($_catelist[rslist]))?$_catelist[rslist]:array();foreach($_catelist[rslist] AS  $key=>$value){$_i++; ?>
<li><a href="<?php echo list_url($value);?>" id="<?php echo $value[id] == $cid ? 'hov' : 'parent';?>" title="<?php echo $value[cate_name];?>"><?php echo $value[cate_name];?></a></li>
		
		<?php } ?>

<?php } ?>
<?php unset($_catelist);?>
<?php } ?>