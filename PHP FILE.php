<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tour = $_POST['tour'];
    $date = $_POST['date'];
    $guests = $_POST['guests'];

    // Save booking to database or send email confirmation
    // ...

    echo "Thank you, $name. Your booking for the $tour on $date has been received.";
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cardNumber = $_POST['card-number'];
    $expDate = $_POST['exp-date'];
    $cvv = $_POST['cvv'];
    $billingAddress = $_POST['billing-address'];

    // Process payment using a payment gateway API
    // ...

    echo "Payment successful. Thank you for your purchase!";
}
?>
