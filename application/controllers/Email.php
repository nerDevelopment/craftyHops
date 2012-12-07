<?php
  $emailTo = 'swampgliders@gmail.com';
  $subject = 'Add new Beer';
  $name = $_POST['name'];
  $email = $_POST['brewed'];
  $mess = $_POST['image'];
  $header = "";
  
   mail($emailTo, $subject, $mess, $header) or die("Error");   
?>