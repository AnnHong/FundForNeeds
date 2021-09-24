<!DOCTYPE html>
<html>
<head>
  <link rel = "icon" href = "FundForNeedsV2.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="index_theme.css">
<link rel='stylesheet' href='index_font.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="user_signin.css">

</head>
<body>
  <title>User Sign In</title>
<h2>Fund For Needs</h2>
<form action="signin.php" method="post" style="margin:100px 500px 75px 500px;">

  <div class="container">
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <div class="clearfix">
      <button type="submit" class="signinbtn" name="signinbtn">Sign In</button>
      <button type="button" class="cancelbtn" onclick="location.href = 'index.php';">Cancel</button>
    </div>
  </div>

  <div class="container" style="background-color:#f1f1f1">
      <p>Don't have an account? <a href="user_signup.php">Register Now</a> <span class="password">Forgot <a href="user_reset_password.php">password?</a></span></p>
  </div>
</form>
<div>
  <footer class="w3-container w3-theme-d3 w3-padding-16">
    <h5>Footer</h5>
    <a href="contact_us.html">Contact Us</a>
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
