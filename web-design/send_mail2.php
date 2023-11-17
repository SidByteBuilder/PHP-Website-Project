<?php
$header = "From: <".strip_tags(trim($_POST['usrname'])).">\r\n"; 
$header.= "MIME-Version: 1.0\r\n"; 
$header.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$header.= "X-Priority: 1\r\n"; 

$mail_to = 'starlinks.nz@gmail.com, starlinks.operations@gmail.com';

$name = strip_tags(trim($_POST['usrname']));
$phone = strip_tags(trim($_POST['usernumber']));
$email = strip_tags(trim($_POST['useremail']));
$subject = strip_tags(trim($_POST['usercompany']));
$detail= strip_tags(trim($_POST['msg']));
$mail_subject = 'Contact information';

if(isset($email) and !empty($email)){
$message = 'Starlinks logo/web Campaign Query'."\r\n\r\n";
$message .= 'From: '.$name."\r\n";
$message .= 'Company : '.$subject."\r\n\r\n";
$message .= 'Name: '.$name."\r\n";
$message .= 'Email: '.$email."\r\n";
$message .= 'Phone: '.$phone."\r\n";
$message .= 'Subject: '.$subject."\r\n";
$message .= 'Message : '.$detail."\r\n";

mail($mail_to,$mail_subject,$message,$header);

echo "<script> top.location='../../thankyou.php';  </script>";
} else {
	
echo "<script> top.location='../../thankyou.php?email=null';  </script>";

}
	
	