<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Send the email
  $to = 'vekuakety@gmail.com';
  $subject = 'New message from your website';
  $body = "Name: $name\nEmail: $email\nMessage:\n$message";
  $headers = "From: $email\r\nReply-To: $email\r\n";
  mail($to, $subject, $body, $headers);

  // Redirect to a thank-you page
  header('Location: thank-you.html');
  exit;
}
?>

