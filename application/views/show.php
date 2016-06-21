<?php 
	$session = $this->session->userdata('is_logged_in');
	if ($session == FALSE) {
		redirect("/users/signin");
	}

	var_dump($this->session->all_userdata());

	// echo "<br>";
	// echo "<br>";
	// echo "<br>";

	$userdata = $this->session->userdata('userdata');

	$messages = $this->session->userdata('messages');

	$comments = $this->session->userdata('comments');

	// var_dump($userdata); 

	

	
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
			      	<a href="/users/edit/<?php echo $this->session->userdata('user_id') ?>">Profile</a>
			      	<a href="/users/logout" class="btn btn-primary">Sign Out</a>
			    </div>
			  </div>
			</nav>
		</header>
		<div class="container">
			<div class="col-md-5 user-info">
				<h4><?php echo $userdata['first_name'] . ' ' . $userdata['last_name'] ?></h4>
				<p>Registered on: <?php echo ' ' . $userdata['created_at']?></p>
				<p>User ID: <?php echo ' ' . $userdata['id']?></p>
				<p>Email address: <?php echo ' ' . $userdata['email']?></p>
				<p>Description: <?php echo ' ' . $userdata['description']?></p>
			</div>
			<div class="col-md-12">
				<!-- <h4>Leave a message for Chad</h4> -->
				<form action="/messages/add_message/<?php echo $userdata['id']  ?>" method="post">
					<fieldset>
						<label for="message"><h4>Leave a message for <?php echo ' ' . $userdata['first_name']?></h4></label>
						<textarea name="message" class="form-control" rows="5"></textarea>
					</fieldset>
					<div class="text-right">
						<button type="submit" class="btn btn-success submit">Post</button>
					</div>
				</form>
			</div>
			<div>
<?php
	
foreach ($messages as $message) {
// var_dump($message);
$id = $message['id'];

?>


				<div class="message-group">
					<br>
					<h5 class="col-md-12">Name: <!-- <?php echo $message['first_name'] . ' ' . $message['last_name'] ?> --></h5>
					<div class="col-md-12 text-right message">
						<?php echo $message['message']; ?>
					</div>
<?php
		foreach ($comments as $comment) {
			if($comment['messages_id'] === $id){

?>
						<div class="col-md-11 col-md-offset-1 text-right message">
							<?php echo $comment['comment']; ?>
						</div>
<?php
			}

		}
 ?>

					<div class = "col-md-11 col-md-offset-1 comment">
						<form action="/comments/add_comment/<?php echo $userdata['id']?>/<?php echo $message['id']?>" method="post">
							<fieldset>
								<textarea name="comment" class="form-control" rows="5" placeholder="Leave a comment"></textarea>
							</fieldset>
							<div class="text-right">
								<button type="submit" class="btn btn-success submit">Post</button>
							</div>
						</form>
					</div>
					<br>

				</div>
<?php
	}
?>
		</div>
		</div>
	</body>
</html>