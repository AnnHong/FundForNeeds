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
		$password = sha1($_POST['password']);
    $password_repeat = $_POST['password_repeat'];
		$usernames = $_POST['usernames'];
		$fullname= $_POST['fullname'];

		$token = md5( rand(0,1000) );
		$sql = "insert into users(email,password,token,usernames,fullname)
						   values('$email','$password','$token','$usernames','$fullname')";
	    //echo $sql;
		//3.run insert query
		if(!mysqli_query($con,$sql))
		{
			//echo mysqli_error($con);
			return mysqli_error($con);
		}
		else{
				$to      = $email; // Send email to our user
				$subject = 'Signup | Verification'; // Give the email a subject
				$message = '

				Thanks for signing up!
				Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.

				------------------------
				Email: '.$email.'
				Password: '.$password_repeat.'
				------------------------

				Please click this link to activate your account:
				http://localhost/MasterFundForNeeds/verify.php?email='.$email.'&token='.$token.'

				'; // Our message above including the link

				$headers = "From:noreply@fundforneeds.com\r\n"; // Set from headers
				mail($to, $subject, $message, $headers); // Send our email
			return "Record has been successfully added";

			}
	}
}
