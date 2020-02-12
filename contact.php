<?php
require 'phpmailer/PHPMailerAutoload.php';
$name= $_POST['First_Name'];
$email = $_POST['Email'];
$Number = $_POST['Number'];
$message = $_POST['Message'];
$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = "ssl";
$mail->Port = 465; //587
$mail->SMTPAuth = true;
$mail->Username = 'abhiramdas0000@gmail.com';
$mail->Password = 'abukaitshere';

$mail->setFrom('abhiramdas0000@gmail.com', 'abhitechie.com');
$mail->addAddress('abhiramdas2525@gmail.com');
$mail->Subject = 'Website Mail From: '. $email;
$mail->Body = 'Phone: '.$Number.' Name: '.$name. ' '. ' Message: '. $message;

if ($mail->send()){
    echo "Thank You...!!! <br/>";
    echo "<a href='http://abhitechie.com/'>Go back to home</a>";
}
else{
	echo "something wrong happened";
}
?>