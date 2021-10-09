<?php
session_start();

if(isset($_POST['SaveBtn'])){
  $msg= UpdateUser();
	header( "refresh:1; url=user_profile.php?msg=".$msg);


}else if(isset($_POST['ChangePassBtn'])){
  $msg= UpdateUserPassword();
	header( "refresh:1; url=user_profile.php?msg=".$msg);

}

function UpdateUser(){
  echo 'nak update profile ';
  $con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");

if(!$con){
  echo mysqli_error();
}else{

  $sql = 'UPDATE users SET usernames ="'.$_POST['usernames'].'", fullname="'.$_POST['fullname'].'", Paypal="'.$_POST['paypal'].'" WHERE email= "'.$_SESSION['email'].'"';
  //'update customer set IC_number= "'.$_POST['IC_number'].'",dob="'.$_POST['dob'].'" ,Cnumber="'.$_POST['Cnumber'].'"
 			//	,gender="'.$_POST['gender'].'",email="'.$_POST['email'].'" ,password="'.$_POST['password'].'"
 				//	where username = "'.$_POST['username'].'" ';
  $qry=mysqli_query($con,$sql);
  			return $qry;

  //echo "<script>
      //    alert('Your password has been changed.');
        //  window.location.href='user_profile.php';
        //  </script>";;
      }
}
function UpdateUserPassword(){
  echo 'nak update Password ';
  $con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");

if(!$con){
  echo mysqli_error();
}else{

  $sql = 'UPDATE users SET password="'.$_POST['newpassword'].'"  WHERE email= "'.$_SESSION['email'].'"';

  $qry=mysqli_query($con,$sql);
  			return $qry;

  //echo "<script>
      //    alert('Your password has been changed.');
        //  window.location.href='user_profile.php';
        //  </script>";;
      }
}


 ?>
