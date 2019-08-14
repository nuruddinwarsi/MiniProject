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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="address.js"></script>
        <script type="text/javascript">
            $.ajax({
                url:'display.php',
                type:'POST',
                success:function(responsedata){
                    $('#response').html(responsedata);   
                }
            });  
        </script>
    <title>MINIPROJECT</title>
</head>
<body>

    <div class="container">
            <div class="jumbotron">
            <h2>ADMIN FORM</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <fieldset id="user">
                <legend>User Details</legend>
                <div class="form-group">
                <label for="uname">Username</label>
                <input class="form-control" type="text" name="uname" id="uname">
                </div>
                <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                <label for="pw">Password</label>
                <input type="password" name="pw" id="pw" class="form-control">
                </div>
                <div class="form-group">
                <label for="pw2">Reenter Password</label>
                <input type="password" name="pw2" id="pw2" class="form-control">
                </div>
                <div class="form-group">
                <label for="fname">First name</label>
                <input type="text" name="fname" id="fname" class="form-control">
                </div>
                <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname" class="form-control">
                </div>  
                <div class="form-group">                
                <label for="tcode">T-code</label>
                <input type="text" name="tcode" id="tcode" class="form-control">
                </div>
                <div class="form-group">
                <label for="h_phone">Enter Phone no</label>
                <input type="text" name="h_phone" id="h_phone" class="form-control">
                </div>
                <div class="form-group">
                <label for="role">Role</label>
                <input type="text" name="role" id="role" class="form-control">
                </div>
            </fieldset>
            <fieldset id="address">
                <legend>Address</legend>
                <div class="form-group">
                <label for="building">Building</label>
                <input type="text" name="building" class="form-control">
                </div> 
                <div class="form-group">
                <label for="street">Street</label>
                <input type="text" name="street" id="street" class="form-control">
                </div>
                <div class="form-group">
                <label for="city">City</label>
                <input type="text" name="city" id="city" class="form-control">
                </div>
                <div class="form-group">
                <label for="state">State</label>
                <input type="text" name="state" id="state" class="form-control">
                </div>
                <div class="form-group">
                <label for="zip">Zip code</label>
                <input type="text" name="zip"id="zip" class="form-control">
                </div>
            </fieldset>
            <fieldset id="secondary">
                <legend>Secondary Details</legend>
                <!-- <label for="sec_fname">sec fname</label>
                <input type="text" name="sec_fname" id="sec_fname"><br>
                <label for="sec_lname">sec lname</label>
                <input type="text" name="sec_lname" id="sec_lname"><br>
                <label for="sec_reln">sec reln</label>
                <input type="text" name="sec_reln" id="sec_reln"><br>
                <label for="sec_email">sec email</label>                
                <input type="text" name="sec_email" id="sec_email"><br>
                <label for="sec_phone">sec phone</label>
                <input type="text" name="sec_phone" id="sec_phone"><br> -->
                <input type="checkbox" name="check" id="check" onclick="load()">Check if secondary address is same as primary address<br>
                <div class="form-group">
                <label for="sec_street">sec street</label>
                <input type="text" name="sec_street" id="sec_street" class="form-control">
                </div>
                <div class="form-group">
                <label for="sec_city">sec city</label>
                <input type="text" name="sec_city" id="sec_city" class="form-control">
                </div>
                <div class="form-group">
                <label for="sec_state">sec state</label>
                <input type="text" name="sec_state" id="sec_state" class="form-control">
                </div>
                <div class="form-group">
                <label for="sec_zip">sec zip</label>                
                <input type="text" name="sec_zip" id="sec_zip" class="form-control">
                </div>
            </fieldset>
            <input type="submit" value="Submit" id="submit" class="btn btn-primary">
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </form>
            <hr>
            <div id="response">
            
            </div>
            </div>
    </div>
   
    
</body>
</html>

