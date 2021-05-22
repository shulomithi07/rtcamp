<?php

    session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIDEO ENCODING</title>
    <?php
    
        include "css/progressbarCSS.php";
        include "connection.php";
        include "links.php";
        include "css/dropdownCSS.php";
        include "css/homepageCSS.php";


        if(!isset($_SESSION['nickname'])){
            
            // echo "you are logged out";
            // ?>
            //         <script>

                        // alert("redirecting");

                        location.replace("login.php");

            //         </script>
            //        <?php
  
            // header('location:login.php');
        }

    
    
    ?>
    <script>
        function _(el){
        return document.getElementById(el);
        }
        
        function uploadFile(){
            
            var file = _("file1").files[0];
            file1 = document.getElementById("text1").value;
            // alert(file.name+" | "+file.size+" | "+file.type);
            var formdata = new FormData();  
            formdata.append("file1", file);
            formdata.append("text", file1);
            var ajax = new XMLHttpRequest();
            ajax.upload.addEventListener("progress", progressHandler, false);
            ajax.addEventListener("load", completeHandler, false);
            ajax.addEventListener("error", errorHandler, false);
            ajax.addEventListener("abort", abortHandler, false);
            ajax.open("POST", "upload.php");
            ajax.send(formdata);
        }
        function progressHandler(event){
            // _("loaded_n_total").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
            var percent = (event.loaded / event.total) * 100;
            _("progressBar").value = Math.round(percent);
            _("status").innerHTML = Math.round(percent)+"% uploaded... please wait while adding watermark";
        }
        function completeHandler(event){
            _("status").innerHTML = event.target.responseText;
            _("progressBar").value = 0;
        }
        function errorHandler(event){
            _("status").innerHTML = "Upload Failed";
        }
        function abortHandler(event){
            _("status").innerHTML = "Upload Aborted";
        }

        window.addEventListener('load', function(event){
            document.querySelectorAll(".inlineVideo").forEach((el1) => {
                el1.onplay = function(e){
                    // pause all the videos except the current.
                    document.querySelectorAll(".inlineVideo").forEach((el2) => {
                        if(el1 === el2)
                            el2.play();
                        else
                            el2.pause();
                    });
                }
            });
        });

        function openNav() {
        document.getElementById("myNav").style.width = "50%";
        }

        function closeNav() {
        document.getElementById("myNav").style.width = "0%";
        }

    </script>
</head>
<body>

    <nav>
    
        <!-- <div class="menu"> -->
            <a href="#home">HOME</a>
            <a href="#upload">UPLOAD</a>
            <a href="#videos">VIDEOS</a>
            <a href="#feedback">FEEDBACK</a>
            <a href="logout.php" >LOGOUT</a>
        <!-- </div> -->
    </nav>

    <span style="font-size:30px;cursor:pointer" class="openbtn" onclick="openNav()">&#9776; </span>
    <div class="navv">
        <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
                <a onclick="closeNav()" href="#home">HOME</a>
                <a onclick="closeNav()" href="#upload">UPLOAD</a>
                <a onclick="closeNav()" href="#videoo">VIDEOS</a>
                <a onclick="closeNav()" href="#feedback">FEEDBACK</a>
                <a onclick="closeNav()" href="logout.php">LOGOUT</a>
            </div>
        </div>
    </div>

    <div class="intro" id="home">
        <div class="greeting" >
        <h3 >hey</h3><h3><?php echo $_SESSION['nickname'] ?>!</h3>
        </div>
        <img class ="image" src="images/welcomee1.svg" alt="snap_the_moment">
    </div><br>

    
    <h2 class="heading" id="upload">UPLOAD VIDEO</h2><br>
    <div class="uploadd">
        <div class="upload" id="upload">
            <form id="upload_form" enctype="multipart/form-data" method="post">
            <div class="file-input">
                <input type="file" name="file1" id="file1" class="file1"><br><br>
                <input type="text" class="file1" name="textword" id="text1"placeholder="Write your watermark text here!"><br><br>
                <!-- <input type="text" name="text" id="text1" class="file1" placeholder="Write your watermark text here!"><br><br> -->
                <progress id="progressBar" value="0" max="100" style="width:300px;"></progress><br><br>
                <input class="btn" id="button" type="button" value="Upload" onclick="uploadFile()">
            </div>    
                <h3 id="status"></h3>
                <p id="loaded_n_total"></p>
            </form>
        </div >    
        <img class="image2" src="images/videoUpload.svg" alt="">
    </div>


    
    <!-- <h2 class="heading" id="videos">VIDEOS</h2> -->
    <div class="container">
    <h2 class="heading second" id="videos">VIDEOS</h2>

            <?php
            
            if (!isset($_SESSION['email']) || $_SESSION['email'] == ''){
                ?>

                    <script>

                        location.replace("login.php");
                    
                    </script>

                <?php
            }
                // echo "Hello";
                $email = $_SESSION['email'];

                $query = "SELECT video FROM videos where email = '$email'";

                $execute = mysqli_query($con,$query);

                $emailcount = mysqli_num_rows($execute);

                // echo $emailcount;

                if($emailcount>0){

                    $array = [];

                    ?>
                    <div class="videoo" id="videoo">
                        <?php

                        while($row = mysqli_fetch_assoc($execute)){
                        
                            $video = $row['video'];

                            array_push($array,$video);

                            $filetype = explode(".",$row['video']);

                            // echo $filetype[1];

                            $idnam = explode("/",$row['video']);

                            // print_r( $idnam);

                            $idname = $idnam[2];

                            // echo $idname;

                        ?>

                            <div class="row  <?php echo $idname; ?>">
                                <div class="video-container">
                                    
                                    <div class="dropdown">
                                    <button class="dropbtn hand"><i class="fa fa-hand-pointer-o dropbtn" aria-hidden="true"></i></button>
                                        <div class="dropdown-content">
                                            <a href="http://localhost:8080/rtcamp/convert.php?videoname=<?php echo $idname;?>&format=mp4">.mp4</a>
                                            <a href="http://localhost:8080/rtcamp/convert.php?videoname=<?php echo $idname;?>&format=ogg">.ogg</a>
                                            <a href="http://localhost:8080/rtcamp/convert.php?videoname=<?php echo $idname;?>&format=webm">.webm</a>
                                        </div>
                                    </div>
                                    <video width="320" height="240" controls playsinline class ="video inlineVideo" src="<?php echo $row['video']?>"type="<?php echo "video/{$filetype[1]}"?>"></video>
                                </div>
                            </div>
                        <?php
                        }?>

                    </div>
                    <?php
                    // print_r ($array);
                    ?>
                    </div>
                    <?php
                }
            
            ?>
    
    </div>

    <div class="top" id="feedback">
    <p><a href="mailto:shulomithi07@gmail.com">FEEDBACK</a></p>
    </div>
</body>
</html>