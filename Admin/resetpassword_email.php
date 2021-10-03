<?php

$admin_email = $_GET['admin_email'];
$reset_token = $_GET['reset_token'];

$con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");
$sql = "SELECT * FROM admin WHERE admin_email ='$admin_email'";
$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result) >0){
  $admin =   mysqli_fetch_object($result);

  if($admin->reset_token == $reset_token){
    ?>
    <h2>Fund For Needs</h2>
    <form method="POST" action="admin_new_password.php" style="margin:100px 500px 75px 500px;">
<meta name="viewport" content="width=device-width, initial-scale=1">
        <input type="hidden" name="admin_email" value="<?php echo $admin_email; ?>">
        <input type="hidden" name="reset_token" value="<?php echo $reset_token; ?>">

        <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        form {border: 3px solid #f1f1f1;}
        input[type=password] {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          box-sizing: border-box;
        }

        button {
          background-color: #04AA6D;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 100%;
          opacity: 0.9;
        }

        button:hover {
          opacity: 1;
        }
        .container {
          padding: 16px;
        }
        .clearfix::after {
          content: "";
          clear: both;
          display: table;
        }

        span.password {
          float: right;
          padding-top: 0px;
        }
        </style>

        <div class="container">
          <p>Please enter your new password</p>
          <label for="password"><b>Password</b></label>
        <input type="password" name="new_password" placeholder="Enter new password" style="border-radius:25px 25px;">
        <button type="submit" style="border-radius:75px 25px;">Change Password</button>
      </div>
    </form>
    <?php

  }else{
    echo "Recovery email has been expired.";
  }
}else{
  echo "Email does not exists.";
}
?>
