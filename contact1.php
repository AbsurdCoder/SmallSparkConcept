<?php 
use PHPMailer\PHPMailer\PHPMailer;
    $to = "chag0072@gmail.com"; // this is your Email address
    $from = "contact@smallsparkconcepts.com"; //$_POST['InputEmail']; // this is the sender's Email address
    $full_name = "chirag"; //$_POST['name'];
    $telephone = "8937238728"; //$_POST['telephone'];
    $subject = "Contact";
    $subject2 = "Copy of your form submission";
    $message = $full_name . " wrote the following:" . "\n\n" ;
    $message2 = "Here is a copy of your message " . $full_name . "\n\n";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
     // sends a copy of the message to the sender
    echo "<html>We will contact you shortly! Thank you for your patience. <a href='.#'>Click here to go back to webite</html>" ;
    // You can also use header('Location: contact.php'); to redirect to another page.
    
?>
