<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add_book</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<div class="htmleaf-container">
    <div class="wrapper">
        <div class="container">
            <h1>AddBook</h1>

            <form class="form" method="post" action="addbook_ok.php" type="submit" target="iframe">
                <input type="text" placeholder="id"  name="id">
                <input type="text" placeholder="bookname"  name="name">
                <input type="text" placeholder="amount"  name="amount">
                <input type="text" placeholder="author"  name="author">
                <input type="text" placeholder="type"  name="type">
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

<script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>


</body>
</html>