<?php

session_start();


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
    
    <div class="signup">

        <div class="left">
            <img id="image" src="images/authentication.svg" alt="welcome image">
            <h5 class="text">DON'T HAVE AN ACCOUNT?</h5><br>
            <h3><a href="signup.php">SIGNUP</a></h3>
        </div>
        
        <div class="right">
            <?php
                ?>
                
                <div class="top topp">
                <?php    
                if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                    }
                    else{
                        echo $_SESSION['msg'] = "login";
                    }
                    // echo $_SESSION['message'];
                ?>
                </div><br class="hide">
                <?php
            
            ?>
            <div class="top">Why late fill your details</div><br class="show">
            <div class="center">
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
                    <div class="first">
            
                        <input type="text" name="email" id="email" placeholder="email" required><br class="hide"><br class="hide"><br>
                        <input type="password" name="password" id="password" placeholder="password" required><br class="hide">
                    </div>

            </div>
                    <div class="bottom">
                        <input type="submit" name="submit" value="LOGIN">
                    </div>
        </div>
                </form>

    </div>

</body>
</html>


        <?php
        if(isset($_POST['submit'])){
    
            $email = $_POST['email'];
            $CheckPassword = $_POST['password'];


            if($email == "" || $CheckPassword == ""){
                ?>
                <script>
                    alert("Enter the requried fields");
                </script>
                <?php
            }
            else{
            
                $checkEmailQuery = "SELECT * FROM users WHERE email = '$email' and status ='active'";
                
                $querycheck = mysqli_query($con,$checkEmailQuery);
        
        
                // if(!empty($querycheck)){
        
        
            if (mysqli_num_rows(mysqli_query($con,$checkEmailQuery)) > 0) {
                    // there are results in $result
                    // } else {
                    //     // no results
                    // }
                    // if($querycheck = mysqli_query($con,$checkEmailQuery) &&mysqli_num_rows($querycheck)>0 ){
        
                    // echo $checkEmailQuery."<br>";
        
                    $loginDetails = mysqli_fetch_assoc($querycheck);
        
                    $userLoginPassword = $loginDetails['password'];
        
                    // $_SESSION['username'] = $loginDetails['username'];
                    $_SESSION['email'] = $loginDetails['email'];
                    $_SESSION['nickname'] = $loginDetails['nickname'];
        
                    // echo $_SESSION['email']."<br>".$_SESSION['email']."<br>".$_SESSION['nickname']."<br>";
        
                    $passwordCheck = password_verify($CheckPassword,$userLoginPassword);
        
                    if($passwordCheck){
                        ?>
        
                            <script>
        
                                location.replace("homepage.php");
        
                            </script>
        
                        <?php
                    }
                    else{
        
                        ?>
        
                        <script>
                        
                                alert ("Incorrect Password");
                        </script>
        
                        <?php
                    }
                }
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
    
