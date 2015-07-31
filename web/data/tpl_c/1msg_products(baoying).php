<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php $APP->tpl->p("head","","0");?>
<?php $APP->tpl->p("banner","","0");?>

<div class="pro_bg">
   <h1 class="pro_top">巨牛-保盈一号</h1>
   <div class="clear"></div>

    <?php $fund_values = phpok_c_list("baoying_value","100","","post_asc");?>
    <?php 
    $size=sizeof($fund_values[rslist]);;?>
  <div class="pro_li1" style="margin-left:60px">单位净值<br /><span class="sese"><?php echo $fund_values[rslist][$size-1][value];?></span></div>
  <div class="pro_li2" style="margin-left:40px">净值日期<br /><span class="sese"><?php echo $fund_values[rslist][$size-1][title];?></span></div>
  <div class="pro_li3" style="margin-left:80px">累计净值<br /><span class="sese"><?php echo $fund_values[rslist][$size-1][value];?></span></div>

    <?php unset($fund_values);?>

   <div class="pro_li2" style="margin-left:90px">成立日期<br /><span class="sese"><?php echo $rs[a5];?></span></div>
    <div class="pro_li1" style="width:150px">累计派息额(每百万)<br /><span class="sese" style="font-size:16px;font-weight:600"><?php echo $rs[payout];?>元/累计<?php echo $rs[times];?>次</span></div>
   <div class="pro_li3" style="margin-left:30px;width:170px">今年以来收益率(不含派息)<br /><span class="sese" style="padding-left:26%"><?php echo $rs[a6];?></span></div>
   
   
</div>

<div id="tabs1">
 <div class="menu1box">
  <ul id="menu1">
   <li class="hover" onmouseover="setTab(1,0)">产品概况</li>
   <li onmouseover="setTab(1,1)">净值走势</li>
<li onmouseover="setTab(1,2)">我要预约</li>
  </ul>
 </div>
 <div class="main1box">
  <div class="main" id="main1">
   <ul class="block">
  <?php echo $rs[content];?>
       <?php $APP->tpl->p("share_button","","0");?>
   </ul>

   <ul><div id="baoying" style="width:1200px;height:70%"></div>
   </ul>

   <ul>
      <form style="margin-left:10%" id="form1" name="form1" method="post" onsubmit="return check()" action="deal.php">
	    <table width="90%" border="0" cellspacing="1" cellpadding="0"  style="margin:10px auto" id="cvf">
	      <tr style="display:none">
	        <td width="25%" align="right">基金名称</td>
	        <td width="75%">
	          <input name="title" type="text" id="title" size="50" value="保盈一号"  class="text1"/>
	          <span class="hover">*</span></td>
	        </tr>
            
            <tr>
	        <td width="24%" align="right">服务分部：</td>
	        <td width="76%">
	          <select name="department" type="text" id="department"  class="text1" />
                <option value="广州分部">广州分部</option>
                <option value="天河分部">天河分部</option>
                <option value="南海分部">南海分部</option>
                <option value="顺德分部">顺德分部</option>
                <option value="成都分部">成都分部</option>
            </select>
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
        var myreg = /(\S)+[@]{1}(\S)+[.]{1}(\w)+/;
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
      </ul>      

  </div>
     
    
