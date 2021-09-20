<?php
function Addnewuser()
{
	$con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");
	if(!$con)
		{
		echo mysqli_error();
		}
	else
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
    $password_repeat = $_POST['password_repeat'];

		$sql = "insert into user(email,password,password_repeat)
						   values('$email','$password','$password_repeat')";

	    echo $sql;
		//3.run insert query
		if(!mysqli_query($con,$sql))
		{
			//echo mysqli_error($con);
			return mysqli_error($con);
		}
		else
			{

			return "Record has been successfully added";

			}
	}
}
 ?>
