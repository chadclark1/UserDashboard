<?php ?>


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
			<h2>All Users</h2>
			<div class="text-right">
				<a href="#" class="btn btn-primary">Add New</a>
			</div>
			<table class="table">
				<thead>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>created_at</th>
					<th>User Level</th>
					<th>actions</th>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>CHad</td>
						<td>c@g.com</td>
						<td>10/26/88</td>
						<td>admin</td>
						<td><a href="#">edit</a> <a href="#">remove</a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</body>
</html>