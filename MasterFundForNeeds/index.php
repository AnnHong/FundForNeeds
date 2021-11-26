<!DOCTYPE html>
<html>
<head>
  <title>Fund For Needs</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="index_theme.css">
  <link rel='stylesheet' href='index_font.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}

  /* Center the loader */
  #loader {
    position: absolute;
    left: 50%;
    top: 50%;
    z-index: 1;
    width: 120px;
    height: 120px;
    margin: -76px 0 0 -76px;
    border: 16px solid #f3f3f3;
    border-radius: 50%;
    border-top: 16px solid #3498db;
    -webkit-animation: spin 1s linear infinite;
    animation: spin 1s linear infinite;
  }

  @-webkit-keyframes spin {
    0% { -webkit-transform: rotate(0deg); }
    100% { -webkit-transform: rotate(360deg); }
  }

  @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }

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

  #myDiv {
    display: none;
  }
  </style>
</head>
<body onload="load()" style="margin:0;">
    <div id="loader"></div>
<div style="display:none;" id="myDiv" class="animate-bottom">
  <!-- Navbar -->
  <div class="w3-top">
   <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4 w3-hover-white" style="border-radius: 15px 15px;"><i class="fa fa-home w3-margin-right"></i> <b>Fund For Needs</b> </a>
    <a href="user_signin.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Donation History" style="border-radius: 15px 15px;"><i class="fa fa-globe"></i></a>
    <a href="user_signin.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages" style="border-radius: 15px 15px;"><i class="fa fa-envelope"></i></a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-button w3-padding-large w3-hover-white" title="Notifications" onclick="window.location.href='user_signin.php';" style="border-radius: 15px 15px;"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>
    </div>
    <a href="user_signin.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="Sign In" style="background-color: #04AA6D; color: white;border-radius: 25px 25px;">Sign In</a>
   </div>
  </div>

  <!-- Page Container -->
  <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
    <!-- The Grid -->
    <div class="w3-row">
      <!-- Middle Column -->
      <div class="w3-col m7" style="margin-left: 20%;">

        <div class="w3-row-padding">
          <div class="w3-col m12">
            <div class="w3-card w3-round w3-white">
              <div class="w3-container w3-padding">
                <h6 class="w3-opacity">Post to ask for donation</h6>
                <p contenteditable="true" class="w3-border w3-padding">Ask For Donation</p>
                <button type="button" class="w3-button w3-theme" onclick="window.location.href='user_signin.php';" style="border-radius:25px 25px;"><i class="fa fa-pencil"></i>  Post</button>
              </div>
            </div>
          </div>
        </div>

        <?php
          $con=  mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");
          if(!$con){
            echo mysqli_error();
          }
          else{
            $sql = "select posts.*, users.usernames, users.email from posts inner join users on posts.User_Email = users.email";
            if(!mysqli_query($con, $sql)){
              return mysqli_error($con);
            }
            else{
              $q = mysqli_query($con, $sql);
              $datas = mysqli_fetch_all($q);
              foreach($datas as $data){ // call count_array for post table
                include "post_display_index.php";
                //var_dump($data);
              }
            }
          }
         ?>
      <!-- End Middle Column -->
      </div>
    <!-- End Grid -->
    </div>
  <!-- End Page Container -->
  </div>
  <br>

  <script>
  // Accordion
  function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
      x.previousElementSibling.className += " w3-theme-d1";
    } else {
      x.className = x.className.replace("w3-show", "");
      x.previousElementSibling.className =
      x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
  }

  // Used to toggle the menu on smaller screens when clicking on the menu button
  function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }
  </script>
  <div>
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
  <script>
  var myVar;
  function load() {
    myVar = setTimeout(showPage, 500);
  }
  function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("myDiv").style.display = "block";
  }
  </script>
</div>
</body>
</html>
