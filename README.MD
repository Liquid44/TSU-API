#NO LONGER WORKING DUE TO TSU SHUTDOWN!

Welcome to TSU-API
please note this is an unofficial API, trial-error created.

This is still a work in-progress project so far there is 20+ TSU functions you can use

V0.02 will include remote user API functions

Quick Example Usage-:

	<?php
	require_once('TSULib.php');
	$tsu = new TSU();
	if ($tsu->login('USERNAME-HERE', 'PASS-HERE')) {
		$name = $tsu->getUserFullName();
		$email = $tsu->getUserEmail();
		$profilepic = $tsu->getUserProfilePicture();
		echo 'Hello, '.$name.'<br>';
		echo 'Your TSU Email is: '.$email.'<br>';
		echo '<img src="'.$profilepic.'" width="100px" height="100px" />';
	} else {
		echo 'Incorrect User or Password!';
	}
	?>

