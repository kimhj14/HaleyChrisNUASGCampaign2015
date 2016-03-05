<?php
	$name = $_POST['endorser-name'];
	$email = $_POST['endorser-email'];
	$image = $_FILES['endorser-photo'];
	$testimony = $_POST['endorser-testimony'];
	$bio = $_POST['endorser-bio'];

	$to = "HaleyChrisNU@gmail.com";
	$subject = "HaleyChris Endorsement";
	$message = "name: " . $name . "\n\n testimony: " . $testimony . " \n\n bio: " .$bio;
	$from = "$email";
	$headers = "From:" . $from;
	mail($to,$subject,$message,$headers);

	//echo $_FILES['photo']['tmp_name'];
	echo "Form is sent! Thank you! Please remember to send a square image of yourself to HaleyChrisNU@gmail.com and visit our connect page to get more involved!";
?>