<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"]; // Add this line to get the subject from the form
  $message = $_POST["message"];

  $to = "derrick.kapungwe@gmail.com";
  $headers = "From: $email";

  // Combine subject and message into the body of the email
  $emailBody = "Subject: $subject\n\n$message";

  // Send the email
  mail($to, $subject, $emailBody, $headers);

  // Redirect back to the contact form with a "thank you" message
  header("Location: contact.html?message=success");
}
?>
