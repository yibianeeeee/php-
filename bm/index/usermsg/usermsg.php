
<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usermsg</title>
    <link rel="stylesheet" type="text/css" href="../add-book/css/styles.css">
</head>
<body>
<div class="htmleaf-container">
    <div class="wrapper">
        <div class="container">
            <h1>个人信息</h1>

            <form class="form" method="post" action="user_msg.php" type="submit" target="iframe">
                <input type="text" placeholder="邮箱"  name="email">
                <input type="text" placeholder="用户名"  name="name">
                <input type="text" placeholder="性别"  name="sex">
                <input type="text" placeholder="年龄"  name="age">
                <input type="text" placeholder="学校"  name="school">
                <input type="text" placeholder="qq"  name="qq">
                <input type="text" placeholder="自我介绍"  name="itd">
                <button type="submit" id="login-button">Add</button>
            </form>
        </div>

        <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
</div>

<script src="../add-book/js/jquery-2.1.1.min.js" type="text/javascript"></script>


</body>
</html>
