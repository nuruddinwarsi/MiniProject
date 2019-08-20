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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>MINIPROJECT</title>
</head>
<body>
    <div class="container">
    <div class="jumbotron">
    <h2>LOGIN FORM</h2>
        <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
        <div class="form-group">
            <label for="uname">Username</label>
            <input class="form-control" type="text" name="uname" placeholder="Enter username">
        </div>
        <div class="form-group">
            <label for="pw">Password</label>
            <input class="form-control" type="password" name="pw" placeholder="password">
        </div>
        <input type="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
   
    </div>
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
                    $_SESSION["uname"]=$row['uname'];
                    header("Location: adminpage.php");
                }else{
                    // echo "CUSTOMER";
                    $_SESSION["role"] = $row['role'];
                    $_SESSION["uname"]=$row['uname'];
                    $uid = $row['uid'];
                    header("Location: dashboard.php?uid=$uid");
                }
            }else{
                echo "LOGIN FAILED";
            }
        }else{
            echo "Invalid username or password";
        }
    }