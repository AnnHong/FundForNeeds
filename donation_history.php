<!DOCTYPE html>
<html>
<head>
</head>
<title>Donation History</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="index_theme.css">
<link rel='stylesheet' href='index_font.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}

details > summary{
  cursor:pointer;
}

.pay{
  color:#012269;
}

.pal{
  color:#019CDE;
}

.success{
  color: #28a745;
}

.fail{
  color: red;
}
</style>
<body>
<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="user_index.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4 w3-hover-white"><i class="fa fa-home w3-margin-right"></i> <b>Fund For Needs</b> </a>
  <a href="donation_history.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Donation History"><i class="fa fa-globe"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>

  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-padding-large w3-hover-white" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>

    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
      <a href="#" class="w3-bar-item w3-button">One new friend request</a>
      <a href="#" class="w3-bar-item w3-button">Ann Hong posted on your wall</a>
      <a href="#" class="w3-bar-item w3-button">Zhi Hao Donated you</a>
      <a href="#" class="w3-bar-item w3-button">Sheng Earn Donated you</a>
    </div>
  </div>

<div class="w3-dropdown-hover w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" style="border-radius:25px 25px;">
    <img src="avatar2.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
    <div class="w3-dropdown-content w3-card-4 w3-bar-block w3-hover-white" style="width:150px;right:0px;border-radius:25px 25px;">
      <a href="user_profile.php" class="w3-bar-item w3-button" style="border-radius:25px 25px;text-align:center;">My Profile</a>
      <a href="index.php" class="w3-bar-item w3-button" style="border-radius:25px 25px;text-align:center;">Sign Out</a>
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

