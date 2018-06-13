<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/12
 * Time: 16:11
 */

header('Content-Type:text/html;charset=utf-8');

class DBUtil
{
    public $host="localhost:1521/orcl"; //服务器地址
    public $user="php"; //用户名
    public $password="123456789"; //密码


    // 负责数据库连接
    function connectDB(){
        $conn = oci_connect($this->user, $this->password, $this->host, 'utf8');
        if(!$conn){
            $e = oci_error();
            print htmlentities($e['message']);
            exit;
        }
        //print "连接数据库成功";
        return $conn;
    }

    //插入或更新数据库
    function insertDB($conn, $sql){
        $stid = oci_parse($conn, $sql); // 编译SQL语句，准备执行
        $r = oci_execute($stid); // 执行SQL
        oci_free_statement($stid);
        oci_close($conn); //关闭连接
        if(!$r) {
            $e = oci_error($sql);
            $arr_result['result']='false';
        }
        else{
            $arr_result['result']='true';
        }
    }


    function selectDB($conn, $sql){
        $stid = oci_parse($conn, $sql); // 编译SQL语句，准备执行
        if (!$stid) {
            $e = oci_error($conn);
            print htmlentities($e['message']);
            exit;
        }
        $r = oci_execute($stid, OCI_DEFAULT); // 执行SQL
        if(!$r) {
            $e = oci_error($stid);
            echo htmlentities($e['message']);
            exit;
        }
        //取回结果
        $i=0;
        while($row = oci_fetch_array($stid, OCI_RETURN_NULLS)) {
            $pass[$i] = $row;
            $i++;
        }
        oci_close($conn); //关闭连接
        return $pass;
    }
}
?>