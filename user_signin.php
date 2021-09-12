<!DOCTYPE html>
<html>
<head>
  <link rel = "icon" href = "FundForNeedsV2.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity: 1;
}

.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

.signupbtn {
  width: auto;
  padding: 10px 18px;
}

@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .signinbtn, .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>Fund For Needs</h2>

<form action="processUser.php" method="post">

  <div class="container">
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <div class="clearfix">
      <button type="submit" class="signinbtn" name="signin">Sign In</button>
      <button type="button" class="cancelbtn">Cancel</button>
    </div>
  </div>

  <div class="container" style="background-color:#f1f1f1">
      <p>Don't have an account? <a href="user_signup.html">Register Now.</a>.</p>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>
