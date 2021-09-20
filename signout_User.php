<!DOCTYPE html>
<html>
<style>
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
</style>
<body style="margin:25px 500px 75px 500px;">

  <h1>Your are sign out already.</h1>
  
  <form action ="processUser.php" method="post">
    <button type="submit" name="homebtn">Home</button>
  </form>
</body>
</html>
