<?php
    $to      = 'sashapoulain5@gmail.com';
    $subject = 'the subject';
    $message = 'hello';
    $headers = 'From: info@academy.com'       . "\r\n" .
                 'Reply-To: info@academy.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
?>