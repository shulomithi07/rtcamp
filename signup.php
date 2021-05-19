<?php

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

    <div class="signup">
    <!-- <div class="container"> -->
        <div class="left">
            
            <!-- <h2 class="hide">WELCOME</h2><br> -->
            <!-- <h3 class="hide">Please Enter Details Carefully</h3><br> -->
            <img id="image" src="images/Girl.svg" alt="welcome image">
            <h5>HAVE AN ACCOUNT?</h5><br><br class="hide"><br>
            <h3><a id="top" href="login.php">LOGIN</a></h3><br>
            <h1 class="apply"></h1>
        </div>
        <div class="right">
            <div class="top">Why late fill your details</div><br>
            <div class="center">
                
                <form  id="myForm" method="post">
                    <div class="first">
                        <input class="textfield" type="text" name="name" id="name" placeholder=" Enter your Name" ><br class="hide"><br class="hide">
                        <input  class="textfield" type="text" name="nickname" id="nikename" placeholder="Cute name to aall?">
                            
                    </div>
                    <div class="first">
                        <input class="textfield" type="tel" name="mobile" id="phone" placeholder=" Phone Number" pattern="[0-9]{3}[0-9]{2}[0-9]{3}[0-9]{2}" required><br class="hide"><br class="hide">
                        <input  class="textfield" type="email" name="email-id" id="email" placeholder=" Email Id">
                    </div>
                    <div class="first">
                        <input class="textfield" type="password" name="password" id="password" onkeyup='check();' placeholder="create password" required><br class="hide"><br class="hide">
                        <input  class="textfield" type="password" name="confirm_password" id="confirm_password" placeholder="confirm password" onkeyup='check();'>
                    </div>
                    <span id='message'></span>
            </div><br class="hide"><br class="hide">
                <div class="top">
                <input type="submit" name='submit' value="Register" onclick="myfunction()">                           
                </div>    
            </form><br>
                
        </div>    
        
        </div>

    </div>
    </div>
    
</body>
</html>

<?php

    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($con,$_POST['name']);
        $nickname = mysqli_real_escape_string($con,$_POST['nickname']);
        $mobile = mysqli_real_escape_string($con,$_POST['mobile']);
        $email = mysqli_real_escape_string($con,$_POST['email-id']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
        $cpassword = mysqli_real_escape_string($con,$_POST['confirm_password']);     
        // echo $role;

        if($name=="" ||$nickname=="" || $mobile == "" || $email == "" || $password == "" || $cpassword = ""){
            ?>
            <script>
                alert("Enter the requried fields");
            </script>
            <?php
        }
        else{

            $password_encrypt = password_hash($password,PASSWORD_BCRYPT);

            $_SESSION['nickname'] = $nickname;

            $_SESSION['email'] = $email;

            $_SESSION['username'] = $name;



            $token = bin2hex(random_bytes(12));

            // echo $_SESSION['nickname']."<br>";

            // echo $_SESSION['email']."<br>";

            // $password_decrypt = password_verify($pass,$password_encrypt);

            $emailqueryx = "SELECT * FROM members where email = '$email' and status = 'inactive'";

            $emailx = mysqli_query($con,$emailqueryx);

            // $emailcount = mysqli_num_rows($emailx);

            if ($result = mysqli_query($con,$emailqueryx) && mysqli_num_rows($result) > 0) {
                // there are results in $result
                $_SESSION['msg'] = "Seems that Acticavation link is sent already Try activating account :)";
                ?>
                <script>

                    alert("redirecting");

                    location.replace("login.php");
                    </script>
                <?php

                
            }

            
            $emailquery = "SELECT * FROM members where email = '$email' and status = 'active'";

            // $emailxx = mysqli_query($con,$emailquery);

            // $emailcountt = mysqli_num_rows($emailxx);


            if ($emailxx = mysqli_query($con,$emailquery) && mysqli_num_rows($emailxx) > 0) {
            
                    $_SESSION['msg'] = "Seems that you have an account Try logging in :)";
                   ?>
                    <script>

                        alert("redirecting");

                        location.replace("login.php");

                    </script>
                   <?php
  
            }
            else{

                

                $query = "INSERT INTO signup (name, nickname, phone, email, password, token, status) 
                VALUES ('$name','$nickname','$mobile','$email','$password_encrypt','$token','inactive')";

                $res = mysqli_query($con,$query);

                if($res){

                    
                    $to = $email;
                    $subject = "Activation Link";
                    $txt = "Hello  {$nickname} Click here to activate your account 
                    http://localhost:8080/rtcamp/activation.php?token=".$token; 
                    
                    $headers = "From: shulomithi07@gmail.com";

                    $a  = mail($to,$subject,$txt,$headers);

                    if($a){

                        $_SESSION['msg'] = "Check your email for activation {$email}";

                        // $_SESSION['message'] = "check your mail";
                        ?>
                        <script>

                                alert("redirecting");

                                location.replace("login.php");
                            
                        </script>

                        <?php
                        // header('location:login.php');
                        // echo "successfull".$to; 
                    }
                    else{
                        echo "not";
                    }

                }
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

