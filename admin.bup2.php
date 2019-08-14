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
    <meta name="viewport" content="width=device-wth, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <script type=text/javascript src="script.js"></script> -->
    <title>MINIPROJECT</title>
</head>
<body>
    <h2>ADMIN FORM</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <fieldset>
                <legend>User Details</legend>
                <label for="uname">Username</label>
                <input type="text" name="uname" id="uname"><br>
                <label for="email">Email</label>
                <input type="email" name="email" id="email"><br>
                <label for="pw">Password</label>
                <input type="password" name="pw" id="pw"><br>
                <label for="pw2">Reenter Password</label>
                <input type="password" name="pw2" id="pw2"><br>
                <label for="fname">First name</label>
                <input type="text" name="fname" id="fname"><br>
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname"><br>
                <label for="tcode">T-code</label>
                <input type="text" name="tcode" id="tcode"><br>
                <label for="h_phone">Enter Phone no</label>
                <input type="text" name="h_phone" id="h_phone"><br>
            </fieldset>
            <input type="submit" value="Submit" id="submit">
        </form>
</body>
</html>

<?php
    function checkInput($data){
        // $data = trim($data);
        // $data = stripslashes($data);
        // $data = htmlspecialchars($data);
        return $data;
    } 

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $uname = checkInput($_POST["uname"]);
        $email = checkInput($_POST["email"]);
        $pw = checkInput($_POST["pw"]);
        $pw2 = checkInput($_POST["pw2"]);
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $tcode = $_POST["tcode"];
        $h_phone = $_POST["h_phone"];


        // UNAME VALIDATION
        if(empty($uname)){
            die("Username cant be empty");
        }elseif(!preg_match("/^[0-9]{10}$/",$uname)){
            die("Username must be a valid phone no");
        }else{
            // Check to verify if user already exists
            $takenResult = $mysqli->query("SELECT * FROM users WHERE uname='$uname'");
            if($takenResult->fetch_array() > 0){
                die("Username already taken");
            }
        }

        // EMAIL VALIDATION
        if(empty($email)){
            die("Email cant be empty");
        }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            die("Email id must be valid");
        }else{
            $takenResult = $mysqli->query("SELECT * FROM users WHERE email='$email'");
            if($takenResult->fetch_array() > 0){
                die("Email already taken");
            }
        }

        // PASSWORD VALIDATION
        if(empty($pw)){
            die("Password cant be empty");
        }elseif(strlen($pw) < 8){
            die("Password must be minimum 8 characters");
        }elseif($pw != $pw2){
            die("Passwords do not match");
        }
        
        // NAME VALIDATION
        if(empty($fname) || empty($lname)){
            die("Name cant be empty");
        }elseif(strlen($fname) < 3 || strlen($lname) < 3){
            die("Minimum 3 characters");
        }
        // elseif(!preg_match("/^[a-zA-Z]$/",$fname)){
        //     die("3");
        // }

        // PASSWORD HASHING
        $hashed_pw=password_hash($pw,PASSWORD_DEFAULT);

        // QUERY
        $sql = "INSERT INTO users(uname,email,pw,fname,lname,tcode,h_phone) 
        VALUES ('$uname','$email','$hashed_pw','$fname','$lname','$tcode','$h_phone')";
        $mysqli->query($sql);
        header("Location: residence.php");

    }
   