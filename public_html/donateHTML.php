<div class="donateHTML">
    <div class="donateBG">
        <div class="caption">
            <h1>Donate</h1>
            <div class="captionRectangle"></div>
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
        <div class="row text-center">
            <div class="col-md-6">
                <button class="btn donateGreen" data-toggle="modal" data-target="#donate-modal"><a>Donate</a></button>
            </div>
            <div class="col-md-6">
                <button class="btn donateGreen"><a>Sponsor a Child</a></button>
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
            <div class="col-md-6 positionfix">
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
            <div class="col-md-6 imgPadding">
                <img class="img-responsive" src="assets/img/main/donate2.jpg">
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
                <form>
                    <input type="text" name="cardnumber" placeholder="Full Name">
                    <input type="text" name="expiration" placeholder="Address">
                    <input type="text" name="cvc" placeholder="Postal Code" style="width: 49%;">
                    <input type="text" name="cvc" placeholder="Country" style="width: 49%">
                    <input type="text" name="cvc" placeholder="Email">
                    <input type="text" name="cvc" placeholder="Phone Number">
                </form>

                <h4>Card Details  <i class="fa fa-lock" style="padding-left: 3px"></i></h4>
                <form action="../stripe.php" method="POST" id="payment-form">
                    <input type="text" name="cardnumber" placeholder="Card Number" data-stripe="number">
                    <input type="text" name="expMM" placeholder="Expiration - MM" data-stripe="exp_month" style="width: 49%;">
                    <input type="text" name="expYY" placeholder="Expiration - YY" data-stripe="exp_year" style="width: 49%;">
                    <input type="text" name="cvc" placeholder="CVC" data-stripe="cvc">
                    <input type="text" name="amount" placeholder="Amount ($)" disabled="disabled">
                    <input type="submit" name="submit" class="donate donatemodal-submit submit" value="Submit Payment">
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
    <script type="text/javascript" src="assets/js/stripe.js"></script>
</div>