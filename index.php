<?php
/**
 * Created by Saurabh Pandey.
 * User: sp
 * Date: 27/12/15
 * Time: 6:43 AM
 */
include 'src/lib/header-files.php';
include "src/helpers/display_images.php";

?>

<html>
<head>
    <title>IESA IoTBLR Makeathon</title>
    <?php display_header_files(); ?>
</head>
<body>
<?php include_once ('src/analytics.php'); ?>
<?php include 'src/lib/header.php'; ?>

<?php //include 'src/lib/slider.php'; ?>
<br><br>
<div class="bg-white">
    <center><h3>The IESA and IoTBLR Connected Devices Makeathon<h3></center>
</div>
<section id="photos"><br><br>
<center><img src="images/6.png"></center>
    <br><br>
</section>
<br><br>
<div class="bg-white">
    <center><h3>A 2-day Makeathon to build Connected Devices, on Feb 3-4 2016.<br>
            Come join us to learn, hack and have some fun!
            <br><br><input type="button" class="btn btn-blue" onclick="location.href='Apply.php'" value="Apply Now">
            <h3>

    </center>
</div>
<br><br>
<div class="bg-white">
    <h3>PRESENTED BY </h3>
    <a href="http://iesaonline.org/"><img src="src/images/Presentor1.jpeg" height="150"></a>
    <a href="http://www.iotblr.org"><img src="src/images/Presentor2.jpeg" height="80"></a>
    <h3> AT </h3>
    <a href="http://www.iesaonline.org/vs2016/index.html"><img src="src/images/Presentor3.png" height="80"></a>
    <br><br>
    <h3>MAKEATHON PARTNERS</h3>
    <a href="http://www.intel.in/"><img src="images/thumbnail.jpg" height="80" style="margin-left: 50px"></a>
    <a href="http://www.tcs.com/"><img src="images/tcslogo.jpg" height="100" style="margin-left: 50px"></a>
    <br><br>
    <h3>HARDWARE ACCELERATOR PARTNER</h3>
    <a href="http://www.revvx.com/"><img src="images/riv.jpg" height="100" style="margin-left: 50px"></a>
    <br><br>
    <h3>ELECTRONICS MANUFACTURING SERVICE  PARTNER</h3>
    <a href="http://indicelectronics.com/"><img src="images/indic.jpg" height="80" style="margin-left: 50px"></a>
    <br><br><br><br>
</div>
<?php include 'src/lib/footer.php'; ?>

<script src="src/theme/js/template.js"></script>
<script src="src/theme/js/jquery.sequence-min.js"></script>
</body>
</html>
