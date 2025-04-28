<h1><<<- LOGIN ->>></h1>
<link rel="stylesheet" href="style.css">
<?php
session_start();
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $result = $conn->query("SELECT * FROM users WHERE username='$username'");
  if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
      $_SESSION['username'] = $username;
      header("Location: index.php");
      exit;
    } else { echo "Incorrect password!"; }
  } else { echo "User not found!"; }
}
?>
<form method="POST">
  <input type="text" name="username" placeholder="Username" required><br><br>
  <input type="password" name="password" placeholder="Password" required><br><br>
  <input type="submit" value="Login">
</form>
<a href="signup.php">Sign Up</a>
