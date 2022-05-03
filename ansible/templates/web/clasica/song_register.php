<?php include('header.php');?>
<?php include('../base.php');?>

<?php

$salida = shell_exec('clasica');

$del = "delete from clasicas";
mysqli_query($conn,$del) or die("Algo ha ido mal en la consulta 0");

// assuming the text area value is in $_GET["text"]
$lines = explode("\n", $salida);
foreach($lines as $line) {
    $sql = "insert into clasicas (name) values ('$line')";
    $resultado = mysqli_query($conn,$sql) or die("Algo ha ido mal en la consulta 1");
}

    $sql = "delete from clasicas where name = ''";
    $resultado = mysqli_query($conn,$sql) or die("Algo ha ido mal en la consulta 1");

header("Location: clasica.php");


?>