<?php 
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $dbname = "shazada";
    $conn = new mysqli($servername, $username, $password, $dbname, 3306);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo " ";
    
    ?>