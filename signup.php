<?php

    // session starting
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>

    <?php include 'links.php'?>
    <?php include 'scripts/validation.php'?>
    <?php include 'connection.php' ?>
    <?php include 'css/signupCSS.php'?>
    
</head>
<body>
    
    <!-- The main container -->
    <div class="signup">
    
        <!-- The left container for image and login link -->
        <div class="left">
            
            
            <img id="image" src="images/Girl.svg" alt="welcome image">
            <h5>HAVE AN ACCOUNT?</h5><br><br class="hide"><br>
            <h3><a id="top" href="login.php">LOGIN</a></h3><br>
            <h1 class="apply"></h1>
        </div>

    <!-- The right container for form and the text messages -->
        <div class="right">
            <div class="top">Why late fill your details</div><br>
            <!-- The form tag -->
            <div class="center">
                
                <form  id="myForm" method="post">
                    <!-- The div for name and nickname -->
                    <div class="first">
                        <input class="textfield" type="text" name="name" id="name" placeholder=" Enter your Name" required><br class="hide"><br class="hide">
                        <input  class="textfield" type="text" name="nickname" id="nikename" placeholder="Cute name to call?">
                            
                    </div>
                    <!-- The div for mobile and email -->
                    <div class="first">
                        <input class="textfield" type="tel" name="mobile" id="phone" placeholder=" Phone Number" pattern="[0-9]{3}[0-9]{2}[0-9]{3}[0-9]{2}" required><br class="hide"><br class="hide">
                        <input  class="textfield" type="email" name="email-id" id="email" placeholder=" Email Id">
                    </div>
                    <!-- THe div for password and confirm password -->
                    <div class="first">
                        <input class="textfield" type="password" name="password" id="password" onkeyup='check();' placeholder="create password" required><br class="hide"><br class="hide">
                        <input  class="textfield" type="password" name="confirm_password" id="confirm_password" placeholder="confirm password" onkeyup='check();'>
                    </div>

                    <!-- THe span tag for password matching -->
                    <span id='message'></span>
            </div><br class="hide"><br class="hide">
                <!--The submit button-->
                <input class="bottom" type="submit" name='submit' value="Register" onclick="myfunction()">                           
                
            </form><br>
                
        </div>    
        
        </div>

    </div>
    </div>
    
</body>
</html>

<?php

    // if submit button is clicked it is redirected here
    if(isset($_POST['submit'])){

        // All the input fields from the user are 
        $name = mysqli_real_escape_string($con,$_POST['name']);
        $nickname = mysqli_real_escape_string($con,$_POST['nickname']);
        $mobile = mysqli_real_escape_string($con,$_POST['mobile']);
        $email = mysqli_real_escape_string($con,$_POST['email-id']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
        $cpassword = mysqli_real_escape_string($con,$_POST['confirm_password']);     


        if($name=="" ||$nickname=="" || $mobile == "" || $email == "" || $password == "" || $cpassword = ""){
            ?>
            <script>
                alert("Enter the requried fields");
            </script>
            <?php
        }
        else{

            $password_encrypt = password_hash($password,PASSWORD_BCRYPT);

            // Storing everything in session messages
            $_SESSION['nickname'] = $nickname;

            $_SESSION['email'] = $email;

            $_SESSION['username'] = $name;

            // Generating token to send to the user to for activation
            $token = bin2hex(random_bytes(12));

            // If the status is inactive which means the activation link is sent and not verified
            $emailqueryx = "SELECT * FROM users where email = '$email' and status = 'inactive'";

            // Checking the above query in the database
            $emailx = mysqli_query($con,$emailqueryx);

            
            // If the resultant set is not empty with atleast 1 row resulted
            if ($result = mysqli_query($con,$emailqueryx) && mysqli_num_rows(mysqli_query($con,$emailqueryx)) > 0) {
                
                // there are results in $result

                // SEssion message is set as below and redirected to login page
                $_SESSION['msg'] = "Seems that Acticavation link is sent already Try activating account :)";
                ?>
                <script>

                    location.replace("login.php");

                </script>
                <?php

                
            }

            // The query to check if the user already have account and verified his account
            $emailquery = "SELECT * FROM users where email = '$email' and status = 'active'";

            // To check the query in the database
            $emailxx = mysqli_query($con,$emailquery);

            // If the resultant set is not empty and has atleast 1 row in it
            if ($emailxx = mysqli_query($con,$emailquery) && mysqli_num_rows($emailxx) > 0) {
            
                    // SEssion message is set to the below and redirected to login page
                    $_SESSION['msg'] = "Seems that you have an account Try logging in :)";
                   ?>
                    <script>

                        

                        location.replace("login.php");

                    </script>
                   <?php
  
            }
            // If the above query didn't result anything then user doesn't have account
            else{

                
                // So this query to insert data is used
                $query = "INSERT INTO users (name, nickname, phone, email, password, token, status) 
                VALUES ('$name','$nickname','$mobile','$email','$password_encrypt','$token','inactive')";

                // inserting the data to the database
                $res = mysqli_query($con,$query);

                // If insertion is true
                if($res){

                    // Mail is sent to the user to the specified mail address with the token generated above
                    $to = $email;
                    $subject = "Activation Link";
                    $txt = "Hello  {$nickname} Click here to activate your account 
                    http://localhost:8080/rtcamp/activation.php?token=".$token; 
                    
                    
                    $headers = "From: shulomithi07@gmail.com";

                    $a  = mail($to,$subject,$txt,$headers);

                    if($a){

                        $_SESSION['msg'] = "Check your email for activation {$email}";

                        
                        ?>
                        <script>

                                

                                location.replace("login.php");
                            
                        </script>

                        <?php
                        
                    }
                    // If mail is not sent then this is alerted
                    else{
                        ?>
                        <script>

                            alert("Mail not sent!Try once again!");
                            
                        </script>

                        <?php
                        
                    }

                // If data is not inserted
                else{
                    ?>
                    <script>
                        alert("Data Not Inserted");
                    </script>

                    <?php
                }

            }
        }
            
    }


?>