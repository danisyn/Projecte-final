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



    
    <div class="col-lg-4">

    <div class="text-center">

    <br>

<h2>Playlist de <?php echo htmlspecialchars($_SESSION["username"]); ?></h2>

  <br>


    <audio controls>  
      <source src="http://www.radio.com:8001/<?php echo htmlspecialchars($_SESSION["username"]); ?>" type="audio/mp3">  
    Your browser does not support the html audio tag.  
    </audio> 

    <br>

    <br>

    <a href="iniciar.php"><button class='btn btn-primary'>Start playlist</button></a>
    <a href="detener.php"><button class='btn btn-danger'>Stop playlist</button></a>

    <br>
</div>

</div>



<div class="col-lg-4">

<table class="table table-hover table-responsive table-sm align-right" >
<tr>

  <th class='text-center'>Nombre</th>
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
                <td class='text-center'>%s</td>
                <td class=td2>
                <button class='btn btn-primary' onclick='eliminar(\"$cod\")'>
                  <i class='bi bi-trash-fill' width='20px'></i>
                </button>
                
                <a href='/music/".$_SESSION["username"]."/".$cod."'download='".$cod."'>
              <button class='btn btn-primary' >
                "."<i class='bi bi-cloud-download-fill' width='20px'></i>
              </button>
              </a>
              
            </tr>",$cod);
          }
          ?>

</table>

        </div>
        </div>



    


</body>
</html>