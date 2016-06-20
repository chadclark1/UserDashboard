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
			      <a href="/">
				      <h1 class="navbar-brand">
				       	User Dashboard
				      </h1>
			      </a>
			    </div>
			    <div class="text-right">
				      <a href="/users/signin" class="btn btn-primary">Sign In</a>
				      <a href="/users/registration" class="btn btn-success">Register</a>
			      </div>
			  </div>
			</nav>
		</header>
		<div class="container">
			<div class="hero-unit">
			  
			  	<div class="jumbotron">
				  	<h1>Welcome to the test</h1>
				  	<p>We're going to build an application using the MVC framework.</p>
				  <a href="users/registration" class="btn btn-primary">Start</a>
				</div>
			</div>
			<row>
				<div class="col-md-4">
					<h4>Manage Users</h4>
					<p>Using this application, you'll learn how to add, remove, and edit users for the application.</p>
				</div>
				<div class="col-md-4">
					<h4>Leave messages</h4>
					<p>Users will be able to leave a messagea to another using this application.</p>
				</div>
				<div class="col-md-4">
					<h4>Edit User Information</h4>
					<p>Admins will be able to edit another user's information (email address, first name, last name, etc).</p>
				</div>
			</row>
		</div>
	</body>
</html>