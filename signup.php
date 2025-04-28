<h1><<<- SIGN UP ->>></h1>
<link rel="stylesheet" href="style.css">
<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
  echo $conn->query($sql) ? "Signup successful! <a href='login.php'>Login here</a>" : "Error: $conn->error";
}
?>
<form method="POST">
  <input type="text" name="username" placeholder="Username" required><br><br>
  <input type="password" name="password" placeholder="Password" required><br><br>
  <input type="submit" value="Sign Up">
</form>