<?php
	session_start();
	include('dbConfig.php');	
	// variable declaration
	
	$username = "";
	$email    = "";
	$errors = array(); 
	$folder_name = "";
	$_SESSION['success'] = "";
	
	//check username and password
	if (isset($_POST['login_user'])) :	
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) :
			array_push($errors, "Username is required");
		endif;
		
		if (empty($password)) :
			array_push($errors, "Password is required");
		endif;

		if (count($errors) == 0) :
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) :
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: gallery_view.php');
			else :
				array_push($errors, "Wrong username/password combination");
			endif;
		endif;
	endif;
?>