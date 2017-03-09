
<div class="donateHTML">
    <div class="alert alert-success alert-dismissible hidden" role="alert" style="margin: 81px 0 0 0; border-radius: 0">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Thank you!</strong> We truly appreciate your donation.
    </div>

    <div class="donateBG">
        <div class="caption">
            <h1>Donate</h1>
<!--            <div class="captionRectangle"></div>-->
        </div>
    </div>

    <div class="donateText">
        <p>
            Not far from you, children still go to school with torn uniforms, with no stationery, no shoes, or school bag.
        </p>
        <br>
        <p>
            With your donation, you can help support Dolly Children Foundation’s projects today,
            you are investingin local schools, after-school programs, and decision makers of our
            future who are key to changing our world.
        </p>
        <br>
        <p>
            Thank you.
        </p>
        <div class="row text-center" style="padding-top: 25px">
            <div class="col-md-6">
                <a>
                    <button class="btn donateGreen" data-toggle="modal" data-target="#donate-modal">Donate</button>
                </a>
            </div>
            <div class="col-md-6">
                <a>
                    <button class="btn donateGreen" data-toggle="modal" data-target="#sponsor-modal">Sponsor a Child</button>
                </a>
            </div>
        </div>
    </div>
    <div class="makeadiffernece">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1><strong>Make a Difference</strong></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 imgPadding">
                <img class="img-responsive" src="assets/img/main/donate1.jpg">
            </div>
            <div class="col-md-6 positionfix">
                <div class="positionlow">
                    <h2><strong>Children</strong></h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dolor arcu, sodales eu lacus vel,
                        pulvinar dapibus odio. Aliquam aliquet consequat rutrum. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Integer volutpat neque sed arcu efficitur volutpat. Ut eget dolor sit amet risus
                        lacinia tempor. Pellentesque dictum blandit ante in lobortis. Nulla facilisi. Suspendisse aliquet
                        a tortor sit amet sollicitudin. Sed cursus finibus risus, quis posuere purus semper quis.
                        Vivamus non ex dapibus, pretium nulla at, iaculis arcu. Vivamus commodo purus eget diam
                        luctus consequat.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-md-push-6 imgPadding">
                <img class="img-responsive" src="assets/img/main/donate2.jpg">
            </div>
            <div class="col-md-6 col-md-pull-6 positionfix">
                <div class="positionlow">
                    <h2><strong>School</strong></h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dolor arcu, sodales eu lacus vel,
                        pulvinar dapibus odio. Aliquam aliquet consequat rutrum. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Integer volutpat neque sed arcu efficitur volutpat. Ut eget dolor sit amet risus
                        lacinia tempor. Pellentesque dictum blandit ante in lobortis. Nulla facilisi. Suspendisse aliquet
                        a tortor sit amet sollicitudin. Sed cursus finibus risus, quis posuere purus semper quis.
                        Vivamus non ex dapibus, pretium nulla at, iaculis arcu. Vivamus commodo purus eget diam
                        luctus consequat.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 imgPadding">
                <img class="img-responsive" src="assets/img/main/donate3.png">
            </div>
            <div class="col-md-6 positionfix">
                <div class="positionlow">
                    <h2><strong>Everyday Life</strong></h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dolor arcu, sodales eu lacus vel,
                        pulvinar dapibus odio. Aliquam aliquet consequat rutrum. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Integer volutpat neque sed arcu efficitur volutpat. Ut eget dolor sit amet risus
                        lacinia tempor. Pellentesque dictum blandit ante in lobortis. Nulla facilisi. Suspendisse aliquet
                        a tortor sit amet sollicitudin. Sed cursus finibus risus, quis posuere purus semper quis.
                        Vivamus non ex dapibus, pretium nulla at, iaculis arcu. Vivamus commodo purus eget diam
                        luctus consequat.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Donate Modal -->
    <div class="modal fade" id="donate-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="donatemodal-container">
                <div class="closeModal">
                    <a data-toggle="modal" data-target="#donate-modal"><i class="fa fa-times" style="font-size: 16px"></i></a>
                </div>

                <h1>Donate</h1><br>

                <h4>Contact Information</h4>
                    
                <form action="assets/stripe/stripe.php" method="POST" id="payment-form">
                    <p class="payment-errors"></p>

                    <input type="hidden" name="type" value="donate">
                    <input type="text" name="name"            placeholder="Full Name"    data-stripe="name">
                    <input type="text" name="address_line1"   placeholder="Address"      data-stripe="address_line1">
                    <input type="text" name="address_zip"     placeholder="Postal Code"  data-stripe="address_zip"  style="width: 49%">
                    <input type="text" name="address_city"    placeholder="City"         data-stripe="address_city" style="width: 49%">
                    <input type="text" name="address_state"   placeholder="Province"     data-stripe="address_state" style="width: 49%">
                    <input type="text" name="address_country" placeholder="Country"      data-stripe="address_country" style="width: 49%">
                    <input type="text" name="receipt_email"   placeholder="Email">
                    <input type="text" name="receipt_number"  placeholder="Phone Number">

                    <h4>Card Details  <i class="fa fa-lock" style="padding-left: 3px"></i></h4>
                    
                    <input type="text"   name="cardnumber"      placeholder="Card Number"       data-stripe="number">
                    <input type="text"   name="exp_month"       placeholder="Expiration - MM"   data-stripe="exp_month" style="width: 49%;">
                    <input type="text"   name="exp_year"        placeholder="Expiration - YY"   data-stripe="exp_year"  style="width: 49%;">
                    <input type="text"   name="cvc"             placeholder="CVC"               data-stripe="cvc">
                    <input type="text"   name="amount"          placeholder="Donation Amount ($)" >
                    <input type="submit" name="submitButton" class="donate donatemodal-submit submit" value="Donate">
                    <p>Your card will be charged only once with the donation amount specified above.</p>
                </form>
                <span class="payment-errors"></span>

                <div class="donate-help">
