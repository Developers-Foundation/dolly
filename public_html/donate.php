<?php
include_once("header.php");
$page = "donate";
?>

    <div class="donateHTML">
        <div class="alert alert-success alert-dismissible hidden" role="alert"
             style="margin: 81px 0 0 0; border-radius: 0">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
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
                Not far from you, children still go to school with torn uniforms, with no stationery, no shoes, or
                school bag.
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
        </div>
        <div class="partnerWithUs">
            <div class="row">
                <div class="col-md-12 text-center title">
                    <h1 >Partner With Us Today</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img class="img-responsive" src="assets/img/main/donate1.jpg">
                    <h2 class="title text-center">Sponsor a Child</h2>
                    <p>
                        No child should be left be left behind in schooling.
                        But around 10.5 Million Nigerian children of primary school age are not going to school.
                        <br>
                        <br>
                        <br>
                        <mark class="orange">N 7,500</mark> helps pay the tuition fees of 5 children already in school
                        <br>
                        <mark class="orange">N 12,000</mark> buys new books and stationaries for 5 children
                        <br>
                        <mark class="orange">N 40,000</mark> pays for the tuition fees of 5 primary school drop-outs by bringing htem back to school
                    </p>
                    <div class="text-center">
                        <a class="text-center">
                            <button class="btn donateGreen" id="donateModalButton" data-toggle="modal" data-target="#donate-modal">Donate</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <img class="img-responsive" src="assets/img/main/donate2.jpg">
                    <h2 class="title text-center">Support a School Building Project</h2>
                    <p>
                        Provision of more conducive learning facilities eradicates overcrowding of children
                        in classrooms and shortens the long travel distances. Children in remost communities
                        sometimes walk one to two hours to attentd school.
                        <br>
                        <br>
                        <br>
                    </p>
                    <div class="text-center">
                        <a class="text-center">
                            <button class="btn donateGreen" id="donateModalButton" data-toggle="modal" data-target="#donate-modal">Donate</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <img class="img-responsive" src="assets/img/main/donate0.JPG">
                    <h2 class="title text-center">Support an Empowerment Initiative</h2>
                    <p>
                        Education creates a platform for children to realize their potentials and become
                        all that they want to be. But 58% of school children are not meeting basic learning
                        and reading level.
                        <br>
                        <br>
                        <br>
                        <mark class="orange">N 2,000</mark> helps a child participate in an after school program.
                        <br>
                        <mark class="orange">N 3,000</mark> admits a primary school drop-out into DCF summer tutoring program.
                        <br>
                        <mark class="orange">N 3,000</mark> encourages 6 children to read a book in a school.
                        <br>
                        <mark class="orange">N 5,000</mark> provides a back-to-school kit for a child.
                    </p>
                    <div class="text-center">
                        <a class="text-center">
                            <button class="btn donateGreen" id="donateModalButton" data-toggle="modal" data-target="#donate-modal">Donate</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sponsorChild">

        </div>

        <!-- Donate Modal -->
        <div class="modal fade" id="donate-modal" tabindex="-1" role="dialog" aria-labelledby="Donate"
             aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="donatemodal-container">
                    <div class="closeModal">
                        <a data-toggle="modal" data-target="#donate-modal"><i class="fa fa-times"
                                                                              style="font-size: 16px"></i></a>
                    </div>

                    <div class="modal-header"><h1>Donate</h1></div>

                    <div class="modal-body">
                        <form action="assets/stripe/stripe.php" method="post" id="donate-form">
                            <input type="hidden" name="donation-type" value="donation"/>
                            <div class="group">
                                <label>
                                    <span>Name</span>
                                    <input name="cardholder-name" class="field" placeholder="Jane Doe"/>
                                </label>
                                <label>
                                    <span>Phone</span>
                                    <input name="phone-number" class="field" placeholder="(123) 456-7890" type="tel"/>
                                </label>
                                <label>
                                    <span>Email address</span>
                                    <input name="email-address" class="field" placeholder="jane@doe.com" type="email"/>
                                </label>
                                <label>
                                    <span>Postal code</span>
                                    <input name="address-zip" class="field" placeholder="94110"/>
                                </label>
                                <label>
                                    <span>Credit card</span>
                                    <div id="card-element" class="field"></div>
                                    <div id="card-errors"></div>
                                </label>
                            </div>

                            <div class="group">
                                <label>
                                    <span>Amount</span>
                                    <input name="donate-amount" class="field" placeholder="USD" type="number"/>
                                </label>
                            </div>
                            <button>Submit Donation</button>

                            <div class="outcome">
                                <div class="error"></div>
                                <div class="success">
                                    Success! Your Stripe token is <span class="token"></span>
                                </div>
                            </div>
                        </form>

                        <!-- to display errors returned by createToken -->
                        <!--                    <span class="payment-errors">--><?php //echo $error ?><!--</span>-->
                        <!--                    <span class="payment-success">--><?php //echo $success ?><!--</span>-->
                        <!--                    <form action="assets/stripe/stripe.php" method="post" id="payment-form">-->
                        <!--                        <h1>Donate</h1><br>-->
                        <!---->
                        <!--                        <h4>Contact Information</h4>-->
                        <!---->
                        <!--                        <input type="text" placeholder="Full Name" id="customer_name"/>-->
                        <!--                        <input type="text" placeholder="Address" id="address_line1"/>-->
                        <!--                        <input type="text" placeholder="Postal Code" id="address_zip" style="width: 49%"/>-->
                        <!--                        <input type="text" placeholder="City" id="address_city" style="width: 49%"/>-->
                        <!--                        <input type="text" placeholder="Province" id="address_state" style="width: 49%"/>-->
                        <!--                        <input type="text" placeholder="Country" id="address_country" style="width: 49%"/>-->
                        <!--                        <input type="text" placeholder="Email" name="receiptEmail"/>-->
                        <!---->
                        <!--                        <h4>Card Details <i class="fa fa-lock" style="padding-left: 3px"></i></h4>-->
                        <!---->
                        <!---->
                        <!--                        <div class="form-row">-->
                        <!--                            <input type="text" size="20" autocomplete="off" placeholder="Card Number" id="card-number"/>-->
                        <!--                        </div>-->
                        <!--                        <div class="form-row">-->
                        <!--                            <input type="text" size="4" autocomplete="off" placeholder="CVC" id="card-cvc"/>-->
                        <!--                        </div>-->
                        <!--                        <div class="form-row">-->
                        <!--                            <input type="text" size="2" placeholder="Expiration - MM" id="card-expiry-month"-->
                        <!--                                   style="width: 49%;"/>-->
                        <!--                            <input type="text" size="4" placeholder="Expiration - YYYY" id="card-expiry-year"-->
                        <!--                                   style="width: 49%;"/>-->
                        <!--                        </div>-->
                        <!--                        <div class="form-row">-->
                        <!--                            <input type="text" name="amount" placeholder="Donation Amount ($)">-->
                        <!--                        </div>-->
                        <!--                        <!--<input type="submit" name="submitButton" class="donate donatemodal-submit submit" value="Donate">-->
                        <!--                        <input type="submit" class="donate donatemodal-submit submit" id="submit-button"-->
                        <!--                               value="Donate"/>-->
                        <!-- -->
                        <!--                        <p>Your card will be charged only once, with the donation amount specified above.</p>-->
                        <!--                    </form>-->

                        <div class="donate-help">
                            <!--                    <a href="#">Help</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sponsor a Child Modal -->
        <!--    <div class="modal fade" id="sponsor-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">-->
        <!--        <div class="modal-dialog">-->
        <!--            <div class="donatemodal-container">-->
        <!--                <div class="closeModal">-->
        <!--                    <a data-toggle="modal" data-target="#sponsor-modal"><i class="fa fa-times" style="font-size: 16px"></i></a>-->
        <!--                </div>-->
        <!---->
        <!--                <h1>Sponsor a Child</h1><br>-->
        <!---->
        <!--                <h4>Contact Information</h4>-->
        <!---->
        <!--                <form action="assets/stripe/stripe.php" method="POST" id="sponsor-form">-->
        <!--                    <p class="payment-errors"></p>-->
        <!---->
        <!--                    <input type="hidden" name="type" value="sponsor">-->
        <!--                    <input type="text" name="name"            placeholder="Full Name"    data-stripe="name">-->
        <!--                    <input type="text" name="address_line1"   placeholder="Address"      data-stripe="address_line1">-->
        <!--                    <input type="text" name="address_zip"     placeholder="Postal Code"  data-stripe="address_zip"  style="width: 49%">-->
        <!--                    <input type="text" name="address_city"    placeholder="City"         data-stripe="address_city" style="width: 49%">-->
        <!--                    <input type="text" name="address_state"   placeholder="Province"     data-stripe="address_state" style="width: 49%">-->
        <!--                    <input type="text" name="address_country" placeholder="Country"      data-stripe="address_country" style="width: 49%">-->
        <!--                    <input type="text" name="receipt_email"   placeholder="Email">-->
        <!--                    <input type="text" name="receipt_number"  placeholder="Phone Number">-->
        <!---->
        <!--                    <h4>Card Details  <i class="fa fa-lock" style="padding-left: 3px"></i></h4>-->
        <!---->
        <!--                    <input type="text"   name="cardnumber"      placeholder="Card Number"       data-stripe="number">-->
        <!--                    <input type="text"   name="exp_month"       placeholder="Expiration - MM"   data-stripe="exp_month" style="width: 49%;">-->
        <!--                    <input type="text"   name="exp_year"        placeholder="Expiration - YY"   data-stripe="exp_year"  style="width: 49%;">-->
        <!--                    <input type="text"   name="cvc"             placeholder="CVC"               data-stripe="cvc">-->
        <!--                    <input type="text"   name="amount"          placeholder="Monthly Donation Amount ($)" >-->
        <!--                    <input type="submit" name="submitButton" class="donate donatemodal-submit submit" value="Sponsor">-->
        <!--                    <p>Your card will be charged monthly with the donation amount specified above. Please email us at-->
        <!--                        example@example.com if you would like us to remove your card from the sponsors list.</p>-->
        <!--                </form>-->
        <!--                <span class="payment-errors"></span>-->
        <!---->
        <!--                <div class="donate-help">-->
        <!--                    <!--                    <a href="#">Help</a>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->

        <script
                src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
                integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc="
                crossorigin="anonymous"></script>
        <!--        <script type="text/javascript" src="./assets/js/stripe.js"></script>-->

    </div>

<?php
include_once("footer.php");
?>