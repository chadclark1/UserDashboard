<?php 
// var_dump($this->session->flashdata('login_error')); 
?>


<!DOCTYPE html>
<html>
	<head>
		<title>User Dashboard</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="../assets/style.css">

	</head>
		<body>
		<header>
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <a href="/">
				      <h1 class="navbar-brand">
				       	User Dashboard
				      </h1>
			      </a>
			    </div>
			    <div class="text-right navigation">
				      <a href="/users/signin" class="btn btn-primary">Sign In</a>
				      <a href="/users/registration" class="btn btn-success">Register</a>
			      </div>
			  </div>
			</nav>
		</header>
		<div class="container">
			<div>
<?php
$error = $this->session->flashdata('login_error');
if($error){
?>
				<h5><?php echo $error ?></h5>
<?php
}
?>
			</div>
			<h2>Register</h2>
			<div class="col-md-5">
				<form action="/users/register" method="post" >
					<fieldset>
						<label for="first_name"> First name:</label>
						<input type="text" name="first_name" class="form-control"></input>
					</fieldset>
					<fieldset>
						<label for="last_name"> Last Name:</label>
						<input type="text" name="last_name" class="form-control"></input>
					</fieldset>
					<fieldset>
						<label for="email"> Email Address:</label>
						<input type="text" name="email" class="form-control"></input>
					</fieldset>
					<fieldset>
						<label for="password"> Password:</label>
						<input type="password" name="password" class="form-control"></input>
					</fieldset>
					<fieldset>
						<label for="confirm"> Confirm Password:</label>
						<input type="password" name="confirm" class="form-control"></input>
					</fieldset>
					<button type="submit" class="btn btn-success submit">Sign Up</button>
				</form>
				<a href="/users/signin"><p>Already have an account? Sign In!</p></a>
			</div>

		</div>
	</body>
</html>