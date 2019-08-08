<?php
    session_start();
    require_once("connect.php");
    session_destroy();
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MINIPROJECT</title>
</head>
<body>
    <h1>WELCOME TO MINIPROJECT</h1>
    <?php
    // <a href="signup.php">SIGNUP</a><br>

    ?>
    <a href="login.php">LOGIN</a>
</body>
</html>