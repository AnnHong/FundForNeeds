<?php
session_start();

if(isset($_POST['signinbtn'])){

signin();
}

?>
<?php

function signin()
    {
        print_r($_POST);
        $con = mysqli_connect("localhost", "funforneeds", "funforneeds", "funforneeds");

		$email = $_POST['email'];
		$password = $_POST['pwd'];

		if(!$con){
			echo mysqli_error();
		}else{
			//echo '<br>connected';
			$sql = "select * from user WHERE email = '$email' AND pwd = '$password'";
			$qry = mysqli_query($con,$sql);
			$count = mysqli_num_rows($qry);

			if($count == 1){

			$userRecord=mysqli_fetch_assoc($qry);

			$_SESSION['email']=$userRecord['email'];
      $_SESSION['pwd']=$userRecord['pwd'];

				header("Location: user_index.php");
			}else{
				echo '<br>Login failed';
			}
    }
}
?>
