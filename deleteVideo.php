<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Video</title>
    <style>
    
    /* Background image and its alignment */
    body{
    
    background-image: url(images/background4.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;

    color:antiquewhite;
}

    
    </style>
</head>
<body>
    
</body>
</html>


<?php

    session_start();

    include "connection.php";

    // Getting the video name from the URL
    if(isset($_GET['videoname'])){

        $videoName = $_GET['videoname'];
        $getextension = explode(".",$videoName);

        $email = $_SESSION['email'];
        $path = "uploads/output/$videoName";
        $gif = "uploads/gif/".$getextension[0].".gif";
        $thumbnail = "uploads/gif/thumbnail/".$getextension[0].".jpg";
        
        // The query
        $delete = "DELETE  FROM `videos` WHERE email='$email' and video='$path'";
        
        // If the query is executed which means the reference for the video is deleted from the database.
        if(mysqli_query($con,$delete)){
        
            // deleted the video from the output folder gif from the gif folder and thumbnail from the thumbnail folder then refresh the pageS
            if(unlink($path)){
                if(unlink($gif)){
                    if(unlink($thumbnail)){
                        ?>
                            <script>
                            location.replace("homepage.php#videos");
                            alert("Sucessfully deleted");
                            </script>

                        <?php
                    }
                }
            }
        }
        // If video is not deleted then this alert is shown
        else{
            ?>
            <script>
            
                alert("Sorry something Happened, Please try again.")

            </script>
            <?php
        }
    }


?>