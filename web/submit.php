<?php
require_once("app/conn.php");
header("Content-type:text/html;charset=utf-8");
session_start();

    $fullname=$_POST["fullname"];
    if($fullname==false){
        echo "非法操作";
        exit;
    }

    //title从表单传入,判断module_id和cate_id
    if($_POST["title"]=="中金岭南金汇资本一号"||$_POST["title"]=="智选一号"||$_POST["title"]=="保盈一号"){
        $module_id=23;
        if($_POST["title"]=="中金岭南金汇资本一号"){
            $cate_id=192;
        }elseif($_POST["title"]=="智选一号"){
            $cate_id=193;
        }elseif($_POST["title"]=="保盈一号"){
            $cate_id=194;
        }
    }else{
        $module_id=116;
        if($_POST["title"]=="合伙人申请"){
            $cate_id=189;
        }elseif($_POST["title"]=="渠道代理商申请"){
            $cate_id=190;
        }
    }

    $title=$_POST["title"];
    $status=0;
    $post_date=time("ymdhis");
    mysql_select_db("db_cencencen", $webconn);
    mysql_query("INSERT INTO juniu2_list(module_id,cate_id,title,post_date,status) VALUES ('$module_id','$cate_id','$title','$post_date','$status')");

    $result=mysql_query("select * from juniu2_list order by id asc");
    while ($rs=mysql_fetch_array($result)){
        $rsid=$rs['id'];
    }

   //循环写入数据库
   $items=$_POST;
   foreach($items AS $field=>$val){
       if($field!=="module_id"&&$field!=="cate_id"&&$field!=="title") {
           mysql_query("INSERT INTO juniu2_list_ext(id,field,val) VALUES ('$rsid','$field','$val')");
       }
   }
    mysql_close($webconn);

echo "<script language=javascript>
window.alert('您的信息我们已经收到，我们会尽快联系您!');
window.location.href='index.php?c=list&ms=joinus';
</script>";

?>