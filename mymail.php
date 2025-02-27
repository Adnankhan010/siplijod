<?php
// require_once "Mail.php";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$ctype = $_POST['ctype'];
$area = $_POST['area'];
$location = $_POST['location'];
$subject = 'Website Inquiry';
$message = $_POST['message'];
$from = "info@sipljod.com";

if(!empty($email)){
//$from = "SIPL JOD <".$email.">";
$from = "info@sipljod.com";
$to = "sipljod@gmail.com";
$subject = $subject;
$body = "Inquiry For you\n\r<br>";
$body .= "Name : ".$name."\n\r<br>";
$body .= "Construction type : ".$ctype."\n\r<br>";
$body .= "Email : ".$email."\n\r<br>";
$body .= "Phone : ".$phone."\n\r<br>";
$body .= "Area : ".$area."\n\r<br>";
$body .= "Location : ".$location."\n\r<br>";
$body .= "Please check and revert Back\n\r<br>";

// $host = "mail.happyevents.co.in";
// $username = "mail@happyevetns.co.in";
// $password = "happy-8991";

// $headers = array ('From' => $from,
  // 'To' => $to,
  // 'Subject' => $subject);
  
// $smtp = Mail::factory('smtp',
  // array ('host' => $host,
    // 'auth' => true,
    // 'username' => $username,
    // 'password' => $password));

// $mail = $smtp->send($to, $headers, $body);

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: '.$from.'' . "\r\n";
// $headers .= 'Cc: myboss@example.com' . "\r\n";

$mail = mail($to,$subject,$body, $headers);
if($mail){
  echo("<p>Message successfully sent!</p>");
  header('Location: inquiry.html');
}
// if (PEAR::isError($mail)) {
  // echo("<p>" . $mail->getMessage() . "</p>");
 // } else {
  // echo("<p>Message successfully sent!</p>");
  // header('Location: contact.html');

 // }
 }
?>