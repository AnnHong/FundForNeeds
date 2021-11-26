<?php
function getListOfUser()
{
	$con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");

	if(!$con)
		{
		echo mysqli_error();
		}
	else
	{
		//echo 'connected';
		$sql='select * from users';
		//echo $sql;
		$qry=mysqli_query($con,$sql);
		return $qry;
	}
}
function getUserInformation($email){

$con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");
	if(!$con)
		{
		echo mysqli_error();
		}
	else
	{
		//echo 'connected';
		$sql='select * from users where email = "'.$email.'"';
		$qry=mysqli_query($con,$sql);
		return $qry;
	}
}
function UpdateUserInformation(){
	//print_r($_POST);
	$con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");
		if(!$con)
			{
			echo mysqli_error();
			}
		else
		{
			//echo 'connected';

			$sql= 'update users set fullname= "'.$_POST['fullname'].'",phoneNumber="'.$_POST['phoneNumber'].'" ,usernames = "'.$_POST['usernames'].'" ,password="'.sha1($_POST['password']).'"
					where email="'.$_POST['email'].'" ';

			$qry=mysqli_query($con,$sql);
			return $qry;

}
}
?>
