

// this identifies your website in the createToken call below
Stripe.setPublishableKey('pk_test_QDYPRtpiEelxK6ZQdope0gT0');

function stripeResponseHandler(status, response) {
    if (response.error) {
        // re-enable the submit button
        $('.submit-button').removeAttr("disabled");
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

$(document).ready(function() {
    $("#payment-form").submit(function(event) {
        // disable the submit button to prevent repeated clicks
        $('.submit-button').attr("disabled", "disabled");

        // createToken returns immediately - the supplied callback submits the form if there are no errors
        Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
        }, stripeResponseHandler);
        return false; // submit from callback
    });
});



//
//
// $(function() {
//     var form = $('#payment-form');
//     form.submit(function(event) {
//         // Disable the submit button to prevent repeated clicks:
//         form.find('.submit').prop('disabled', true);
//
//         // Request a token from Stripe:
//         Stripe.card.createToken(form, stripeResponseHandler);
//
//         // Prevent the form from being submitted:
//         return false;
//     });
// });
//
// function stripeResponseHandler(status, response) {
//     // Grab the form:
//     var form = $('#payment-form');
//
//     if (response.error) { // Problem!
//         // Show the errors on the form:
//         form.find('.payment-errors').text(response.error.message);
//         form.find('.submit').prop('disabled', false); // Re-enable submission
//
//     } else { // Token was created!
//
//         // Get the token ID:
//         var token = response.id;
//         console.log(token);
//         // Insert the token ID into the form so it gets submitted to the server:
//         form.append($('<input type="hidden" name="stripeToken">').val(token));
//
//         // Submit the form:
//         // TODO: replace with ajax to avoid redirecting
//         form.get(0).submit();
//
//         $(".alert").removeClass("hidden");
//     }
// }