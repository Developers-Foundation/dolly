<?php
require '../../../vendor/autoload.php';
use Stripe\Stripe;
use Stripe\Charge;

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header("HTTP/1.1 403 Forbidden");
    exit;
}

$error = 'error';
$success = 'success';

Stripe::setApiKey($_ENV['STRIPE_API_SECRET']);

try {
    if (!isset($_POST['stripeToken']))
        throw new Exception("The Stripe Token was not generated correctly");
    $token = $_POST['stripeToken'];

    $charge = Charge::create(array(
        "amount" => intval($_POST['amount']) * 100,
        "currency" => "usd",
        "description" => "Donation",
        "source" => $token,
        "receipt_email" => $_POST['receiptEmail']
    ));

    $success = 'Your payment was successful.';
    echo "{'success': true,'message': " . $success . "}";
} catch (Exception $e) {
    $error = $e->getMessage();
}


