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
  	//echo $sql;
  	//3. then continue delete(run delete query)
  	mysqli_query($con,$sql);

  	}

  }



?>
