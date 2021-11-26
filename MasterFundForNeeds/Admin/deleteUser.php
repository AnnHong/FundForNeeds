<?php
if(isset($_POST['deleteUserButton'])){

  $msg=deleteUser();

header( "refresh:1; url=user_list.php?msg=".$msg);
}

function deleteUser()
{
  $con=mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");
  //2. check connection if ok
  if(!$con)
  	{
  	echo mysqli_error();
  	}
  else
  	{
  	$emailToDelete=$_POST['emailToDelete'];
  	$sql = "delete from users where email='".$emailToDelete."'";
    $sql2 = "delete from posts where User_Email ='".$emailToDelete."' ";
    $sql3 = "delete from payment_history where User_email ='".$emailToDelete."'";
  	//echo $sql;
  	//3. then continue delete(run delete query)
  	mysqli_query($con,$sql);
    mysqli_query($con,$sql2);
      mysqli_query($con,$sql3);

  	}

  }



?>
