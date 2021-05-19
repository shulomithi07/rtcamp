<?php

session_start();

include "connection.php";

if (empty($_FILES["file1"]["tmp_name"])){
    echo "Select File!";
}else{

    $fileName = $_FILES["file1"]["name"]; // The file name
    $fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
    $fileType = $_FILES["file1"]["type"]; // The type of file it is
    $fileSize = $_FILES["file1"]["size"]; // File size in bytes
    $fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true
    if (!$fileTmpLoc) { // if file not chosen
        echo "ERROR: Please Check browse for a file before clicking the upload button.";
        exit();
    }
    if(move_uploaded_file($fileTmpLoc, "uploads/$fileName")){
        echo "$fileName upload is complete";

        $destinationfile = 'uploads/'.$fileName;

        echo $destinationfile."<br>";

        $email = $_SESSION['email'];
        
        echo $email."<br>";

        $checkquery = "SELECT id FROM videos where email = '$email' and video = '$destinationfile'";


        $execute = mysqli_query($con,$checkquery);

        $emailcount = mysqli_num_rows($execute);

        echo $emailcount;


        if($emailcount>0){
            echo "You already have the video";
        }
        else{
            $videoinsert = "INSERT INTO videos (email,video) VALUES('$email','$destinationfile')";

            $query = mysqli_query($con,$videoinsert);

            if($query){
                echo "video inserted<br>";
                // header('Location: /'.$_SERVER["homepage.php"]);
?>
                <meta http-equiv="refresh" content="1">
 <?php
 //  -->
            }

            else{

                echo "not inserted";
            }
        }


    }
    else {
        echo "Something Happened Please try to upload again";
    }
}
?>