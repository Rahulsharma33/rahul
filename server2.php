<?php 
	session_start();
	$username = "";
	$email  = "";
	$password  = "";
	$errors=array();
	$_SESSION['success'] = "";
	$db = mysqli_connect("localhost", "rahul", "12345", "register");
	if (isset($_POST['reg_user'])) {
	
	$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password= mysqli_real_escape_string($db, $_POST['password']);
		
		if (empty($username)) { array_push($errors, "username is required"); }
		if (empty($email)) { array_push($errors, "email is required"); }
		if (empty($password)) { array_push($errors, "password is required"); }
		
		
		if (count($errors) == 0) {
			$query = "INSERT INTO users(username,email,password)
			VALUES('$username', '$email', '$password')";
		
		mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}
	