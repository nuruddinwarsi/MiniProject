<?php
    $mysqli = new mysqli("localhost","root","password","miniproject");

    if($mysqli->connect_error){
        die("ERROR: ".$mysqli->connect_error);
    }