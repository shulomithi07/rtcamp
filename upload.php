<?php

    session_start();

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

    $email = $_SESSION['email'];

    if($s){

        $checkVideo = "SELECT * FROM videos where video='$destinationfile'";

        $videoquery = mysqli_query($con,$checkVideo);

        $exists = mysqli_num_rows($videoquery);

        // echo $exists;

        if($exists>0){
            echo 'Seems you already have this video Try an other one :)';
        }

        else{

            $videoinsert = "INSERT INTO videos (email,video) VALUES('$email','$destinationfile')";

            $query = mysqli_query($con,$videoinsert);
        
            if($query){
        
                echo "video uploaded<br>";
            }
        
            else{
        
                echo "not inserted";
            }
        }
    } 
    
    else {
        echo "error while processing file please upload file again.";
    }    
?>