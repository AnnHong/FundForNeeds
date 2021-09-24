<?php
session_start();

  if(isSet($_POST['login']))
{
  login();
  echo "<script>
        alert('You are logged in.Welcome.')
  			window.location.href='Admin_HomePage.html';
  			</script>";

}

function login()
    {
        print_r($_POST);
        $con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");

		$admin_email = $_POST['admin_email'];
		$password = $_POST['password'];

		if(!$con){
			echo mysqli_error();
		}else{
			//echo '<br>connected';
			$sql = "select * from admin WHERE admin_email = '$admin_email' AND password = '$password'";
			$qry = mysqli_query($con,$sql);
			$count = mysqli_num_rows($qry);

			if($count == 1){
        $userRecord=mysqli_fetch_assoc($qry);
        $_SESSION['admin_email']=$userRecord['admin_email'];
        $_SESSION['password']=$userRecord['password'];
				//header("Location: Admin_HomePage.html");
			}else{
				echo '<br>signin failed';
			}
    }
}

?>
