<?php

if($_POST) {
    $to = 'spandey2405@gmail.com';
    $name = $_POST['name'];
    $from = $_POST['email'];
    $header = "From: $from" . "\r\n";
    $text= $_POST['message'];
    $subject = $_POST['subject'];
    $html_text = "
    <html>
    <body>
    <h1>Message From $name</h1>
    <br>
    $text
    </body>";

    mail($to,$subject,$html_text,$headers);
    echo "Testing";
}
?>