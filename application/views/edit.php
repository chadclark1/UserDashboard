<?php 
	var_dump($this->session->flashdata('success'));
	// var_dump($user_data);
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
			    <div class="text-right">
				   <a href="/users/dashboard">Dashboard</a>
			      	<a href="/users/edit">Profile</a>
			      	<a href="/users/logout" class="btn btn-primary">Sign Out</a>
			    </div>
			  </div>
			</nav>
		</header>
		<div class="container">
			<h2>Edit Profile/User - </h2>
			<div class="col-md-6">
				<div class="edit-form">
					<h5>Edit Information</h5>
					<form action="/users/update_info" method="post">
						<fieldset class="form-group">
						    <label for="first_name">First Name:</label>
						    <input type="text" class="form-control" name="first_name" id="first_name" value="<?php echo $user_data['first_name']?>" >
						</fieldset>
						<fieldset class="form-group">
						    <label for="last_name">Last Name:</label>
						    <input type="text" class="form-control" name="last_name" id="last_name"value="<?php echo $user_data['last_name']?>">
						</fieldset>
						<fieldset class="form-group">
						    <label for="email">Email:</label>
						    <input type="text" class="form-control" name="email" id="email" value="<?php echo $user_data['email']?>">
						</fieldset>
						<button type="submit" class="btn btn-success">Save</button>
					</form>
				</div>
			</div>
			<div class="col-md-6">
<?php
$error = $this->session->flashdata('login_error');
if($error){
?>
				<h5><?php echo $error ?></h5>
<?php
}
?>
<?php
$success = $this->session->flashdata('success');
if($success){
?>
				<h5><?php echo $success ?></h5>
<?php
}
?>
				<div class="edit-form">
					<h5>Edit Password</h5>
					<form action="/users/update_password" method="post">
						<fieldset class="form-group">
						    <label for="password">Password:</label>
						    <input type="password" class="form-control" name="password" id="password">
						</fieldset>
						<fieldset class="form-group">
						    <label for="confirm">Confirm Password:</label>
						    <input type="password" class="form-control" name="confirm" id="confirm">
						</fieldset>
						<button type="submit" class="btn btn-success">Update password</button>
					</form>
					
				</div>
			</div>
			<div class="col-md-12">
				<div>
					<h5>Edit Description</h5>
					<form action="/users/update_description" method="post">
						<fieldset class="form-group">
						    <textarea name="description" class="form-control" rows="5"><?php echo $user_data['description']?></textarea>
						</fieldset>
						<button type="submit" class="btn btn-success">Update Description</button>
					</form>
				</div>
				
			</div>
		</div>
	</body>
</html>