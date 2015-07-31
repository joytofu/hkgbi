<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php if($cid){?>
<?php $_list = phpok("list","cid=".$cid);?>
<?php if($_list[rslist]){?>

		<?php $_i=0;$_list[rslist]=(is_array($_list[rslist]))?$_list[rslist]:array();foreach($_list[rslist] AS  $key=>$value){$_i++; ?>
		<li><a href="<?php echo msg_url($value);?>" title="<?php echo $value[title];?>"  id="<?php echo $value[id] == $id ? 'hov' : 'parent';?>"><?php echo $value[title];?></a></li>
		<?php } ?>

<?php } ?>
<?php unset($_list);?>
<?php } ?>