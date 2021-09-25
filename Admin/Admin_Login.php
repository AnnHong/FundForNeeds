<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="admin_login.css">
</head>
<body>
<title>Admin Login</title>
<h2>Fund For Needs</h2>

<form action="processAdmin.php" method="post">

  <div class="container">
    <label for="admin_email"><b>Admin Email</b></label>
    <input type="text" placeholder="Enter Admin Email" name="admin_email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" class="signinbtn" name="login">Login</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>

    <span class="password">Create  <a href="admin_verifyemail.php">New Admin ID</a></span><br>
    <span class="password">Forgot <a href="Admin_resetpassword.php">password?</a></span>
  </div>
</form>
<div>
  <footer class="w3-container w3-theme-d3 w3-padding-16">
  <div style="text-align:center;">
    <a href="tnc.html">Terms and Conditions</a>&emsp;
    <a href="contact_us.html">Contact Us</a>&emsp;
    <a href="about_us.html">About Us</a>&emsp;
  </div>
  </footer>

  <footer class="w3-container w3-theme-d5">
    <div class="copyright" align="center">
    <script>
      document.write('&copy;' );
      document.write(' 2021 - ');
      document.write(new Date().getFullYear());
      document.write(' Fund For Needs - All Rights Reserved.');
      document.write('<br/>Last Updated : ');
      document.write(document.lastModified);
    </script>
  </div>

  </footer>
</div>
</body>
</html>
