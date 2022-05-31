<?php
// Include config file
require_once "../base.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    

    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page

                    // Crear carpeta en /etc/liquidsoap/music/$user
                    shell_exec('touch /etc/liquidsoap/'.$username.'.pls');
                    shell_exec('mkdir /etc/liquidsoap/music/'.$username);
                    shell_exec('touch /etc/liquidsoap'.$username.'.liq');
                    
                    $file = '/etc/liquidsoap/'.$username.'.liq';
                    $output = 'set("init.allow_root",true)
                    set("init.daemon.pidfile.path", "/etc/liquidsoap/daemon/pid.txt")
                    set("init.daemon",true)
                    %include "crossfade.liq"
                    myplaylist = playlist('.'"/etc/liquidsoap/'.$username.'.pls"'.')
                    security = single("/etc/liquidsoap/music/default.mp3")
                    radio = myplaylist
                    radio = normalize(radio)
                    radio = smart_crossfade(start_next=8., fade_in=6., fade_out=6., width=2., conservative=true, radio)
                    radio = fallback(track_sensitive = false, [radio, security])
                    output.icecast(%vorbis.cbr(samplerate=44100, channels=2, bitrate=128),host = "localhost", port = 8001, password = "admin", mount = "/'.$username.'",name="My cool webradio name", description="A nice description for my webradio",radio)';

                    $fn = fopen($file,'w');
                    fwrite($fn,$output);
                    fclose($fn);

                    shell_exec('sed -i '.'"65 i\<listen-socket><port>8001</port><shoutcast-mount>/'.$username.'</shoutcast-mount></listen-socket>"'.' /etc/icecast2/icecast.xml');

                    $sql = "CREATE TABLE ".$username." (name varchar(255) NOT NULL, PRIMARY KEY (name))";
                    mysqli_query($conn,$sql) or die("Algo ha ido mal en la consulta 1");

                header("location: login-user.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            mysqli_stmt_close($stmt);
        }
    }
    
    mysqli_close($conn);
}
?>
 
<?php include('header-login.php')?>

    <div class="wrapper separat">
        <h2>Registro</h2>
        <p>Profavor rellene el formulario para crear una cuenta.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Usuario</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>   
            <br> 
            <div class="form-group">
                <label>Contraseña</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <br>
            <div class="form-group">
                <label>Confirme la contraseña</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
            <br>
            <p>Tienes una cuenta? <a href="login-user.php">Inicia sesión aquí</a>.</p>
        </form>
    </div>    
</body>
</html>