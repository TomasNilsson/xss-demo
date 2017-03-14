<?php
	include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Netlight XSS Demo</title>
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<div class="container">
			
			<div class="blog-header">
				<h1>Welcome <?php echo $current_user ?></h1>
				<a href="logout.php"><button type="button" class="btn btn-primary">Log Out</button></a>
			</div>

			<div class="row">
				<div class="well col-xs-12 col-md-10">
					<h2>Blog Post <small>by admin</small></h2>
					<p><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Posted on March 17, 2017 at 12:00</p>

					<hr>
					<img class="img-responsive center-block" src="images/cookies.png">
					<hr>

					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>

					<hr>

					<div class="well">
						<h4>Leave a Comment:</h4>
						<form role="form">
							<div class="form-group">
								<textarea class="form-control" rows="3"></textarea>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>

					<div class="media">
						<a class="pull-left" href="#">
							<img class="media-object" src="images/admin.png">
						</a>
						<div class="media-body">
							<h4 class="media-heading">admin
								<small>March 17, 2017 at 12:10</small>
							</h4>
							Please leave some comments
						</div>
					</div>

					<div class="media">
						<a class="pull-left" href="#">
							<img class="media-object" src="images/attacker.png" alt="">
						</a>
						<div class="media-body">
							<h4 class="media-heading">attacker
								<small>March 17, 2017 at 19:15</small>
							</h4>
							Great blog post!
						</div>
					</div>

				</div>
			</div>
		</div>
	</body>
</html>