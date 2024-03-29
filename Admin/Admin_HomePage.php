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
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
  html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
  .deletebutton{
    background-color:#ff0028 !important;
  }
  * {box-sizing: border-box;}
    button:hover {
    opacity:1;
  }

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

  /* Float cancel and delete buttons and add an equal width */
  .confirmbtn, .cancelbtn {
    float: left;
    width: 50%;
  }

  /* Add a color to the cancel button */
  .confirmbtn {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    opacity: 0.9;
    border-radius: 75px 25px;
  }

  /* Add a color to the delete button */
  .cancelbtn {
    background-color: #f44336;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    opacity: 0.9;
    border-radius: 75px 25px;
  }

  /* Add padding and center-align text to the container */
  .container {
    padding: 16px;
    text-align: center;
  }

  /* The Modal (background) */
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
  }

  /* Modal Content/Box */
  .modal-content {
    background-color: #fefefe;
    margin: 10% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    width: 50%; /* Could be more or less, depending on screen size */
    box-shadow:0 4px 10px 0 rgba(0,0,0,0.2),0 4px 20px 0 rgba(0,0,0,0.19);
    border-radius:25px 25px;
  }

  /* Style the horizontal ruler */
  hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
  }

  /* Clear floats */
  .clearfix::after {
    content: "";
    clear: both;
    display: table;
  }

  /* Change styles for cancel button and delete button on extra small screens */
  @media screen and (max-width: 300px) {
    .confirmbtn, .cancelbtn {
      width: 100%;
    }
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
    <a href="Admin_HomePage.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4 w3-hover-white" style="border-radius: 15px 15px;"><i class="fa fa-home w3-margin-right"></i><b>Fund For Needs</b></a>
    <a href="admin_history.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Donation History" style="border-radius: 15px 15px;"><i class="fa fa-globe"></i></a>
    <a href="user_list.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="User List" style="border-radius: 15px 15px;"><i class="fa fa-user"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages" style="border-radius: 15px 15px;"><i class="fa fa-envelope"></i></a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-button w3-padding-large w3-hover-white" title="Notifications" style="border-radius: 15px 15px;"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">0</span></button>
      <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px;border-radius: 25px 25px;">
        <a href="#" class="w3-bar-item w3-button" style="border-radius: 25px 25px;">You have no notification yet.</a>
      </div>
    </div>
      <div class="w3-dropdown-hover w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" style="border-radius: 15px 15px;">

          <img src="avatar2.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">

          <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:150px;right: 0px;border-radius: 25px 25px;">
            <a href="admin_profile.php" class="w3-bar-item w3-button" style="border-radius: 25px 25px;">My Profile</a>
            <a href="Admin_Login.php" class="w3-bar-item w3-button" style="border-radius: 25px 25px;">Sign Out</a>

          </div>
        </div>
   </div>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
  </div>

  <!-- Page Container -->
  <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
    <!-- The Grid -->
    <div class="w3-row">
      <!-- Left Column -->
      <div class="w3-col m3">
        <!-- Profile -->
        <div class="w3-card w3-round w3-white">
          <div class="w3-container">
           <h4 class="w3-center">Admin</h4>
           <p class="w3-center"><img src="avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
           <hr>
           <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Front-End Programmer</p>
           <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> Pahang, MY</p>
           <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> Feb 15, 2001</p>
          </div>
        </div>
        <br>

        <!-- Accordion -->
        <div class="w3-card w3-round">
          <div class="w3-white">
            <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My Groups</button>
            <div id="Demo1" class="w3-hide w3-container">
              <p>Some text..</p>
            </div>
            <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
            <div id="Demo2" class="w3-hide w3-container">
              <p>Some other text..</p>
            </div>
            <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
          </div>
        </div>

      <!-- End Left Column -->
      </div>

      <!-- Middle Column -->
      <div class="w3-col m7">
        <div class="w3-row-padding">
          <div class="w3-col m12">
            <div class="w3-card w3-round w3-white">
              <div class="w3-container w3-padding">
                <h6 class="w3-opacity">Admin Information Annoucement.</h6>
                <p contenteditable="true" class="w3-border w3-padding">Write some information...</p>
                <button type="button" class="w3-button w3-theme-d2" onclick="document.getElementById('id02').style.display='block'" style="border-radius:25px 25px;"><i class="fa fa-pencil"></i>  Post</button>
              </div>
            </div>
          </div>
        </div>

        <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
          <img src="avatar2.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
          <span class="w3-right w3-opacity">1 min</span>
          <h4>Ann Hong</h4><br>
          <hr class="w3-clear">
          <p>Hello everyone, I need some money for my children to further thier degree study.</p>
            <div class="w3-row-padding" style="margin:0 -16px">
              <div class="w3-half">
                <img src="lights.jpg" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
              </div>
              <div class="w3-half">
                <img src="nature.jpg" style="width:100%" alt="Nature" class="w3-margin-bottom">
            </div>
          </div>
          <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom deletebutton" onclick="document.getElementById('id01').style.display='block'" style="border-radius:25px 25px;"> Delete Post</button>
        </div>

        <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
          <img src="avatar5.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
          <span class="w3-right w3-opacity">16 min</span>
          <h4>Sheng Earn</h4><br>
          <hr class="w3-clear">
          <p>Hello everyone, I need some money for my children to further thier degree study.</p>
          <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom deletebutton" onclick="document.getElementById('id01').style.display='block'" style="border-radius:25px 25px;">Delete Post</button>
        </div>

        <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
          <img src="avatar6.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
          <span class="w3-right w3-opacity">32 min</span>
          <h4>Zhi Hao</h4><br>
          <hr class="w3-clear">
          <p>Please...I'm really need your help</p>
          <img src="snow.jpg" style="width:100%" class="w3-margin-bottom">
          <p>Hello everyone, I need some money for my children to further thier degree study.</p>
          <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom deletebutton" onclick="document.getElementById('id01').style.display='block'" style="border-radius:25px 25px;">Delete Post</button>
        </div>
        <div id="id01" class="modal">
          <form class="modal-content w3-animate-zoom" action="/action_page.php" style="border-radius: 25px 25px;">
            <div class="container">
              <h1>Post Deletion</h1>
              <p>Are you sure you want to delete this post?</p>
              <div class="clearfix">
                <button type="button" class="confirmbtn">Confirm</button>
                <button type="button" class="cancelbtn" onclick="document.getElementById('id01').style.display='none'">Cancel</button>
              </div>
            </div>
          </form>
        </div>
        <div id="id02" class="modal">
          <form class="modal-content w3-animate-zoom" action="/action_page.php" style="border-radius: 25px 25px;">
            <div class="container">
              <h1>Post Annoucement</h1>
              <p>Are you sure you want to post this annoucement?</p>
              <div class="clearfix">
                <button type="button" class="confirmbtn">Confirm</button>
                <button type="button" class="cancelbtn" onclick="document.getElementById('id02').style.display='none'">Cancel</button>
              </div>
            </div>
          </form>
        </div>


        <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
        </script>
        <script>
        // Get the modal
        var modal = document.getElementById('id02');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
        </script>
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
  <div class="w3-theme-d2" style="bottom: 0px;">
    <footer class="w3-container w3-padding-16">
    <div style="text-align:center;">
      <a href="login_tnc.php">Terms and Conditions</a>&emsp;
      <a href="login_aboutus.php">About Us</a>&emsp;
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
