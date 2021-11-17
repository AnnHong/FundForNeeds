<?php
session_start();

if(isset($_POST['SaveBtn'])){
  $msg= UpdateUser();
	header( "refresh:1; url=user_profile.php?msg=".$msg);


}else if(isset($_POST['ChangePassBtn'])){
  $msg= UpdateUserPassword();
	header( "refresh:1; url=user_profile.php?msg=".$msg);


}else if(isset($_POST['ChangePassBtn_verified'])){
  $msg= UpdateUserPassword();
	header( "refresh:1; url=verified_user.php?msg=".$msg);

}else if(isset($_POST['SaveBtn_verified'])){
  $msg= UpdateUser();
	header( "refresh:1; url=verified_user.php?msg=".$msg);

}

function UpdateUser(){
  //echo 'nak update profile ';
  $con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");

if(!$con){
  echo mysqli_error();
}else{

  $sql = 'UPDATE users SET usernames ="'.$_POST['usernames'].'", fullname="'.$_POST['fullname'].'", phoneNumber="'.$_POST['phoneNumber'].'" WHERE email= "'.$_SESSION['email'].'"';
  $qry=mysqli_query($con,$sql);
  			return $qry;

  //echo "<script>
      //    alert('Your password has been changed.');
        //  window.location.href='user_profile.php';
        //  </script>";;
      }
}

function UpdateUserPassword(){
  //echo 'nak update Password ';
  $con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");

if(!$con){
  echo mysqli_error();
}else{

  $sql = 'UPDATE users SET password="'.sha1($_POST['newpassword']).'"  WHERE email= "'.$_SESSION['email'].'"';

  $qry=mysqli_query($con,$sql);
  			return $qry;


      }
}


 ?>
