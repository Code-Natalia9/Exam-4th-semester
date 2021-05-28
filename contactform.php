<?php
    $name = $_POST ['name']; // name from html classified, what is what
    $visitor_email = $_POST ['email'];
    $zoom = $_POST ['zoom'];
    $message = $_POST ['message'];


    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Zoom: $zoom.\n".
                            "User Message: $message.\n"; // Requered 

    $to = "regnat@aquaregina.com"; // Each email sended form the side, will be resieved on this email (gmail-doesn't work)

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers); // All informations that sould be resieved

    header ("Location: contact.html"); // Which page is this form located at
?>
