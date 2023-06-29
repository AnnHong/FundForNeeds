<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="index_theme.css">
  <link rel='stylesheet' href='index_font.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="admin_aboutus.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>About Us</title>
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

  img{
     pointer-events: none;
  }
  </style>
</head>
<body class="animate-bottom">
  <div class="w3-top">
   <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
    <a href="Admin_HomePage.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4 w3-hover-white" style="border-radius:15px 15px;"><i class="fa fa-home w3-margin-right"></i> <b>Fund For Needs</b> </a>
    <a href="admin_history.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Donation History" style="border-radius:15px 15px;"><i class="fa fa-globe"></i></a>
    <a href="user_list.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="User List" style="border-radius:15px 15px;"><i class="fa fa-user"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages" style="border-radius:15px 15px;"><i class="fa fa-envelope"></i></a>

    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-button w3-padding-large w3-hover-white" title="Notifications" style="border-radius:15px 15px;"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>

      <div class="w3-dropdown-content w3-card-4 w3-bar-block " style="width:300px;border-radius:25px 25px;">
        <a href="#" class="w3-bar-item w3-button" style="border-radius:25px 25px;">One new friend request</a>
        <a href="#" class="w3-bar-item w3-button" style="border-radius:25px 25px;">Ann Hong posted on your wall</a>
        <a href="#" class="w3-bar-item w3-button" style="border-radius:25px 25px;">Zhi Hao Donates your post</a>
      </div>
    </div>

    <div class="w3-dropdown-hover w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" style="border-radius:15px 15px;">
        <img src="avatar2.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
        <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:150px;right:0px;border-radius:25px 25px;">
          <a href="admin_profile.php" class="w3-bar-item w3-button" style="border-radius:25px 25px;">My Profile</a>
          <a href="Admin_login.php" class="w3-bar-item w3-button" style="border-radius:25px 25px;">Sign Out</a>
        </div>
      </div>
   </div>
  </div>
<br><br>
<div>
  <div class="about-section w3-animate-top">
  <h1>About Us</h1>
  <p>There's a part of every one of us that dream of a better world. The spark of inspiration to help a people or help the neighbourhood. At FundForNeeds, we believe you can use your inspiration to help others and this is how changes happen. During this pandemic, many families have gone through the pass of their loved ones, no income and many other situation. This is where we decided to start FundForNeeds so that everyone can help out others with just a few simple click.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column w3-animate-right">
    <div class="card">
      <img src="annhong.jpeg" alt="annhong" style="width:100%">
      <div class="container">
        <h2>KHOO ANN HONG</h2>
        <p class="title">CEO & Founder</p>
        <p>hehehe.</p>
        <p>khooannhong01@gmail.com</p>
        <p><a class="button" href="mailto:khooannhong01@gmail.com" style="border-radius:25px 25px;">Contact</a></p>
      </div>
    </div>
  </div>

  <div class="column w3-animate-bottom">
    <div class="card">
      <img src="zhaolin.jpg" alt="zhaolin" style="width:100%">
      <div class="container">
        <h2>LAU ZHAO LIN</h2>
        <p class="title">Full-Stack Web Developer</p>
        <p>Learn to code and help nonprofits.</p>
        <p>zhaolinlau@gmail.com</p>
        <p><a class="button" href="mailto:zhaolinlau@gmail.com" style="border-radius:25px 25px;">Contact</a></p>
      </div>
    </div>
  </div>

  <div class="column w3-animate-left">
    <div class="card">
      <img src="zhihao.jpeg" alt="zhihao" style="width:100%">
      <div class="container">
        <h2>YAP ZHI HAO</h2>
        <p class="title">Front-End Web Developer</p>
        <p>Life is Unpredictable.</p>
        <p>zhihao1919@gmail.com</p>
        <p><a class="button" href="mailto:zhihao1919@gmail.com" style="border-radius:25px 25px;">Contact</a></p>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="column w3-animate-right">
    <div class="card">
      <img src="shengearn.jpeg" alt="shengearn" style="width:100%">
      <div class="container">
        <h2>LIM SHENG EARN</h2>
        <p class="title">Back-End Web Developer</p>
        <p>hehehe.</p>
        <p>limshengearn@gmail.com</p>
        <p><a class="button" href="mailto:limshengearn@gmail.com" style="border-radius:25px 25px;">Contact</a></p>
      </div>
    </div>
  </div>

  <div class="column w3-animate-top">
    <div class="card">
      <img src="logaraaj.jpeg" alt="logaraaj" style="width:100%">
      <div class="container">
        <h2>LOGARAAJ A/L NARAYANAN</h2>
        <p class="title">Project Manager</p>
        <p>hehehe.</p>
        <p>logaraajnara@gmail.com</p>
        <p><a class="button" href="mailto:logaraajnara@gmail.com" style="border-radius:25px 25px;">Contact</a></p>
      </div>
    </div>
  </div>

  <div class="column w3-animate-left">
    <div class="card">
      <img src="iskandar.jpeg" alt="John" style="width:100%">
      <div class="container">
        <h2>MOHD AL ISKANDAR BIN MOHD GHAZALI</h2>
        <p class="title">Project Manager</p>
        <p>The sky is limit.</p>
        <p>al.iskandar@hotmail.com</p>
        <p><a class="button" href="mailto:al.iskandar@hotmail.com" style="border-radius:25px 25px;">Contact</a></p>
      </div>
    </div>
  </div>
</div>
</div>

<div>
  <footer class="w3-container w3-theme-d2 w3-padding-16">
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
</body>
</html>
