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
			<h2>Edit Profile/User - </h2>
			<div class="col-md-6">
				<div class="edit-form">
					<h5>Edit Information</h5>
					<form action="" method="post">
						<fieldset class="form-group">
						    <label for="first_name">First Name:</label>
						    <input type="text" class="form-control" name="first_name" id="first_name">
						</fieldset>
						<fieldset class="form-group">
						    <label for="last_name">Last Name:</label>
						    <input type="text" class="form-control" name="last_name" id="last_name">
						</fieldset>
						<fieldset class="form-group">
						    <label for="email">Email:</label>
						    <input type="text" class="form-control" name="email" id="email">
						</fieldset>
						<button type="submit" class="btn btn-success">Save</button>
					</form>
				</div>
			</div>
			<div class="col-md-6">
				<div class="edit-form">
					<h5>Edit Information</h5>
					<form action="" method="post">
						<fieldset class="form-group">
						    <label for="password">Password:</label>
						    <input type="password" class="form-control" name="password" id="password">
						</fieldset>
						<fieldset class="form-group">
						    <label for="confirm">Confirm Password:</label>
						    <input type="confirm" class="form-control" name="confirm" id="confirm">
						</fieldset>
						<button type="submit" class="btn btn-success">Update password</button>
					</form>
					
				</div>
			</div>
			<div class="col-md-12">
				<div>
					<h5>Edit Description</h5>
					<form action="" method="post">
						<fieldset class="form-group">
						    <textarea name="message" class="form-control" rows="5"></textarea>
						</fieldset>
					</form>
				</div>
				
			</div>
		</div>
	</body>
</html>