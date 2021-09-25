<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="admin_resetpassword.css">
</head>
<body>

<form action="admin_resetpassword_Function.php" method="POST" style="margin:25px 500px 75px 500px;">
  <div class="container">
    <h1>Admin Reset Password</h1>
    <p>Please fill in this form to reset your password.</p>
    <hr>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="admin_email"  required>


    <div class="clearfix">
      <button type="submit" class="verifybtn" name = "adminresetbtn">Reset Password</button>

      <button type="button" class="cancelbtn" onclick="location.href = 'Admin_Login.php';">Cancel</button>
    </div>
  </div>
</form>
</body>
</html>
