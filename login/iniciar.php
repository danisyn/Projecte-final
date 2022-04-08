<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    shell_exec('liquidsoap /etc/liquidsoap/'.$_SESSION["username"].'.liq');
    header("location: welcome.php");
    exit;
}
?>

