<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 01/01/16
 * Time: 6:31 PM
 */
function display_images($file) {
    $data = file_get_contents($file);
    $image_items = json_decode($data, true);
    $height = "200px";
    $width = "400px";
    $class = "col-sm-4";

    $images = '';
    if(isset($image_items['heading'])) {
        echo "<div class='container'><h2>".$image_items['heading']."</h2></div>";
    }
    if(isset($image_items['height'])) {
        $height = $image_items['height']."px";
    }
    if(isset($image_items['width'])) {
        $width = $image_items['width']."px";
    }
    if(isset($image_items['class'])) {
        $class = $image_items['class'];
    }
    foreach ($image_items['images'] as $image) {
        $images .= "
                <div class='$class'>
                    <div class='service-image'>

                        <img src='$image' style='height: $height; width:$width;'>
                        <input class=\"btn btn-blue update\" type=\"button\" value=\"View Image\" onclick='location.href=\"$image\"'/>

                    </div>
                </div>";
    }


    echo "
<div class='container'>
    <div class='section'>
        <div class='container'>
            <div class='row service-wrapper-row'>
                $images
            </div>
        </div>
    </div>
</div>";
}
