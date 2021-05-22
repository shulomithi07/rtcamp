<?php

session_start();

include "connection.php";

require_once 'vendor/autoload.php';

if (empty($_FILES["file1"]["tmp_name"])){
    echo "Select File!";
}else{

    // $textt = $_SESSION['text'];
    if(empty($_POST['text'])){
        echo "write text";
    }
    else{
        // echo "no";

        $fileName = $_FILES["file1"]["name"]; // The file name
        $fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
        $fileType = $_FILES["file1"]["type"]; // The type of file it is
        $fileSize = $_FILES["file1"]["size"]; // File size in bytes
        $fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true
        if (!$fileTmpLoc) { // if file not chosen
            echo "ERROR: Please Check browse for a file before clicking the upload button.";
            exit();
        }
        
        
        // echo file_exists($outputFile);

        if(move_uploaded_file($fileTmpLoc, "uploads/$fileName")){
        
            $ffmpeg = FFMpeg\FFMpeg::create();
            $format = new FFMpeg\Format\Video\X264();
            $format->setAudioCodec("aac");
            $videoFile= 'uploads/'.$fileName;
            // $captionStaticFilePath=$_SERVER['DOCUMENT_ROOT'].'/';
            $outputFile='uploads/output/'.$fileName;
            $text = $_POST['text'];
            $command = "text='$text': fontfile=OpenSans-Regular.ttf: fontcolor=white: fontsize=50: box=1: boxcolor=black@0.7: boxborderw=5: x=(w-text_w): y=(h-text_h)-50:";
            
            try{
                    $video = $ffmpeg->open($videoFile);
                    $video->filters()->custom("drawtext=$command");
                    $video->save($format,$outputFile);
                    // die('done');
                    // echo "done";
            }catch(Exception $e){
                    echo $e->getMessage();die;
            }

                if(file_exists($outputFile)){

                    if(unlink($videoFile)){
                        ?>
                            <script>
                                alert("file Deleted");
                            </script>
                        <?php
                    }
                    // echo "$fileName upload is complete";

                    $destinationfile = 'uploads/output/'.$fileName;

                    // echo $destinationfile."<br>";

                    $email = $_SESSION['email'];
                    
                    // echo $email."<br>";

                    $checkquery = "SELECT id FROM videos where email = '$email' and video = '$destinationfile'";


                    $execute = mysqli_query($con,$checkquery);

                    $emailcount = mysqli_num_rows($execute);

                    // echo $emailcount;


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

        }
        else {
            echo "Something Happened Please try to upload again";
        }
    }
}
?>