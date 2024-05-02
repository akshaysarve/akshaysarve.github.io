<?php
if(isset($_POST['submit'])) {
    $to = "sarveakshay@gmail.com"; // Your email address
    $subject = "New message from your website";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $headers = "From: $name <$email>";

    // Send email
    if(mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Your message has been sent.');</script>";
    } else {
        echo "<script>alert('Failed to send your message. Please try again later.');</script>";
    }
}
?>
