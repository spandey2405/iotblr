<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 01/01/16
 * Time: 5:22 PM
 */

echo '<div class="kode-event-contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="kf_heading_3">
                    <h2>Contact Us</h2>
                    <span>Internet of Things, Bangalore (IoTBLR)</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <form class="contactusform">
                    <h3>Send Us Message</h3>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" placeholder="Your Name" id="name">
                            <input type="email" placeholder="Your email" id="email">
                            <input type="text" placeholder="Subject" id="subject">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <textarea name="Message" cols="30" rows="10" id="message" placeholder="Your Message" style="height: 195px"></textarea>
                            <input type="button" value="Contact Us" name="submit" id="query" style="float: right;color: #fff;font: 16px/20px \'Montserrat\', Arial, Helvetica, sans-serif;padding: 10px 20px;outline: none; border: none;text-transform: capitalize;background-color: #00a4ef;">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
$("#query").click(function () {
    var Data = {
    "name": $("#name").val(),
    "email": $("#email").val(),
    "subject": $("#subject").val(),
    "mail": $("#message").val()
    }
    $.post("mailto.php", Data, function (data) {
    alert("Thanks for Contracting Us")
    $("#name").val("");
    $("#email").val("");
    $("#subject").val("");
    $("#message").val("");
    });
});
</script>

';

?>