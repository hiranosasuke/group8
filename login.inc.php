<?php

if(isset($_POST['submit'])){
  include 'dbh.inc.php';

  $uid =mysqli_real_escape_string($conn,$_POST['uid']);
  $pwd =mysqli_real_escape_string($conn,$_POST['pwd']);

  //Error handling
  if(empty($uid)||empty($pwd)){
    header("Location: ../index.php?login=empty");
  }else{
    $sql ="SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid';";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck < 1){
      header("Location: ../index.php?login=error");
    } else{
      if($row = mysqli_fetch_assoc($result)){
        //De-hasihing the password
        $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
        if(!$hashedPwdCheck){
          header("Location: ../index.php?login=error");
        }else if($hashedPwdCheck){
          //Log In the user!!
          session_start();
          $_SESSION['u_id'] = $row['user_id'];
          $_SESSION['u_fist'] = $row['user_first'];
          $_SESSION['u_last'] = $row['user_last'];
          $_SESSION['u_email'] = $row['user_email'];
          $_SESSION['u_uid'] = $row['user_uid'];
          header("Location: ../index.php?login=success");

        }
      }
    }
  }
}else{
  header("Location: ../index.php?login=error");
}

 ?>
