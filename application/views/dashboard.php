<?php var_dump($this->session->all_userdata()); 
	$user_level = $this->session->userdata('user_level');

	$session = $this->session->userdata('is_logged_in');
	if ($session == FALSE) {
		redirect("/users/signin");
	}
?>

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
			      <a href="/users/logout" class="btn btn-primary">Sign Out</a>
			    </div>
			  </div>
			</nav>
		</header>
		<div class="container">
<?php
	if($user_level == "admin"){

			echo "<h2>Manage Users</h2>";
			echo "<div class='text-right'>
				<a href='/users/addnew' class='btn btn-primary'>Add New</a>
			</div>"; 

} else {

			echo "<h2>All Users</h2>"; 

}
?>
			
			<table class="table">
				<thead>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>created_at</th>
					<th>User Level</th>
<?php
	if($user_level == "admin"){
?>
						<?php echo "<th>Actions</th>" ?>
<?php
}
?>
					
				</thead>
				<tbody>
<?php
	foreach ($users as $user) {
		
?>

					<tr>
						<td><?php echo $user['id']; ?></td>
						<td><?php echo $user['first_name'] . ' ' . $user['last_name']; ?></td>
						<td><?php echo $user['email']; ?></td>
						<td><?php echo $user['created_at']; ?></td>
						<td><?php echo $user['level']; ?></td>
<?php
	if($user_level == "admin"){
?>
						<?php echo "<td><a href='/users/edit'>edit</a> | <a href='#'>remove</a></td>" ?>
<?php
}
?>
					</tr>
<?php
	}
?>

				</tbody>
			</table>
		</div>
	</body>
</html>