<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/12
 * Time: 19:32
 */

require_once 'bean/User.php';
require_once 'util/DBUtil.php';

header("Content-type:text/html;charset=utf8");
$username = $_POST["name"];
$password = $_POST["password"];
$sex = $_POST["sex"];
$age = $_POST["age"];
$home = $_POST["home"];
$hobby = $_POST["hobby"];
$like = $_POST["like"];
$phone = $_POST["phone"];

$user = new User();

$user->setUsername($username);
$user->setPassword($password);
$user->setSex($sex);
$user->setAge($age);
$user->setHome($home);
$user->setHobby($hobby);
$user->setLike($like);

$sql = "insert into user_table(username,sex,age,home,hobby,PREFERENCE,PASSWORD,PHONE) values (
'".$user->getUsername() ."','".$user->getSex() ."','".$user->getAge() ."','".$user->getHome() ."'，'".$user->getHobby() ."','".$user->getLike() ."','".$user->getPassword() ."','".$phone."')";
$db = new DBUtil();
$conn = $db->connectDB();
$db->insertDB($conn, $sql);

header('Refresh:2,Url=login.html');
echo '注册成功...请稍后...';
die;
?>