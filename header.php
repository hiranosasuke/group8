<?php
  session_start();
 ?>

<head lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--BOOTSTRAP CDN for CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

  <!--BOOTSTRAP CDN for JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

  <!-- Stylesheet-->
  <link rel="stylesheet" type="text/css" href="css/styles.css">

  <!--Font Awesome CDN -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>

<nav class="navbar navbar-dark">
	<div class="container-fluid" >
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php">Contact <i class="fa fa-user"></i> Manager</a>
		</div>
		<div>
			<?php
			if(isset($_SESSION['u_id'])){
				echo '<form class="form-inline my-2 d-none d-md-block my-lg-0" action="includes/logout.inc.php" method="POST">
								<button class="btn btn-danger" style="float:right" type="submit" name="submit">Log Out</button>
							</form>
              <form class="form-inline my-2 d-md-none my-lg-0" action="includes/logout.inc.php" method="POST">
      							<button class="btn btn-danger" style="float:right" type="submit" name="submit"><i class="fa fa-sign-out-alt"></i></button>
      				</form>'
              ;
			}

			?>
		</div>
	</div>
</nav>
