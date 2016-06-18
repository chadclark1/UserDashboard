<?php 
	$session = $this->session->userdata('is_logged_in');
	if ($session == FALSE) {
		redirect("/users/signin");
	}
?>



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
			      <a href="/users/dashboard">Dashboard</a>
			      <a href="#">Profile</a>
			      <a href="/users/logout" class="btn btn-primary">Sign Out</a>
			    </div>
			  </div>
			</nav>
		</header>
		<div class="container">
			<div class="col-md-5 user-info">
				<h4>Chad Clark</h4>
				<p>Registered on: October 26 1988</p>
				<p>User ID: 1</p>
				<p>Email address: chad@g.com</p>
				<p>Description: Hey</p>
			</div>
			<div class="col-md-12">
				<!-- <h4>Leave a message for Chad</h4> -->
				<form action="" method="post">
					<fieldset>
						<label for="message"><h4>Leave a message for Chad</h4></label>
						<textarea name="message" class="form-control" rows="5"></textarea>
					</fieldset>
					<div class="text-right">
						<button type="submit" class="btn btn-success">Post</button>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>