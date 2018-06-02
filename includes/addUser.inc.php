<?php

if(isset($_POST['add'])){
  include 'dbh.inc.php';
  session_start();

  $first=mysqli_real_escape_string($conn, $_POST['first']);
  $last=mysqli_real_escape_string($conn, $_POST['last']);
  $email=mysqli_real_escape_string($conn, $_POST['email']);
  $num=mysqli_real_escape_string($conn, $_POST['num']);
  $icon=mysqli_real_escape_string($conn, $_POST['icon']);
  $id=$_SESSION['u_id'];


// Error handlers
// Check for empty fields
if (empty($first) || empty($last) || empty($email) || empty($num) || empty($icon))
{
  header("Location: ../contact.php?add=empty");
}
else
{
  // Check if input characters are valid
  if (!preg_match("/^[a-zA-Z*$]/", $first) || !preg_match("/^[a-zA-Z*$]/", $last))
  {
    header("Location: ../contact.php?add=invalid");
  }
  // Check if email is valid
  else
  {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
      header("Location: ../contact.php?add=invalid");
    }
    else
    {


        // Insert user into database
        $sql = "INSERT INTO contacts (LastName, Firstname, Email, phone, picture,user_id) VALUES ('$last', '$first', '$email', '$num', '$icon','$id');";

        mysqli_query($conn, $sql);
        header("Location: ../contact.php?add=success");

    }
  }
}
}
else
{
header("Location: ../signup.php?add=fail");
}
 ?>
