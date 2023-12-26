<?php
error_reporting(0);
header("content-type:text/html; charest=UTF-8");//文件编码格式
include_once("../../conn.php");//连接数据库文件
$a=$_POST["email"];
$b=$_POST["name"];
$c=$_POST["sex"];
$d=$_POST["age"];
$e=$_POST["school"];
$f=$_POST["qq"];
$g=$_POST["itd"];
//把input中的name
if(!($a and $b and $c and $d and $e and $f and $g)){

    echo"<script>alert('请填写完整');history.go(-1);</script>";//判断变量名是否为空值

}else{

    $sqlstr1="insert into user values('".$a."','".$b."','".$c."',$d,'".$e."','".$f."','".$g."')";

    //执行sql   insert语句    把用post引用的变量接入到bookable中

    $result = mysqli_query($link,$sqlstr1);//承接结果集

    if($result){
        echo"<script>alert('添加成功');window.location.href='../../index.php';</script>";
    }else{

       echo"<script>alert('添加失败');window.location.href='usermsg.php';</script>";
    }
}
?>

