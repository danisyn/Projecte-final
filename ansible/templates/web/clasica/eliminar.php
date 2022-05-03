<?php
include('../base.php');

$cod = $_GET['name'];


$sql = "delete from clasicas where name = '".$cod."'";
$resultado = mysqli_query($conn,$sql) or die("Algo ha ido mal en la consulta 1"); 
if ($resultado == true){

        header("Location: clasica.php");

}
else {

    echo "Fallo en las consultas";

}
?>
