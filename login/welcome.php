<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login-user.php");
    exit;
}
?>
 


<?php include('header-loged.php')?>

    <?php include('sidebar.php')?>



<div class="col">

<div>
<h2>Playlist de <?php echo htmlspecialchars($_SESSION["username"]); ?></h2>

    <audio controls autoplay>  
      <source src="http://www.radio.com:8000/<?php echo htmlspecialchars($_SESSION["username"]); ?>" type="audio/mp3">  
    Your browser does not support the html audio tag.  
    </audio> 

    <br>
    <br>

</div>
</div>

<div class="col">

<table class="table table-hover table-responsive table-sm align-right" >
<tr>

  <th class=text-center>Nombre</th>
  <th></th>

</tr>

<?php

$sql = "select * from ".$_SESSION["username"];
$resultado = mysqli_query($conn,$sql) or die("Algo ha ido mal en la consulta"); 


          while ($row = mysqli_fetch_assoc($resultado)) {
            $cod= $row['name'];
            $cod;


            printf(
              "<tr>
                <td class=text-center>%s</td>
                <td>
                <button class='btn btn-primary' onclick='eliminar(\"$cod\")'>
                  <i class='bi bi-trash-fill' width='20px'></i>
                </button>

              </td>
            </tr>",$cod);
          }
          ?>

</table>

        </div>




    


</body>
</html>