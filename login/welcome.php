<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login-user.php");
    exit;
}
?>
 


<?php include('header.php')?>

    <?php include('sidebar.php')?>

    <div class="col">

    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>

</div>

<div class="col">

<div>
<h2>Playlist de <?php echo htmlspecialchars($_SESSION["username"]); ?></h2>

    <audio controls autoplay>  
      <source src="http://www.radio.com:8001/<?php echo htmlspecialchars($_SESSION["username"]); ?>" type="audio/mp3">  
    Your browser does not support the html audio tag.  
    </audio> 

    <br>
    <br>


</div>


</div>     


</body>
</html>