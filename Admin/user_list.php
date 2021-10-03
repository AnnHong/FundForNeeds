<!DOCTYPE html>
<html>
<head>
  <title>User List</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="index_theme.css">
  <link rel='stylesheet' href='index_font.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
  .deletebutton{
    background-color:#ff0028 !important;
  }
  table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  margin:auto;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

#design4{
 background-color: red;
  border: none;
  color: white;
  padding: 12px 24px;
  text-decoration: none;
  margin: 2px 2px;
  cursor: pointer;
}
  </style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="Admin_HomePage.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4 w3-hover-white"><i class="fa fa-home w3-margin-right"></i><b>Fund For Needs</b></a>
  <a href="admin_history.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Donation History"><i class="fa fa-globe"></i></a>
  <a href="user_list.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="User List"><i class="fa fa-user"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-padding-large w3-hover-white" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">0</span></button>
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
      <a href="#" class="w3-bar-item w3-button">You have no notification yet.</a>
    </div>
  </div>
    <div class="w3-dropdown-hover w3-button w3-hide-small w3-right w3-padding-large w3-hover-white">

        <img src="avatar2.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">

        <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:150px;right: 0px;">
          <a href="admin_profile.php" class="w3-bar-item w3-button">My Profile</a>
          <a href="Admin_Login.php" class="w3-bar-item w3-button">Sign Out</a>

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



    <h2 style="text-align:center;">List of Users</h2>
<?php
include 'user_list_function.php';

	$qryUserList = getListOfUser();

  echo '<table>
    <tr>
    <th>No</th>
      <th>Full Name</th>
      <th>Username</th>
      <th>Email</th>
      <th>Password</th>
      <th>IC File</th>
      <th>Verification Status</th>
      <th>Verification</th>
      <th>Modification</th>
      <th>Deletion</th>
    </tr>';
    $count=1;

    while($row = mysqli_fetch_assoc($qryUserList)){

      echo '<tr>';
  						echo'<td>'.$count.'</td>';
  					echo '<td>'.$row['fullname'].'</td>';
  					echo '<td>'.$row['usernames'].'</td>';
  					echo '<td>'.$row['email'].'</td>';
  					echo '<td>'.$row['password'].'</td>';
            echo '<td>'.$row['file_name'].'</td>';
            echo '<td>'.$row['user_verify'].'</td>';
            $emailSelected=$row['email'];


  echo '<td style="text-align:center;"><form action="verifyUser.php" method="POST">';
    echo '<input type="hidden" name="emailToVerify"
      value="'.$emailSelected.'" >';

    echo '<input type="submit" value="Verify"
    name="verifyUserButton" id="design4">';
  echo '</form>';

  echo '<td>Edit</td>';
        echo '<td style="text-align:center;"><form action="deleteUser.php" method="POST">';
          echo '<input type="hidden" name="emailToDelete"
            value="'.$emailSelected.'" >';

          echo '<input type="submit" value="Delete"
          name="deleteUserButton" id="design4">';
        echo '</form>';

        echo '</tr>';
            $count++;

    }

echo   '</table>';


 ?>


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
<div class="w3-theme-d2" style="position:absolute; width:100%; bottom: 0px;">
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
</body>
</html>
