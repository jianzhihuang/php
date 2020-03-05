<?php
  $emailTo = "p0921442701@gmail.com";
  $title = "Test Email";
  $body = "That is test email content.";
  $headers = "Form : myEmail@address.com";

  mail($emailTo,$title,$body,$headers);



?>
