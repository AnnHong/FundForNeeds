<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="user_signup.css">
</head>
<body>
<title>User Registtration</title>
<form action="processUser.php" method="POST" style="margin:25px 500px 75px 500px;">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email"  required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password"  required>

    <label for="password-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="password_repeat"  required>
    <hr>
    <input type="checkbox" name=check required>
    <label for="check">  By creating an account you agree to our <a href="tnc.html">Terms & Conditions</a>.</label>
    <div class="clearfix">
      <button type="submit" class="signupbtn" name = "signupbtn">Sign Up</button>
      <button type="button" class="cancelbtn" onclick="location.href = 'user_signin.php';">Cancel</button>
    </div>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="user_signin.php">Sign in</a>.</p>
  </div>

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
</form>
</body>
</html>
