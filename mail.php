<?php
//get data from form  
$name = $_POST['firstName'];
$email= $_POST['email'];
$message= $_POST['message'];
$number= $_POST['number'];

$to = "harsh19112003@gmail.com";
$subject = "Mail From Portfolio Website";
$txt ="Name = ". $name . "\r\nEmail = " . $email . "\r\nMessage =" . $message . "\r\nNumber = ". $number;
$headers = "From: noreply@codeconia.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
?>