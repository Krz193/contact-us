<?php

require_once "Email.php";

try{
    $Email->sendEmail($_POST);
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$Email->errorInfo}";
} 

echo true;