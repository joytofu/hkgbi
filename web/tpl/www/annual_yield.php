<?php
//计算预计年化收益率
function annual_yield(){
$createDate={:$valuea[a5]};
$startDate=strtotime($createDate);   //转化成时间戳格式
$valueDate={:$value1[a3]};
$endDate=strtotime($valueDate);   //转化成时间戳格式
$days=round(($endDate-$startDate)/86400)+1;
$yr=({:value1[a4]-1)*12/($days/30);   //预计年化收益率
$yr=round($yr,4)*100;
$yr=$yr.'%';
return $yr;
}
