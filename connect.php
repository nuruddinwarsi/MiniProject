<?php
    $mysqli = new mysqli("localhost","root","","miniproject");

    if($mysqli->connect_error){
        die("ERROR: ".$mysqli->connect_error);
    }