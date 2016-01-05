<?php

if($_POST) {
    $to = 'nihal.kashinath@iotblr.org';
    $name = $_POST['name'];
    $from = $_POST['email'];
    $text= $_POST['message'];
    $subject = $_POST['subject'];
    $message = "
<html>
<body>
<h1>Message From : $name</h1>
<p>$text</p>
</body>
</html>
";
// Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
    $headers .= "From: <$from>" . "\r\n";
    mail($to,$subject,$message,$headers);
    echo "Testing";
}
?>