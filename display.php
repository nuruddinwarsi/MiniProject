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