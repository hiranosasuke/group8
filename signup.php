<!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script> -->
<!DOCTYPE HTML>
<html>
<?php
  include_once 'header.php';
 ?>

<body>

<?php
  if(isset($_GET['signup'])){
    if($_GET['signup']=='success'){
      echo '<button class = "btn btn-success btn-block disabled"> Sign Up Success!</button>';
      echo "<script>setTimeout(\"location.href = 'index.php';\",1500);</script>";
    }
  }
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-12 m-auto">
			<form class="form-container" action="includes/signup.inc.php" method="POST">
			<h1 class="display-4 text-center pb-3">Welcome!</h1>
      <hr style="height:3px">
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
			  <button type="submit" name="submit" class="btn btn-primary btn-block">Sign Up</button>
        <!--Response for submit-->
        <?php
          if(isset($_GET['signup'])){

            if ($_GET['signup']=='fail'){
                echo '<button class = "btn btn-danger btn-block disabled"> Sign Up Failed!</button>';
            }else if($_GET['signup']=='empty'){
              echo '<button class = "btn btn-warning btn-block disabled"> Fill in All Feilds</button>';
            }else if($_GET['signup']=='usertaken'){
              echo '<button class = "btn btn-light btn-block disabled" style="color:red"> Username is Taken </button>';
            }
          }
         ?>
			</form>
		</div>
	</div>
</div>
</body>


</html>
