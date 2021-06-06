<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    
        /* Adjusting image and its alignment */
        body{
            
            background-image: url(images/background4.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;

            color:antiquewhite;
        }

        /* The video holding container/div */
        #content{
            display:flex;
            flex-direction:column;
            width:100vw;
        }

        /* To reverse the clockwise icon to anticlockwise icon */
        #reverseButton{
            transform:scaleX(-1);
        }

         /*The width and height of the video for devices greater than 800px  */
        video{
            width:70vw;
            height:70vh;
        }
        


        /* The video width and height adjustment for the devices less than 800px */
        @media only screen and (max-width: 800px) {

            video{
                width:90vw;
                height:30vh;
            }
        }

    </style>
</head>
<body>
    
    <?php
    
    // Including links for the rotation icons
    include "links.php";

    // Getting the videoname from the URL
    if(isset($_GET['videoname'])){

        $videoName = $_GET['videoname'];
        $path = "uploads/output/$videoName";
    }
    
    
    
    ?>
 
        <!-- This is buttons div for clockwise and anti clockwise direction -->
        <div class="button">
        
            <button type="submit"  onclick="rotateAnti('<?php echo $videoName?>')" id="reverseButton"class="rotatebtn"><i class="fas fa-redo button"></i></button>
            <button type="submit"  onclick="rotateClock('<?php echo $videoName?>')" class="rotatebtn"><i class="fas fa-redo "></i></button>
        
        </div><br>
        <p id="br"></p> <br>   

        <!-- The video holding div -->
        <div id="content">
        
            <!-- The video tag is given an id of its own video name for easy access -->
            <video  controls playsinline class ="video inlineVideo" id="<?php echo $videoName;?>" @loadedmetadata="getVideoDimensions" >
            
                <source src="<?php echo $path;?>" type="video/mp4">
            </video>

        </div>
        
        
        <script>

            const mediaQuery = window.matchMedia('(max-width: 800px)')
            
            // Initializing the rotation for both the functions
            let rotation = 0;

            // The rotating function for clockwise direction
            function rotateClock(id) {
                rotation += 90; // add 90 degrees, you can change this as you want

                if (rotation === 360) { 
                        // 360 means rotate back to 0
                        rotation = 0;
                    }

                // If the device width is less than or equal to 800px;
                if (mediaQuery.matches) {
                    document.getElementById('br').innerHTML= '<br><br><br><br>';
                    document.getElementById(id).style.height ='30vh';
                    document.getElementById(id).style.width = '90vw';
                    
                }
                // If the device width is more than 800px
                else{

                    // As the video width and height are more the video is not visible on full length so decreasing the size of the video 
                    if ((rotation === 270) || (rotation === 90)) { 
                        document.getElementById('br').innerHTML= '<br><br><br><br><br>';
                        document.getElementById(id).style.height = '50vh';
                        document.getElementById(id).style.width = '50vw';
                 
                    }
                    // If the video is in the horizontal direction
                    else{
                        document.getElementById('br').innerHTML= '<br><br><br>';
                        document.getElementById(id).style.height = '70vh';
                        document.getElementById(id).style.width = '70vw';
                    }

                    
                }
            
                // Rotating the video on the button click in the clockwise direction
                document.getElementById(id).style.transform = `rotate(${rotation}deg)`;
            
            }


            // For the anticlockwise direction of the video when the anticlockwise button is clicked
            function rotateAnti(x) {

                // Storing the current rotation and updating it
                rotation -= 90; // deleting 90 degrees for anticlockwise direction
                console.log(rotation);

                // Changing the degree to help myself
                if (rotation === -360) { 
                    // 360 means rotate back to 0
                    rotation = 0;
                }

                // If the device width is less than 800px or eqaul to it
                if (mediaQuery.matches) {
                    
                    document.getElementById('br').innerHTML= '<br><br><br><br>';
                    document.getElementById('content').style.top = '50%';
                    document.getElementById(x).style.height ='30vh';
                    document.getElementById(x).style.width = '90vw';
                    
                }
                // If the device width is more than 800px
                else{

                    // As the video is large to adjust the height and the width of the video on vertical directions this if statement is used
                    if ((rotation === -90) || (rotation === -270) ) { 
                        document.getElementById('br').innerHTML= '<br><br><br><br>';
                        document.getElementById(x).style.height = '50vh';
                        document.getElementById(x).style.width = '50vw';
                    }
                    // If its not vertical then the normal size is used
                    else{
                        document.getElementById(x).style.height = '70vh';
                        document.getElementById(x).style.width = '70vw';
                    }
                }
            
                // Rotating video on the button click
                document.getElementById(x).style.transform = `rotate(${rotation}deg)`;
            
            
            }

            
            
  </script>
</body>
</html>
