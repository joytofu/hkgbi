<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php $any = phpok_c_list('about',255);?>
<?php $_i=0;$any[rslist]=(is_array($any[rslist]))?$any[rslist]:array();foreach($any[rslist] AS  $key=>$value){$_i++; ?>
     <li><a href="<?php if($value[lianjie]){?><?php echo $value[lianjie];?><?php }else{ ?><?php echo msg_url($value);?><?php } ?>" <?php if($value[id]==$id){?>id=hover<?php } ?> ><?php echo $value[title];?></a></li>
			<?php } ?>