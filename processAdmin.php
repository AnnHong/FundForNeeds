<?php
session_start();

if(isSet($_POST['signinbtn']))
{
  login();
  echo "<script>
  			window.location.href='Admin_HomePage.html';
  			</script>";
}

function login()
    {
        print_r($_POST);
        $con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");

		$ID = $_POST['admin_id'];
		$password = $_POST['password'];

		if(!$con){
			echo mysqli_error();
		}else{
			//echo '<br>connected';
			$sql = "select * from admin WHERE ID = '$ID' AND password = '$password'";
			$qry = mysqli_query($con,$sql);
			$count = mysqli_num_rows($qry);

			if($count == 1){
        $userRecord=mysqli_fetch_assoc($qry);
        $_SESSION['admin_id']=$userRecord['admin_id'];
        $_SESSION['password']=$userRecord['password'];
				header("Location: Admin_HomePage.php");
			}else{
				echo '<br>signin failed';
			}
    }
}

 ?>
