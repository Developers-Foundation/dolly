/**
 * Created by harrisonchow on 4/15/17.
 */

$(document).ready(function () {
    var stripe = Stripe('pk_test_QDYPRtpiEelxK6ZQdope0gT0');
    var elements = stripe.elements();

    // Custom styling can be passed to options when creating an Element.
    var style = {
        base: {
            // Add your base input styles here. For example:
            fontSize: '16px',
            lineHeight: '24px'
        }
    };

    // Create an instance of the card Element
    var card = elements.create('card', {style: style, hidePostalCode: true});

    // Add an instance of the card Element into the `card-element` <div>
    card.mount('#card-element');

    function setOutcome(result, form) {
        var successElement = document.querySelector('.success');
        var errorElement = document.querySelector('.error');
        successElement.classList.remove('visible');
        errorElement.classList.remove('visible');

        if (result.token) {
            // Use the token to create a charge or a customer
            // https://stripe.com/docs/charges

            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', result.token.id);
            form.append(hiddenInput);

            var dataString = form.serialize();

            // TODO: Change to ajax submit so the thing can be a little more smart
            // form.submit();
            $.ajax({
                type: 'POST',
                url: 'assets/stripe/stripe.php',
                data: dataString,
                success: function (response) {
                    $('#overlay').addClass('hidden');
                    $('#donate-modal').modal("hide");

                    if (isJsonString(response)) {
                        response = JSON.parse(response);

                        if (!response.hasOwnProperty('success')) {
                            $('#errorResponse').append(JSON.stringify(response)).removeClass('hidden');
                        } else if (response['success']) {
                            $('#successResponse').append(response['message']).removeClass('hidden');
                        } else if (!response['success']) {
                            $('#errorResponse').append(response['message']).removeClass('hidden');
                        }
                    } else {
                        $('#errorResponse').append('An error has occurred and your payment did not go through. ' +
                            'Please try again later, or check the console for more information.').removeClass('hidden');
                        console.error(response);
                    }
                    window.scrollTo(0, 0);
                    $('#successResponse')[0].scrollIntoView(false);
                },
                error: function () {
                    $('#overlay').addClass('hidden');
                    $('#donate-modal').modal("hide");
                    $('#errorResponse').append("An error has occurred with submitting the form.").removeClass('hidden');
                    window.scrollTo(0, 0);
                    $('#successResponse')[0].scrollIntoView(false);
                }
            });

            //successElement.querySelector('.token').textContent = result.token.id;
            //successElement.classList.add('visible');
        } else if (result.error) {
            errorElement.textContent = result.error.message;
            errorElement.classList.add('visible');
        }
    }

    card.on('change', function (event) {
        setOutcome(event);
    });

    document.querySelector('form').addEventListener('submit', function (e) {
        e.preventDefault();

        $('#errorResponse').addClass('hidden');
        $('#successResponse').addClass('hidden');
        $('#overlay').removeClass('hidden');

        var form = $('#donate-form');
        var extraDetails = {
            name: $('input[name=cardholder-name]').value,
            address_zip: $('input[name=address-zip]').value,
            phone_number: $('input[name=phone-number]').value
        };
        stripe.createToken(card, extraDetails).then(function (a) {
            setOutcome(a, form)
        });
    });
});

function isJsonString(str) {
    try {
        JSON.parse(str);
    } catch (e) {
        console.error(e);
        return false;
    }
    return true;
}
