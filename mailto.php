<?php

if($_POST) {
    $to = 'spandey2405@gmail.com';
    $name = $_POST['name'];
    $header = "From: ".$_POST['email'];
    $text= $_POST['message'];
    $subject = $_POST['subject'];
    $text .= "<h1>Message From :".$name."</h1><br><br>".$text;
    mail($to,$subject,$text,$headers);
    echo "Testing";
}
?>