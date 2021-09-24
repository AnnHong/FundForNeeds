<?php
$admin_email = $_POST["admin_email"];
$reset_token = $_POST["reset_token"];
$new_password = $_POST["new_password"];

$con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");

$sql = "SELECT * FROM admin WHERE admin_email = '$admin_email'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0)
{
    $user = mysqli_fetch_object($result);
    if ($user->reset_token == $reset_token)
    {
        $sql = "UPDATE admin_ SET password='$new_password' WHERE admin_email='$admin_email' AND reset_token='$reset_token'";
        mysqli_query($con, $sql);

        //echo "Password has been changed";
        echo  "<script>
          			alert('Your password has been changed.');
          			window.location.href='/MasterFundForNeeds/Admin/Admin_Login.php';
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
