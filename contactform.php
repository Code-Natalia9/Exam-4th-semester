<?php
    $name = $_POST ['name'];
    $visitor_email = $_POST ['email'];
    $zoom = $_POST ['zoom'];
    $message = $_POST ['message'];


    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Zoom: $zoom.\n".
                            "User Message: $message.\n";

    $to = "regnat@aquaregina.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header ("Location: contact.html");
?>