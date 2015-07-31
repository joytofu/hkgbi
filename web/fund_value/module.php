<?php
class Module
{
    function getValue($cateid, $conn)
    {
        //通过cateid查询具体value值的id
        $sql = "SELECT id FROM `juniu2_list_cate` WHERE cateid = {$cateid} ORDER BY id DESC";
        $res = mysql_query($sql, $conn);
        $id = mysql_fetch_assoc($res);

        //通过id查询具体value值
        $sql = "select A.title, B.val from `juniu2_list` as A, `juniu2_list_ext` as B where A.id = $id[id] and B.id = $id[id] and B.field = 'value'";
        $res = mysql_query($sql, $conn);
        $output = array();
        while ($data = mysql_fetch_assoc($res)) {
            $output[] = $data;
        }
        echo json_encode($output);
    }
}