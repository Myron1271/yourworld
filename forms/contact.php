<?php
if (isset($_POST['submit'])) {
  $name = $_POST ['name'];
  $mailFrom = $_POST ['email'];
  $subject = $_POST ['subject'];
  $message = $_POST ['message'];

  $mailTo = "mette.ghijsen@gmail.com";
  $headers = "From: " . $mailFrom;
  $txt = "Je hebt een email ontvangen van " . $name . ".\n\n" . $message;

  if (mail($mailTo, $subject, $txt, $headers)) {
    die ('Your message has been sent.');
  } else {
    die ('A problem has occured.');
  }
}
?>
