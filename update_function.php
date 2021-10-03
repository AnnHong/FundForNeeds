<?php
session_start();

if(isset($_POST['ChangePassBtn'])){
  UpdateUserPassword();
  //$email= $_SESSION['email'];
//  $new_password =$_POST["new_password"];
}
function UpdateUserPassword(){
  echo 'nak update : ';
  $con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");

if(!$con){
  echo mysqli_error();
}else{
  $sql = 'UPDATE users SET password="'.$_POST['newpassword'].'" WHERE email= "'.$_SESSION['email'].'"';

  $qry=mysqli_query($con,$sql);
  			return $qry;

  echo "<script>
          alert('Your password has been changed.');
          window.location.href='user_profile.php';
          </script>";;
}
}






 ?>
