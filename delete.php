<?php
    require('connect.php');
    $uid=$_REQUEST['uid'];
    $sql = "DELETE FROM users WHERE uid=$uid";
    $result = $mysqli->query($sql);
    if($result){
        header("Location: adminpage.php"); 
    }else{
        echo "<script>";
        echo 'alert("Failed to delete");';
       echo "</script>";
    }
?>