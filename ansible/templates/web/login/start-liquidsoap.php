<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["username"] == "admin"){
    shell_exec('stream');
    header("location: admin.php");
    exit;
}
else{
    header("location: welcome.php");
}
?>