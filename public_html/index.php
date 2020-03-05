<?php
  $emailTo = "";
  $title = "Test Email";
  $body = "That is test email content.";
  $headers = "Form : myEmail@address.com";

  if(mail($emailTo,$title,$body,$headers)){

    echo "發送成功";

  }else{

    echo "發送失敗";

  };




?>
