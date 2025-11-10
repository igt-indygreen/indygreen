<?php
if (isset($_POST['submit'])) {
    $to = "digitaligt35@gmail.com"; // <-- Replace with your email address
    $subject = "New Enquiry from Website";

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $body = "
    You have received a new enquiry:

    Name: $name
    Email: $email
    Phone: $phone
    Message: $message
    ";

    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $body, $headers)) {
        echo "<div class='success'>Thank you, your enquiry has been sent successfully.</div>";
    } else {
        echo "<div class='error'>Sorry, something went wrong. Please try again later.</div>";
    }
} else {
    echo "<div class='error'>Invalid Request</div>";
}
?> 