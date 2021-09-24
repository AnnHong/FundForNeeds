<!DOCTYPE html>
<html>
<head>
  <link rel = "icon" href = "FundForNeedsV2.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
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

.adminresetbtn, .cancelbtn {
  float: left;
  width: 50%;
}

.container {
  padding: 16px;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

@media screen and (max-width: 300px) {
  .resetbtn, .cancelbtn {
     width: 100%;
  }
}

a {
  color: dodgerblue;
}

.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="/MasterFundForNeeds/Admin/processAdmin.php" method="POST" style="margin:25px 500px 75px 500px;">
  <div class="container">
    <h1>Create New Admin ID</h1>
    <p>Please fill in this form to verify your email.</p>
    <hr>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="admin_email"  required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter password" name="password"  required>

    <label for="password"><b>Email</b></label>
      <input type="password" placeholder="Enter repeat password" name="repeat_password"  required>
    <div class="clearfix">
      <button type="submit" class="verifybtn" name = "verify">Verify</button>
      <button type="button" class="cancelbtn"  onclick="location.href = '/MasterFundForNeeds/Admin/Admin_Login.php';">Cancel</button>
    </div>
  </div>
</form>
</body>
</html>