<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="admin_verifyemail.css">
</head>
<body>
<title>Create New Admin ID</title>
<form action="processAdmin.php" method="POST" style="margin:25px 500px 75px 500px;">
  <div class="container">
    <h1>Create New Admin ID</h1>
    <p>Please fill in this form to verify your email.</p>
    <hr>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="admin_email"  required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter password" name="password"  required>

    <label for="password"><b>Repeat Password</b></label>
      <input type="password" placeholder="Enter repeat password" name="repeat_password"  required>
    <div class="clearfix">
      <button type="submit" class="verifybtn" name = "verify">Verify</button>
      <button type="button" class="cancelbtn"  onclick="location.href = 'Admin_Login.php';">Cancel</button>
    </div>
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
