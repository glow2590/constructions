<?php
if (isset($_POST['contact-submit'])) {
	$name = $_POST['name'];
	$mailFrom = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$mailTo = "diaanagib3@gmail.com";
	$headers = "From: ".$mailFrom;
	$txt = "you have received an email from ".$name.".\n\n".$message;
	mail($mailTo, $subject, $txt,$headers);
	header("location: index.php?mailsend")
}