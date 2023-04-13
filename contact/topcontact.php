<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $datetime = $_POST['datetime-input'];

  // Set the email recipient and subject
  $to = 'josh@ttggulfcoast.com';
  $subject = 'New message from ' . $name;

  // Build the email message
  $message_body = "Name: $name\nEmail: $email\nPhone: $phone\nDate and Time: $datetime";

  // Send the email
  if (mail($to, $subject, $message_body)) {
    // Email sent successfully
    echo '<div class="success-message">Email sent successfully!</div>';
  } else {
    // Error sending email
    echo '<div class="error-message">Error sending email.</div>';
  }
}
?>