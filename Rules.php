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
        .col-sm-12 li {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<?php include 'src/lib/header.php'; ?>
<?php include 'src/lib/slider.php'; ?>

<div class="container">

    <!--    Page Heading -->
    <?php echo file_get_contents('content/Rules/page-des.txt'); ?>

    <div class='section'>
        <div class='container'>
            <div class='col-sm-12' style="color:black">

            <?php echo file_get_contents('content/Rules/Rules.txt'); ?>

            </div>
        </div>
    </div>

</div>

<?php include 'src/lib/footer.php'; ?>

<script src="src/theme/js/template.js"></script>
<script src="src/theme/js/jquery.sequence-min.js"></script>
</body>
</html>
