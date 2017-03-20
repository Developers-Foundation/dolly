<?php
require '../../../vendor/autoload.php';
require '../../../vendor/stripe/stripe-php/init.php';

$error = 'error';
$success = 'success';

if ($_POST) {
    \Stripe\Stripe::setApiKey('sk_test_M2T4OhPoG0Tax3JXdoZqAoBI');

    try {
        if (!isset($_POST['stripeToken']))
            throw new Exception("The Stripe Token was not generated correctly");

        \Stripe\Charge::create(array(
            "amount" => 1000,
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


