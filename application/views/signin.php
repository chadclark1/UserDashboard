<?php ?>


<!DOCTYPE html>
<html>
	<head>
		<title>User Dashboard</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="assets/style.css">

	</head>
		<body>
		<header>
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <h1 class="navbar-brand">
			       	User Dashboard
			      </h1>
			      <a href="/users/signin" class="btn btn-primary">Sign In</a>
			      <a href="/users/registration" class="btn btn-success">Register</a>
			    </div>
			  </div>
			</nav>
		</header>
		<div class="container">
			<h2>Sign In</h2>
			<div class="col-md-5">
				<form action="" method="post" >
					<fieldset>
						<label for="email"> Email Address:</label>
						<input type="text" name="email" class="form-control"></input>
					</fieldset>
					<fieldset>
						<label for="password"> Password:</label>
						<input type="password" name="password" class="form-control"></input>
					</fieldset>
					<button type="submit" class="btn btn-success">Sign In</button>
				</form>
				<a href="/users/registration"><p>Don't have an account? Register now!</p></a>
			</div>

		</div>
	</body>
</html>