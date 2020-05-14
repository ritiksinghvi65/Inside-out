<?php
if (isset($_POST['submit'])){

$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];

$to = "mail.theinsidestory@gmail.com";
$subject = "Detail";
$message = "Name:".$name."\n"."Phone:" .$phone;
$headers = "From:".$email;



if(empty($name) || empty($phone) || empty($email))
{
  echo "Please fill all the details"
}
else {
 mail($to, $subject, $message, $headers );
 echo "<script type='text/javascript'>alert(Your Appointment Booked Successfully!);
window.hisory.log(-1);
 </script>";
}
}
  ?>
