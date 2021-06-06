<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    
        /* image and its placement */
        body{
            
            background-image: url("images/feedback.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            display:flex;
            justify-content:center;
            
        }

        /* The transparent container for form */
        .feedback{
            
            position:fixed;
            top:10%;
            background: rgba( 155, 155, 155, 0.15 );
            box-shadow: 0 8px 32px 0 rgba( 231, 238, 235, 0.37 );
            backdrop-filter: blur( 1px );
            -webkit-backdrop-filter: blur( 1px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
            width:70vw;
            height:70vh;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;  
            color:white;
            
        }

        /* The form div */
        .form{
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            width:40vw;
            height:60vh;
        }

        /* The form tag for proper alignment */
        form{
            display:flex;
            justify-content:center;
            align-content:center;
            flex-direction:column;
        }

        /* The name and the subject input tags */
        input{
            background: rgba( 255, 255, 255, 0.80 );
            box-shadow: 0 4px 2px 0 rgba( 231, 238, 235, 0.5 );
            backdrop-filter: blur( 5px );
            -webkit-backdrop-filter: blur( 0.5px );
            border-radius: 7px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
            width:30vw;
            height:3vh;
        }

        /* When the input tags are clicked */
        input:focus{
            color:white;
            background: rgba( 80, 227, 194, 0.60 );
            box-shadow: 0 4px 2px 0 rgba( 231, 238, 235, 0.37 );
            backdrop-filter: blur( 0.5px );
            -webkit-backdrop-filter: blur( 0.5px );
            border-radius: 10px;
            border: 3px solid rgba( 255, 255, 255, 0.18 );
            outline:none;
        }

        /* Input onclick placeholder */
        input:focus::placeholder{
            color:white;
        }

        /* TExt area with 40 words apporx styling */
        textarea{
            color:white;
            background: rgba( 80, 227, 194, 0.30 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 0.5px );
            -webkit-backdrop-filter: blur( 0.5px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
            width:30vw;
            height: 20vh;
            outline:none;
        }

        /* TextArea placeholder */
        textarea::placeholder{
            color:white;
            
        }

        /* TextArea on click */
        textarea:focus{
            color:white;
            box-shadow: 2px 4px 2px 2px rgba( 231, 238, 235, 0.37 );
            backdrop-filter: blur( 5px );
            -webkit-backdrop-filter: blur( 5px );
            
        }


        /* Send button */
        input[type=submit]{
                width:10vw;
                height:5vh;
                font-size:2vh;
            }

        
        /* The button div */
        .btn{
            display:flex;
            justify-self:center;
            align-self:center;
        }


        /* To adjust width of form for mobile devices */
        @media only screen and (max-width: 600px) {
            form{
                width:60vw;
            }

            input{
                width:60vw;
            }
            textarea{
                width:60vw;
            }

        }

        /* To adjust width of form for may be tablets I guess */
        @media only screen and (max-width: 900px) {
            form{
                width:60vw;
                display:flex;
                align-items:center;
            }

            input{
                width:40vw;
            }

            textarea{
                width:40vw;
            }
        }
    </style>
    <title>FEEDBACK</title>
</head>
<body>
    
        <!-- Form holding container -->
    <div class="feedback">
        <h4>YOUR FEEDBACK CAN IMPACT!</h4>
        <div class="form">
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">

                <div class="text"><input type="text" name="name" id="name" placeholder="name" required></div><br>
                <div class="text"><input type="text" name="subject" id="subject" placeholder="subject" required></div><br>
                <div><textarea name="message" id="" cols="30" rows="10" placeholder="Your feedback" maxlenght="300" required></textarea></div><br><br>
                <div class="btn"><input type="submit" name="submit" value="send"></div>
            </form>
        </div>
        
    </div>
</body>
</html>


<?php


        // If submit is clicked
        if(isset($_POST['submit'])){

                
                // Basically I'm sending mail to myself with user given details as i dont have any other mail id
                $to = "shulomithi07@gmail.com";
                $subject = "videooo encoding challenging".$_POST['subject'];
                $name = $_POST['name'];
                $message = "from video encoding challenge {$name} ".$_POST['message'];
                
                
                $headers = "From: shulomithi07@gmail.com";

                // All the above details to the mail function in php
                
                $a  = mail($to,$subject,$message,$headers);

                // If mail sent then Then the alert and the location is redirected to homepage
                if($a){

                    ?>
                     <script>

                        alert("email sent! :)")                            

                        location.replace("homepage.php");
                        
                     </script>

                     <?php
                    
                }
                // Else an alter to inform that mail is not sent
                else{
                    ?>
                    <script>
                        alert("There might be an issue with the mail server try again some time later");
                    </script>

                    <?php
                }

        }

?>