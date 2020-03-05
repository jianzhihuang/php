<?php
  $emailTo = "p0921442701@gmail.com";
  $title = "Test Email";
  $body = "That is test email content.";
  $headers = "Form : myEmail@address.com";

  echo mail($emailTo,$title,$body,$headers);




?>
