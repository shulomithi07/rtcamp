<?php

session_start();

// including the connection and login css
include 'connection.php';
include 'css/loginCSS.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>

</head>
<body>
    
    <!-- total container -->
    <div class="signup">

        <!-- image holding div -->
        <div class="left">
            <img id="image" src="images/Personal_email.svg" alt="welcome image">
            <h5 class="text">DON'T HAVE AN ACCOUNT?</h5><br>
            <h3><a href="signup.php">SIGNUP</a></h3>
        </div>
        
        <!-- The form and the session messages container -->
        <div class="right">
            <?php
                ?>
                <!-- Including session message if session message is set else login is printed -->
                <div class="top topp">
                    <?php    
                    if(isset($_SESSION['msg'])){
                            echo $_SESSION['msg'];
                        }
                        else{
                            echo $_SESSION['msg'] = "LOGIN";
                        }
                    
                    ?>
                </div>
                    <?php
            
            ?>
            
            <!-- text f=holding div -->
            <div class="top">Why late fill your details</div><br class="show"><br>
            
            <!-- form holding div -->
            <div class="center">
                        <!-- form -->
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
                    <div class="first">
                        
                        <!-- input fields email and password -->
                        <input type="email" name="email" id="email" placeholder="email" required><br class="hide"><br class="hide"><br>
                        <input type="password" name="password" id="password" placeholder="password" required><br class="hide">
                    </div><br>

            
                        <input class="top btn" type="submit" name="submit" value="LOGIN">
                        <!-- link to forgot password -->
                        <a class="forgot" href="forgotPassword.php">forgot Password?</a> 
            </div>
        </div>
                </form>

                

    </div>

</body>
</html>


        <?php
        // if submit button is clicked this is triggered
        if(isset($_POST['submit'])){
    
            // taking email and password from user submitted form
            $email = $_POST['email'];
            $CheckPassword = $_POST['password'];

            // Checking if user inputs are empty or not
            if($email == "" || $CheckPassword == ""){
                ?>
                <script>
                    alert("Enter the requried fields");
                </script>
                <?php
            }
            else{
                // if not empty checked with the database with the below query
                $checkEmailQuery = "SELECT * FROM users WHERE email = '$email' and status ='active'";
                
                // Checking the database
                $querycheck = mysqli_query($con,$checkEmailQuery);
        
            // If the result set retured more than 0 rows
            if (mysqli_num_rows(mysqli_query($con,$checkEmailQuery)) > 0) {
        
                    // Fetching details from the database
                    $loginDetails = mysqli_fetch_assoc($querycheck);

                    // password email nickname fething from database
                    $userLoginPassword = $loginDetails['password'];
                    $_SESSION['email'] = $loginDetails['email'];
                    $_SESSION['nickname'] = $loginDetails['nickname'];
        
                    // As the password is hashed verifying password with password_verify
                    $passwordCheck = password_verify($CheckPassword,$userLoginPassword);
        
                    // If password verified redirected to homepage
                    if($passwordCheck){
                        ?>
        
                            <script>
        
                                location.replace("homepage.php");
        
                            </script>
        
                        <?php
                    }
                    // else alerts as incorrect password
                    else{
                        
                        ?>
        
                        <script>
                        
                                alert ("Incorrect Password");
                        </script>
        
                        <?php
                    }
                }
                // If email doesn't exists in the database alerts email doesn't exist
                else{
                    ?>
        
                        <script>
        
                            alert("Email doesn't exists, Try TO Sign Up");
                        </script>
        
                    <?php
                }
            }
        
        }
        
        ?>
    
