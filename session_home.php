<?php

session_start();
$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);

if (authenticate($username,$password)){
	echo 'User is valid';

	$_SESSION["user"] = $username;

	header('Location: session_page1.php');
}
else {
	echo 'Incorrect login details.';

	$_SESSION['message'] = "Invalid details. Please try again.";
	header('Location: login.php');


}

function authenticate($username,$password){
	if(($username == 'admin' || $username == 'admin@mail.com') && $password == 'secret'){
		return true;
	} else {
		return false;
	}
}

?>

