<?php
	//create connection
	$con=mysqli_connect("localhost","C241908_idamai","winGOMC2014","C241908_landing");

	// Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	if($_POST['name']!=null && $_POST['email']!=null && $_POST['message']!=null) {
		// escape variables for security
		$name = mysqli_real_escape_string($con, $_POST['name']);
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$message = mysqli_real_escape_string($con, $_POST['message']);
		
		$sql = "INSERT INTO `users` (`name`, `email`, `message` ) VALUES ( '".$name."' , '".$email."' , '".$message."' )";
		
		if (!$con->query($sql)) {
			echo "Query execution failed: (" . $mysqli->errno . ") " . $mysqli->error;
		}
	}	
?>