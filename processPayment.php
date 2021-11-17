<?php
$email = $_GET['email'];
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
$qryUserData = getUserInformation($_GET['email']);
$userRecord = mysqli_fetch_assoc($qryUserData);
echo 'Confirm Your Donation Person Information<br>';
echo 'Email : '.$email.'<br>Username';
echo


 ?>
