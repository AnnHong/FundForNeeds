<?php
$email = $_POST["email"];
$reset_token = $_POST["reset_token"];
$new_password = sha1($_POST['new_password']);

$con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");

$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0)
{
    $user = mysqli_fetch_object($result);
    if ($user->reset_token == $reset_token)
    {
        $sql = "UPDATE users SET password='$new_password' WHERE email='$email' AND reset_token='$reset_token'";
        mysqli_query($con, $sql);
        echo  "<script>
          			alert('Your password has been changed.');
          			window.location.href='user_signin.php';
          			</script>";;
    }
    else
    {
        echo "Recovery email has been expired";
    }
}
else
{
    echo "Email does not exists";
}
?>
