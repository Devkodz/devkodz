<?php
 

$fname = $_POST['fname'];
$lname= $_POST['lname'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$message= $_POST['message'];


$to = "dev.kodz.01@gmail.com";

$subject = "Mail From Devkodz";

$txt ="FirstName : ". $fname . "\r\nLastName : " . $lname . "\r\nEmail : " . $email . "\r\nPhone : " . $phone . "\r\nMessage : " . $message;


$headers = "From: client@devkodz.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);

  //echo "Your mail has been sent successfuly ! Thank you for your feedback";
} 
else 
{
 //echo "Your mail has been sent successfuly ! Thank you for your feedback";
}
?>