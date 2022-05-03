<?php 
if(isset($_POST['submit'])){
    ini_set("SMTP", "smtp.soundstream.es");
    $to = "info@soundstream.es"; // this is your Email address
    $from = "form@soundestream.es"; // this is the sender's Email address
    $subject = "Form submission";
    $headers = "From:" . $from;

    $first_name = "";
    $last_name = "";
    $message = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
 
        // Check if username is empty
        if(empty(trim($_POST["first_name"]))){
            $first_err = "Please enter first_name.";
        } else{
            $first_name = trim($_POST["first_name"]);
        }

        if(empty(trim($_POST["last_name"]))){
            $last_err = "Please enter last_name.";
        } else{
            $last_name = trim($_POST["last_name"]);
        }

        if(empty(trim($_POST["message"]))){
            $comment_err = "Please write a comment.";
        } else{
            $message = trim($first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message']);
        }

    //mail($to,$subject,$message,$headers);

    header('Location: comments.php');

    } else{
        echo "Oops! Something went wrong. Please try again later.";
    }
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>