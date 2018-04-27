<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		session_unset(); //remove all session variables

		session_destroy(); //destroy the session

		header("Location: login.php")

	?>
		Logged out successfully.

</body>
</html>