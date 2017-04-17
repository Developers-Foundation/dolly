<?php
require '../../../vendor/autoload.php';
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Plan;
use Stripe\Customer;
use Stripe\Subscription;
use Parse\ParseClient;
use Parse\ParseUser;
use Parse\ParseObject;

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header("HTTP/1.1 403 Forbidden");
    exit;
}

$error = 'error';
$success = 'success';

Stripe::setApiKey($_ENV['STRIPE_API_SECRET_ALEX']);

try {
    ParseClient::initialize($_ENV["DB_APP_ID"], "", $_ENV["DB_MASTER_KEY"]);
    ParseClient::setServerURL($_ENV["DB_SERVER_URL"], "/parse");

    if (!isset($_POST['stripeToken']))
        throw new Exception("The Stripe Token was not generated correctly");

    $type = $_POST['radio-donate'];
    $token = $_POST['stripeToken'];
    $name = $_POST['cardholder-name'];
    $phone = $_POST['phone-number'];
    $email = $_POST['email-address'];
    $addressZip = $_POST['address-zip'];
    $amount = intval($_POST['donate-amount']) * 100;

    if ($_POST['radio-donate'] == "donate") {

        ParseUser::logIn($_ENV["DB_USER"], $_ENV["DB_PASS"]);

        // Create a new parse object
        $donation = new ParseObject("Donation");
        $donation->set("type", $type);
        $donation->set("name", $name);
        $donation->set("phone", $phone);
        $donation->set("email", $email);
        $donation->set("zipAddress", $addressZip);
        $donation->set("token", $token);
        $donation->set("amount", $amount);

        // Save to db
        try {
            $donation->save();
        } catch (ParseException $ex) {
            throw new Exception("Failed to submit to db: " . $ex . get_message());
        } finally {
            ParseUser::logOut();
        }

        $charge = Charge::create(array(
            "amount" => $amount,
            "currency" => "usd",
            "description" => "Donation",
            "source" => $token,
            "receipt_email" => $_POST['email-address']
        ));

        $success = 'Your donation was successfully received. Thank You.';
    } else if ($_POST['radio-donate'] == "subscribe") {

        // Step 1: Does the plan exist already in Stripe?
        $plan = Plan::retrieve('monthly-plan-' . $amount);

        if (!isset($plan)) {
            // Define a Plan if it doesn't exist yet
            $plan = Plan::create(array(
                "name" => "Monthly Donation",
                "id" => "monthly-plan-" . $amount,
                "interval" => "month",
                "currency" => "usd",
                "amount" => $amount
            ));
        }

        // Step 2: Create a Customer
        // TODO: Check if customer exists????
        $customer = Customer::create(array(
            "email" => $email,
            "source" => $token, // payment info
            "metadata" => array(
                "name" => $name,
                "phone" => $phone,
                "address-zip" => $addressZip
            )
        ));

        // Step 3: Subscribe Customer to Plan
        Subscription::create(array(
            "customer" => $customer->id,
            "plan" => "monthly-plan-" . $amount
        ));

        $success = 'You have successfully been subscribed at $' . ($amount / 100) . 'USD per month. Thank You!';
    } else {
        throw new Exception("Donation type has been unselected. Please go back and try again.");
    }

    echo "{'success': true,'message': '" . $success . "'}";
} catch (Exception $e) {
    echo "{'success': false,'message': '" . $e . "'}";
}

