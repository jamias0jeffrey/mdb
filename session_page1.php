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
		require_once"header1.php";
	?>
	
	<?php
		if(isset($_SESSION["user"])){
			echo "<h1>Hello " . $_SESSION['user'] . "</h1>";
		} else {
			echo "No logged in user found.";
		}
	?>


</body>
</html>