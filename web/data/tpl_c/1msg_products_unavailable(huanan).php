<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php $APP->tpl->p("head","","0");?>
<?php $APP->tpl->p("banner","","0");?>

<div class="pro_bg">
   <h1 class="pro_top">巨牛-华南一号</h1>
   <div class="clear"></div>

    <?php $fund_values = phpok_c_list("huanan_value","100","","post_asc");?>
    <?php 
    $size=sizeof($fund_values[rslist]);
    $yr=($fund_values[rslist][$size-1][value]-1)*100;;?>

  <div class="pro_li1">单位净值<br /><span class="sese"><?php echo $fund_values[rslist][$size-1][value];?></span></div>
  <div class="pro_li2">净值日期<br /><span class="sese"><?php echo $fund_values[rslist][$size-1][title];?></span></div>
  <div class="pro_li3">累计净值<br /><span class="sese"><?php echo $fund_values[rslist][$size-1][value];?></span></div>
    <?php unset($fund_values);?>
   
   
   <div class="pro_li1">投资类型<br /><span class="sese"><?php echo $cate_rs[cate_name];?></span></div>
   <div class="pro_li2">成立日期<br /><span class="sese"><?php echo $rs[a5];?></span></div>
   <div class="pro_li3">今年以来收益率<br /><span class="sese"><?php echo $yr;?>%</span></div>
   
   
</div>

<div id="tabs1">
 <div class="menu1box">
  <ul id="menu1">
   <li class="hover" onmouseover="setTab(1,0)">产品概况</li>
   <li onmouseover="setTab(1,1)">净值走势</li>

  </ul>
 </div>
 <div class="main1box">
  <div class="main" id="main1">
   <ul class="block">
  <?php echo $rs[content];?>
       <?php $APP->tpl->p("share_button","","0");?>
   </ul>
      <ul><div id="huanan" style="width:1200px;height:70%"></div>
      </ul>

  </div>
 </div>
</div>
<?php $svg = phpok_c_list("huanan_value","100","","post_asc");?>

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

        $('#huanan').highcharts({
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
                    fontSize: '12px'
                }
            },
            chart: {
                type: 'spline',
                zoomType:'x',
                plotBackgroundImage:'svg_bg.jpg'
            },
            title: {
                text: '巨牛-华南一号净值走势图',
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

                min: 0
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
                name: '巨牛-华南一号',
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
            $hs_orgin=3973.05;
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