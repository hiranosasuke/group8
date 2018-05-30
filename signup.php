<!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script> -->
<!DOCTYPE HTML>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
	<script src="js/script.js"></script>
</head>

<body>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Home</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavBar">
			
		</div>
	</div>
</nav>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2 col-sm-2 col-xs-12"></div>
		<div class="col-md-8 col-sm-8 col-xs-12">
			<form class="form-container" action="includes/signup.inc.php" method="POST">
			<h1>Sign Up Form</h1>
			  <div class="form-group">
				 <input type="firstname" name="first" class="form-control" id="exampleFirst" placeholder="First Name">
			  </div>
			  <div class="form-group">
				 <input type="lastname" name="last" class="form-control" id="exampleLast" placeholder="Last Name">
			  </div>
			  <div class="form-group">
				 <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
			  </div>
			  <div class="form-group">
				 <input type="uid" name="uid" class="form-control" id="exampleUser" placeholder="Username">
			  </div>
			  <div class="form-group">
				 <input type="password" name="pwd" class="form-control" id="exampleUser" placeholder="Password">
			  </div>
			  <div class="form-check">
				 <input type="checkbox" class="form-check-input" id="exampleCheck1">
				 <label class="form-check-label" for="exampleCheck1">Remember Me</label>
			  </div>
			  <button type="submit" name="submit" class="btn btn-primary btn-block">Sign Up</button>
			</form>
		</div>
		<div class="col-md-2 col-sm-2 col-xs-12"></div>
	</div>
</div>
</body>


</html>