<?php
	include('session.php');
	if (isset($_POST['comment'])) {
		$comment = $_POST['comment'];
		$current_date = date('Y-m-d H:i:s');
		$insert_stmt = $db->prepare("INSERT INTO comments (content, created_at, user_id) VALUES (?, ?, ?)");
		$insert_stmt->bind_param('sss', $comment, $current_date, $userid); 
		$insert_stmt->execute();
	}
	$select_stmt = $db->prepare("SELECT c.*, u.username FROM comments c INNER JOIN users u ON c.user_id = u.id");
	$select_stmt->execute();
	$comments = $select_stmt->get_result();
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
				<h1>Welcome <?php echo $username ?></h1>
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
						<form method="post" action="">
							<div class="form-group">
								<textarea class="form-control" rows="3" name="comment" ></textarea>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>

					<?php if ($comments && $comments->num_rows > 0) {
						while($comment = $comments->fetch_assoc()) { ?>
							<div class="media">
								<a class="pull-left" href="#">
									<img class="media-object" src="images/<?php echo $comment['username']; ?>.png">
								</a>
								<div class="media-body">
									<h4 class="media-heading"><?php echo $comment['username']; ?>
										<small><?php echo date('F j, Y \a\t H:i', strtotime($comment['created_at'])); ?></small>
									</h4>
									<?php echo $comment['content']; ?>
								</div>
							</div>
					<?php }
					}
					?>

				</div>
			</div>
		</div>
	</body>
</html>