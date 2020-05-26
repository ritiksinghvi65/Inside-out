<?php

if (isset($_POST['submit'])){

 $name = filter_input (INPUT_POST, 'name');
 $phone =filter_input (INPUT_POST, 'phone');
 $email =filter_input (INPUT_POST, 'email');

 if(empty($name) || empty($phone) || empty($email))
{
  echo'<script> alert ("Please fill all the details")</script>';
}
else {
    $host = "insideout.com";
    $dbusername="root";
    $dbpassword="";
    $dbname="newdata";

    $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

    if(mysqli_connect_error()){
        die("Connection Error(" . mysqli_connect_error() .")"
        . mysqli_connect_error());
    }
    else{
        $sql = "INSERT INTO formdata(name, phone, email)
        values('$name','$phone','$email')";

if($conn->query($sql)){
    echo "<script>alert('Register successfully')</script>";
    header("Location: http://insideout.com");
exit();
}
else {
    echo "failed" .$sql. "<br>" .$conn->error;
}
        $conn->close();
    }
}
}
?>