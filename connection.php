<?php


    // Details of the databse
    $username = "root";
    $password = "";
    $server = 'localhost';
    $database = 'project';

    // Connecting to the databse
    $con = mysqli_connect($server,$username,$password,$database);

    if(!$con){
        die('NOT CONNECTED'. mysqli_connect_error());
        
    }
    

?>