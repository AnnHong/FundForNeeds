<?php
session_start();

if(isset($_POST['signinbtn'])){
  signin();
}

?>
<?php

function signin(){
    $con = mysqli_connect("localhost", "fundforneeds", "fundforneeds", "fundforneeds");

		$email = $_POST['email'];
    $password = $_POST['password'];

		if(!$con){
			echo mysqli_error();
		}else{
			//echo '<br>connected';
			$sql = "select * from users WHERE email = '$email' AND password = '$password'";
			$qry = mysqli_query($con,$sql);
			$count = mysqli_num_rows($qry);

			if($count == 1){

			$userRecord=mysqli_fetch_assoc($qry);

			$_SESSION['email']=$userRecord['email'];
      $_SESSION['password']=$userRecord['password'];

				header("Location: user_index.php");
			}else{
				echo '<br>Login failed';
			}
    }
}
?>
