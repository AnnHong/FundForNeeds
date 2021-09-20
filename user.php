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
		$psw = $_POST['psw'];
    $psw_repeat = $_POST['psw_repeat'];

		$sql = "insert into user(email,psw,psw_repeat)
						   values('$email','$psw','$psw_repeat')";

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
