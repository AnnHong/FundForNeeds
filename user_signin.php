<<<<<<< current
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="index_theme.css">
<link rel='stylesheet' href='index_font.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="user_signin.css">
<title>Sign In</title>
<style>
button{
  border-radius: 75px 25px;
}

input{
  border-radius: 50px 50px;
}

/* Add animation to "page content" */
.animate-bottom {
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
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4 w3-hover-white" style="border-radius: 15px 15px;"><i class="fa fa-home w3-margin-right"></i> <b>Fund For Needs</b> </a>
    <a href="user_signin.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="Sign In" style="background-color: #04AA6D; color: white;border-radius: 25px 25px;">Sign In</a>
   </div>
  </div>

<form action="signin.php" method="post" style="margin:100px 500px 75px 500px;border-radius: 15px 15px;">

  <div class="container">
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input id="pass" type="password" placeholder="Enter Password" name="password" required>
    <input type="checkbox" onclick="showpass()" style="margin-bottom:10px;"> Show Password
    <script>
    function showpass() {
      var x = document.getElementById("pass");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
        }
      }
    </script>

    <div class="clearfix">
      <button type="submit" class="signinbtn" name="signinbtn" style="margin-bottom:10px;">Sign In</button>
      <button type="button" class="cancelbtn" onclick="location.href = 'index.php';">Cancel</button>
    </div>
  </div>

  <div class="container" style="background-color:#f1f1f1">
      <p>Don't have an account? <a href="user_signup.php">Sign Up Now</a> <span class="password">Forgot <a href="user_reset_password.php">password?</a></span></p>
  </div>
</form>
<div style="position:absolute; width:100%; bottom: 0px;">
  <footer class="w3-container w3-theme-d2 w3-padding-16">
  <div style="text-align:center;">
    <a href="tnc.html" style="color:white;text-shadow: 2px 2px 20px #000000;">Terms and Conditions</a>&emsp;
    <a href="contact_us.html" style="color:white;text-shadow: 2px 2px 20px #000000;">Contact Us</a>&emsp;
    <a href="about_us.html" style="color:white;text-shadow: 2px 2px 20px #000000;">About Us</a>&emsp;
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
=======
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="index_theme.css">
<link rel='stylesheet' href='index_font.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="user_signin.css">
<title>Sign In</title>
<style>
button{
  border-radius: 75px 25px;
}

input{
  border-radius: 50px 50px;
}

/* Add animation to "page content" */
.animate-bottom {
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

.size_image{
  width:150px;
  margin-left: 35%;
  margin-right: 50%;
}
</style>
</head>
<body class="animate-bottom">
  <div class="w3-top">
   <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4 w3-hover-white" style="border-radius: 15px 15px;"><i class="fa fa-home w3-margin-right"></i> <b>Fund For Needs</b> </a>
    <a href="user_signin.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="Sign In" style="background-color: #04AA6D; color: white;border-radius: 25px 25px;">Sign In</a>
   </div>
  </div>

<form action="signin.php" method="post" style="margin:100px 500px 75px 500px;border-radius: 15px 15px;">

  <div class="container">
    <img class="size_image" src="FundForNeedsV2.png"><br>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input id="pass" type="password" placeholder="Enter Password" name="password" required>
    <input type="checkbox" onclick="showpass()" style="margin-bottom:10px;"> Show Password
    <script>
    function showpass() {
      var x = document.getElementById("pass");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
        }
      }
    </script>

    <div class="clearfix">
      <button type="submit" class="signinbtn" name="signinbtn" style="margin-bottom:10px;">Sign In</button>
      <button type="button" class="cancelbtn" onclick="location.href = 'index.php';">Cancel</button>
    </div>
  </div>

  <div class="container" style="background-color:#f1f1f1">
      <p>Don't have an account? <a href="user_signup.php">Sign Up Now</a> <span class="password">Forgot <a href="user_reset_password.php">password?</a></span></p>
  </div>
</form>
<div style="position:absolute; width:100%; bottom: -70px;">
  <footer class="w3-container w3-theme-d2 w3-padding-16">
  <div style="text-align:center;">
    <a href="tnc.html" style="color:white;text-shadow: 2px 2px 20px #000000;">Terms and Conditions</a>&emsp;
    <a href="contact_us.html" style="color:white;text-shadow: 2px 2px 20px #000000;">Contact Us</a>&emsp;
    <a href="about_us.html" style="color:white;text-shadow: 2px 2px 20px #000000;">About Us</a>&emsp;
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
>>>>>>> before discard
