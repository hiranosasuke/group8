<?php

if(isset($_POST['update'])){
  include 'dbh.inc.php';
  session_start();

  $first=mysqli_real_escape_string($conn, $_POST['newfirst']);
  $last=mysqli_real_escape_string($conn, $_POST['newlast']);
  $email=mysqli_real_escape_string($conn, $_POST['newemail']);
  $num=mysqli_real_escape_string($conn, $_POST['newnum']);
  $edit_id = $_POST['edit_id'];

  // Check if input characters are valid
  if ((!empty($first) && !preg_match("/^[a-zA-Z*$]/", $first)) || (!empty($last) && !preg_match("/^[a-zA-Z*$]/", $last)))
  {
    header("Location: ../contact.php?update=invalid");
  }
    // Check if email is valid
    else
    {
        if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL))
        {
          header("Location: ../contact.php?update=invalid");
        }
        else
        {
          $sql = "UPDATE contacts
                  SET FirstName = IF('$first' = '', FirstName, '$first'),
                  LastName = IF('$last' = '', LastName, '$last'),
                  Email = IF('$email' = '', Email, '$email'),
                  phone = IF('$num' = '', phone, '$num')
                  WHERE contact_id='$edit_id'";

          mysqli_query($conn, $sql);
          header("Location: ../contact.php?update=success");
        }
    }
}

else
{
header("Location: ../signup.php?update=fail");
}

?>
