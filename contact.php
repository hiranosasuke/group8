<!DOCTYPE HTML>
<html>
<?php
	include_once 'header.php';
  if(!isset($_SESSION['u_id'])){
   header("Location: index.php?login=empty");
  }
?>

</html>
