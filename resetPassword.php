<?php


    session_start();
    // Including connection and validation script password validation
    include 'connection.php';
    include 'scripts\validation.php';
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resetPassword</title>
    <style>
    
    /* image and its alignment */
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

    /* The whole container */
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

    /* The image width  */
    .image{
        width:30vw;
        height:50vh;
    }

    /* The password div */
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
        /* color:black; */
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

    /* Password input tags */
    input{
        
        background-color:#000;
        width:30vw;
        height:5vh;
        border-radius:2vw;
        outline:none;
        color:white;
        font-size:2vh;
    }

    /* The know your password link */
    a{
        color:#fff;
        text-decoration:none;
    }

    /* Input password placeholder */
    ::placeholder{
        color:#fff;
        font-size:2vh;
    }

    /* Submit button */
    input[type=submit]{
        color:#fff;
        width:10vw;
        font-size:2.5vh;
    }

    /* Know your password link */
    .know{
        font-size:1.2vw;
    }

    /* Know your password link on hover */
    .know:hover{
        text-shadow: 0px 0px 0.5px #fff, 
               0px 0px  5px #fff;

    }

    /* responsive know your password link for required areas */
    .hide{
        display:none;
    }

    /* For smaller devices */
    @media only screen and (max-width: 900px) and (min-width: 400px)  {
        
        body{
            display:flex;
            flex-direction:column;

        }
        /* THe tranparent box  */
        .container{
            display:flex;
        justify-content:space-around;
        flex-direction:column-reverse;
        height:80vh;
        }

        /* The image */
        .left{
            display:flex;
            justify-content:center;
            flex-direction:column;
            align-items:center;
        }

        /* The image class */
        .image{
        width:60vw;
        height:30vh;
        }

        /* Know your password link */
        .know{
            display:none;
        }

        /* The know your password for responsive pages */
        .hide{
            display:block;
        }

        /* Know your password on hover for mobile or tablets */
        .hide:hover{
            text-shadow: 0px 0px 0.5px #fff, 
               0px 0px  5px #fff;
        }

        /* The form div */
        .right{
            width:70vw;
            height:40vh;
            
        }

        /* The form tag for proper alignment */
        form{
            display:flex;
            justify-content:center;
            gap:2rem;
        }

        /* THe design of the input tags */
        input{
        
        background-color:#000;
        width:40vw;
        height:4vh;
        border-radius:2vw;
        outline:none;
        color:white;
        font-size:2vh;
        }

        /* The submit button design */
        input[type=submit]{
        color:#fff;
        width:20vw;
        font-size:2.5vh;
    }



    }   


    
    </style>
</head>
<body>
    
    <!-- The main container -->
    <div class="container">
        <!-- The image container -->
        <div class="left">
        
        <img class="image" src="images\Safe-pana.svg" alt="Safe-pana image">
        <a class="hide" href="login.php">Know your password?</a>
        </div>

        <!-- The form container -->
        <div class="right">
            <h3>Make Sure you remenber know :)</h3>
            <form action="" method="post">
            
            <input class="textfield" type="password" name="password" id="password" onkeyup='check();' placeholder="create new password" required>
            <input  class="textfield" type="password" name="confirm_password" id="confirm_password" placeholder="confirm password" onkeyup='check();' required>
            <span id='message'></span>
            <input type="submit" name="submit" value="submit">
            
            </form>
            <a class="know" href="login.php">Know your password?</a>
        </div>
    </div>
    <script>


</script>

</body>
</html>

<?php

// Taking the token from the URL
if(isset($_GET['token'])){

    $token = $_GET['token'];

    // echo $token;

}

// If the submit button is clicked
if(isset($_POST['submit'])){

    $password = $_POST['password'];

    // Encrypting the password
    $password_encrypt = password_hash($password,PASSWORD_BCRYPT);

    // The query to update the database
    $updatequery = "UPDATE `users` SET `password`='$password_encrypt' WHERE `token`='$token';";
    
    // Checking the database
    $dbquery = mysqli_query($con,$updatequery);

    // If query executed it'l redirect to login page with session message as below
    if($dbquery){

        if(isset($_SESSION['msg'])){
            $_SESSION['msg'] = "Your password is reset Please login!";
            ?>

                <script>
                
                    location.replace("login.php");
                
                </script>

            <?php
        }
        // If session message is not set the session message will be this
        else{
            $_SESSION['msg'] = "You're logged out!";
            ?>

                <script>
                
                    location.replace("login.php");
                
                </script>

            <?php
        }
    // If query didn't execute this message will be shown in the reset password page
    }
    else{
        $_SESSION['msg'] = "Something happened please try again!";
        ?>

            <meta http-equiv="refresh" content="1">

        <?php
    }


}




?>


