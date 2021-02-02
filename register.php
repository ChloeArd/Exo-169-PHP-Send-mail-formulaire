<?php

$to      = $_POST["email"];
$subject = 'Sujet';
$message = $_POST["message"];
$headers = array(
    'Reply-To' => 'chloe.ardoise@gmail.com',
    'X-Mailer' => 'PHP/' . phpversion()
);
mail($to, $subject, $message, $headers, '-f chloe.ardoise@gmail.com');

echo "Destinataire : ".$to."<br> Message : ".$message;
