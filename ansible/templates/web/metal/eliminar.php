<?php
include('../base.php');

$cod = $_GET['name'];


$sql = "delete from canciones where name = '".$cod."'";
$resultado = mysqli_query($conn,$sql) or die("Algo ha ido mal en la consulta 1"); 
if ($resultado == true){

        header("Location: metal.php");

}
else {

    echo "Fallo en las consultas";

}
?>
