<?php
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    
    $email_from = 'amdanejgnsje';
    $email_subject = 'lol';
    $email_body = "Name: $name.\n".
                    "Email: $email.\n".
                        "Message: $message.\n";

    $to = "taymenghan9721@hotmail.com";
    
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $headers .= "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";

    
    $retval= mail ($to,$email_subject,$email_body,$headers);

if( $retval == true ) {
    echo "Message sent succesfully...";  
}else {
    echo "Message could not be sent...";
}
    
?>