<?php 

    $to = "mayur@smallsparkconcepts.com" ; // this is your Email address ""
    $from = "contact@smallsparkconcepts.com";// // this is the sender's Email address
    $full_name = $_POST['f_name'];
    $subject = "SmallSparkConcept - Client Contact" ;
    $message =  $_POST['message'] . "\n\n" . "Regards," . $full_name .  "\n" . $_POST['InputEmail'] . "\n" . $_POST['telephone'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "<html>We will contact you shortly! Thank you for your patience. <a href='.#'>Click here to go back to webite</a></html>" ;
    // You can also use header('Location: contact.php'); to redirect to another page.
    
?>
