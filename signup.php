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
        <?php
          if($_GET['signup']=='success'){
            echo '<button class = "btn btn-success btn-block disabled"> Sign In Success!</button>';
          }else if ($_GET['signup']=='fail'){
              echo '<button class = "btn btn-danger btn-block disabled"> Sign In Failed!</button>';
          }
         ?>
			</form>
		</div>
		<div class="col-md-2 col-sm-2 col-xs-12"></div>
	</div>
</div>
</body>


</html>
