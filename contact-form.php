<?php

$message_sent = false;

if (isset($_POST['email']) && $_POST['email'] != '') {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $email_from = 'portfolio@eimantas-andrejevas.lt';
        $email_subject = 'Portfolio message';
        $email_body = "Name: $name\nEmail: $email\nMessage: $message";

        $send_to = 'eimutis.a@gmail.com';

        mail($send_to, $email_subject, $email_body);

        $message_sent = true;

    }
}

function function_alert($message) { 
    echo "<script>alert('$message');</script>";
    header("Refresh:0");
} 

?>