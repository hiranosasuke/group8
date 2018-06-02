<!DOCTYPE HTML>
<html>
<?php
	include_once 'header.php';
	include 'includes/dbh.inc.php';
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
							 		<button class="btn btn-light" data-toggle="modal" data-target="#addUserModal"><span data-toggle="tooltip" title="Add User"><i class="fa fa-plus text-dark"></i></span></button>
						 </div>
						 <div class="input-group col-4 pt-3 float-right">
							 <div class="input-group-prepend">
		 					 		<div class="input-group-text"><i class="fa fa-search text-dark"></i></div>
	 							</div>
	 		 					<input type="text" class="form-control" placeholder="Search for...">
	 	 				  </div>
					</div>
	  		</div>
				<?php
				  if(isset($_GET['add'])){
				    if($_GET['add']=='success'){
				      echo '<button class = "btn btn-success btn-block disabled"> Contact Added!</button>';
				      echo "<script>setTimeout(\"location.href = 'contact.php';\",1500);</script>";
				    }
				  }
				?>
	  		<div class="card-body">
					<?php
						$id=$_SESSION['u_id'];
						$sql = "SELECT LastName,FirstName,Email,phone,picture FROM contacts WHERE user_id=$id";
						$result=mysqli_query($conn, $sql);
						$resultCheck = mysqli_num_rows($result);
						if($resultCheck<1){
							echo' <div class="display-5 text-center text-dark">
							 	No Contacts
							 </div>';
						}else{
							foreach ($result as $x) {
								$first=$x['FirstName'];
								$last=$x['LastName'];
								$email=$x['Email'];
								$num=$x['phone'];
								$icon=getIcon($x['picture']);
							//	$first=$row['FirstName'];
							echo"<div id='contact' class='border rounded border-primary bg-dark row'>
								     $icon
										<div class='my-auto'>
											<div class='row'>
												<h3 class='mx-auto'>First: $first</h3>
											</div>
											<div class='row'>
												<h3>Last: $last</h3>
											</div>
										</div>
										<div class='ml-auto my-auto mr-2'>
											<button class='btn btn-danger p-3'>
													<i class='fa fa-fw fa-2x fa-trash-alt text-white'></i>
											</button>

											<buttton class='btn btn-warning p-3'>
													<i class='fa fa-fw fa-2x fa-edit text-white'></i>
											</buttton>
										</div>
									</div>";
							}
						}

						function getIcon($num){
							if($num==1){
						  	return"<i class='p-2 display-2 mr-5 fa fa-user'></i>";
							}else if($num==2){
								return "<i class='p-2 display-2 mr-5 fa fa-user-tie'></i>";
							}else if($num==3){
								return "<i class='p-2 display-2 mr-5 fa fa-frog'></i>";
							}else if($num==4){
							  return "<i class='p-2 display-2 mr-5 fa fa-kiwi-bird'></i>";
							}else if($numm==5){
								return "<i class='p-2 display-2 mr-5 fa fa-leaf'></i>";
							}else if($num==6){
								return "<i class='p-2 display-2 mr-5 fa fa-crow'></i>";
							}else if($num==7){
								return "<i class='p-2 display-2 mr-5 fa fa-dove'></i>";
							}
						}

					 ?>


	  		</div>
			</div>
		</div>

</body>


<!--ADDUSER MODAL-->
<div class="modal fade" id="addUserModal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-warning text-dark">
				<h4 class="modal-header" style="border-bottom:0px">Add User</h4>
				<button class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<form class="col-10 m-auto border" action="includes/addUser.inc.php" method="POST">
					 <input name="first" class="form-control mt-3 mb-2" placeholder="FirstName">
					 <input name="last" class="form-control my-2" placeholder="LastName">
					 <input name="email" class="form-control my-2" placeholder="Email">
					 <input name="num" class="form-control my-2" placeholder="Phone Number">


						<input type='hidden' name='thenumbers'>
					 <label for="select_1" class="text-dark">Select list:</label>
					 <div class="dropdown my-2">
  				 		<button class="btn btn-warning dropdown-toggle w-25" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span id="update">Icon</span>
  						</button>
							<ul class="dropdown-menu w-30">
      					<li><a id="1" onClick='getItem(this.id);' class="nav-link text-center icons" ><i class="fa fa-user text-dark"> User </i></a></li>
      					<li><a id="2" onClick='getItem(this.id);' class="nav-link text-center icons" ><i class="fa fa-user-tie text-dark"> User-Tie</i></a></li>
      					<li><a id="3" onClick='getItem(this.id);' class="nav-link text-center icons" ><i class="fa fa-frog text-dark"> Frog</i></a></li>
								<li><a id="4" onClick='getItem(this.id);' class="nav-link text-center icons" ><i class="fa fa-kiwi-bird text-dark"> Kiwi</i></a></li>
								<li><a id="5" onClick='getItem(this.id);' class="nav-link text-center icons" ><i class="fa fa-leaf text-dark"> Leaf</i></a></li>
								<li><a id="6" onClick='getItem(this.id);' class="nav-link text-center icons" ><i class="fa fa-crow text-dark"> Crow</i></a></li>
								<li><a id="7" onClick='getItem(this.id);' class="nav-link text-center icons" ><i class="fa fa-dove text-dark"> Dove</i></a></li>
 							</ul>
						</div>

						<input name="icon" type='hidden' id='item'>
						<?php

							if(isset($_POST['icon'])){
								$x=$_POST['icon'];
								echo "<p class='display-4 text-dark'>$x</p>";
							}

						 	?>

			</div>
			<div class="modal-footer bg-warning rounded-bottom">
					<button name="add" type="submit" class="btn btn-success">Add</button>
			</div>
			</form>
		</div>
	</div>
</div>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});


function getItem(item) {
	$('#item').val(item);
	if(item==1){
		document.getElementById('update').innerHTML="<i class='fa fa-user text-dark'></i>";
	}else if(item==2){
		document.getElementById('update').innerHTML="<i class='fa fa-user-tie text-dark'></i>";
	}else if(item==3){
		document.getElementById('update').innerHTML="<i class='fa fa-frog text-dark'></i>";
	}else if(item==4){
		document.getElementById('update').innerHTML="<i class='fa fa-kiwi-bird text-dark'></i>";
	}else if(item==5){
		document.getElementById('update').innerHTML="<i class='fa fa-leaf text-dark'></i>";
	}else if(item==6){
		document.getElementById('update').innerHTML="<i class='fa fa-crow text-dark'></i>";
	}else if(item==7){
		document.getElementById('update').innerHTML="<i class='fa fa-dove text-dark'></i>";
	}
}


</script>

</html>
