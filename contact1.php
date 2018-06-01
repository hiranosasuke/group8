<!DOCTYPE html>

<html >

<?php
  session_start();
 ?>

<head lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--BOOTSTRAP CDN for CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

  <!--BOOTSTRAP CDN for JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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
				echo '<form class="form-inline my-2 my-lg-0" action="includes/logout.inc.php" method="POST">
								<button class="btn btn-danger" style="float:right" type="submit" name="submit">Log Out</button>
							</form>';
			}

			?>
		</div>
	</div>
</nav>

<style>
    
    
    input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 2px;
    box-sizing: border-box;
   
    
}

input[type=submit] {
    width: 90%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 2px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 2px;
    background-color: rgba(129,155,178,0.3);
    padding: 20px;
    
}
    
    div{
        
        text-align: left;
    }
    
    </style>
<body>

    <main>
        
        <div class = "Forming">
    <div class = "col-sm-3 m-auto" >
        
           
    <form  style = "opacity:1" class = "contact-form" action ="contactform.php" method="post">
            
            
            
            
            <h1>ABOUT</h1>
                
                <p> We are committed to providing you with the best customer service to enhance your experience.If you have any questions or comments, please refer to the contact information provided below. You can also submit the ticket provided above and a developer will contact you promptly
                    .</p>
        
            <p style="color:DodgerBlue;"> Guensly Louis<br>glouis60@Knights.ucf.edu
                <br>
                
                 <p style="color:DodgerBlue;"> John Smith<br>glouis60@Knights.ucf.edu
                
            
        
        <input class = "text-dark" type="text" name="name" placeholder="Full name">
        <br>
        <input class = "text-dark" type="text" name="mail" placeholder="Your e-mail">
        <br>
        <input class = "text-dark" type="text" name="subject" placeholder="Subject">
        <br>
        <textarea class ="text-dark" name = "message" placeholder = " Message" cols="60" row= "50" ></textarea>
        <button type="submit" name="submit">SEND MAIL</button>
        
        </form>
        
       
            
            
    
    </main>
    
    </body>
    </div>
   

</html>