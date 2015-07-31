<?php
require_once('app/conn.php');

//sql语句条件，用作查询结果个数
$tt_c=!empty($_GET['catid'])?"and cate_id='{$_GET['catid']}'":"";
$rg_c=!empty($_GET['rg'])?"and s_rg='{$_GET['rg']}'":"";
$ns_c=!empty($_GET['ns'])?"and s_ns='{$_GET['ns']}'":"";
$qx_c=!empty($_GET['qx'])?"and s_qx='{$_GET['qx']}'":"";
$sql_c_term=$rg_c.$ns_c.$qx_c.$tt_c;

//sql语句条件，拼入真正查询语句
$tt=!empty($_GET['catid'])?"and a.cate_id='{$_GET['catid']}'":"";
$rg=!empty($_GET['rg'])?"and a.s_rg='{$_GET['rg']}'":"";
$ns=!empty($_GET['ns'])?"and a.s_ns='{$_GET['ns']}'":"";
$qx=!empty($_GET['qx'])?"and a.s_qx='{$_GET['qx']}'":"";
$sql_term=$rg.$ns.$qx.$tt;

//查询结果数量的sql语句
$sql_c="select*from juniu2_list where module_id=109 {$sql_c_term} order by id desc";

//设置每页显示数量
$Page_size=6;
$result=mysql_query($sql_c);
//计算获取的结果的数量，并设置页码
$count = mysql_num_rows($result);
$page_count = ceil($count/$Page_size);
$init=1;
$page_len=5;
$max_p=$page_count;
$pages=$page_count;


//获取页码
if(empty($_GET["page"])||$_GET["page"]<0){
    $page=1;
}else{
    $page=$_GET['page'];
}

//偏移量
$offset=$Page_size*($page-1);

//真正操作的sql语句
$sql="select * from(SELECT c.id, c.cate_name, e.title, a.cate_id, a.note, c.module_id, b.val, d.filename
    FROM  `juniu2_list` AS a
    LEFT JOIN juniu2_list_ext AS b ON a.id = b.id
    LEFT JOIN juniu2_cate AS c ON a.title = c.cate_name
    LEFT JOIN juniu2_upfiles_gd AS d ON a.thumb_id = d.pid
    LEFT JOIN juniu2_list AS e ON c.id = e.cate_id
    WHERE b.field = 'a5'
    AND d.gdtype = 'big'
    {$sql_term}
    order by c.cate_name,date_format(e.title,'%y-%m-%d') desc)f
    group by cate_name
    order by val desc
    limit $offset,$Page_size";

//将结果写入$fund_info数组
$result=mysql_query($sql,$webconn);
$fund_info = array();
while ($row=mysql_fetch_assoc($result)) {
    $fund_info[]=$row;
}

//将结果的id和title值传入另一sql语句获取净值
$fund_value = array();
foreach($fund_info AS $key=>$value){
    $sql = "SELECT a.val,a.id FROM `juniu2_list_ext` as a left join juniu2_list as b on a.id = b.id WHERE b.cate_id=$value[id] and b.title='{$value[title]}' and
        a.field='value'";
    $rs = mysql_query($sql);
    while($row = mysql_fetch_assoc($rs)){
        $fund_value[] = $row;
    }
}

//再将从第二条sql语句中获取的值循环写入$fund_info数组
$i=0;
foreach($fund_value AS $key=>$value){
    $fund_info[$i][value]=$value[val];
    $fund_info[$i][f_id]=$value[id];
    $i++;
}