<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>changepassword</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
   <main>
        <form class="form" method="post" type="submit" action="changepwd_ok.php">
            <div class="form__cover"></div>
            <div class="form__loader">
                <div class="spinner active">
                    <svg class="spinner__circular" viewBox="25 25 50 50">
                        <circle class="spinner__path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10"></circle>
                    </svg>
                </div>
            </div>
            <div class="form__content">
                <h1>修改密码</h1>
                <div class="styled-input"> <?php
                    session_start();
                    $a=$_SESSION['email'];
                    ?>
                    <input type="email" class="styled-input__input" name="email" value="<?php echo $a;?>">
                    <div class="styled-input__placeholder">

                        <span class="styled-input__placeholder-text">请输入你的邮箱</span>
                    </div>
                    <div class="styled-input__circle"></div>
                </div>
                <div class="styled-input">
                     <input type="password" class="styled-input__input" name="password">
                    <div class="styled-input__placeholder">
                        <span class="styled-input__placeholder-text">请输入你的旧密码</span>
                    </div>
                    <div class="styled-input__circle"></div>
                </div>
                <div class="styled-input">
                    <input type="password" class="styled-input__input" name="password1">
                    <div class="styled-input__placeholder">
                        <span class="styled-input__placeholder-text">请输入你的新密码</span>
                    </div>
                    <div class="styled-input__circle"></div>
                </div>
                <div class="styled-input">
                    <input type="password" class="styled-input__input" name="password2">
                    <div class="styled-input__placeholder">
                        <span class="styled-input__placeholder-text">请确认你的新密码</span>
                    </div>
                    <div class="styled-input__circle"></div>
                </div>
                <button type="submit" class="styled-button">
                    <span class="styled-button__real-text-holder">
                        <span class="styled-button__real-text">提交</span>
                        <span class="styled-button__moving-block face">
                            <span class="styled-button__text-holder">
                                <span class="styled-button__text">提交</span>
                            </span>
                        </span><span class="styled-button__moving-block back">
                            <span class="styled-button__text-holder">
                                <span class="styled-button__text">提交</span>
                            </span>
                        </span>
                    </span>
                </button>
            </div>

        </form>
    </main>
  
    <script  src="js/index.js"></script>

</body>

</html>
