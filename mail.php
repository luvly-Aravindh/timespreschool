<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    $to = "aravindh@getnos.io"; // Replace with your email address
    $subject = "New Form Submission";
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Number: $number\n";
    $body .= "Message: $message\n";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email successfully sent to $to";
    } else {
        echo "Email sending failed";
    }
}
?>
