<?php include('header.php')?>

<?php include('sidebar.php') ?>

<br>

<div class="col">

<div>

<h2>Playlist de metal</h2>      

    <audio controls class="reproductor" autoplay>  
      <source src="http://www.radio.com:8001/metal" type="audio/mp3">  
    Your browser does not support the html audio tag.  
    </audio>  

    <br>
    <br>

    
</div>
    <br>
    <br>


  </div>



<div class="col-lg-4">



<table class="table table-hover table-responsive table-sm align-right" >
<tr>

  <th class=text-center>Nombre</th>
  
</tr>

<?php

$sql = "select * from canciones";
$resultado = mysqli_query($conn,$sql) or die("Algo ha ido mal en la consulta"); 


          while ($row = mysqli_fetch_assoc($resultado)) {
            $cod= $row['name'];
            $cod;


            printf(
              "<tr>
                <td class=text-center>%s</td>

            </tr>",$cod,$nombre);
          }
          ?>

</table>

    </div>

</section>

</body>
</html>