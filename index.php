<!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script> -->
<!DOCTYPE HTML>
<html>
<?php
	include_once 'header.php';
?>
<body>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php">Contact <i class="fa fa-user"></i> Manager</a>
		</div>
	</div>
</nav>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2 col-sm-2 col-xs-12"></div>
		<div class="col-md-8 col-sm-8 col-xs-12">
			<form class="form-container">
			<h1>Login</h1>
			  <div class="form-group">
				 <label for="InputEmail1">Username</label>
				 <input type="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
				 <small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
				 <label for="InputPassword1">Password</label>
				 <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <div class="form-check">
				 <input type="checkbox" class="form-check-input" id="exampleCheck1">
				 <label class="form-check-label" for="exampleCheck1">Remember Me</label>
			  </div>
			  <a type="submit" class="btn btn-success btn-block">Sign In</a>
			  <a type="submit" class="btn btn-primary btn-block" href="signup.php">Sign Up</a>
			</form>
		</div>
		<div class="col-md-2 col-sm-2 col-xs-12"></div>
	</div>
</div>
</body>


</html>
<php>
