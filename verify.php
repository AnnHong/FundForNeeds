<?php

if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['token']) && !empty($_GET['token'])){
  $email = $_GET['email'];
  $token = $_GET['token'];

  $con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");

  $search = $con->query("SELECT email,verified,token FROM users WHERE email = '$email ' AND verified = 0 AND token = '$token ' LIMIT 1");
  $match = mysqli_num_rows($search);
  if($match == 1){
    $update = $con->query("UPDATE users SET verified = 1 WHERE token = '$token' LIMIT 1");

    if($update){
      echo
      "<script>
      			alert('Your email has been verified successfully.');
      			window.location.href='user_signin.php';
      			</script>";

    }else{
      echo $mysqli->error;
    }
  }else{

    echo "This account invalid or already verified";
  }
}
?>
