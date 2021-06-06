<?php

    // Including connection.php
    include 'connection.php';
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgotPassword</title>
    <style>
    
    /* The background and its alignment */
    body{
        background-image: url(images/cyan.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;

        color:antiquewhite;
        display:flex;
        justify-content:center;
        align-items:center;
    }

    /* The transparent container */
    .container{
        
        background: rgba( 0, 0, 0, 0.25 );
       
        backdrop-filter: blur( 0.0px );
        -webkit-backdrop-filter: blur( 0.0px );
        border-radius: 10px;
        border: 1px solid rgba( 255, 255, 255, 0.18 );
        width:80vw;
        height:80vh;
        display:flex;
        flex-direction:row;
        justify-content:space-around;
        align-items:center;
    }

    /* THe image div */
    .image{
        width:30vw;
        height:50vh;
    }

    /* THe form holding div */
    .right{
        background: rgba( 102, 252, 241, 0.30 );
        backdrop-filter: blur( 0.0px );
        -webkit-backdrop-filter: blur( 0.0px );
        border-radius: 10px;
        width:40vw;
        height:60vh;
        display:flex;
        justify-content:center;
        align-items: center;
        flex-direction:column;
        text-shadow: 0px 0px 0.5px #fff, 
               0px 0px 0.5px #fff;

    }

    /* The form tag */
    form{
        display:flex;
        justify-content:center;
        align-items: center;
        flex-direction:column;
        gap:2rem;
    }

    /* The input tag and its styling */
    input{
        
        background-color:#000;
        width:30vw;
        height:5vh;
        border-radius:2vw;
        outline:none;
        color:white;
        font-size:2vh;
    }

    /* THe anchor tag for know your password */
    a{
        color:#fff;
        text-decoration:none;
    }

    /* THe input placeholder */
    ::placeholder{
        color:#fff;
        font-size:2vh;
    }

    /* The submit button */
    input[type=submit]{
        color:#fff;
        width:10vw;
        font-size:2.5vh;
    }

    /* The know your password anchor tag */
    .know:hover{
        text-shadow: 0px 0px 0.5px #fff, 
               0px 0px  5px #fff;

    }

    /* THe know your password anchor tag for mobile devices */
    .hide{
        display:none;
    }

    
    /* For smaller devices */
    @media only screen and (max-width: 900px) and (min-width: 400px)  {
        
        body{
            display:flex;
            flex-direction:column;

        }
        
        /* The transparent container */
        .container{
            display:flex;
            justify-content:space-around;
            flex-direction:column-reverse;
            height:80vh;
        }

        /* The image container */
        .left{
            display:flex;
            justify-content:center;
            flex-direction:column;
            align-items:center;
        }

        /* The image tags class */
        .image{
            width:60vw;
            height:30vh;
        }

        /* The know your password link for responsive divs its hidden here */
        .Know{
            display:none;
        }

        /* The know your password for mobile devices it is shown here */
        .hide{
            display:block;
        }

        /* The know your password on hover */
        .hide:hover{
            text-shadow: 0px 0px 0.5px #fff, 
               0px 0px  5px #fff;
        }

        /* The form tags div */
        .right{
            width:60vw;
            height:50vh;
        }

        /* THe form tag and its alignment */
        form{
        gap:1rem;
        }

        /* The input tag and its background  */
        input{
        
            background-color:#000;
            width:40vw;
            height:4vh;
            border-radius:2vw;
            outline:none;
            color:white;
            font-size:2vh;
        }

        /* The submit button */
        input[type=submit]{
        color:#fff;
        width:20vw;
        font-size:2.5vh;
    }



    }   

    
    </style>
</head>
<body>


        <!-- The main container  -->
    <div class="container">
    
        <!-- The image container -->
        <div class="left">
        
            <img class="image" src="images\Forgot_password-rafiki.svg" alt="forgot-password">
            
            <!-- Hidden for mobile devices -->
            <a class="hide" href="login.php">Know your Password ?</a>
        </div>

        <!-- The form container -->
        <div class="right">

        <?php

            // If submit button is clicked
            if(isset($_POST['submit'])){

                $email = $_POST['email'];

                // Checking query
                $emailCheck = "SELECT * FROM users where email = '$email' and status = 'active'";

                // DATAbase is checked
                $check = mysqli_query($con,$emailCheck);

                // If the resultant set has rows greater than 0
                if(mysqli_num_rows($check)>0){

                    $loginDetails = mysqli_fetch_assoc($check);

                    // tokem from the database is taken
                    $token =  $loginDetails['token'];

                    $nickname = $loginDetails['nickname'];

                    // Mailing details are sent with token from the database
                    $to = $email;
                    $subject = "Password reset Link";
                    $txt = "Hello  {$nickname} Click here to reset your password
                    http://localhost:8080/rtcamp/resetPassword.php?token=".$token; 
                    
                    $headers = "From: shulomithi07@gmail.com";

                    // Mailing the data
                    $a  = mail($to,$subject,$txt,$headers);

                    // If mail sent then the session message is changed
                    if($a){

                        $_SESSION['msg'] = "Click the link in your email to reset your password {$email}";

                        echo $_SESSION['msg'];

                    }
                    // Else if mail didn't send 
                    else{
                        $_SESSION['msg'] = "Sorry there is something wrong with the mail";
                        
                        echo $_SESSION['msg'];
                    }

                }


            }


        ?>

            <!-- Form tag -->
          <h3>ENTER YOUR EMAIL ID</h3><br>
            <form action="" method="post">
            
                <input type="email" name="email" id="email" placeholder="Enter Your Email" required>
                <input type="submit" value="submit" name="submit">
            
            </form><br>
            <!-- REsponsive login anchor tag -->
            <a class="know" href="login.php">Know your Password ?</a>
        </div>

        
    </div>
</body>
</html>




