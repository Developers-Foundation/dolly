/**
 * Created by harrisonchow on 4/15/17.
 */

$(document).ready(function() {
    var stripe = Stripe('pk_test_QChjrSlxnapDTftVFe5aHKmy');
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
            form.appendChild(hiddenInput);
            form.submit();
            //successElement.querySelector('.token').textContent = result.token.id;
            //successElement.classList.add('visible');
        } else if (result.error) {
            errorElement.textContent = result.error.message;
            errorElement.classList.add('visible');
        }
    }

    card.on('change', function(event) {
        setOutcome(event);
    });

    document.querySelector('form').addEventListener('submit', function(e) {
        e.preventDefault();
        var form = document.querySelector('form');
        var extraDetails = {
            name: form.querySelector('input[name=cardholder-name]').value,
            address_zip: form.querySelector('input[name=address-zip]').value,
            phone_number: form.querySelector('input[name=phone-number]').value
        };
        stripe.createToken(card, extraDetails).then(function(a){setOutcome(a, form)});
    });
});