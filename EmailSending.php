<?php
   $to = "achaurasiya59@gmail.com";
   $subject = "This is subject";
   $message = "<b>This is HTML message.</b>";
   $header = "achaurasiya59@gmail.com";
   $headers =  'MIME-Version: 1.0' . "\r\n"; 
   $headers .= 'From: Your name <achaurasiya59@gmail.com>' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
   if(mail($to, $subject, $message, $headers)) {
      echo "Message sent successfully...";
   }else {
      echo "Message could not be sent...";
   }
?>
