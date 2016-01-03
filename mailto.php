<?php

if($_POST) {
    $to = 'spandey2405@gmail.com';
    $name = $_POST['name'];
    $from = $_POST['email'];
    $text= $_POST['message'];
    $subject = $_POST['subject'];
    $message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";
// Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
    $headers .= "From: <spandey2405@gmail.com>" . "\r\n";
    mail($to,$subject,$message,$headers);
    echo "Testing";
}
?>