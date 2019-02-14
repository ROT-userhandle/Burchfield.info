<?php

  $name = $_POST['name'];
  $email = $_POST['email'];
  $company = $_POST['company'];
  $message = $_POST['message'];

  $email_from = 'WebMaster@Burchfield.info'
  $email_subject = 'Contact Confirmation from Burchfield.info'
  $email_body = "name: $name.\n".
                "email: $email.\n".
                "company: $company.\n".
                "message: $message.\n";

              $to ="gabriel.412velo@gmail.com";
              $headers = "From: $email_from \r\n";
              $headers .= "Reply-To: $email \r\n";

              mail($to,$email-subject,$email_body,$headers);
              header("location: index.html");
?>
