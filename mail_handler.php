<?php 
if(isset($_POST['submit'])){
    $to = "iiJDSii@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $your_name = $_POST['your_name'];
    $company = $_POST['company'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $your_name . " " . $company . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $your_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $your_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>