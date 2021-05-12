<?php

    include 'connection.php';

    $file = $_FILES['file'];
    // echo "<pre>";

    // print_r ($file);

    // echo "<pre>";

    $fileName = $file['name']; // The file name
    $filepath = $file['tmp_name']; // File in the PHP tmp folder
    $fileType = $file['type']; // The type of file it is
    $fileSize = $file['size']; // File size in bytes
    $fileErrorMsg = $file['error']; // 0 for false... and 1 for true
    if (!$filepath) { // if file not chosen
        echo "ERROR: Please browse for a file before clicking the upload button.";
        exit();
    }

    $destinationfile = 'uploads/'.$fileName;
    // echo $destinationfile;

    $s = move_uploaded_file($filepath,$destinationfile);

    if($s){
    ?>    
        <script>
            alert("tada Uploaded!");

            // location.replace("form.php");
        </script>
    
    <?php
    
        } else {
        echo "move_uploaded_file function failed";
    }


    // $videoinsert = "INSERT INTO videos (email,video) VALUES('$email','$destinationfile')";

    // $query = mysqli_query($con,$videoinsert);

    // if($query){

    //     // echo "video inserted<br>";
    
    //         <script>
    //             alert("tada Uploaded!");

    //             location.replace("form.php");
    //         </script>
    //     <?php
    // }

    // else{

    //     echo "not inserted";
    // }
?>