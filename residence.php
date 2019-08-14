<?php
    session_start();
    require_once("connect.php");
    if(!isset($_SESSION["role"]) || $_SESSION["role"]!="admin"){
        header("Location: index.php");
    }
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
    <h2>Address</h2>
</body>
</html>