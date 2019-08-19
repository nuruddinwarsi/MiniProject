
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MINIPROJECT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    
</body>
</html>
<?php
        require_once("connect.php");
        echo "<table class='table'>
                <tr>
                    <th>USERNAME</th>
                    <th>FNAME</th>
                    <th>LNAME</th>
                </tr>";           
       $sql = "SELECT * FROM users";
       $res = $mysqli->query($sql);
       while($row = $res->fetch_array()){
            echo "<tr>";
            echo "<td>$row[1]</td>";
            echo "<td>$row[5]</td>";
            echo "<td>$row[6]</td>";
            ?>
            <td><a href="dashboard.php?uid=<?php echo $row[0]?>" class="btn btn-primary">View</a> / 
            <a href="delete.php?uid=<?php echo $row[0]?>" class="btn btn-danger">Delete</a></td>
            <td></td>
            <?php
            echo "</tr>";
            }
       echo "</table>";
?>