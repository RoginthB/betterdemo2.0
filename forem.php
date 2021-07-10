<?php
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['no'];
$message = $_POST['message'];

$to = "rohinthrewa248@gmail.com";

$subject = "Mail From better demo";
$txt = "name= ".$name."\r\n email= ".$email."
\r\n message= ".$message. " \r\n Mobile number= ".$number;

$headers = "from:  betterdemo@gmail.com" ."\r\n" . "cc: somebody@ example.com";

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
header("Location : thankyou.html");
>