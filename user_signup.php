<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="index_theme.css">
<link rel='stylesheet' href='index_font.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="user_signup.css">
<title>User Registtration</title>
</head>
<body>
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Fund For Needs</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>

  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>

    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
      <a href="#" class="w3-bar-item w3-button">One new friend request</a>
      <a href="#" class="w3-bar-item w3-button">Ann Hong posted on your wall</a>
      <a href="#" class="w3-bar-item w3-button">Zhi Hao Donates your post</a>
    </div>
  </div>

  <a href="user_signin.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="Sign In" style="background-color: #04AA6D; color: white;">Sign In</a>
 </div>
</div>
<form action="processUser.php" method="POST" style="margin:25px 500px 25px 500px;">
  <div class="container">
    <br><br>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email"  required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password"  required>

    <label for="password-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="password_repeat"  required>

    <input type="checkbox" name=check required>
    <label for="check">  By creating an account you agree to our <a href="tnc.html">Terms & Conditions</a>.</label>
    <br>
    <div class="clearfix" style="margin: 8px 0; width:100%;">
      <button type="submit" class="signupbtn" name = "signupbtn">Sign Up</button>
      <button type="button" class="cancelbtn" onclick="location.href = 'user_signin.php';">Cancel</button>
    </div>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="user_signin.php">Sign in</a>.</p>
  </div>
</form>
<div style="padding-top: 33px;">
  <footer class="w3-container w3-theme-d3 w3-padding-16">
  <div style="text-align:center;">
    <a href="tnc.html" style="color: white;">Terms and Conditions</a>&emsp;
    <a href="contact_us.html" style="color: white;">Contact Us</a>&emsp;
    <a href="about_us.html" style="color: white;">About Us</a>&emsp;
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
