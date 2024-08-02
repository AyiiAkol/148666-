<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = 'your-email@example.com'; // Replace with your email address
    $subject = 'New Contact Form Inquiry';
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo '<p>Email received and will get back to you.</p>';
    } else {
        echo '<p>There was an error sending your email. Please try again.</p>';
    }
}
?>
