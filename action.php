<?php

$name = $_REQUEST["name"];
$phone = $_REQUEST["phone"];
$email = $_REQUEST["email"];

if(empty($name) || empty($phone) || empty($email))
{
  echo "Please fill all the details"
}
else {
 mail("mail.theinsidestory@gmail.com", "Detail", $phone, "From: $name <$email>");
 echo "<script type='text/javascript'>alert(Your Appointment Booked Successfully!);
window.hisory.log(-1);
 </script>";
}
  ?>
