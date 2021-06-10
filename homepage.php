<?php

    session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>VIDEO ENCODING</title>

    
    <?php
    

        //  Including all the files from other folders

        include "css/progressbarCSS.php";
        include "connection.php";
        include "links.php";
        include "css/dropdownCSS.php";
        include "css/homepageCSS.php";



        // If the nickname is not set which means when there is an issue finding the nickname 
        // User is redirected to login page

        if(!isset($_SESSION['nickname'])){
            
             ?>
                    <script>

                        location.replace("login.php");

                    </script>
            <?php
            
        }

    
    
    ?>
    <script>

        
        function _(el){
        return document.getElementById(el);
        }
        
        // This function is used to send the file and the watermark details to the upload.php file with Ajax call.
        function uploadFile(){
            
            var file = _("file1").files[0];
            file1 = document.getElementById("text1").value;
            file2 = document.getElementById("text2").value;
            // alert(file.name+" | "+file.size+" | "+file.type);
            var formdata = new FormData();  
            formdata.append("file1", file);
            formdata.append("text", file1);
            formdata.append("size", file2);
            var ajax = new XMLHttpRequest();
            ajax.upload.addEventListener("progress", progressHandler, false);
            ajax.addEventListener("load", completeHandler, false);
            ajax.addEventListener("error", errorHandler, false);
            ajax.addEventListener("abort", abortHandler, false);
            ajax.open("POST", "upload.php");
            ajax.send(formdata);
        }
        // To show the continuous process of the uploading files to the upload.php file
        function progressHandler(event){
            // _("loaded_n_total").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
            var percent = (event.loaded / event.total) * 100;
            _("progressBar").value = Math.round(percent);
            _("status").innerHTML = Math.round(percent)+"% uploaded... please wait while adding watermark";
            var progress = document.getElementById("progressBar").value;
            console.log(progress);
            if(progress == 100){
                document.getElementById("spin").style.display = "inline";
            }
        }
        // When The there is response after the ajax call it is shown on the homepage in the status h3 tag
        function completeHandler(event){
            _("status").innerHTML = event.target.responseText;
            _("progressBar").value = 0;
            var progress = document.getElementById("progressBar").value;
            console.log(progress);
            if(progress == 0){
                document.getElementById("spin").style.display = "none";
            }
        }
        // If Error occurs The upload Failed message is shown
        function errorHandler(event){
            _("status").innerHTML = "Upload Failed";
        }
        // If the upload process is aborted this message is shown
        function abortHandler(event){
            _("status").innerHTML = "Upload Aborted";
        }


        // So this function is to stop playing of two videos simultaneously at the same time. Due to this function one video stops if other video starts playing.
        window.addEventListener('load', function(event){
            document.querySelectorAll(".inlineVideo").forEach((el1) => {
                el1.onplay = function(e){
                    // pause all the videos except the current.
                    document.querySelectorAll(".inlineVideo").forEach((el2) => {
                        if(el1 === el2)
                            el2.play();
                            
                        else{
                            el2.pause();
                            
                            
                        }
                            
                    });
                }

                // Reloading the function after the video is ended
                el1.onended = function(e) {
                    
                    el1.load();
                
                };
            });
        });

        // This function is for responsive menu button only opens when a certain viewport is hit
        function openNav() {
        document.getElementById("myNav").style.width = "50%";
        }

        // Close the opened menu bar
        function closeNav() {
        document.getElementById("myNav").style.width = "0%";
        }


    </script>
