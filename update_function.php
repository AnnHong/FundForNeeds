<?php
session_start();

if(isset($_POST['ChangePassBtn'])){
  //$email= $_SESSION['email'];
//  $new_password =$_POST["new_password"];

  $con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");

if(!$con){
  echo mysqli_error();
}else{
  $sql = 'UPDATE users SET password="'.$_POST['newpassword'].'" WHERE email= "'.$_SESSION['email'].'"';

  echo "<script>
          alert('Your password has been changed.');
          window.location.href='user_profile.php';
          </script>";;
}



}

 ?>
