<?php
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$message = $_POST['message'];
	$subject = $_POST['subject'];
	
	$mailTo = "ftc15142@gmail.com";
	$headers = "From : ".$mail;
	$txt = "You Have Received An E-Mail From ".$name.".\n\n".$message;
	mail($mailTo, $subject, $txt, $headers);
	header("Location : iletişim.html?mailsend");
	
}

?>