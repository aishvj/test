<?php
include('../partials/connect.php');
$email=$_POST['email'];
$password=$_POST['password'];
$password2=$_POST['password2'];
$subject = "Registration done!";

$message = 'Dear ';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//mail($email,$subject,$message,$headers);



if ($password==$password2) {
	$passw=md5($password);
	$sql="INSERT INTO customers(username, password) VALUES('$email','$passw')";
	$connect->query($sql);
	echo "<script> alert('You are registered');
			window.location.href='../customerforms.php';
			</script>";
}else{
	echo "<script> alert('Password did not match');
			window.location.href='../customerforms.php';
			</script>";
     }

	 if (mail($email, $subject, $message, $headers)) {
		echo "<h1>Email successfully sent to $email...</h1>";
	} else {
		echo "<h1>Email sending failed...</h1>";
	}

//$message .= "We welcome you to be part of family<br><br>";
//$message .= "Regards,<br>";

// Always set content-type when sending HTML email

// More headers
//$headers .= 'From: <enquiry@example.com>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";










?>
