<?php

$email = $_GET['email'];
$reset_token = $_GET['reset_token'];

$con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");
$sql = "select * from users where email='$email'";
$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result) >0){
  $user =   mysqli_fetch_object($result);

  if($user->reset_token == $reset_token){
    ?>
    <form method="POST" action="new-password.php">

        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="reset_token" value="<?php echo $reset_token; ?>">

        <input type="password" name="new_password" placeholder="Enter new password">
        <input type="submit" value="Change password">
    </form>
    <?php

  }else{
    echo "Recovery email has been expired.";
  }
}else{
  echo "Email does not exists.";
}
?>
