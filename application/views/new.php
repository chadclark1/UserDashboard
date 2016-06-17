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
			      <a href="#">Dashboard</a>
			      <a href="#">Profile</a>
			      <a href="#" class="btn btn-primary">Sign Out</a>
			    </div>
			  </div>
			</nav>
		</header>
		<div class="container">
			<h2>Add a new User</h2>
			<div class="text-right">
				<a href="#" class="btn btn-primary">Return to Dashboard</a>
			</div>
			<div class="col-md-5">
				<form action="" method="post" >
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
					<button type="submit" class="btn btn-success">Create</button>
				</form>
			</div>

		</div>
	</body>
</html>