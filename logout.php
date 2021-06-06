<?php

session_start();



// specifying directory
$mydir = 'uploads/convert';
 
//scanning files in a given directory in descending order
$myfiles = scandir($mydir, 1);
 
//displaying the files in the directory
print_r($myfiles);
$n = sizeof($myfiles);
for($i=0;$i<$n-2;$i++){
    // echo $myfiles[$i]."<br>";
    $path = "uploads/convert/$myfiles[$i]";
    unlink($path);
}

session_destroy();
// redirecting to login page
header('location:login.php')



?>