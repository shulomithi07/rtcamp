<?php


require_once('./vendor/autoload.php');

include 'connection.php';

if(isset($_GET['videoname']) and isset($_GET['format'])){

    $videoname = $_GET['videoname'];
    
    $getextension = explode(".",$videoname);

    // echo $getextension[0];

    $format = $_GET['format'];

    // echo $videoname."<br>";


    // echo $format;

//   use FFMpeg;

  $ffmpeg = FFMpeg\FFMpeg::create();


$path = 'uploads\output\\'.$videoname;

$outputpath ='uploads\\'.$getextension[0].".".$format;

// echo $outputpath."<br>";

// echo $path;

// $ffmpeg = FFMpeg\FFMpeg::create();
$video = $ffmpeg->open($path);
$video
    ->filters()
    ->resize(new FFMpeg\Coordinate\Dimension(320, 240))
    ->synchronize();
// $video
//     ->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(10))
//     ->save('frame.jpg');
if($format == 'ogg'){
    $video
    ->save(new FFMpeg\Format\Video\OGG(), $outputpath);
    ?>
        <a id= "videolink" href="<?php echo $outputpath;?>" download>
        <script>
            function myFunctin() {
            
                if (confirm("CLICK HERE TO DOWNLOAD THE VIDEO")) {
                    if(document.getElementById('videolink').click()){
                        location.replace("homepage.php");
                    }
                    
                } else {
                    alert("sorry something went wrong");
                }
            }

            myFunctin();

        </script>
    <?php
}else if($format == 'mp4'){
    $video
    ->save(new FFMpeg\Format\Video\X264(), $outputpath);
    ?>
        <a id= "videolink" href="<?php echo $outputpath;?>" download>
        <script>
            function myFunctin() {
            
                if (confirm("CLICK HERE TO DOWNLOAD THE VIDEO")) {
                    document.getElementById('videolink').click();
                    location.replace("homepage.php");
                } else {
                    alert("sorry something went wrong");
                }
            }

            myFunctin();

        </script>
    <?php
    }    
else if($format == 'webm'){
    $video
    ->save(new FFMpeg\Format\Video\WebM(), $outputpath);
    ?>
        <a id= "videolink" href="<?php echo $outputpath;?>" download>
        <script>
            function myFunctin() {
            
                if (confirm("CLICK HERE TO DOWNLOAD THE VIDEO")) {
                    document.getElementById('videolink').click();
                    location.replace("homepage.php");
                } else {
                    alert("sorry something went wrong");
                }
            }

            myFunctin();

        </script>
    <?php
    }
else{
    echo "Sorry we don't support other formats currently";
}

}

?>