<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Your email address where you want to receive the form data
    $to = "alfidotech@gmail.com";

    // Subject of the email
    $subject = "New Contact Form Submission";

    // Create the email content
    $email_content = "You have received a new message from your contact form.\n\n";
    $email_content .= "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Message: \n$message\n";

    // Email headers
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        // Success message
        echo "Thank you! Your message has been sent.";
    } else {
        // Error message
        echo "Oops! Something went wrong, and we couldn't send your message.";
    }
}
?>
