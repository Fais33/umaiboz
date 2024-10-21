<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['your-name']);
    $email = htmlspecialchars($_POST['your-email']);
    $message = htmlspecialchars($_POST['your-message']);

    $to = "ahnas083@gmail.com"; // Replace with your email address
    $subject = "New message from contact form";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Set content-type header for sending HTML email
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message sending failed.";
    }
}
?>
