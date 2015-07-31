<?php
require_once('DB.php');
require_once('module.php');
$connect = DB::getInstance()->connect();
$sql = new Module();
$fund = isset($_GET['fund'])?$_GET['fund']:"zhixuan";
switch ($fund) {
    case "zhixuan":
        $cate_id = 183;
        break;
    case "baoying":
        $cate_id = 180;
        break;
    case "ziben":
        $cate_id = 187;
        break;
    case "huanan":
        $cate_id = 182;
        break;
    case "tianzi":
        $cate_id = 181;
        break;
    case "international":
        $cate_id = 185;
        break;
    case "haoyunlai":
        $cate_id = 184;
        break;
}
$res = $sql->getValue($cate_id,$connect);
if($res){
    return $res;
}

