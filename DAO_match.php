<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/15
 * Time: 14:11
 */

require_once 'util/DBUtil.php';
session_start();
$usernameFrom = $_SESSION['username'];
$usernameTo = $_SESSION['usernameTo'];
header("Content-type:text/html;charset=utf8");
if ($usernameFrom == null){
    header('Refresh:2,Url=login.html');
    echo "请先登录...正在跳转到登录页面";
    die;
} else {
    $db1 = new DBUtil();
    $sql1 = "select * from match_pre where usernamefrom = '".$usernameTo."' and usernameto ='".$usernameFrom."'";
    $conn1 = $db1->connectDB();
    $res1 = $db1->selectDB($conn1, $sql1);
    if ($res1 != null){
        $dbup = new DBUtil();
        $sqlup = "insert into match values ('".$usernameFrom."', '".$usernameTo."', 1)";
        $connup = $dbup->connectDB();
        $dbup->insertDB($connup, $sqlup);
    }
    $dbin = new DBUtil();
    $sqlin = "insert into match_pre values ('".$usernameFrom."','".$usernameTo."')";
    $connin = $dbin->connectDB();
    $dbin->insertDB($connin, $sqlin);
    header('Refresh:1,Url=index.php');
    echo "成功向Ta发出消息...请耐心等待回应...";
    die;
}

?>