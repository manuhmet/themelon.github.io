<?php
  phpinfo();
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $submit = $_POST['sub'];
  $to = "manufr2003@outlook.com";
  $formcontent = "From: $name \n Message: $message";
  $mailheader = "From: $email \r\n";

  if (isset($submit)) {
    mail($to, $subject, $formcontent, $mailheader);
  }
?>
