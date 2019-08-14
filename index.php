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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/core.js" 
        integrity="sha256-36hEPcG8mKookfvUVvEqRkpdYV1unP6wvxIqbgdeVhk=" crossorigin="anonymous">
    </script>
    <title>MINIPROJECT</title>
</head>
<body>
    <h1>WELCOME TO MINIPROJECT</h1>
    <a href="login.php">LOGIN</a>
   <a href="jqueryVal.php">VAL</a>
</body>
</html>
