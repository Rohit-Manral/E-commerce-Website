<?php
$mailto=$_POST['email'];
$mailsub="regarding password recovery";
$message = "Please use this password to login " ;
require 'PHPMailer-master/PHPMailerAutoload.php';
$mail=new PHPMailer();
$mail ->isSMTP();
$mail ->SMTPDebug=1;
$mail ->SMTPAuth=true;
$mail ->SMTPSecure='ssl';
$mail ->Host="smtp@gmail.com";
$mail ->Port=465;
$mail ->isHTML();
$mail ->Username="shivam.sharma719@gmail.com";
$mail ->Password="shivam@7190";
$mail ->setFrom("shivam.sharma719@gmail.com");
$mail ->Subject=$mailsub;
$mail ->Body=$message;
$mail ->AddAddress=$mailto;
if(!$mail ->isSendmail())
{
    echo 'mail not sent';
}
?>