<?php
include_once ("../conn.php");
session_start();
$a=$_SESSION['email'];
$b=$_SESSION['pwd'];

$sql="delete from msg where email='$a' and password='$b'";
$sql1="delete from borrow where email='$a' ";
$sql2="delete from user where email='$a' ";
$res=mysqli_query($link,$sql);
$res1=mysqli_query($link,$sql1);
$res2=mysqli_query($link,$sql2);
if($res&&$res1&&$res2){
    echo "<script>alert('注销成功');history.go(-1);</script>";
}else{
    echo "<script>alert('注销失败');history.go(-1);</script>";
}
