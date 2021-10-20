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

function UpdateUserInformation(){
	print_r($_POST);
	$con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");
		if(!$con)
			{
			echo mysqli_error();
			}
		else
		{
			//echo 'connected';

			$sql= 'update users set fullname= "'.$_POST['fullname'].'",Paypal="'.$_POST['Paypal'].'" ,username = "'.$_POST['username'].'" ,password="'.$_POST['password'].'"
					where email="'.$_POST['email'].'" ';

			$qry=mysqli_query($con,$sql);
			return $qry;

}
}
?>
