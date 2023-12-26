<?php
include_once ("../../conn.php");
session_start();
$a=$_SESSION['email'];
$sql1="SELECT * FROM user WHERE email ='$a' ";
$res=mysqli_query($link,$sql1);
$c=mysqli_fetch_array($res);
$sql2="SELECT * FROM borrow WHERE email ='$a'";
$res1=mysqli_query($link,$sql2);
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>用户中心</title>
    <meta name="theme-color" content="#ffc91d"/>
    <link rel="icon" href="static/img/32.png" sizes="32x32"/>
    <link rel="icon" href="static/img/192.png" sizes="192x192"/>
    <link href="static/kico.css" rel="stylesheet" type="text/css"/>
    <link href="static/paul.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1"/>
</head>
<body>
<aside class="sidebar">
    <div class="avatar">
        <img src="static/img/avatar.jpg" title="xya"/>
    </div>
    <nav class="nav">
        <a href="#info">资料</a>
        <a href="#skills">借阅记录</a>

    </nav>
</aside>
<main>
    <section id="info">
        <div class="wrap">
            <h2 class="title">用户资料</h2>
            <div class="row">
                <div class="col-l-4">

                    <p>姓名：<?php echo $c[1]?></p>
                    <p>性别：<?php echo $c[2]?></p>
                    <p>年龄：<?php echo $c[3]?></p>
                    <p>学校：<?php echo $c[4]?></p>
                </div>
                <div class="col-l-4">
                    <p>QQ：<?php echo $c[6]?></p>
                    <p>邮箱：<a href="<?php echo $c[0]?>"><?php echo $c[0]?></a></p>
                </div>
                <div class="col-l-4">
                    <p><?php echo $c[5]?></p>
                </div>
            </div>
        </div>
    </section>
    <section id="skills">
        <div class="wrap">
            <h2 class="title">借阅记录</h2>
            <div class="row scrollable">
                <?php
                while($d=mysqli_fetch_array($res1)){
                ?>
                <div class="col-s-6 col-m-4 center-fixed">
                    <div class="skills-icon">
                        <i class="fa fa-html5"></i>
                    </div>
                    <div class="skills-title">
                        <h3><?php echo $d[3]?></h3>
                        <p>借阅日期:<?php echo $d[2]?></p>
                        <p>归还日期:<?php echo $d[4]?></p>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </section>

    <footer>
        <p>© 2023 By <a href="@" title="徐粤安" target="_blank">徐粤安</a>.</p>
    </footer>
</main>

<script src="static/kico.js"></script>
<script src="static/paul.js"></script>

</body>
</html>