<?php
   

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        // USERS TABLE
        $uname =$_POST["uname"];
        $email = $_POST["email"];
        $pw = $_POST["pw"];
        $pw2 = $_POST["pw2"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $tcode = $_POST["tcode"];
        $h_phone = $_POST["h_phone"];
        $role = $_POST["role"];

        // ADDRESS TABLE
        $building = $_POST["building"];
        $street = $_POST["street"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $zip = $_POST["zip"];
        $sec_street = $_POST["sec_street"];
        $sec_city = $_POST["sec_city"];
        $sec_state = $_POST["sec_state"];
        $sec_zip = $_POST["sec_zip"];


        // SECONDARY TABLE
        // $sec_fname = $_POST["sec_fname"];
        // $sec_lname = $_POST["sec_lname"];
        // $sec_reln = $_POST["sec_reln"];
        // $sec_email = $_POST["sec_email"];
        // $sec_phone = $_POST["sec_phone"];

        // EMPTY VALLIDATION
        if(empty($uname) || empty($email) || empty($pw) || empty($fname) || empty($lname) || empty($tcode) 
        || empty($h_phone)|| empty($building)|| empty($street) || empty($city) || empty($state) || empty($zip)){
            echo "<script type='text/javascript'>alert('Please fill out all fields');</script>";
            die();
        }

        // NAME VALIDATION
        if(!preg_match("/^[0-9]{10}$/",$uname)){
            echo "<script type='text/javascript'>alert('Username must be a valid phone number');</script>";
            die();
        }else{
            // Check to verify if user already exists
            $takenResult = $mysqli->query("SELECT * FROM users WHERE uname='$uname'");
            if($takenResult->fetch_array() > 0){
                echo "<script type='text/javascript'>alert('Username already exists');</script>";
                die();
            }
        }
        
        // EMAIL VALIDATION
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "<script type='text/javascript'>alert('Enter valid email');</script>";
            die();
        }else{
            $takenResult = $mysqli->query("SELECT * FROM users WHERE email='$email'");
            if($takenResult->fetch_array() > 0){
                echo "<script type='text/javascript'>alert('Email already taken');</script>";
                die();
            }
        }

          // PASSWORD VALIDATION
          if(strlen($pw) < 8){
            echo "<script type='text/javascript'>alert('Password must be minimum 8 characters');</script>";
            die();
        }elseif($pw != $pw2){
            echo "<script type='text/javascript'>alert('Passwords do not match');</script>";
            die();
        }

        // FNAME VALIDATION
       if(strlen($fname) < 3){
            echo "<script type='text/javascript'>alert('Name must be minimum 3 characters');</script>";
            die();
        }

        // LNAME VALIDATION
        if(strlen($lname) < 3){
            echo "<script type='text/javascript'>alert('Name must be minimum 3 characters');</script>";
            die();
        }
        
        // TCODE VALIDATION
        if(empty($tcode)){
            echo "<script type='text/javascript'>alert('Tcode cant be empty');</script>";
            die();
        }

        // PHONE VALIDATION
        if(!preg_match("/^[0-9]{10}$/",$h_phone)){
            echo "<script type='text/javascript'>alert('Must be a valid phone number');</script>";
            die();
        }

        // ZIP VALIDATION
        if(!preg_match("/^[0-9]{6}$/",$zip)){
            echo "<script type='text/javascript'>alert('Enter Valid zip code');</script>";
            die();
        }
        


        // PASSWORD HASHING
        $hashed_pw=password_hash($pw,PASSWORD_DEFAULT);

        // QUERY
       $sql = "INSERT INTO users(uname,email,pw,role,fname,lname,tcode,h_phone) 
       VALUES ('$uname','$email','$hashed_pw','$role','$fname','$lname','$tcode','$h_phone')";

       $sql1 = "INSERT INTO address(uid,building,street,city,state,zip,sec_street,sec_city,sec_state,sec_zip) 
       VALUES(
        (SELECT uid FROM users WHERE uname='$uname'),
        '$building','$street','$city','$state','$zip','$sec_street','$sec_city','$sec_state','$sec_zip'
       )";

       $res = $mysqli->query($sql);
       $res1 = $mysqli->query($sql1);

       if($res && $res1){
            echo "<script type='text/javascript'>alert('SUCCESSFUL');</script>";
       }else{
            echo "<script type='text/javascript'>alert('FAILED');</script>";
       }
       
    }
    ?>