</div>
    <?php $svg = phpok_c_list("baoying_value","100","","post_asc");?>
    <script type="text/javascript">
        $(function () {
            Highcharts.setOptions({
                lang: {
                    printChart:"打印图表",
                    downloadJPEG: "下载JPEG图片" ,
                    downloadPDF: "下载PDF文档"  ,
                    downloadPNG: "下载PNG图片"  ,
                    downloadSVG: "下载SVG矢量图" ,
                    exportButtonTitle: "导出图片"
                }
            });

            $('#baoying').highcharts({
                credits:{
                    text:'巨牛投资',
                    href:'http://www.hkgbi.com/',
                    position:{                          // 位置设置
                        align: 'right',
                        x: 0,
                        verticalAlign: 'bottom',
                        y: -5
                    },
                    style: {                            // 样式设置
                        cursor: 'pointer',
                        color: 'red',
                        fontSize: '14px'
                    }
                },
                chart: {
                    type: 'spline',
                    zoomType:'x',
                    plotBackgroundImage:'svg_bg.jpg'
                },
                title: {
                    text: '巨牛-保盈一号净值走势图',
                    style:{
                        fontSize:'24px',
                        fontWeight:'bold',
                        fontFamily:'Microsoft YaHei'
                    }
                },
                subtitle: {
                    text: ''
                },

                xAxis: {
                    labels:{
                        step:2,
                        formatter: function () {
                            return Highcharts.dateFormat('%m-%d', this.value);
                        },
                    },
                    type: 'datetime',
                    dateTimeLabelFormats: { // don't display the dummy year
                        day:'%d',
                        month: '%m',
                        year: '%Y'
                    }
                },
                yAxis: {
                    labels:{
                        step:2
                    },
                    title: {
                        text: '净值'
                    },

                    min: 0.7
                },
                tooltip: {
                    shared: true,
                    crosshairs:true,
                    //xDateFormat: '<b>'+'数据日期:'+'</b>'+'%Y-%m-%d',
                    //pointFormat: '<span style="color:{series.color}">累计净值:</span>: <b>{point.y}</b><br/>'
                    //hearderFormat:'<b>'+'数据日期:'+'</b>'+Highcharts.dateFormat('%Y-%m-%d', this.x)+'<br>',
                    //pointFormat:'<b>'+'累计净值:'+'<br>'+point.y
                    formatter: function() {
                        return '<b>'+ '数据日期:' +'</b>'+
                                Highcharts.dateFormat('%Y-%m-%d', this.x) +'<br>'+ '<b>'+'累计净值:'+'</b>'+this.y+'<br>'+ '<b>'+'沪深300净值:'+'</b>'+this.points[1].y;
                    }
                },

                series: [{
                    name: '巨牛-保盈一号',
                    maker:{
                        symbol:'diamond'
                    },
                    color: 'red',

                    data: [
                        <?php $_i=0;$svg[rslist]=(is_array($svg[rslist]))?$svg[rslist]:array();foreach($svg[rslist] AS  $key=>$value){$_i++; ?>
                        [Date.UTC(<?php echo $value[year];?>, <?php echo $value[month];?>-1,  <?php echo $value[day];?>), <?php echo $value[value];?> ],
        <?php } ?>
        ]
        }, {
            name: '沪深300',
                    color:'blue',
                    data:[
                <?php 
                //$hs_index = array();
                $hs_orgin=4787.74;
            foreach($svg[rslist] AS $key=>$value)
            {
                $hs_index = round($value[hs300]/$hs_orgin,4);
                echo  "[Date.UTC($value[year], $value[month]-1,$value[day]),$hs_index],";};?>
        ]
        }]
        });
        });
        var num='12';
        var data=new Array();
        data.push(parseInt(num));

    </script>
    <?php unset($svg);?>
<?php $APP->tpl->p("foot","","0");?>
<script>
<!--
/*第一种形式 第二种形式 更换显示样式*/
function setTab(m,n){
 var tli=document.getElementById("menu"+m).getElementsByTagName("li");
 var mli=document.getElementById("main"+m).getElementsByTagName("ul");
 for(i=0;i<tli.length;i++){
  tli[i].className=i==n?"hover":"";
  mli[i].style.display=i==n?"block":"none";
 }
}
/*第三种形式 利用一个背景层定位*/
var m3={0:"",1:"评论内容",2:"技术内容",3:"点评内容"}
function nowtab(m,n){
 if(n!=0 && m3[0]=="")m3[0]=document.getElementById("main2").innerHTML;
 document.getElementById("tip"+m).style.left=n*100+'px';
 document.getElementById("main2").innerHTML=m3[n];
}
//-->
</script>