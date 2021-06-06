<?php

session_start();

include "connection.php";

// INcluding the ffmpeg autoload for functioning
require_once 'vendor/autoload.php';

// If the user didn't select anyfile and clicked submit 
if (empty($_FILES["file1"]["tmp_name"])){
    echo "Select File!";
}
// else inside this block
else{

    // If THe text is empty
    if(empty($_POST['text'])){
        
        echo "write text";
    }
    // If the text is not empty
    else{
        
        // Getting the video files details
        $fileName = $_FILES["file1"]["name"]; // The file name
        $fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
        $fileType = $_FILES["file1"]["type"]; // The type of file it is
        $fileSize = $_FILES["file1"]["size"]; // File size in bytes
        $fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true
        if (!$fileTmpLoc) { // if file not chosen
            echo "ERROR: Please Check browse for a file before clicking the upload button.";
            exit();
        }

        // Moving the file from temporary folder to local folder
        if(move_uploaded_file($fileTmpLoc, "uploads/$fileName")){
        
            // Storing the extension and all the other details from the file
            $extention = explode(".",$fileName);

            // Creating ffmpeg instance
            $ffmpeg = FFMpeg\FFMpeg::create();
            // format of the file to be stored in
            $format = new FFMpeg\Format\Video\X264();
            $format->setAudioCodec("aac");

            // location of the input file
            $videoFile= 'uploads/'.$fileName;
            
            // Thumbnail gif location
            $gif = 'uploads/gif/'.$extention[0].'.'.'gif';
            
            // Where to store the converted mp4 files in the local storage
            $outputFile='uploads/output/'.$extention[0].'.'.'mp4';
            
            // User given text from the form
            $text = $_POST['text'];

            // The static image for thumbnail when user doesn't hover
            $thumbnail = "uploads/gif/thumbnail/".$extention[0].'.'.'jpg';
            
            // For database to store  in this format
            $destinationfile = 'uploads/output/'.$extention[0].'.'.'mp4';
            
            $email = $_SESSION['email'];
            
            // Query to insert into databse
            $checkquery = "SELECT id FROM videos where email = '$email' and video = '$destinationfile'";
            
            // execute the query
            $execute = mysqli_query($con,$checkquery);
            
            // Counting the number of rows in the resultant set
            $emailcount = mysqli_num_rows($execute);

            // If resultant set has rows greater than 0
            if($emailcount>0){
                echo "You already have the video";

                // residual files removing
                if(file_exists($videoFile)){
                    unlink($videoFile);
                }
                // refresh the page 
                ?>
                    <meta http-equiv="refresh" content="1">
                <?php
                
            }
            // If the file doesn't exists in the database the process is done
            else{

                // THe font size check if user gives well and good
                if(!empty($_POST['size'])){
                    $size = $_POST['size'];                    
                    $command = "text='$text': fontfile=OpenSans-Regular.ttf: fontcolor=white: fontsize=$size: box=1: boxcolor=black@0.7: boxborderw=5: x=(w-text_w): y=(h-text_h)-50:";
                }
                // Else the standard size of 40px is assigned
                else{
                    $command = "text='$text': fontfile=OpenSans-Regular.ttf: fontcolor=white: fontsize=40: box=1: boxcolor=black@0.7: boxborderw=5: x=(w-text_w): y=(h-text_h)-50:";
                }

                // Using the try catch block to do watermarking and gif and static jpg image
                try{
                        $video = $ffmpeg->open($videoFile);
                        $video->filters()->custom("drawtext=$command");
                        $video->save($format,$outputFile);
                        $video
                        ->gif(FFMpeg\Coordinate\TimeCode::fromSeconds(2), new FFMpeg\Coordinate\Dimension(320, 240), 3)
                        ->save($gif);
                        
                        $frame = $video->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(1));
                        $frame->filters()->custom("scale=320x240");
                        
                               $frame ->save($thumbnail);
                        
                }catch(Exception $e){
                        echo $e->getMessage();die;
                }

                // If the above try catch block is executed file is in the output destination
                if(file_exists($outputFile)){

                    // THen removing the earlier stored file in other location which doesn't have a watermark on it
                    unlink($videoFile);

                    // AS the file is in the output destination know the file is inserted into the database the below query does that
                    $videoinsert = "INSERT INTO videos (email,video,gif,thumbnail) VALUES('$email','$destinationfile','$gif','$thumbnail')";
                    
                    // THe  executing query
                    $query = mysqli_query($con,$videoinsert);
                    
                    // If query executes
                    if($query){
                        echo "video inserted<br>";
                    ?>
                        <meta http-equiv="refresh" content="1">
                    <?php
                    }
                    else{
                       echo "not inserted";
                    }
                }
            }

        }
        // If the file is not moved into local storage from the temporary folder
        else {
            echo "Something Happened Please try to upload again";
        }
    }
}

?>

