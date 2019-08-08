<?php
    require_once("connect.php");
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
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label for="uname">Username</label>
        <input type="text" name="uname" placeholder="Enter username"><br>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter email id"><br>
        <label for="pw">Password</label>
        <input type="password" name="pw" placeholder="Enter password"><br>
        <!-- <label for="pw2">Re-enter password</label>
        <input type="text" name="pw2" placeholder="Re-enter password"><br> -->
        <input type="submit" value="Sumbit">
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $uname=$_POST["uname"];
        $email=$_POST["email"];
        $pw=$_POST["pw"];

        // PASSWORD HASHING
        $hashed_pw=password_hash($pw,PASSWORD_DEFAULT);

        $sql = "INSERT INTO users(uname,email,pw) VALUES ('$uname','$email','$hashed_pw')";
        $result = $mysqli->query($sql);

        // $mysqli->close();

    }
