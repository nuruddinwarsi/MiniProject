<?php
    session_start();
    require_once("connect.php");
    // echo $_SESSION['uname'];
    if(!isset($_SESSION["role"])){
        // echo "<script type='text/javascript'>alert('Please login first');</script>";
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
    <title>MINIPROJECT</title>
</head>
<body>
            <div class="container">
                <div class="jumbotron">
                    <h2>DASHBOARD</h2>
                    WELCOME 
                    <?php echo $_SESSION['uname'] ;
                        $uid =$_REQUEST["uid"];
                        $uname = $_SESSION["uname"];
                        $sql = "SELECT * FROM users WHERE uid=$uid";
                        $res = $mysqli->query($sql);
                        while($row = $res->fetch_array()){  
                    ?>
                    <a href="logout.php" class="btn btn-info">Logout</a>
                </div>
            </div>
            <div class="container">
                <div class="col-md-12">
                   <h2 class="text-center">USER INFORMATION</h2>
                   <div class="col-md-12">
                       <h3 class="text-center">BASIC</h3>
                       <div class="col-md-6">
                           <div class="col-md-6">
                               <p>ID</p>
                               <p>First Name</p>
                               <p>Last Name</p>
                               <p>Email</p>
                           </div>
                           <div class="col-md-6">
                               <p><?php echo $row['uid']?></p>
                               <p><?php echo $row['fname']?></p>
                               <p><?php echo $row['lname']?></p>
                               <p><?php echo $row['email']?></p>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="col-md-6">
                               <p>T-CODE</p>
                               <p>Phone no</p>
                               <p>Home Phone</p>
                           </div>
                           <div class="col-md-6">
                                <p><?php echo $row['tcode']?></p>
                                <p><?php echo $row['uname']?></p>
                                <p><?php echo $row['h_phone']?></p>
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
