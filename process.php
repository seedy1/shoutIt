<?php 
include 'database.php';

	if (isset($_POST['submit'])) {
		$user = mysqli_real_escape_string($conn, $_POST['user']);
		$message = mysqli_real_escape_string($conn, $_POST['message']);
		
	date_default_timezone_set('Africa/Dakar');
	$time = date('h:i:s',time());

	if (!isset($user) || $user == '' || !isset($message)) {
		// echo "bad";
		$err = "please fill yr name and a msg";
		header("Location: index.php?urlencode($err)");
	}else{
		$query = "INSERT INTO shouts (user, message, time)
		VALUES ('$user','$message','$time')";

		if (!mysqli_query($conn, $query)) {
			die('Error: '.mysqli_error($conn));
		}else{
			header("Location: index.php");
			exit();
		}
	}

	}

 ?>