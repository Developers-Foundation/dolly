<?php
require '../../../vendor/autoload.php';
require '../../../vendor/stripe/stripe-php/init.php';

$error = 'error';
$success = 'success';

if ($_POST) {
    \Stripe\Stripe::setApiKey($_ENV['STRIPE_API_SECRET']);

    try {
        if (!isset($_POST['stripeToken']))
            throw new Exception("The Stripe Token was not generated correctly");

        \Stripe\Charge::create(array(
            "amount" => intval($_POST['amount']) * 100,
            "currency" => "usd",
            "card" => $_POST['stripeToken'],
            "receipt_email" => $_POST['receiptEmail']
        ));

        $success = 'Your payment was successful.';
        echo $success;
    }
    catch (Exception $e) {
        $error = $e->getMessage();
    }
}