</head>
<body>

    <nav>
    
        <!-- Nav bar for higher viewports like from 1200px -->
            <a href="#home">HOME</a>
            <a href="#upload">UPLOAD</a>
            <a href="#videos">VIDEOS</a>
            <a href="feedback.php">FEEDBACK</a>
            <a href="logout.php" >LOGOUT</a>
    </nav>

        <!-- The menu bar for lower viewports below 800px -->
    <span style="font-size:30px;cursor:pointer" class="openbtn" onclick="openNav()">&#9776; </span>
    <div class="navv">
        <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
                <a onclick="closeNav()" href="#home">HOME</a>
                <a onclick="closeNav()" href="#upload">UPLOAD</a>
                <a onclick="closeNav()" href="#videoo">VIDEOS</a>
                <a onclick="closeNav()" href="feedback.php">FEEDBACK</a>
                <a onclick="closeNav()" href="logout.php">LOGOUT</a>
            </div>
        </div>
    </div>

    <!-- The first block where user name and an image is shown -->
    <div class="intro" id="home">
        <div class="greeting" >
        <h3 >hey</h3><h3><?php echo $_SESSION['nickname'] ?>!</h3>
        </div>
        <img class ="image" src="images/welcomee1.svg" alt="snap_the_moment">
    </div><br>

    
    <!-- The 2nd block where upload form and an image is shown -->
    <h2 class="heading" id="upload">UPLOAD VIDEO</h2><br>
    <div class="uploadd">

        <div class="upload" id="upload">

            <!-- Form tag -->
            <form id="upload_form" enctype="multipart/form-data" method="post">

            <div class="file-input">

                <!-- Input file text and the font size in pixels are taken as input -->
                <input type="file" name="file1" id="file1" class="file1"><br><br>
            
                <input type="text" class="file1" name="textword" id="text1"placeholder="Write your watermark text here!"><br><br>
            
                <input type="number" class="file1" name="size" id="text2"placeholder="Size of watermark in pixels"><br><br>
                <!-- Process bar to show the process of the video upload -->
                <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
                <span id="spin"><img src="images/spin.gif" alt="hourGlass"></span>
                <br><br>
            
                <!-- Upload function is called when the button is clicked -->
                <input class="btn" id="button" type="button" value="Upload" onclick="uploadFile()">
            </div>    
                <!-- Shows the % of the data uploaded -->
                <h3 id="status"></h3>
            
                <p id="loaded_n_total"></p>
            </form>
        </div >    
        <img class="image2" src="images/videoUpload.svg" alt="">
    </div>

    
    <!-- The  Video tag from the menu which can be clicked to come to the video section-->
    <div class="container">
        <h2 class="heading second" id="videos">VIDEOS</h2>

            <?php
            
            // If Error happens with the email if it is not stored in $_SESSION['email] it will redirect to login page.
            if (!isset($_SESSION['email']) || $_SESSION['email'] == ''){
                ?>

                    <script>

                        location.replace("login.php");
                    
                    </script>

                <?php
            }
                // The third 'video block' videos from the database are queried and shown in this block
                $email = $_SESSION['email'];

                $query = "SELECT video,gif,thumbnail FROM videos where email = '$email'";

                $execute = mysqli_query($con,$query);

                $emailcount = mysqli_num_rows($execute);

                // if There exists videos with the email matching that are stored in $emailcount. if >0 videos are fetched and displayed

                if($emailcount>0){

                    $array = [];

                    ?>
                    <div class="videoo" id="videoo">
                        <?php

                        // Fetching video details from the database like name gif and thumbnail details
                        while($row = mysqli_fetch_assoc($execute)){
                        
                            $video = $row['video'];
                            array_push($array,$video);
                            $filetype = explode(".",$row['video']);
                            $idnam = explode("/",$row['video']);                            
                            $idname = $idnam[2];        
                            $forThumbnail = explode(".",$idname);
                            $thumb = $forThumbnail[0];

                        ?>
                            <!-- The video container with the video name as id -->
                            <div class="row  <?php echo $idname; ?>">
                                <div class="video-container">
                                    
                                    <div class="dropdown">
                                    <!-- The hand symbol -->
                                    <button class="dropbtn hand"><i class="fa fa-hand-pointer-o dropbtn" aria-hidden="true"></i></button>
                                        <!-- The dropdown container -->
                                        <div class="dropdown-content">
                                            <a href="http://localhost:8080/rtcamp/convert.php?videoname=<?php echo $idname;?>&format=wmv">.wmv</a>
                                            <a href="http://localhost:8080/rtcamp/convert.php?videoname=<?php echo $idname;?>&format=ogg">.ogg</a>
                                            <a href="http://localhost:8080/rtcamp/convert.php?videoname=<?php echo $idname;?>&format=webm">.webm</a>
                                            <a href="http://localhost:8080/rtcamp/rotate.php?videoname=<?php echo $idname;?>">rotate</a>
                                            <a href="http://localhost:8080/rtcamp/deleteVideo.php?videoname=<?php echo $idname;?>">delete</a>
                                        </div>
                                    </div>
                                    <video width="320" height="240" controls playsinline class ="video inlineVideo" id="<?php echo $idname;?>" onmouseover="mousein('<?php echo $thumb?>')"  onmouseout="mouseout('<?php echo $thumb?>')" poster=<?php echo "uploads/gif/thumbnail/".$thumb.".jpg"; ?> >
                                    
                                   
                                    <source src="<?php echo $row['video']?>" type="video/mp4">
                                    </video>
                                    
                                </div>
                            </div>

                            <!-- THe mouse in and mouse out events on the videos tag for the thumbnail to play like a gif  -->
                            <script>
                                
                                // When mouse is function is called the gif is played
                                function mousein(x) {
                                    
                                    var str2 = ".mp4";
                                    var res = x.concat(str2);
                                    var posterr = "uploads/gif/"+x+".gif" ;
                                    document.getElementById(res).poster = posterr;
                                }

                                // When the mouse out function is called the static image is shown 
                                function mouseout(x) {

                                    var str2 = ".mp4";
                                    var res = x.concat(str2);
                                    var posterr = "uploads/gif/thumbnail/"+x+".jpg" ;
                                    document.getElementById(res).poster = posterr;
                                }
                            
                            </script>
                        <?php
                        }
                        ?>
                    </div>
                    <?php
                }
            
            ?>
    
    </div>

    <!-- The fourth feedback section where user is redirected to their mail inbox with my mail-id as to addresss.  -->

    <div class="top" id="feedback">
    <p><a href="mailto:shulomithi07@gmail.com">FEEDBACK</a></p>
    </div>
</body>
</html>