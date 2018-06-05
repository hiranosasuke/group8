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
					<div class="row">
						<div  class="col-md-1 col-xs-12 text-center mx-auto my-auto">
							<a href="#" data-toggle="modal" data-target="#settingsModal">
								<i class="display-4 fa fa-user"></i>
							</a>
						</div>
						<?php
							$first=$_SESSION['u_first'];
							$last=$_SESSION['u_last'];
							echo "<div class='col-md-6 col-xs-12 row m-auto d-none d-sm-block'> <h1 class='text-center p-auto m-auto'>$first $last</h1></div>";
						 ?>

						 <div class="col-md-4 col-xs-6 mx-auto m-auto py-3">
							 <div class="input-group">
								 <div class="input-group-prepend">
			 					 	<form class="d-flex" method="post">	<button class="input-group-text btn btn-secondary"><i class="fa fa-search text-dark"></i></button>
		 							</div>
		 		 					<input type="text" name="search" class="form-control" placeholder="Search for...">
		 	 				  </div></form>
							</div>
							<div class="col-md-1 col-xs-6 text-center m-auto p-2">
								 <button class="btn btn-light btn-block" data-toggle="modal" data-target="#addUserModal"><span data-toggle="tooltip" title="Add User"><i class="fa fa-plus text-dark"></i></span></button>
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
							$search="";
							if(isset($_POST['search'])){
								$search=$_POST['search'];
								if($_POST['search']=='all' || $_POST['search']=='All'){
									$search="";
								}
							}


						$condition = "(FirstName LIKE '%$search%' || LastName LIKE '%$search%')";
						$sql = "SELECT LastName,FirstName,Email,phone,picture,user_id,contact_id FROM contacts WHERE user_id=$id && $condition" ;
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
								$id=$x['contact_id'];
								$icon=getIcon($x['picture']);



							//	$first=$row['FirstName'];
							echo"
								    <div id='contact' class='py-1'>
											<div name='contact' class=' contact border rounded border-primary bg-dark row' data-toggle='modal' data-target='#$id-Modal'>

												<div class='container m-1'>
											 		<div class='row'>
														<div class='col-md-2 text-center'>
															$icon
														</div>
														<div class='col-md-6 text-center m-auto'>
															<h3 class='mx-auto'> $first $last</h3>
														</div>
														<div class='col-md-2 my-auto'>
											  			<buttton class='btn btn-danger d-block' data-toggle='modal' data-target='#deleteModal'>
												  			<i class='fa fa-fw fa-2x fa-trash-alt text-white'></i>
										  				</buttton>
														</div>
														<div class='col-md-2 my-auto' data-toggle='modal' data-target='#updateModal'>
															<buttton class='btn btn-warning d-block'>
																<i class='fa fa-fw fa-2x fa-edit text-white'></i>
															</buttton>
														</div>
											 		</div>
											 	</div>
											 </div>
											</div>


									<!--CONTACT MODAL-->
									<div class='modal fade' id='$id-Modal'>

										<div class='modal-dialog modal-lg'>
											<div class='modal-content'>
												<div class='modal-header bg-dark text-dark'>
													<div class='col-md-12 text-center'>
															<span class='display-4 '><b class='text-white'>$first $last</b></span>
													</div>
												</div>
												<div class='modal-body'>
													<form>
														<div class='my-3 py-2 my-0 row bg-secondary rounded'>
															<h2 class='text-dark m-auto'>	First Name: $first</h2>
														</div>
														<div class='my-3 py-2 row bg-secondary rounded'>
															<h2 class='text-dark m-auto '>	Last Name: $last</h2>
														</div>
														<div class='my-3 py-2 row  bg-secondary rounded'>
															<h2 class='text-dark m-auto'>	Email: $email</h2>
														</div>
														<div class='my-3 py-2 row bg-secondary rounded'>
															<h2 class='text-dark m-auto '>	Phone: $num</h2>
														</div>


													</form>
											</div>
											<div class='modal-footer bg-dark rounded-bottom'>

											</div>
										</div>
									</div>
									</div>
									";

							}
						}

						function getIcon($num){
							if($num==1){
						  	return"<i class='display-2 p-3 fa fa-user'></i>";
							}else if($num==2){
								return "<i class='display-2 p-3 fa fa-user-tie'></i>";
							}else if($num==3){
								return "<i class='display-2 p-3 fa fa-frog'></i>";
							}else if($num==4){
							  return "<i class=' display-2 p-3 fa fa-kiwi-bird'></i>";
							}else if($num==5){
								return "<i class=' display-2 p-3 fa fa-leaf'></i>";
							}else if($num==6){
								return "<i class=' display-2 p-3 fa fa-crow'></i>";
							}else if($num==7){
								return "<i class='display-2 p-3  fa fa-dove'></i>";
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



<!-- DELETE MODAL-->
<div class="modal fade" id="deleteModal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-danger text-dark">
				<div class="col-md-12 text-center">
						<span class="display-4 "><b class="text-dark">Delete Contact</b></span>
				</div>
			</div>
			<div class="modal-body">
				<form>
					<div class="my-3 py-2 my-0 row bg-secondary rounded">
						<h2 class="text-dark m-auto">	First Name: First</h2>
					</div>
					<div class="my-3 py-2 row bg-secondary rounded">
						<h2 class="text-dark m-auto ">	Last Name: Last</h2>
					</div>
					<div class="my-3 py-2 row  bg-secondary rounded">
						<h2 class="text-dark m-auto">	Email: email</h2>
					</div>
					<div class="my-3 py-2 row bg-secondary rounded">
						<h2 class="text-dark m-auto ">	Phone: 407 444-444</h2>
					</div>


				</form>
		</div>
		<div class="modal-footer bg-danger rounded-bottom">

		</div>
	</div>
</div>
</div>

<!--UPDATE MODAL-->
<div class="modal fade" id="updateModal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-warning text-dark">
				<div class="col-md-12 text-center">
						<span class="display-4 "><b class="text-dark">Update Contact</b></span>
				</div>
			</div>
			<div class="modal-body">
				<form>
					<div class="my-3 py-2 my-0 row bg-secondary rounded">
						<h2 class="text-dark m-auto">	First Name: First</h2>
					</div>
					<div class="my-3 py-2 row bg-secondary rounded">
						<h2 class="text-dark m-auto ">	Last Name: Last</h2>
					</div>
					<div class="my-3 py-2 row  bg-secondary rounded">
						<h2 class="text-dark m-auto">	Email: email</h2>
					</div>
					<div class="my-3 py-2 row bg-secondary rounded">
						<h2 class="text-dark m-auto ">	Phone: 407 444-444</h2>
					</div>


				</form>
		</div>
		<div class="modal-footer bg-warning rounded-bottom">

		</div>
	</div>
</div>
</div>
<!--Settings MODAL-->
<?php
	$u_id= $_SESSION['u_id'];
	$u_first = $_SESSION['u_first'];
	$u_last = $_SESSION['u_last'];
	$u_email = $_SESSION['u_email'];
	$u_uid = $_SESSION['u_uid'];
?>
<div class="modal fade" id="settingsModal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-warning text-dark">
				<div class="col-md-12 text-center">
						<span class="display-4 "><b class="text-dark"><?php echo"User Info" ?></b></span>
				</div>
			</div>
			<div class="modal-body">
				<form>
					<div class="my-3 py-2 my-0 row bg-secondary rounded">
						<h2 class="text-dark m-auto">	First Name: <?php echo"$u_first" ?></h2>
					</div>
					<div class="my-3 py-2 row bg-secondary rounded">
						<h2 class="text-dark m-auto ">	Last Name: <?php echo"$u_last" ?></h2>
					</div>
					<div class="my-3 py-2 row  bg-secondary rounded">
						<h2 class="text-dark m-auto">	Email: <?php echo"$u_email" ?></h2>
					</div>
					<div class="my-3 py-2 row bg-secondary rounded">
						<h2 class="text-dark m-auto ">	UserName: <?php echo"$u_uid" ?></h2>
					</div>


				</form>
		</div>
		<div class="modal-footer bg-warning rounded-bottom">

		</div>
	</div>
</div>
</div>

<script>




$('#deleteModal').on('hide.bs.modal', function (e) {
  	$('#contactModal').modal('hide');
})

$('#updateModal').on('hide.bs.modal', function (e) {
  	$('#contactModal').modal('hide');
})


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
