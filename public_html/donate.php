<?php
$page = "donate";
include_once("header.php");
?>
<div class="donateHTML">
    <div id="successResponse" class="alert alert-success alert-dismissible hidden" role="alert"
         style="margin: 81px 0 0 0; border-radius: 0">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
        <strong>Thank you! </strong>
    </div>

    <div id="errorResponse" class="alert alert-danger alert-dismissible hidden" role="alert"
         style="margin: 81px 0 0 0; border-radius: 0">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
        <strong>Oh no! </strong>
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
        <div class="row text-center" style="padding-top: 10px">
            <div class="col-md-12">
                <a>
                    <button class="btn donateGreen" data-toggle="modal" data-target="#donate-modal">Donate</button>
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
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dolor arcu, sodales eu lacus
                        vel,
                        pulvinar dapibus odio. Aliquam aliquet consequat rutrum. Lorem ipsum dolor sit amet,
                        consectetur
                        adipiscing elit. Integer volutpat neque sed arcu efficitur volutpat. Ut eget dolor sit amet
                        risus
                        lacinia tempor. Pellentesque dictum blandit ante in lobortis. Nulla facilisi. Suspendisse
                        aliquet
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
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dolor arcu, sodales eu lacus
                        vel,
                        pulvinar dapibus odio. Aliquam aliquet consequat rutrum. Lorem ipsum dolor sit amet,
                        consectetur
                        adipiscing elit. Integer volutpat neque sed arcu efficitur volutpat. Ut eget dolor sit amet
                        risus
                        lacinia tempor. Pellentesque dictum blandit ante in lobortis. Nulla facilisi. Suspendisse
                        aliquet
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
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dolor arcu, sodales eu lacus
                        vel,
                        pulvinar dapibus odio. Aliquam aliquet consequat rutrum. Lorem ipsum dolor sit amet,
                        consectetur
                        adipiscing elit. Integer volutpat neque sed arcu efficitur volutpat. Ut eget dolor sit amet
                        risus
                        lacinia tempor. Pellentesque dictum blandit ante in lobortis. Nulla facilisi. Suspendisse
                        aliquet
                        a tortor sit amet sollicitudin. Sed cursus finibus risus, quis posuere purus semper quis.
                        Vivamus non ex dapibus, pretium nulla at, iaculis arcu. Vivamus commodo purus eget diam
                        luctus consequat.
                    </p>
                </div>
            </div>
        </div>
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
                        <label><input type="radio" name="radio-donate" value="donate" checked="checked"> Donate Once
                        </label>
                        <label><input type="radio" name="radio-donate" value="subscribe"> Donate Monthly</label>
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
                                <input name="donate-amount" class="field" placeholder="USD" type="number" min="1"/>
                            </label>
                        </div>
                        <button>Submit Donation <i class="fa fa-lock" style="padding-left: 3px"></i></button>

                        <div class="outcome">
                            <div class="error"></div>
                            <div class="success">
                                Success! Your Stripe token is <span class="token"></span>
                            </div>
                        </div>
                    </form>

                    <div class="donate-help">
                        <!--                    <a href="#">Help</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script
            src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
            integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc="
            crossorigin="anonymous"></script>
    <!--        <script type="text/javascript" src="./assets/js/stripe.js"></script>-->

</div>

<?php
include_once("footer.php");
?>
