
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
?>
