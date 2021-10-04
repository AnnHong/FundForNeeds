<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="index_theme.css">
<link rel='stylesheet' href='index_font.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="admin_verifyemail.css">
<title>Admin Account Creation</title>
<style media="screen">
/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 }
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom {
  from{ bottom:-100px; opacity:0 }
  to{ bottom:0; opacity:1 }
}
</style>
</head>
<body class="animate-bottom">
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="Admin_Login.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4 w3-hover-white" style="border-radius:15px 15px;"><i class="fa fa-home w3-margin-right"></i> <b>Fund For Needs</b> </a>
  <a href="Admin_Login.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="Sign In" style="background-color: #04AA6D; color: white;border-radius:25px 25px;">Sign In</a>
 </div>
</div>
<form action="processAdmin.php" method="POST" style="margin:75px 500px 25px 500px;">
  <div class="container">
    <label for="fullname"><b>Full Name</b></label>
    <input type="text" placeholder="Enter Full name" name="admin_fullname" style="border-radius: 25px 25px;" required>

    <label for="staffid"><b>Staff ID</b></label>
    <input type="text" placeholder="Enter Staff ID" name="admin_staffid" style="border-radius: 25px 25px;" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="admin_email" style="border-radius: 25px 25px;" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter password" name="password" style="border-radius: 25px 25px;" minlength="8" maxlength="16" required>

    <label for="password"><b>Repeat Password</b></label>
      <input type="password" placeholder="Enter repeat password" name="repeat_password" style="border-radius: 25px 25px;" minlength="8" maxlength="16" required>
    <div class="clearfix">
      <button type="submit" class="verifybtn" name = "verify" style="margin: 8px 0;width: 100%;border-radius: 75px 25px;">Verify</button>
      <button type="button" class="cancelbtn"  onclick="location.href = 'Admin_Login.php';" style="margin: 8px 0;width: 100%;border-radius: 75px 25px;">Cancel</button>
    </div>
  </div>
</form>
<div style="bottom: 0px;">
  <footer class="w3-container w3-theme-d2 w3-padding-16">
  <div style="text-align:center;">
    <a href="admin_tnc.php" style="color:white;">Terms and Conditions</a>&emsp;
    <a href="admin_aboutus.php" style="color:white;">About Us</a>&emsp;
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
