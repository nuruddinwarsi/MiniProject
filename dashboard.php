<?php
    session_start();
    require_once("connect.php");
    if(!isset($_SESSION["role"])){
        header("Location: index.php");
    }
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
    <link rel="stylesheet" href="style.css">
    <title>MINIPROJECT</title>
</head>
<body>
            <div class="container jumbotron">
                <!-- <div class="jumbotron"> -->
                    <h1>DASHBOARD</h1>
                    <hr>
                    <strong> WELCOME 
                    <?php echo $_SESSION['uname'] ;
                        $uid =$_REQUEST["uid"];
                        $uname = $_SESSION["uname"];
                        // $sql = "SELECT * FROM users WHERE uid=$uid";
                        $sql = "SELECT * FROM users u INNER JOIN address a ON u.uid=a.uid AND u.uid=$uid";
                        $res = $mysqli->query($sql);
                        while($row = $res->fetch_assoc()){  
                    ?></strong>
                    <div class="btn-group pull-right" role="group">
                        <a href="adminpage.php"  class="btn btn-primary">Back</a>
                        <button disabled="disabled" class="btn btn-light">OR</button>
                        <a href="logout.php" class="btn btn-danger">Logout</a>
                    </div>
                   
                <!-- </div> -->
            </div>
            <div class="container jumbotron">
                <div class="col-md-12">
                   <h2 class="text-center">USER INFORMATION</h2>
                   <div class="col-md-12">
                       <h3 class="text-center">BASIC INFORMATION</h3>
                       <div class="col-md-6 mycontent-left">
                           <div class="col-md-6">
                               <h5>ID</h5>
                               <h5>First Name</h5>
                               <h5>Last Name</h5>
                               <h5>Email</h5>
                           </div>
                           <div class="col-md-6">
                               <h5><?php echo $row['uid']?></h5>
                               <h5><?php echo $row['fname']?></h5>
                               <h5><?php echo $row['lname']?></h5>
                               <h5><?php echo $row['email']?></h5>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="col-md-6">
                               <h5>T-CODE</h5>
                               <h5>Phone no</h5>
                               <h5>Home Phone</h5>
                           </div>
                           <div class="col-md-6">
                                <h5><?php echo $row['tcode']?></h5>
                                <h5><?php echo $row['uname']?></h5>
                                <h5><?php echo $row['h_phone']?></h5>
                           </div>
                       </div>
                       
                       <h3 class="text-center col-md-12">ADDRESS INFORMATION</h3>
                       <div class="col-md-12">
                            <div class="col-md-6 mycontent-left" id="primary">
                                <p class="text-center">Residential Address</p>
                                <div class="col-md-6">
                                    <h5>Housing location</h5>
                                    <h5>Street Address</h5>
                                    <h5>City</h5>
                                    <h5>State</h5>
                                    <h5>ZIP code</h5>                                
                                </div>
                                <div class="col-md-6">
                                   <h5><?php echo $row['building']?></h5>
                                   <h5><?php echo $row['street']?></h5>
                                   <h5><?php echo $row['city']?></h5>
                                   <h5><?php echo $row['state']?></h5>
                                   <h5><?php echo $row['zip']?></h5>
                                </div>
                            </div>
                            <div class="col-md-6" id="secondary">
                            <p class="text-center">Secondary Address</p>
                                <div class="col-md-6">
                                    <h5>Name</h5>
                                    <h5>Relationship</h5>
                                    <h5>Street Address</h5>
                                    <h5>City</h5>
                                    <h5>State</h5>
                                    <h5>ZIP</h5>
                                    <h5>Phone</h5>
                                    <h5>Email</h5>
                                </div>
                                <div class="col-md-6">
                                <h5><?php echo $row['sec_fname']." ".$row['sec_lname']?></h5>
                                <h5><?php echo $row['sec_reln']?></h5>
                                <h5><?php echo $row['sec_street']?></h5>
                                <h5><?php echo $row['sec_city']?></h5>
                                <h5><?php echo $row['sec_state']?></h5>
                                <h5><?php echo $row['sec_zip']?></h5>
                                <h5><?php echo $row['sec_phone']?></h5>
                                <h5><?php echo $row['sec_email']?></h5>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>                
            </div>
            <?php
            }
            ?>
</body>
</html>
