<?php
include_once("header.php");
?>
    <div class="contactus">
        <div class="contactusBG">
            <div class="caption">
                <h1>Contact Us</h1>
                <!--            <div class="captionRectangle"></div>-->
            </div>
        </div>
        <div class="container contactForm">
            <div class="row">
                <p>Please don't hesitate to get in touch with us. We will get back to you as soon as we can.</p>
            </div>
            <div class="row form-group">
                <form class="form-email" action="" method="post" data-form-type="nob">
                    <div class="col-md-6">
                        <div>
                            <input type="text" class="form-control form-input-name" placeholder="Full Name:">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <input type="text" class="form-control form-input-email" placeholder="Email Address:">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control form-input-phone" placeholder="Phone Number:">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control form-input-subject" placeholder="Subject:">
                    </div>
                    <div class="col-md-12">
                            <textarea class="form-control form-input-message" placeholder="Message:"
                                      rows="6"></textarea>
                    </div>
                    <div class="col-md-12 text-center">
                        <button class="btn btn-raised btn-primary btn-lg">Send</button>
                    </div>
                </form>
                <p>
                    <b>Or find us here!</b><br><br>
                    <b>Address</b><br>
                    Plot 20, Moshood Abiola Crescent, Off Toyin street, Ikeja Lagos, Nigeria<br><br>
                    <b>Telephone</b><br>
                    (+234) 708-739-0017     (+234) 818-689-1611
                </p>
            </div>
        </div>
    </div>
<?php
include_once("footer.php");
?>