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
      <div class="righttop"><div class="ll" style="width:300px;"><?php echo $rs[title];?></div><div class="rr" style="width:600px;">您当前的位置是：<a href="<?php echo $_sys[siteurl];?>">网站首页</a> > <?php echo $rs[title];?></div></div>
      
      <div class="rightmain">
          <p><strong>不论你是个人或是机构，我们都愿意成为你这样一个合作伙伴：</strong></p>
<p>
真诚----共享优质的产品管理资源；<br>
踏实----共享完善的培训服务平台；<br>
    积极----共享后台支援系统，提高客户服务体验；</p><br>

          <p><strong>如果你：</strong></p>

<p>认可我们的理念---- 实现客户资产安全、稳定、持续增值；<br>

认同我们的方向---- 专注于中小家庭财富管理<br>

    那么，给大家一个认识的机会吧，说不定会开启一段美妙之旅！</p><br>

          <p><strong>寻找有创业激情的：</strong><br>

    营销高手、保险达人、业内同伴！</p>

      </div>
      
   </div>
   
   
   
</div>

<?php $APP->tpl->p("foot","","0");?>