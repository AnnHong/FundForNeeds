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

echo 'Confirm Your Donation Person Information<br>';
echo 'Email : '.$email.'<br>Username';


 ?>
