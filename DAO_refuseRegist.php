<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/13
 * Time: 15:57
 */

require_once 'util/DBUtil.php';
header("Content-type:text/html;charset=utf8");
session_start();
$username = $_GET['who'];
$sql = "update user_table set ispass = 0 where username = '".$username."'";
$db = new DBUtil();
$conn = $db->connectDB();
$db->insertDB($conn, $sql);
header('Refresh:1,Url=my.php');
echo '成功拒绝申请...请稍后...';
die;
?>