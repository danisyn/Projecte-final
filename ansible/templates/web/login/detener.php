<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    $stop = shell_exec("ps -aux | grep liquidsoap/".$_SESSION["username"].".liq | head -n1 | awk"." "."{"."'print $2'"."}");
    //echo $stop;
    shell_exec('kill -9'.' '.$stop.'> /dev/null 2>&1 &');
    header("location: welcome.php");
    exit;
}
?>