<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIDEO ENCODING</title>
    <?php

        include 'scripts/script.php';
        include 'css/styleHomePage.php';

    ?>


    <?php
        
        session_start();

        if(!isset($_SESSION['username'])){
            ?>
                <script>
                    alert("You Are Logged Out");
                </script>
            <?php
            echo "you are logged out";
            header('location:login.php');
        }


    ?>

</head>
<body>

    <div class="upload">
        <form id="upload_form" enctype="multipart/form-data" method="post">

        <input type="file" name="file" id="file">

        <progress id="progressBar" value="0" max="100" ></progress>
        
        <h3 id="status"></h3>
        
        <p id="loaded_n_total"></p>
        
        <input type="button" value="Upload File" onclick="uploadFile()">

        </form>
    </div>

    <div class="btn">
    
    <a href="logout.php">LOGOUT</a>
    </div>

</body>
</html>