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
    <style>

    </style>
</head>
<body>

<?php include 'src/lib/header.php'; ?>

<?php include 'src/lib/slider.php'; ?>

<?php include 'src/lib/Banner.php'; ?>

<?php display_images("content/main-page-images.json"); ?>

<div class="container">
    <div class="row" style="padding-left:20px; font-size:16px; width:96%" >
        <p></p>
    </div>
    <?php include 'src/lib/prizes.php'; ?>
    <br><br><br>

</div>

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