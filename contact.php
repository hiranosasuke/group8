<!DOCTYPE HTML>
<html>
<?php
	include_once 'header.php';
  if(!isset($_SESSION['u_id'])){
   header("Location: index.php?login=empty");
  }
?>

<body>



			<div class="container col-8 mt-5 mx-auto">
				<div class="card" style="border-top:0px; border-left:0px; border-right:0px">
	  		<div class="card-header bg-dark text-light">
					<div>
						<i id="darkelement" class="display-4 float-left fa fa-user"></i>
						<?php
							$first=$_SESSION['u_first'];
							$last=$_SESSION['u_last'];
							echo "<p class='display-4 float-left align-middle pl-2 m-0'>$first $last</p>";
						 ?>
						 <div class="pt-3 float-right">
							 <button class="btn btn-light" data-toggle="tooltip" title="Add User"><i class="fa fa-plus text-dark"></i></button>
						 </div>
						 <div class="input-group col-4 pt-3 float-right">
							 <div class="input-group-prepend">
		 					 		<div class="input-group-text"><i class="fa fa-search text-dark"></i></div>
	 							</div>
	 		 					<input type="text" class="form-control" placeholder="Search for...">
	 	 				  </div>



					</div>


	  		</div>
	  		<div class="card-body">
	  		</div>
			</div>
		</div>

</body>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>

</html>
