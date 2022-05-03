<?php 

    $first_name = "";
    $last_name = "";
    $message = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
 
        if(isset($_POST['submit'])){
            ini_set("SMTP", "smtp.soundstream.es");
            $to = "info@soundstream.es"; // this is your Email address
            $from = "form@soundestream.es"; // this is the sender's Email address
            $subject = "Form submission";
            $headers = "From:" . $from;

        // Check if username is empty
        if(empty(trim($_POST["first_name"]))){
            $first_err = "Please enter your first name.";
        } else{
            $first_name = trim($_POST["first_name"]);
        }

        if(empty(trim($_POST["last_name"]))){
            $last_err = "Please enter your last name.";
        } else{
            $last_name = trim($_POST["last_name"]);
        }

        if(empty(trim($_POST["message"]))){
            $comment_err = "Please write a comment.";
        } else{
            $message = trim($first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message']);
        }


        if(empty($$first_err) && empty($last_err)&& empty($comment_err)){

            //mail($to,$subject,$message,$headers);
            //header('Location: comments.php');
            $success = "Your comment has been sent";

        }

    
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }

}


?>

<?php include('header.php')?>
<?php include('sidebar.php')?>



<div class="col-lg-4">

<div class="text-left">

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="separat">
First Name: <input type="text" name="first_name" class="form-control <?php echo (!empty($first_err)) ? 'is-invalid' : ''; ?>">
            <span class="invalid-feedback"><?php echo $first_err; ?></span><br>
Last Name: <input type="text" name="last_name" class="form-control <?php echo (!empty($last_err)) ? 'is-invalid' : ''; ?>">
            <span class="invalid-feedback"><?php echo $last_err; ?></span><br>
Message:<br><textarea rows="5" name="message" cols="30" class="form-control <?php echo (!empty($comment_err)) ? 'is-invalid' : ''; ?>"></textarea>
            <span class="invalid-feedback"><?php echo $comment_err; ?></span><br>

<input id="btn" type="submit" name="submit" value="Submit" class="btn btn-primary" onclick="myFunction()">
</form>


</div>
</div>

<div id='mydiv' class='col-lg-4' >

<?php echo $success?>

</div>