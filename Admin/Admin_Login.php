<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="index_theme.css">
<link rel='stylesheet' href='index_font.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="admin_login.css">
<title>Admin Login</title>
</head>
<body>
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="Admin_Login.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4 w3-hover-white"><i class="fa fa-home w3-margin-right"></i> <b>Fund For Needs</b> </a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
  <a href="Admin_Login.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-padding-large w3-hover-white" title="Notifications" onclick="window.location.href='Admin_Login.php';"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>
  </div>
    <a href="Admin_Login.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="Sign In" style="background-color: #04AA6D; color: white;">Sign In</a>
 </div>
</div>

<form action="processAdmin.php" method="post" style="padding-top:100px;">

  <div class="container">
    <label for="admin_email" ><b>Admin Email</b></label>
    <input type="text" placeholder="Enter Admin Email" name="admin_email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <br><br>
    <button type="submit" class="signinbtn" name="login" style="margin: 8px 0; width:100%;">Login</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="password">Forgot <a href="Admin_resetpassword.php">password?</a>&emsp;</span>
    <span class="password">Create  <a href="admin_verifyemail.php">New Admin ID</a>&emsp;|&emsp;</span>

  </div>
</form>
<div style="position:absolute; width:100%; bottom: 0px;">
  <footer class="w3-container w3-theme-d2 w3-padding-16">
  <div style="text-align:center;">
    <a href="admin_tnc.php">Terms and Conditions</a>&emsp;
    <a href="admin_aboutus.php">About Us</a>&emsp;
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
