<?php

$result="";

if (isset($_POST['submit'])) {
    require 'PHPMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;

    $mail->Host='smtp.gmail.com';
    $mail->PORT=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='vandaleyindus@gmail.com';
    $mail->Password='123456Sf';

    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('vandaleyindus@gmail.com');

    $mail->isHTML(true);
    $mail->Subject='Form Submission: '.$_POST['subject'];
    $mail->Body='<h1 align=center>Name :'.$_POST['name'].'<br>Email: '.$_POST['email'].'<br>Message: '.$_POST['msg'].'<h1>';


    if(!$mail->send()){
        $result="Something went wrong. Please try again.";
    }
    else{
        $result="Thanks ".$_POST['name']." for getting in touch with. I'll get back to you soon!";
    }

}

?>