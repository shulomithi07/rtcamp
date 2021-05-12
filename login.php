<?php

session_start();

include 'connection.php';
include 'scripts/script.php';
include 'css/style.php';
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

    <?php
    


        if(isset($_POST['submit'])){

            $email= $_POST['email'];
            $CheckPassword = $_POST['password'];

            $emailQuery = "SELECT * FROM members WHERE email ='$email'";
            // SELECT * FROM `members` WHERE email='shiny';
            

            $selectQuery = mysqli_query($con,$emailQuery);

            $emailCount = mysqli_num_rows($selectQuery);

            echo $emailCount;

            if($emailCount>0){

                $emailPassword = mysqli_fetch_assoc($selectQuery);

                $loginPassword = $emailPassword['password'];

                $_SESSION['username'] = $emailPassword['name'];
                $_SESSION['email'] = $emailPassword['email'];
                // $_SESSION['video'] = $emailPassword['video'];

                echo $_SESSION['email'];

                echo $_SESSION['username'];

                $passwordDecode = password_verify($CheckPassword,$loginPassword);

                if($passwordDecode){
                        ?>
                            <script>

                                alert("redirecting");

                                location.replace("homepage.php");
                            
                            </script>

                        <?php
                    
                }else{

                    ?>

                        <script>

                        alert("Incorrect password");

                        </script>


                    <?php
                }
            }
            
            else{

                ?>

                        <script>

                        alert("Email doesn't exists,TRY TO SIGN UP.");

                        </script>


                    <?php

            }
        }

    ?>

    
    <div class="container">

        <div class="right">
        
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
            
            
                <input type="text" name="email" id="email" placeholder="email"><br><br>
                <input type="text" name="password" id="password" placeholder="password"><br><br>
                <input type="submit" name="submit" value="LOGIN">

            </form>
        
        </div>

    </div>

</body>
</html>