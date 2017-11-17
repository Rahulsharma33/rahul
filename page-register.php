<?php include('server2.php') ?>
<!DOCTYPE html>
 <html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        
        <meta username="viewport" content="width=device-width">

		<link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/icomoon-social.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/leaflet.css" />
		
		<link rel="stylesheet" href="css/main.css">

        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        
        

        
		      <div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label> username</label>
			<input type="text" name="username" value="<?php echo $username;?>">
		
		</div>
		<div class="input-group">
		<label>Email</label>
			<input type=email" name="email" value="<?php echo $email?>">
			</div>
			<div class="input-group">
		<label>Password</label>
			<input type=password" name="password" value="<?php echo $password?>">
			</div>
		</div>
		</div>	
		
		<div class="input-group">
			<button type = "submit" class = "btn" name="reg_user">Click to Register</button>
		</div>
	</form> 
     
    <!-- If form submitted, insert values into the database. -->
	<?php
    if (isset($_REQUEST['username'])){ 
		$username = stripslashes($_REQUEST['username']); 
		$username = mysqli_real_escape_string($con,$username);
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password); 

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username,email,password) VALUES ('$username','$email','$password')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='page-login.php'>Login</a></div>";
        }
    }
		
        ?>		

        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
        <script src="js/jquery.fitvids.js"></script>
        <script src="js/jquery.sequence-min.js"></script>
        <script src="js/jquery.bxslider.js"></script>
        <script src="js/main-menu.js"></script>
        <script src="js/template.js"></script>

    </body>
</html>