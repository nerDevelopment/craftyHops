<?php
//to get user information grab the session information
  $emailTo = 'swampgliders@gmail.com';
  $subject = 'Add new Beer';
  $name = $_POST['name'];
  $brewed = $_POST['brewed'];
  $img = $_POST['beerimage'];
  $header = "Beer name: $name Brewed by: $brewed Image: $img";
  
   mail($header) or die("Error");   
?>