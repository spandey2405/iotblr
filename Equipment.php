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

<div class="container">
    <?php echo file_get_contents("content/Equipment/page-des.txt"); ?>

    <div class='section'>
        <div class='container'>
            <div class='col-sm-12'>

                <?php echo file_get_contents("content/Equipment/Equipment.txt"); ?>
                <div class='col-sm-8'>
                <div class="bg-white">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Item</th>
                            <th>Quantity</th>
                        </tr>
                        </thead>
                        <tbody><tr><td>Intel Edison</td><td>10</td></tr><tr><td>
                                <a href="http://www.seeedstudio.com/depot/Grove-starter-kit-plus-Intel-IoT-Edition-for-Intel-Galileo-Gen-2-and-Edison-p-1978.html">
                                    Grove Sensor Kit Plus</a></td><td>10</td></tr><tr><td>
                                Multimeter</td><td>5</td></tr><tr><td>
                                Glue gun + glue sticks</td><td>2</td></tr><tr><td>
                                Soldering station</td><td>2</td></tr><tr><td>
                                Wire stripper</td><td>5</td></tr><tr><td>
                                Breadboard</td><td>10</td></tr><tr><td>
                                Transistors (NPN)</td><td>50</td></tr><tr><td>
                                Transistors (PNP)</td><td>50</td></tr><tr><td>
                                Diodes -1N4007</td><td>50</td></tr><tr><td>
                                Diodes -1N4148</td><td>50</td></tr><tr><td>
                                Zener -3.3V</td><td>50</td></tr><tr><td>
                                LEDs - 4 Colors - 3mm</td><td>20 each</td></tr><tr><td>
                                Potentiometer screw type - 1K</td><td> 10K</td></tr><tr><td>
                                Opamps - LM324 </td><td>LM339</td></tr><tr><td>
                                ULN2003 - IC</td><td>20</td></tr><tr><td>
                                Push Button On/Off switch</td><td>20</td></tr><tr><td>
                                Tactile Switch</td><td>20</td></tr><tr><td>
                                General Purpose PCB</td><td>20</td></tr><tr><td>
                                Assorted Resistor Box</td><td>10</td></tr><tr><td>
                                Assorted Capacitor Box</td><td>10</td></tr><tr><td>
                                Single strand wire - 3 colors</td><td>20m each</td></tr><tr><td>
                                Multistrand wire - 3 colors</td><td>20m each</td></tr><tr><td>
                                Breadboard jumper cables</td><td>50</td></tr></tbody>
                    </table>
                </div>

                    </div><br>

            </div>
        </div>
    </div>
</div>
<?php include 'src/lib/footer.php'; ?>
<script src="src/theme/js/template.js"></script>
<script src="src/theme/js/jquery.sequence-min.js"></script>
</body>
</html>
