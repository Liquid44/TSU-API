Welcome to TSU-API
please note this is an unofficial API, trial-error created.

Quick Example Usage-:
 
// EXAMPLE 1

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

