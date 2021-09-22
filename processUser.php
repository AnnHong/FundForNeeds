<?php
include "user.php";

if(isSet($_POST['signupbtn']) )
{
  Addnewuser();
  echo "<script>
  			alert('Your are sign up successfully.');
  			window.location.href='user_signin.php';
  			</script>";

}else if(isSet($_POST['homebtn'])){
  echo "<script>
  			alert('Your are sign out already.');
  			window.location.href='index.php';
  			</script>";

}else if(isSet($_POST['back'])){
  header("Location:user_signup.php");
}
 ?>