<!--                    <a href="#">Help</a>-->
                </div>
            </div>
        </div>
    </div>

    <!-- Sponsor a Child Modal -->
    <div class="modal fade" id="sponsor-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="donatemodal-container">
                <div class="closeModal">
                    <a data-toggle="modal" data-target="#sponsor-modal"><i class="fa fa-times" style="font-size: 16px"></i></a>
                </div>

                <h1>Sponsor a Child</h1><br>

                <h4>Contact Information</h4>

                <form action="assets/stripe/stripe.php" method="POST" id="sponsor-form">
                    <p class="payment-errors"></p>

                    <input type="hidden" name="type" value="sponsor">
                    <input type="text" name="name"            placeholder="Full Name"    data-stripe="name">
                    <input type="text" name="address_line1"   placeholder="Address"      data-stripe="address_line1">
                    <input type="text" name="address_zip"     placeholder="Postal Code"  data-stripe="address_zip"  style="width: 49%">
                    <input type="text" name="address_city"    placeholder="City"         data-stripe="address_city" style="width: 49%">
                    <input type="text" name="address_state"   placeholder="Province"     data-stripe="address_state" style="width: 49%">
                    <input type="text" name="address_country" placeholder="Country"      data-stripe="address_country" style="width: 49%">
                    <input type="text" name="receipt_email"   placeholder="Email">
                    <input type="text" name="receipt_number"  placeholder="Phone Number">

                    <h4>Card Details  <i class="fa fa-lock" style="padding-left: 3px"></i></h4>

                    <input type="text"   name="cardnumber"      placeholder="Card Number"       data-stripe="number">
                    <input type="text"   name="exp_month"       placeholder="Expiration - MM"   data-stripe="exp_month" style="width: 49%;">
                    <input type="text"   name="exp_year"        placeholder="Expiration - YY"   data-stripe="exp_year"  style="width: 49%;">
                    <input type="text"   name="cvc"             placeholder="CVC"               data-stripe="cvc">
                    <input type="text"   name="amount"          placeholder="Monthly Donation Amount ($)" >
                    <input type="submit" name="submitButton" class="donate donatemodal-submit submit" value="Sponsor">
                    <p>Your card will be charged monthly with the donation amount above. Please email us at
                        example@example.com if you would like us to remove your card from the sponsors list.</p>
                </form>
                <span class="payment-errors"></span>

                <div class="donate-help">
                    <!--                    <a href="#">Help</a>-->
                </div>
            </div>
        </div>
    </div>

    <script
            src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
            integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc="
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript">
        Stripe.setPublishableKey('<?php echo $_ENV["STRIPE_API"]; ?>');
    </script>
    <script type="text/javascript" src="assets/js/stripe.js"></script>
</div>
