<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php $APP->tpl->p("head","","0");?>
<?php $APP->tpl->p("banner","","0");?>

<div class="main">
   <div class="left">
     
         <div class="lefttop">关于我们</div>
         <div class="leftmain">
         <?php $APP->tpl->p("inc/about","","0");?>
     
      </div>
   </div>
   
   <div class="right">
      <div class="righttop"><div class="ll"><?php echo $m_rs[title];?></div><div class="rr">您当前的位置是：<a href="<?php echo $_sys[siteurl];?>">网站首页</a> > <?php echo $m_rs[title];?></div></div>
      
      <div class="rightmain">
       <form id="form1" name="form1" method="post" onsubmit="return check()" action="deal.php">
	    <table width="90%" border="0" cellspacing="1" cellpadding="0"  style="margin:10px auto" id="cvf">
	      <tr style="display:none">
	        <td width="25%" align="right">标题：</td>
	        <td width="75%">
	          <input name="title" type="text" id="title" size="50" value="注册会员"  class="text1"/>
	          <span class="hover">*</span></td>
	        </tr>
            
               <tr>
	        <td width="25%" align="right">姓名：</td>
	        <td width="75%">
	          <input name="fullname" type="text" id="fullname" size="50"   class="text1"/>
	          <span class="hover">*</span></td>
	        </tr>
               <tr>
	        <td align="right">手机号码：</td>
	        <td><input name="mobile" type="text" id="mobile" size="50"   class="text1"/>
	          <span class="hover">*</span></td>
	        </tr>
             <tr>
	        <td align="right">E-mail：</td>
	        <td><input name="email" type="text" id="email" size="50"  class="text1" /></td>
	        </tr>
              
              <tr>
	        <td align="right">单位名称：</td>
	        <td><input name="danwei" type="text" id="danwei" size="50"  class="text1"/></td>
	        </tr>
              <tr>
	        <td align="right">传真：</td>
	        <td><input name="fax" type="text" id="fax" size="50"  class="text1" /></td>
	        </tr>
 
                 <tr>
	        <td align="right">备注信息：</td>
	        <td><textarea name="content" cols="50" class="text2" rows="10" id="content"></textarea>
	          </td>
	        </tr>
     
             
	      <tr>
	        <td align="right" height="40">&nbsp; &nbsp;</td>
	        <td>  <input type="submit" name="button2" id="button2" value="提交" style=" width:50px; height:25px;  float:left" />
	           <input type="reset" name="button2" id="button2" value="重置" style=" width:50px; height:25px; margin-left:30px;float:left" />
             
               </td>
	        </tr>
             <tr>
	        <td align="left" style="padding-left:100px;" colspan="2"><span class="hover">注：带*为必填项！</span></td>
	        </tr>
	      </table>
          
          
	  </form>
      <script type="text/javascript">
function check()
{
if (document.form1.title.value=="")
{
window.alert("请输入标题!!       ");
document.form1.title.focus();
return false;
}
if (document.form1.fullname.value=="")
{
window.alert("请输入联系人姓名!!       ");
document.form1.fullname.focus();
return false;
}


if (document.form1.mobile.value=="")
{
window.alert("请输入电话!       ");
document.form1.mobile.focus();
return false;
}
//
String.prototype.Trim = function() {
var m = this.match(/^\s*(\S+(\s+\S+)*)\s*$/);
return (m == null) ? "" : m[1];
}
String.prototype.isMobile = function() {
return (/^(?:18\d|14\d|13\d|15[123456789])-?\d{5}(\d{3}|\*{3})$/.test(this.Trim()));
}
String.prototype.isTel = function()
{
//"兼容格式: 国家代码(2到3位)-区号(2到3位)-电话号码(7到8位)-分机号(3位)"
    //return (/^(([0\+]\d{2,3}-)?(0\d{2,3})-)?(\d{7,8})(-(\d{3,}))?$/.test(this.Trim()));
    return (/^(([0\+]\d{2,3}-)?(0\d{2,3}))(\d{7,8})(-(\d{3,}))?$/.test(this.Trim()));
}

with(document.form1){
if (mobile.value.isMobile())  {

}
else {
alert("请输入正确的电话号码或手机\n\n例如:13534596987");
mobile.focus();
return false;

}
}
//




if (document.form1.email.value!="")
{



 var temp = document.getElementById("email");
        var myreg = /^\w+(\.\w+)*@\w+(\.\w+)+$/;
        if(temp.value!="")
        {
            if(!myreg.test(temp.value))
            {
               window.alert("您的E-mail格式有误，请重新输入!!       ");
            document.form1.email.focus();
return false;
            }
          
        }
		
		if (document.form1.fax.value!="")
{
	
}
	
	
	//
String.prototype.Trim = function() {
var m = this.match(/^\s*(\S+(\s+\S+)*)\s*$/);
return (m == null) ? "" : m[1];
}
String.prototype.isMobile = function() {
return (/^(?:18\d|14\d|13\d|15[123456789])-?\d{5}(\d{3}|\*{3})$/.test(this.Trim()));
}
String.prototype.isTel = function()
{
//"兼容格式: 国家代码(2到3位)-区号(2到3位)-电话号码(7到8位)-分机号(3位)"
    //return (/^(([0\+]\d{2,3}-)?(0\d{2,3})-)?(\d{7,8})(-(\d{3,}))?$/.test(this.Trim()));
    return (/^(([0\+]\d{2,3}-)?(0\d{2,3}))(\d{7,8})(-(\d{3,}))?$/.test(this.Trim()));
}

with(document.form1){
if (fax.value.isTel())  {

}
else {
alert("请输入正确的传真号码\n\n例如:020123456789");
fax.focus();
return false;

}
}
//
	
	
	
	}
		

}
</script>
      
      </div>
      
   </div>
   
   
   
</div>

<?php $APP->tpl->p("foot","","0");?>