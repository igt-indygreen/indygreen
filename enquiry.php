<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "digitaligt35@gmail.com"; // 🔹 Change this to your email address
    $subject = "New Enquiry from Website";

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);
    $enquiry_for = htmlspecialchars($_POST['enquiry_for']);

    $body = "
    You have received a new enquiry:
    ----------------------------------
    Enquiry For: $enquiry_for
    Name: $name
    Email: $email
    Phone: $phone
    Message: 
    $message
    ----------------------------------
    Sent from your website form.
    ";

    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: enquiry.html?success=1");
        exit();
    } else {
        echo "Error: Unable to send email. Please try again later.";
    }
} else {
    echo "Invalid Request.";
}
?>
