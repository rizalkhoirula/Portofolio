<?php
 if(!empty ($_POST["send" ])){
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$toEmail = $_POST[ "rrizalkaa@gmail.com"];
$mailHeaders= "Name: " . $name .
"\r\n Email:" . $email .
"\r\n Subject:" . $subject .
"\r\n Message:" . $message . "\r\n";
    if(mail($toEmail, $name, $mailHeaders)){
$result = "Your message is received successfully.";
    }
}
?>