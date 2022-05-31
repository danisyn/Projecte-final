<?php include('../base.php')?>

<?php

session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || $_SESSION["username"] != "admin"){
    header("location: login-user.php");
    exit;
}

$userdel = $userdel_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

         $sql0 = "SELECT username FROM users WHERE username=".$userdel;

         echo $sql0;

         $comprovacion = mysqli_query($conn,$sql0) or die("Algo ha ido mal en la consulta 0");
        echo $comprovacion;
        // if(empty(trim($_POST["userdel"]))){
        //     $userdel_err = "Please userdel the action";
        // }elseif(trim($_POST["userdel"]) != $comprovacion){
        //     $userdel_err = "El usuario no existe";
        // }else{
        //     shell_exec("rm -r /etc/liquidsoap/music/".$userdel."");
        //     $sql = "DROP TABLE ".$userdel;
        //     mysqli_query($conn,$sql) or die("Algo ha ido mal en la consulta 1");
        //     $sql2 = "DELETE FROM users WHERE username="."'".$userdel."'"."";
        //     mysqli_query($conn,$sql2) or die("Algo ha ido mal en la consulta 2");
        //     $_SESSION = array();
        //     session_destroy();
        //     header("location: login-user.php"); 
        //     exit;
        // }    
        
    }



    ?>

<?php include('header-admin.php')?>

<div class="wrapper separat arreglar">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Introduzca el usuario a eliminar</label>
                <br>
                <br>
                <input type="text" name="userdel" class="form-control <?php echo (!empty($userdel_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $userdel; ?>">
                <span class="invalid-feedback"><?php echo $userdel_err; ?></span>
            </div>   
            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                
            </div> 
</form>
</div>
</div>
</body>
</html>