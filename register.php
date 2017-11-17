<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register Events</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Event Name</label>
			<input type="text" name="event_name" value="<?php echo $event_name;?>">
		
		</div>
		
		<div id = "n1"><label>Event Type</div>
		<div id = "f1"><select name="event_type" value="<?php echo $a = $event_type[$a]; ?>" >
			<option value="class or course">Class Or Course</option>
            <option value="Competion Of Tournament">Competion Of Tournament</option>
            <option value="concert">Concert</option>
            <option value="conference">Conference</option>			
		</select>
		<div class="input-group">
		<label>Event Location</label>
			<input type="text" name="location" value="<?php echo $location;?>">
			</div>
		</div>
		</div>	
		<div class="input-group">
			<label>Start Date</label>
			<input type="date" name="start_date" value="<?php echo $start_date; ?>">
		</div>
		<div class="input-group">
			<label>End Date</label>
			<input type="date" name="end_date" value="<?php echo $end_date; ?>">
		</div>
		<div class="input-group">
			<label>Start Time</label>
			<input type="time" name="start_time" value="<?php echo $start_time; ?>">
		</div>
		<div class="input-group">
			<label>End Time</label>
			<input type="time" name="end_time" value="<?php echo $end_time; ?>">
		</div>
		<div class="input-group">
			<button type = "submit" class = "btn" name="reg_user">Click to Register</button>
		</div>
	</form>
</body>
</html>