

// this identifies your website in the createToken call below
Stripe.setPublishableKey('pk_test_QDYPRtpiEelxK6ZQdope0gT0');

$(document).ready(function() {
    $("#payment-form").submit(function(event) {
        // disable the submit button to prevent repeated clicks
        $('#submit-button').attr("disabled", "disabled");

        // createToken returns immediately - the supplied callback submits the form if there are no errors
        Stripe.createToken({
            name: $('#customer_name').val(),
            address_line1: $('#address_line1').val(),
            address_zip: $('#address_zip').val(),
            address_city: $('#address_city').val(),
            address_state: $('#address_state').val(),
            address_country: $('#address_country').val(),
            number: $('#card-number').val(),
            cvc: $('#card-cvc').val(),
            exp_month: $('#card-expiry-month').val(),
            exp_year: $('#card-expiry-year').val()
        }, stripeResponseHandler);

        return false; // submit from callback
    });
});

function stripeResponseHandler(status, response) {
    if (response.error) {
        // re-enable the submit button
        $('#submit-button').removeAttr("disabled");
        // show the errors on the form
        $(".payment-errors").html(response.error.message);
    } else {
        var form$ = $("#payment-form");
        // token contains id, last4, and card type
        var token = response['id'];
        // insert the token into the form so it gets submitted to the server
        form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
        // and submit
        form$.get(0).submit();
    }
}
