<?php include ('php/login.php')?>
<!DOCTYPE html>
<html>
<head>
	<title>Galeria zdjęć</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
	integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" 
	integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet"  href="css/login.css" type="text/css">
	
</head>
<body>
	<div class="bg">
		<div class="login">

			<h2>Log to your account</h2>

			<form method="post" action="login_view.php">

				<?php include('php/errors.php'); ?>


					<input type="text" name="username" placeholder="name user" >


					<input type="password" name="password" placeholder="password">


					<button type="submit" class="btn" name="login_user">Log in</button>


					<a class="signup" href="register_view.php">Sign up</a>

			</form>
	</div>
	</div>
</body>
</html>