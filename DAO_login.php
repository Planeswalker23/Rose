<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/12
 * Time: 21:11
 */

require_once 'util/DBUtil.php';

header("Content-type:text/html;charset=utf8");
$username = $_POST["name"];
$password = $_POST["password"];
$sql="select password, userlevel,sex from USER_TABLE where USERNAME ='".$username."'";

$db = new DBUtil();
$conn = $db->connectDB();
$pass = $db->selectDB($conn, $sql);

if ($password == $pass['0']['PASSWORD'] && $password != null){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['userlevel'] = $pass[0]['USERLEVEL'];
    $_SESSION['sex'] = $pass[0]['SEX'];
    header('Refresh:1,Url=index.php');
    echo '登录成功...请稍后...';
    die;
} else{
    header('Refresh:1,Url=login.html');
    echo '登录失败...正在返回...';
    die;
}


?>