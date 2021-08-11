<?php
$Name = $_POST['Name']; 
$Lastname = $_POST['Lastname']; 
$email= $_POST['email']; 
$subject = $_POST['subject'];
$message = $_POST['message'];

echo $Name. "has said: <br/>".$message;
if (mail('damach.david@gmail.com', $subject, $message)){
  echo "email sent";
}else{
  echo ¨problem with the email";
}
?>
