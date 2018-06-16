<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/13
 * Time: 9:50
 */
header("Content-type:text/html;charset=utf8");
session_start();
unset($_SESSION['username']);
unset($_SESSION['userlevel']);
unset($_SESSION['sex']);

header('Refresh:1,Url=index.php');
echo '注销成功...正在返回...';
die;

?>