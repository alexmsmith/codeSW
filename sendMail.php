<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
	
	
	
	$option1 = $_POST['optradio'];
	$option2 = $_POST['optradio2'];
	
	$mailTo = "info@codesw.co.uk";
	$headers = "From: ".$email;
	$txt = "You have received an e-mail from ".$name.".\n\n".$message.".\n\n"."Phone Number: ".$phone."\n\n"."Option 1: ".$option1."\n\n"."Option 2: ".$option2;

	mail($mailTo, $subject, $txt, $headers);
	header("Location: contact.php?mailsend");
}