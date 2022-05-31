<?php include('../base.php')?>

<?php

session_start();
 
$confirm = $confirm_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(empty(trim($_POST["confirm"]))){
            $confirm_err = "Please confirm the action";
        }elseif(trim($_POST["confirm"]) != "Confirm"){
            $confirm_err = "You have to write Confirm to continue with the action";
        }else{
            shell_exec("rm -r /etc/liquidsoap/music/".$_SESSION["username"]."");
            shell_exec("rm /etc/liquidsoap/".$_SESSION["username"].".*");
            $sql = "DROP TABLE ".$_SESSION["username"];
            mysqli_query($conn,$sql) or die("Algo ha ido mal en la consulta 1");
            $sql2 = "DELETE FROM users WHERE username="."'".$_SESSION["username"]."'"."";
            mysqli_query($conn,$sql2) or die("Algo ha ido mal en la consulta 2");
            $_SESSION = array();
            session_destroy();
            header("location: login-user.php"); 
            exit;
        }    
        
    }



    ?>

<?php include('header-loged.php')?>

<div class="wrapper separat arreglar">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Confirma para eliminar</label>
                <br>
                <br>
                <input type="text" name="confirm" class="form-control <?php echo (!empty($confirm_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm; ?>">
                <span class="invalid-feedback"><?php echo $confirm_err; ?></span>
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