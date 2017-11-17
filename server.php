<?php 
	session_start();

	$event_name = "";
	$event_type  = "";
	$location  = "";
	$start_date   = "";
	$end_date = ""; 
	$start_time="";
	$end_time="";
	$errors=array();
	$_SESSION['success'] = "";

	$db = mysqli_connect('localhost', 'root', '', 'registration');

	if (isset($_POST['reg_user'])) {
		
		$event_name = mysqli_real_escape_string($db, $_POST['event_name']);
		$event_type = mysqli_real_escape_string($db, $_POST['event_type']);
		$location = mysqli_real_escape_string($db, $_POST['location']);
		$start_date = mysqli_real_escape_string($db, $_POST['start_date']);
		$end_date = mysqli_real_escape_string($db, $_POST['end_date']);
		$start_time = mysqli_real_escape_string($db, $_POST['start_time']);
		$end_time = mysqli_real_escape_string($db, $_POST['end_time']);

		

		if (empty($event_name)) { array_push($errors, "event_name is required"); }
		if (empty($event_type)) { array_push($errors, "event_type is required"); }
		if (empty($location)) { array_push($errors, "location is required"); }
		if (empty($start_date)) { array_push($errors, "date Number is required"); }
		if (empty($end_date)) { array_push($errors, " is required"); }

				if (empty($start_time)) { array_push($errors, " is required"); }
						if (empty($end_time)) { array_push($errors, "is required"); }



		if (count($errors) == 0) {
			$query = "INSERT INTO events (event_name, event_type, location, start_date, end_date, start_time, end_time) 
					  VALUES('$event_name', '$event_type', '$location', '$start_date', '$end_date', '$end_time', '$end_time')";
			mysqli_query($db, $query);

			$_SESSION['event_name'] = $event_name;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}


	if (isset($_POST['login_user'])) {
		$event_name = mysqli_real_escape_string($db, $_POST['event_name']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($event_name)) {
			array_push($errors, "event_name is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = ($password);
			$query = "SELECT * FROM events WHERE event_name='$event_name' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['event_name'] = $event_name;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong event_name/password combination");
			}
		}
	}

?>