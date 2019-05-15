<?php
$name = $_POST['name']; 
$lastname = $_POST['lastname']; 
$email= $_POST['email']; 
$subject = $_POST['subject'];
$message = $_POST['message'];

echo $name. "has said: <br/>".$message;
if (mail('david.ramirez@uautonoma.cl', $subject, $message)){
  echo "email sent";
}else{
  echo ¨problem with the email";
}
?>
