<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>

    <?php include 'css/style.php' ?>
    <?php include 'scripts/script.php'?>
    <?php include 'connection.php' ?>
    

</head>
<body>

    <div class="container">
        <div class="left">
            <img id="image" src="images/welcome.png" alt="welcome image">
            <h2 class="hide">WELCOME</h2>
            <h3 class="hide">Please Enter Details Carefully</h3>
            <h5>Don't have an account?</h5>
            <h3><a id="btn" href="login.php">LOGIN</a></h3>
            <h1 class="apply"></h1>
        </div>
        <div class="right">
            <div class="top">REGISTER</div>
            <div class="center">
                
                <form  id="myForm" method="post">
                        <div class="logo">
                            <input class="textfield" type="text" name="name" id="name" placeholder=" Enter your Name" >
                            <input  class="textfield" type="text" name="nickname" id="nikename" placeholder="What do you want us to call you?">
                            
                        </div> <br class="hide">
                        
                        <div class="logo">
                        <input class="textfield" type="tel" name="mobile" id="phone" placeholder=" Phone Number" pattern="[0-9]{3}[0-9]{2}[0-9]{3}[0-9]{2}" required>
                        <input  class="textfield" type="email" name="email-id" id="email" placeholder=" Email Id">
                            
                        </div> <br class="hide">

                        <div class="logo">
                            <input class="textfield" type="password" name="password" id="password" onkeyup='check();' placeholder="create password" required>
                            <input  class="textfield" type="password" name="confirm_password" id="confirm_password" placeholder="confirm password" onkeyup='check();'>
                        </div>
                    
                        <span id='message'></span><br class="hide">

                        <div class="logo register">       
                            <input type="submit" name='submit' value="Register" onclick="myfunction()">                           
                        </div>
                </form><br>
                
                
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

            $_SESSION['username'] = $emailPassword['name'];



            $token = bin2hex(random_bytes(12));

            // echo $_SESSION['nickname']."<br>";

            // echo $_SESSION['email']."<br>";

            // $password_decrypt = password_verify($pass,$password_encrypt);

            $emailquery = "SELECT * FROM members where email = '$email'";

            $emailx = mysqli_query($con,$emailquery);

            $emailcount = mysqli_num_rows($emailx);

            if($emailcount>0){
            ?>

                <script>
                    alert("Seems that you have an account Try logging in :)");
                </script>

            <?php    
            }
            else{

                

                $query = "INSERT INTO members (name, nickname, phone, email, password, token, status) 
                VALUES ('$name','$nickname','$mobile','$email','$password_encrypt','$token','inactive')";

                $res = mysqli_query($con,$query);

                if($res){

                    
                    $to = $email;
                    $subject = "Activation Link";
                    $txt = "Hello  {$nickname} Click here to activate your account 
                    http://localhost:8080/okay/project/activation.php?token=".$token; 
                    
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

