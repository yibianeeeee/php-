<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>borrowbook</title>
</head>

<body>
<?php
header("Content-type:text/html; charest=UTF-8");//编码方式
// 处理删除操作的页面
include_once("../../conn.php");
session_start();
$a=$_SESSION['email'];
if($_GET['action']=="borrow"){
    $n='';
    $sqlstr1="select * from book where id =".$_GET['id'];
    $result=mysqli_query($link,$sqlstr1);
    $ret=mysqli_fetch_array($result);
    $book_name=$ret[1];
    $sqlstr2="select * from user where email='$a' ";
    $result2=mysqli_query($link,$sqlstr2);
    $ret2=mysqli_fetch_array($result2);
    $user_name=$ret2[1];
    $b_date=date("Y-m-d");
    $r_date=date('Y-m-d H:i:s', strtotime("+1 year"));
    $sqlstr3="insert into borrow values ('".$a."','".$user_name."','".$b_date."','".$book_name."','".$r_date."')";
    $result3=mysqli_query($link,$sqlstr3);
    if($result3){
        echo"<script>alert('借阅成功');history.go(-1);</script>";
    }else{
        echo"<script>alert('借阅失败');history.go(-1);</script>";
    }
}

?>
</body>
</html>
