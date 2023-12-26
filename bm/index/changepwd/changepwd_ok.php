<?php
include_once ("../../conn.php");
$email=$_POST['email'];
$pwd=$_POST['password'];
$pwd1=$_POST['password1'];
$pwd2=$_POST['password2'];
$sql = "SELECT EMAIL,PASSWORD FROM msg WHERE EMAIL ='$email' AND PASSWORD = '$pwd' ";
$res=mysqli_query($link,$sql);
if($res){
    if($pwd1==$pwd2){
        $sql1="update msg set password='$pwd1' where email='$email'";
        $res1=mysqli_query($link,$sql1);
        if($res1){
            echo "<script>alert('修改成功');history.go(-1);</script>";
        }
    }else{
        echo "<script>alert('修改失败');history.go(-1);</script>";
    }
}else{
    echo "<script>alert('旧密码错误');history.go(-1);</script>";
}
