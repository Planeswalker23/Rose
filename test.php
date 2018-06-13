<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/12
 * Time: 16:16
 */

require_once 'util/DBUtil.php';

$sql="select * from USER_TABLE where ispass = 0";

$db = new DBUtil();
$conn = $db->connectDB();
$res = $db->selectDB($conn, $sql);
foreach ($res as $j){
    echo $j['USERNAME']."<br>";
    echo $j['USERLEVEL']."<br>";
}

?>