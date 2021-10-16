<?php
session_start();
$email = $_SESSION['email'];

$con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");

if(!$con){
  echo mysqli_error();
}else{

  $sql='SELECT * from users where email = "'.$_SESSION['email'].'" AND user_verify = 1';
	//header("Location: user_index.php");
$result =mysqli_query($con,$sql);
$count = mysqli_num_rows($result);

      if($count==1){

header('Location:verified_user.php');
echo "<script>
alert('Your account is verified by admin')

</script>";
      }else{
        echo "<script>
        alert('Your account is not verified by admin')

        </script>";
header('Location:user_profile.php');
      }
    }
?>
