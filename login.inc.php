<?php

if(isset($_POST['submit'])){
  include 'dbh.inc.php';

  $uid =mysqli_real_escape_string($conn,$_POST['uid']);
  $pwd =mysqli_real_escape_string($conn,$_POST['pwd']);
  echo $uid;

  //Error handling
  if(empty($uid)||empty($pwd)){
    header("Location: ../index.php?login=empty");
    exit();
  }else{
    $sql ="SELECT * FROM users WHERE user_uid='$uid';";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck < 1){
      header("Location: ../index.php?login=error");
      exit();
    } else{
      if($row = mysqli_fetch_assoc($result)){
        //De-hasihing the password
        $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
        if(!$hashedPwdCheck){
          header("Location: ../index.php?login=error");
          exit();
        }else if($hashedPwdCheck){
          //Log In the user!!
          $_SESSION['u_id'] = $row['user_id'];
          $_SESSION['u_fist'] = $row['user_first'];
          $_SESSION['u_last'] = $row['user_last'];
          $_SESSION['u_email'] = $row['user_email'];
          $_SESSION['u_uid'] = $row['user_uid'];
          header("Location: ../index.php?login=success");
          exit();
        }
      }
    }
  }
}else{
  header("Location: ../index.php?login=error");
}

 ?>
