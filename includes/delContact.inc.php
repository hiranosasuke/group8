<?php

if(isset($_POST['delete'])){
  include 'dbh.inc.php';
  session_start();

  $uid=$_SESSION['u_id'];
  $delete_id = $_POST['delete_id'];

  $sql = "DELETE FROM contacts WHERE contact_id='$delete_id'";
  mysqli_query($conn, $sql);
  header("Location: ../contact.php?delete=success");
}
else {
  header("Location: ../signup.php?delete=fail");
}


?>
