<?php

if(isset($_GET['admin_email']) && !empty($_GET['admin_email']) AND isset($_GET['token']) && !empty($_GET['token'])){
  $admin_email = $_GET['admin_email'];
  $token = $_GET['token'];

  $con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");

  $search = $con->query("SELECT admin_email,verified,token FROM admin WHERE admin_email = '$admin_email ' AND verified = 0 AND token = '$token ' LIMIT 1");
  $match = mysqli_num_rows($search);
  if($match == 1){
    $update = $con->query("UPDATE admin SET verified = 1 WHERE token = '$token' LIMIT 1");

    if($update){
      echo
      "<script>
      			alert('Your email has been verified successfully.');
      			window.location.href='Admin_Login.php';
      			</script>";

    }else{
      echo $mysqli->error;
    }
  }else{

    echo "This account invalid or already verified";
  }
}
?>
