<?php

  $name = $_POST['name'];
  $email= $_POST['email'];
  $subject= $_POST['subject'];
  $message= $_POST['message'];

  $to = "info@customraptors.com";
  $subject = "Email from CustomRaptors Website";
  $txt= "\r Full Name = ".$name. "\r\n  Email = " .$email. "\r\n  Subject = " . $subject . "\r\n  Message = " . $message . "";
  $headers = "From: ".$email ;

  mail($to,$subject,$txt,$headers);

  header("Location:index.html");

  ?>
