<?php include('header.php');?>
<?php include('../base.php');?>

<?php

$salida = shell_exec("cat /etc/liquidsoap/metal.m3u | awk -F'/' "."'{print".' $NF'."}'");
echo "<pre>$salida</pre>";

$del = "delete from metal";
mysqli_query($conn,$del) or die("Algo ha ido mal en la consulta 0");

// assuming the text area value is in $_GET["text"]
$lines = explode("\n", $salida);
foreach($lines as $line) {
    $sql = "insert into metal (name) values ('$line')";
    $resultado = mysqli_query($conn,$sql) or die(header("Location: metal.php"));
}

    $sql = "delete from metal where name = ''";
    $resultado = mysqli_query($conn,$sql) or die("Algo ha ido mal en la consulta 1");

header("Location: metal.php");


?>