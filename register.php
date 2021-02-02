<?php

$to      = $_POST["email"];
$subject = 'Sujet';
$message = $_POST["message"];

if (isset($_POST["email"], $_POST["message"])){
    mail($to, $subject, $message);
}
header("Location: index.php");