<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
  <h1 style="text-align:center;">Donation History</h1>
  <div class="w3-row">
    <div class="w3-col m7" style="margin-left: 20%;">
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
          <p>You have donated RM5.00 to @zhaolin_lau</p>
        <details id="details">
          <summary>Show Details</summary>
            <table style="width:50%;">
              <tr>
                <th hidden>PayPal</th>
                <th hidden>Details</th>
              </tr>
              <tr>
                <td><b class="pay">Pay</b><b class="pal">Pal</b></td>
              </tr>
              <tr>
                <td>Status</td>
                <td>:&emsp;<b class="success">Successful</b></td>
              </tr>
              <tr>
                <td>Reference Number</td>
                <td>:&emsp;<b>1234567890</b></td>
              </tr>
              <tr>
                <td>Transaction Date</td>
                <td>:&emsp;<b>03/10/2021 15:22:30</b></td>
              </tr>
              <tr>
                <td>Amount</td>
                <td>:&emsp;<b>RM5.00</b></td>
              </tr>
              <tr>
                <td>Beneficiary Name</td>
                <td>:&emsp;<b>LAU ZHAO LIN</b></td>
              </tr>
              <tr>
                <td>Beneficiary Account</td>
                <td>:&emsp;<b>334455661188</b></td>
              </tr>
              <tr>
                <td>Recipient Reference</td>
                <td>:&emsp;<b>fund for needs!</b></td>
              </tr>
            </table>
        </details>
        <br>
      </div>

      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <p>You have failed to donate RM5.00 to @zhaolin_lau</p>
      <details id="details">
        <summary>Show Details</summary>
          <table style="width:50%;">
            <tr>
              <th hidden>PayPal</th>
              <th hidden>Details</th>
            </tr>
            <tr>
              <td><b class="pay">Pay</b><b class="pal">Pal</b></td>
            </tr>
            <tr>
              <td>Status</td>
              <td>:&emsp;<b class="fail">Failed</b></td>
            </tr>
            <tr>
              <td>Reference Number</td>
              <td>:&emsp;<b>1234567890</b></td>
            </tr>
            <tr>
              <td>Transaction Date</td>
              <td>:&emsp;<b>03/10/2021 15:22:30</b></td>
            </tr>
            <tr>
              <td>Amount</td>
              <td>:&emsp;<b>RM5.00</b></td>
            </tr>
            <tr>
              <td>Beneficiary Name</td>
              <td>:&emsp;<b>LAU ZHAO LIN</b></td>
            </tr>
            <tr>
              <td>Beneficiary Account</td>
              <td>:&emsp;<b>334455661188</b></td>
            </tr>
            <tr>
              <td>Recipient Reference</td>
              <td>:&emsp;<b>fund for needs!</b></td>
            </tr>
          </table>
      </details>
      <br>
      </div>

      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <p>You have collected RM8.00 from @zhaolin_lau</p>
      <details id="details">
        <summary>Show Details</summary>
          <table style="width:50%;">
            <tr>
              <th hidden>PayPal</th>
              <th hidden>Details</th>
            </tr>
            <tr>
              <td><b class="pay">Pay</b><b class="pal">Pal</b></td>
            </tr>
            <tr>
              <td>Status</td>
              <td>:&emsp;<b class="success">Successful</b></td>
            </tr>
            <tr>
              <td>Reference Number</td>
              <td>:&emsp;<b>1234567890</b></td>
            </tr>
            <tr>
              <td>Transaction Date</td>
              <td>:&emsp;<b>03/10/2021 15:22:30</b></td>
            </tr>
            <tr>
              <td>Amount</td>
              <td>:&emsp;<b>RM8.00</b></td>
            </tr>
            <tr>
              <td>Beneficiary Name</td>
              <td>:&emsp;<b>LAU ZHAO LIN</b></td>
            </tr>
            <tr>
              <td>Beneficiary Account</td>
              <td>:&emsp;<b>334455661188</b></td>
            </tr>
            <tr>
              <td>Recipient Reference</td>
              <td>:&emsp;<b>fund for needs!</b></td>
            </tr>
          </table>
      </details>
      <br>
      </div>

      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <p>You have failed to collect RM8.00 from @zhaolin_lau</p>
      <details id="details">
        <summary>Show Details</summary>
          <table style="width:50%;">
            <tr>
              <th hidden>PayPal</th>
              <th hidden>Details</th>
            </tr>
            <tr>
              <td><b class="pay">Pay</b><b class="pal">Pal</b></td>
            </tr>
            <tr>
              <td>Status</td>
              <td>:&emsp;<b class="fail">Failed</b></td>
            </tr>
            <tr>
              <td>Reference Number</td>
              <td>:&emsp;<b>1234567890</b></td>
            </tr>
            <tr>
              <td>Transaction Date</td>
              <td>:&emsp;<b>03/10/2021 15:22:30</b></td>
            </tr>
            <tr>
              <td>Amount</td>
              <td>:&emsp;<b>RM8.00</b></td>
            </tr>
            <tr>
              <td>Beneficiary Name</td>
              <td>:&emsp;<b>LAU ZHAO LIN</b></td>
            </tr>
            <tr>
              <td>Beneficiary Account</td>
              <td>:&emsp;<b>334455661188</b></td>
            </tr>
            <tr>
              <td>Recipient Reference</td>
              <td>:&emsp;<b>fund for needs!</b></td>
            </tr>
          </table>
      </details>
      <br>
      </div>

      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <p>You have donated RM12.00 to @zhaolin_lau</p>
      <details id="details">
        <summary>Show Details</summary>
          <table style="width:50%;">
            <tr>
              <th hidden>PayPal</th>
              <th hidden>Details</th>
            </tr>
            <tr>
              <td><b class="pay">Pay</b><b class="pal">Pal</b></td>
            </tr>
            <tr>
              <td>Status</td>
              <td>:&emsp;<b class="success">Successful</b></td>
            </tr>
            <tr>
              <td>Reference Number</td>
              <td>:&emsp;<b>1234567890</b></td>
            </tr>
            <tr>
              <td>Transaction Date</td>
              <td>:&emsp;<b>03/10/2021 15:22:30</b></td>
            </tr>
            <tr>
              <td>Amount</td>
              <td>:&emsp;<b>RM12.00</b></td>
            </tr>
            <tr>
              <td>Beneficiary Name</td>
              <td>:&emsp;<b>LAU ZHAO LIN</b></td>
            </tr>
            <tr>
              <td>Beneficiary Account</td>
              <td>:&emsp;<b>334455661188</b></td>
            </tr>
            <tr>
              <td>Recipient Reference</td>
              <td>:&emsp;<b>fund for needs!</b></td>
            </tr>
          </table>
      </details>
      <br>
      </div>
    </div>
  </div>
</div>

<br>

<div style="bottom: 0px;">
  <footer class="w3-container w3-theme-d2 w3-padding-16">
  <div style="text-align:center;">
    <a href="user_tnc.php" style="color:white;text-shadow: 2px 2px 4px #000000;">Terms and Conditions</a>&emsp;
    <a href="user_contactus.php" style="color:white;text-shadow: 2px 2px 4px #000000;">Contact Us</a>&emsp;
    <a href="user_aboutus.php" style="color:white;text-shadow: 2px 2px 4px #000000;">About Us</a>&emsp;
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
