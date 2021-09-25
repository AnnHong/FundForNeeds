<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="index_theme.css">
<link rel='stylesheet' href='index_font.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="contact_us.css">
</head>
<body class="w3-theme-l5">
  <div class="w3-top">
   <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
    <a href="user_index.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Fund For Needs</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
    <div class="w3-dropdown-hover w3-button w3-hide-small w3-right w3-padding-large ">
      <button class="w3-button w3-padding-large" name = "account" title="My Account"></button>
        <img src="avatar2.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">

        <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:150px">
          <a href="index.php" class="w3-bar-item w3-button">Sign Out</a>
        </div>
      </div>
   </div>
  </div>
<br><br>
<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Leave us a message and our team will further proceed on it.</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="contact_us.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">Full Name</label>
        <input type="text" id="fname" name="fullname" placeholder="Your full name..">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Your email..">
        <label for="problem">Issue Type</label>
        <select id="problem" name="problem">
          <option value="account">Account Issue</option>
          <option value="technical">Technical Issue</option>
          <option value="others">Others</option>
        </select>
        <label for="description">Description</label>
        <textarea id="description" name="description" placeholder="Describe your issue.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

<div>
  <footer class="w3-container w3-theme-d3 w3-padding-16">
  <div style="text-align:center;">
    <a href="user_tnc.php">Terms and Conditions</a>&emsp;
    <a href="user_contactus.php">Contact Us</a>&emsp;
    <a href="user_aboutus.php">About Us</a>&emsp;
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
