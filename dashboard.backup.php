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
        WELCOME <?php echo $_SESSION['uname'] ?>
        <a href="logout.php" class="btn btn-info">Logout</a>
        <?php
            $uid =$_REQUEST["uid"];
            $uname = $_SESSION["uname"];
            $sql = "SELECT * FROM users WHERE uid=$uid";
            $res = $mysqli->query($sql);
        ?>
        <table class='row' border=1>
            <tr>
                <th>UNAME</th>
                <th>EMAIL</th>
                <th>FNAME</th>
                <th>LNAME</th>
                <th>ROLE</th>
                <th>TCODE</th>
                <th>PHONE</th>
            </tr>
    <?php
        while($row = $res->fetch_array()){  
            echo "<tr scope='row'>
                    <td>$row[1]</td>
                    <td>$row[2]</td>
                    <td>$row[5]</td>
                    <td>$row[6]</td>
                    <td>$row[4]</td>
                    <td>$row[7]</td>
                    <td>$row[8]</td>
                </tr>";
        }
        echo "</div></div>";
    ?>
    </div>
    </div>
</body>
</html>
