<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login-user.php");
    exit;
}

include('../base.php');

$cod = $_GET['name'];

 shell_exec('rm /etc/liquidsoap/music/'.$_SESSION["username"].'/'.$cod); 
 shell_exec('find /etc/liquidsoap/music/'.$_SESSION["username"].' -name *.mp3 > /etc/liquidsoap/'.$_SESSION["username"].'.pls');
 $stop = exec("ps -aux | grep liquidsoap/".$_SESSION["username"].".liq | head -n1 | awk"." "."{"."'print $2'"."}");

 if($stop === NULL){

    shell_exec('kill -9'.' '.$stop.'> /dev/null 2>&1 &');

 }else{

    shell_exec('kill -9'.' '.$stop.'> /dev/null 2>&1 &');
    shell_exec('liquidsoap /etc/liquidsoap/'.$_SESSION["username"].'.liq');

 }

 

$sql = "delete from ".$_SESSION["username"] . " where name = '".$cod."'";
$resultado = mysqli_query($conn,$sql) or die("Algo ha ido mal en la consulta 1"); 
if ($resultado == true){

        header("Location: welcome.php");

}
else {

    echo "Fallo en las consultas";

}
?>
