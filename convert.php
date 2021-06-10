<?php

session_start();

// ffmpeg file used to convert the given file
require_once('lib/vendor/autoload.php');

include 'connection.php';



// Taking videoname and format of the selected video from the URL
if(isset($_GET['videoname']) and isset($_GET['format'])){

    $videoname = $_GET['videoname'];

    $name = explode(".",$videoname);
    $getextension = explode("_",$name[0]);
    $format = $_GET['format'];
    $path = 'uploads\output\\'.$videoname;
    $outputpath ='uploads\\convert\\'.$getextension[1].".".$format;
    
    // Creating instance of the ffmpeg
    $ffmpeg = FFMpeg\FFMpeg::create();
    // opening the video file 
    $video = $ffmpeg->open($path);
    // adding dimensions to the output video
    $video
        ->filters()
        ->resize(new FFMpeg\Coordinate\Dimension(320, 240))
        ->synchronize();

    
    // Coverting to ogg
    if($format == 'ogg'){
        // Saving file to a location in the storage which will be deleted when user logs out
        $video
        ->save(new FFMpeg\Format\Video\OGG(), $outputpath);
        ?>
            <!-- Link to download the converted file -->
            <a id= "videolink" href="<?php echo $outputpath;?>" download>
            <script>
            // Function to download the converted file
                function download() {
                
                    // If the confirm box is clicked yes then video is downloaded
                    if (confirm("CLICK HERE TO DOWNLOAD THE VIDEO")) {
                        // dynamically clicking the link tag
                        document.getElementById('videolink').click();  // dynamicly clicking the dowload link     
                        location.replace("homepage.php");
                    } 
                    // If the user clicks cancle then directly redirecting to the homepage
                    else {
                        location.replace("homepage.php");
                        unlink($outputpath);
                    }
                }
                    

                download();

            </script>
        <?php

        // Converting to wmv
    }
    else if($format == 'wmv'){
        // Saving file to a location in the storage which will be deleted when user logs out
        $video
        ->save(new FFMpeg\Format\Video\WMV(), $outputpath);
        ?>
            <!-- Link to download the converted file -->
            <a id= "videolink" href="<?php echo $outputpath;?>" download>
            <script>
                // Function to download the converted file
                function download() {
                    
                    // If the confirm box is clicked yes then video is downloaded
                    if (confirm("CLICK HERE TO DOWNLOAD THE VIDEO")) {
                        // dynamically clicking the link tag
                        document.getElementById('videolink').click();
                        location.replace("homepage.php");    
                    }
                     // If the user clicks cancle then directly redirecting to the homepage 
                    else{
                        location.replace("homepage.php");
                        unlink($outputpath);
                            
                    }
                }


                download();
                
                
            </script>
            
        <?php
    
        // coverting to webm
    }    
        
    else if($format == 'webm'){
        $video
        ->save(new FFMpeg\Format\Video\WebM(), $outputpath);
        ?>
            <!-- Link to download the  -->
            <a id= "videolink" href="<?php echo $outputpath;?>" download>
            <script>
                // Function to download the mp3 to webmconverted file 
                function download() {
                
                    // If the confirm box is clicked yes then video is downloaded
                    if (confirm("CLICK HERE TO DOWNLOAD THE VIDEO")) {
                        // dynamically clicking the link tag
                        document.getElementById('videolink').click();
                        location.replace("homepage.php");
                        
                    } 
                    // If the user clicks cancel then directly redirecting to the homepage
                    else {
                        location.replace("homepage.php");
                        unlink($outputpath);
                    }
                }

                download();

            </script>
        <?php
    }
    else{
        echo "Sorry we don't support other formats currently";
    }

    
}

?>

                        
