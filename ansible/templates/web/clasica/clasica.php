<?php include('header.php')?>

<?php include('sidebar.php') ?>

<br>

<div class="col-lg-4">

<div class="text-center">

<br>

<h2>Playlist musica clasica</h2>

<br>

    <audio controls autoplay>  
      <source src="http://192.168.56.5:8001/stream " type="audio/mp3">  
    Your browser does not support the html audio tag.  
    </audio> 

    <br>
    <br>


</div>


</div>

<div class="col-lg-4">



<table class="table table-hover table-responsive table-sm align-right" >
<tr>

  <th class=text-center>Nombre</th>
  <th></th>

</tr>

<?php

$sql = "select * from clasicas";
$resultado = mysqli_query($conn,$sql) or die("Algo ha ido mal en la consulta"); 


          while ($row = mysqli_fetch_assoc($resultado)) {
            $cod= $row['name'];
            $cod;


            printf(
              "<tr>
                <td class=text-center>%s</td>
                <td>
                <a href='/music/clasic/".$cod."'download='".$cod."'>
                <button class='btn btn-primary' >
                  "."<i class='bi bi-cloud-download-fill' width='20px'></i>
                </button>
                </a>
                </td>
            </tr>",$cod);
          }
          ?>

</table>

    </div>



  </div>
</section>

</body>
</html>