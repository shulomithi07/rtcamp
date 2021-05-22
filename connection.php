<?php

    $username = "root";
    $password = "";
    $server = 'localhost';
    $database = 'project';


    $con = mysqli_connect($server,$username,$password,$database);

    if($con){
        // echo "Connection established";
        ?>
        <script>
            // alert("Connection Established");
        </script>

        <?php
    }
    else{
        // echo "NOT CONNECTED";
        die('NOT CONNECTED'. mysqli_connect_error());
    }

?>