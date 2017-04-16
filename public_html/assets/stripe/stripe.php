<?php
require '../../../vendor/autoload.php';
use Stripe\Stripe;
use Stripe\Charge;
use Parse\ParseClient;
use Parse\ParseUser;
use Parse\ParseObject;

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header("HTTP/1.1 403 Forbidden");
    exit;
}

$error = 'error';
$success = 'success';

Stripe::setApiKey($_ENV['STRIPE_API_SECRET']);

try {
    ParseClient::initialize($_ENV["DB_APP_ID"], "", $_ENV["DB_MASTER_KEY"]);
    ParseClient::setServerURL($_ENV["DB_SERVER_URL"], "/parse");

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

        ParseUser::logIn($_ENV["DB_USER"], $_ENV["DB_PASS"]);
        $donation = new ParseObject("Donation");
        $donation->set("type", $type);
        $donation->set("name", $name);
        $donation->set("phone", $phone);
        $donation->set("email", $email);
        $donation->set("zipAddress", $addressZip);
        $donation->set("token", $token);
        $donation->set("amount", $amount);

        try {
            $donation->save();
        } catch (ParseException $ex) {
            throw new Exception("Failed to submit to db: " . $ex.get_message());
        }

        $success = 'Your donation was successfully received. Thank You.';
        echo "{'success': true,'message': '" . $success . "'}";
    }
} catch (Exception $e) {
    echo "{'success': false,'message': '" . $e . "'}";
}

