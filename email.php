<?php
$Name = $_POST['Name']; 
$Lastname = $_POST['Last name']; 
$email= $_POST['email']; 
$subject = $_POST['subject'];
$message = $_POST['message'];

echo $Name. "has said: <br/>".$message;
if (mail('david.ramirez@uautonoma.cl', $subject, $message)){
  echo "email sent";
}else{
  echo ¨problem with the email";
}
?>
