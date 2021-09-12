<?php
include "user.php";

if(isSet($_POST['signupbtn']))
{
  addnewuser();
  echo "<script>
  			alert('Your are sign up successfully.');
  			window.location.href='user_signin.php';
  			</script>";

}
 ?>
