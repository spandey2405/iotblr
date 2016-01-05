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
    <title>Home | IOTBLR</title>
    <?php display_header_files(); ?>
</head>
<body>

<?php include 'src/lib/header.php'; ?>

<?php include 'src/lib/slider.php'; ?>
<br><br>
<div class="bg-white">
    <center><h3>“The IESA and IoTBLR Connected Devices Makethon”<h3></center>
</div>
<section id="photos"><br><br>
<center><img src="images/6.png"></center>
    <br><br>
</section>
<br><br>
<div class="bg-white">
    <center><h3>“A 2-day Makeathon to build Connected Devices, on Feb 3-4 2016, at Sterlings Mac Hotel, Bangalore. Come join us to learn, hack and have some fun!”.<h3>
    <input type="button" class="btn btn-green" onclick="location.href='Apply.php'" value="Apply Now">
    </center>
</div>
<br><br>
<div class="bg-white">
    <h3>PRESENTED BY </h3>
    <img src="src/images/Presentor1.jpeg" height="150">
    <img src="src/images/Presentor2.jpeg" height="80">
    <h3> AT </h3>
    <img src="src/images/Presentor3.png" height="80">
    <br><br>
    <h3> Makeathon Partner: </h3>
    <img src="src/images/int_lookins_i_rgb_3000.png" height="150" style="margin-left: 100px">
    <br><br>
</div>
<?php include 'src/lib/footer.php'; ?>

<script src="src/theme/js/template.js"></script>
<script src="src/theme/js/jquery.sequence-min.js"></script>
</body>
</html>