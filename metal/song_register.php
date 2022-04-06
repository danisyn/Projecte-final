<?php include('header.php');?>
<?php include('../base.php');?>

<?php

$salida = shell_exec('extnom');
echo "<pre>$salida</pre>";

$del = "delete from canciones";
mysqli_query($conn,$del) or die("Algo ha ido mal en la consulta 0");

// assuming the text area value is in $_GET["text"]
$lines = explode("\n", $salida);
foreach($lines as $line) {
    $sql = "insert into canciones (name) values ('$line')";
    $resultado = mysqli_query($conn,$sql) or die(header("Location: metal.php"));
}

    $sql = "delete from canciones where name = ''";
    $resultado = mysqli_query($conn,$sql) or die("Algo ha ido mal en la consulta 1");

header("Location: metal.php");


?>