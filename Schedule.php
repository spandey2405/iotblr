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
    <style>


        .scheduletabs .nav-tabs {
            border-bottom: 1px solid #e6e6e6;
            text-align: center;
            font: 20px/30px 'Montserrat', Arial, Helvetica, sans-serif;
            position: relative;
            z-index: 1;
        }
        @media (max-width: 767px)
            .scheduletabs {
                margin: 0px;
            }
            .scheduletabs {
                margin-top:40px;
                position: relative;
                max-width: 947px;
                margin: -100px auto 0;
                background: #fff;
                border: 1px solid #e6e6e6;
            }
            @media (max-width: 767px)
                .scheduletabs .nav-tabs > li {
                    width: 33.333%;
                }
                .scheduletabs .nav-tabs > li.active > a {
                    background-color: #00a4ef;
                }
                .scheduletabs .nav-tabs > li > a span {
                    line-height: 26px;
                    margin-bottom: 3px;
                    display:block;
                }
                .scheduletabs .nav-tabs > li > a {
                    border-right: 1px solid #e6e6e6;
                    border-radius: 0;
                    line-height: 30px;
                    margin-right: 0;
                    color: #333;
                    min-width: 200px;
                    position: relative;
                    padding: 18px 10px 19px;
                    transition: all 0.5s ease 0s;
                    -moz-transition: all 0.5s ease 0s;
                    -webkit-transition: all 0.5s ease 0s;
                    outline: none;
                }
                .scheduletabs .tab-content {
                    padding: 2px 50px;
                    font-size: 16px;
                    float: left;
                    width: 100%;
                    background:white;
                }
                .scheduletabs .panel-group {
                    float: left;
                    width: 100%;
                }
                .scheduletabs .panel.panel-default {
                    border: none;
                    border-radius: 0;
                    box-shadow: none;
                    position: relative;
                    padding: 30px 0 30px;
                    float: left;
                    width: 100%;
                }
                .announcer-pic {
                    float: left;
                    width: 53px;
                    height: 53px;
                    border-radius: 50%;
                    margin: 0 50px 0 0;
                    position: relative;
                    z-index: 5;
                }
                .sch-time {
                    display: block;
                    font: 16px/20px 'Montserrat', Arial, Helvetica, sans-serif;
                    color: #333;
                    text-transform: uppercase;
                    margin: 0 0 15px;
                }

    </style>
</head>
<body>
<?php include_once ('src/analytics.php'); ?>
<?php include 'src/lib/header.php'; ?>


<div class="container">
    <h2>Schedule</h2>
<br><br><br><br><br>
<div class='scheduletabs'>
    <!-- Nav tabs -->
    <ul class='nav nav-tabs' role='tablist'>
        <li role='presentation' class='active'><a href='#profile-1' role='tab' data-toggle='tab' aria-expanded='false'><span>Day 1</span>Feb 3, 2016</a></li>
        <li role='presentation' class=''><a href='#profile-2' role='tab' data-toggle='tab' aria-expanded='false'><span>Day 2</span>Feb 4, 2016</a></li>
    </ul>
    <div class='tab-content'>

        <div role='tabpanel' class='tab-pane active' id='profile-1'>
            <div class='panel-group' id='accordion11' role='tablist' aria-multiselectable='true'><br><br>
                <?php

                $time = ['09:00 - 09:30', '09:30 - 10:00', '10:00 - 10:30',
                    '10:30 - 13:30', '13:30 - 14:30', '14:30 - 17:00'
                    , '17:00 - 18:00', '18:00 - 19:30', '19:30 - 20:00', '20:00 - 21:00' ,'21:00 - 0:00', '0:00'
                ];
                $eventname = ['Breakfast mixer', 'Welcome note, agenda, rules',
                    'Introduction to experts, distribution of equipment', 'Introduction to Intel Edison kit and TCS\' TCUP platform ',
                    'Lunch', 'Makeathon', 'Tea and Progress check', 'Makeathon',
                    'Dinner', 'Progress check', 'Makeathon', 'End of Day 1 (participants are welcome to build overnight if

they want to)'];
                $count = 0;
                foreach($time as $event) {
                    echo "
                    <div class='overflow'>
                        <div class='panel-heading' role='tab' id='headingOne1'>
                            <h4>
                                $event - <b>$eventname[$count]</b>
                            </h4>
                        </div>
                        <div id='collapseOne1' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='headingOne1'>
                            <div class='panel-body'>
                                <p></p>
                            </div>
                        </div>
                    </div>
                ";
                    $count +=1;
                }
                ?>
            </div>
        </div>

        <div role='tabpanel' class='tab-pane' id='profile-2'>
            <div class='panel-group' id='accordion22' role='tablist' aria-multiselectable='true'><br><br>
                <?php

                $time = ['9:00 - 10:00', '10:00 - 10:30', '10:30 - 13:00',
                '13:00 - 13:30', '13:30 - 14:00', '14:00 - 15:30' , '16:30 - 17:00', '17:00 18:00'
                ];
                $eventname = ['Breakfast', 'Progress check', 'Makeathon',
                    'Final touches and preparation for judge’s rounds', 'Lunch', 'Demos with presentations at Sterlings Mac Hotel',
                    'Results announcement and prize distribution at Leela Palace', 'Tea and networking at Vision Summit / Pavilion for all projects'];
                $count = 0;
                foreach($time as $event) {
                    echo "
                    <div class='overflow'>
                        <div class='panel-heading' role='tab' id='headingOne1'>
                            <h4>
                                $event - <b>$eventname[$count]</b>
                            </h4>
                        </div>
                        <div id='collapseOne1' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='headingOne1'>
                            <div class='panel-body'>
                                <p></p>
                            </div>
                        </div>
                    </div>
                ";
                    $count +=1;
                }
                ?>
            </div>
        </div>

    <div>
</div>
</div>
</div>
</div>
<br><br><br>
<?php include 'src/lib/footer.php'; ?>

<script src="src/theme/js/template.js"></script>
<script src="src/theme/js/jquery.sequence-min.js"></script>
</body>
</html>