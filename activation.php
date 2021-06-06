<?php

session_start();

include 'connection.php';


// Gets the token from the url which was sent from the signup page at the time of signup
if(isset($_GET['token'])){

    $token = $_GET['token'];

    // Updates the database with the status active from the url
    $updatequery = "UPDATE users set status= 'active' WHERE token = '$token'";

    // Performing the query in the database
    $dbquery = mysqli_query($con,$updatequery);

    // If the query executed 
    if($dbquery){
        // Session message is set if account is acctivated
        if(isset($_SESSION['msg'])){
            $_SESSION['msg'] = "Your account is activated Please login!";
            header('location:login.php');
        }
        // If session message is not there
        else{
            $_SESSION['msg'] = "You're logged out!";
            header('location:login.php');
        }
    }
    // If query didn't execute
    else{
        $_SESSION['msg'] = "Something happened please try again!";
        header('location:signup.php');
    }
}

// echo "bla bla bla";

?>