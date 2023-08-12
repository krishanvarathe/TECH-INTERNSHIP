<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Log the form data
    $log_message = "Submission received:\n";
    $log_message .= "Name: $name\n";
    $log_message .= "Email: $email\n";
    $log_message .= "Message: $message\n";
    
    error_log($log_message, 3, "form_log.txt"); // Write to a file named form_log.txt

    // Simulate sending an email (not functional in local setup)
    $to = "krishanvarathe@gmail.com";
    $subject = "New Contact Form Submission";
    $message = "Name: $name\nEmail: $email\nMessage: $message";
    mail($to, $subject, $message);

    // Redirect to a thank-you page
    header("Location: thank_you.html");
}
?>
