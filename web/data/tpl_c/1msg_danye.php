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
       
       <div class="righttop" style="overflow:hidden"><div class="ll" style="width:600px;font-size:20px"><strong><?php echo $rs[title];?></strong></div><div class="rr" style="width:300px;">您当前的位置是：<a href="<?php echo $_sys[siteurl];?>">网站首页</a> > <?php echo $cate_rs[cate_name];?> > <?php echo $rs[title];?></div></div>
      
      <div class="rightmain">
      <?php echo $rs[content];?>
          <div class="bdsharebuttonbox" data-tag="share_1" style="float:right">
	<a class="bds_mshare" data-cmd="mshare"></a>
	<a class="bds_weixin" data-cmd="weixin"></a>
	<a class="bds_tsina" data-cmd="tsina"></a>
    <a class="bds_qzone" data-cmd="qzone" href="#"></a>
    <a class="bds_tqq" data-cmd="tqq"></a>
	<a class="bds_tieba" data-cmd="tieba"></a>
	<a class="bds_douban" data-cmd="douban"></a>
	<a class="bds_iguba" data-cmd="iguba"></a>
	<a class="bds_more" data-cmd="more">更多</a>
	<a class="bds_count" data-cmd="count"></a>
</div>
      </div>
      
   </div>
   
   
   
</div>

<?php $APP->tpl->p("foot","","0");?>