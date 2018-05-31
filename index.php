<!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script> -->
<!DOCTYPE HTML>
<html>
<?php
	include_once 'header.php';
?>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2 col-sm-2 col-xs-12"></div>
		<div class="col-md-8 col-sm-8 col-xs-12">
			<form class="form-container" action="includes/login.inc.php" method="post">
			<h1 class="display-4 text-center pb-3">Hello!</h1>
			<hr style="height:3px">
			<?php
			if(isset($_GET['login'])){

				if($_GET['login']=='empty'){
					echo '<span class="lead" style="color:red"> Please fill in Username and Password</span>';
				}else if ($_GET['login']=='error'){
						echo '<button class = "btn btn-danger btn-block disabled"> Password or Username is Incorrect!</button>';
				}
			}

			 ?>
			  <div class="form-group">
				 <label for="InputEmail1">Username</label>
				 <input type="username" name="uid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
			  </div>
			  <div class="form-group">
				 <label for="InputPassword1">Password</label>
				 <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <div class="form-check">
				 <!--<input type="checkbox" class="form-check-input" id="exampleCheck1">
				 <label class="form-check-label" for="exampleCheck1">Remember Me</label>
					We can add this later-->
			 </div>
			 <?php
			 	if(!isset($_SESSION['u_id'])){
					echo'	<input type="submit" name="submit" class="btn btn-dark btn-block" value="Log In">
								<a class="btn btn-primary btn-block" href="signup.php">Sign Up</a>';
				}
			 ?>
			</form>
		</div>
		<div class="col-md-2 col-sm-2 col-xs-12"></div>
	</div>
</div>
</body>


</html>
<php>
