<?php
session_start();
if(isset($_POST['updateAdminBtn'])){
  $msg= UpdateAdmin();
  header( "refresh:1; url=admin_profile.php?msg=".$msg);

}else if(isset($_POST['ChangePassAdminBtn'])){
  $msg= UpdateAdminPassword();
  header( "refresh:1; url=admin_profile.php?msg=".$msg);
}

function UpdateAdmin(){

  //echo 'nak update profile ';
  $con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");

if(!$con){
  echo mysqli_error();
}else{

  $sql = 'UPDATE admin SET admin_fullname ="'.$_POST['admin_fullname'].'", admin_staffid="'.$_POST['admin_staffid'].'" WHERE admin_email= "'.$_SESSION['admin_email'].'"';
  $qry=mysqli_query($con,$sql);
  			return $qry;

      }
}
function UpdateAdminPassword(){
  //echo 'nak update Password ';
  $con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");

if(!$con){
  echo mysqli_error();
}else{

  $sql = 'UPDATE admin SET password="'.$_POST['newpassword'].'"  WHERE admin_email= "'.$_SESSION['admin_email'].'"';

  $qry=mysqli_query($con,$sql);
	return $qry;


      }
}
 ?>
