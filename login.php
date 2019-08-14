<?php
    require_once("connect.php");
    session_start();
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
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
        <label for="uname">Username</label>
        <input type="text" name="uname" placeholder="Enter username"><br>
        <label for="pw">Password</label>
        <input type="password" name="pw" placeholder="password"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
    

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $uname = $_POST["uname"];
        $pw = $_POST["pw"];

        $sql = "SELECT * FROM users where uname ='$uname'";
        
        $result = $mysqli->query($sql);
        // $users = $result->fetchAll();

        $row = $result->fetch_assoc();

        if($row){
            if(password_verify($pw,$row['pw'])){
                // echo "LOGIN SUCCESSFULL";
                if($row['role']=="admin"){
                    // echo "ADMIN";
                    $_SESSION["role"]=$row['role'];
                    header("Location: adminpage.php");
                }else{
                    // echo "CUSTOMER";
                    $_SESSION["role"] = $row['role'];
                    header("Location: dashboard.php");
                }
            }else{
                echo "LOGIN FAILED";
            }
        }else{
            echo "Invalid username or password";
        }
    }