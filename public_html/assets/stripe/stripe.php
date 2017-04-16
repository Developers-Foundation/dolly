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
    var_dump($_POST);
    if ($_POST['donation-type'] == "donation") {
        if (!isset($_POST['stripeToken']))
            throw new Exception("The Stripe Token was not generated correctly");

        $type = $_POST['donation-type'];
        $token = $_POST['stripeToken'];
        $name = $_POST['cardholder-name'];
        $phone = $_POST['phone-number'];
        $email = $_POST['email-address'];
        $addressZip = $_POST['address-zip'];
        $amount = intval($_POST['donate-amount']);

        $charge = Charge::create(array(
            "amount" => $amount * 100,
            "currency" => "usd",
            "description" => "Donation",
            "source" => $token,
            "receipt_email" => $_POST['email-address']
        ));

        var_dump($charge);

        $success = 'Your payment was successful.';
        echo "{'success': true,'message': " . $success . "}";
    }
} catch (Exception $e) {
    echo $error;
    $error = $e->getMessage();
}

