<!DOCTYPE html>
<html>
<head>
  <title>Add Theater</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>Add Theater</h1>
  <!-- your form here -->
</body>
</html>
<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $location = $_POST['location'];

  $sql = "INSERT INTO theaters (theater_name, location)
          VALUES ('$name', '$location')";

  echo $conn->query($sql) ? "Theater added successfully!" : "Error: " . $conn->error;
}
?>
<form method="POST">
  <input type="text" name="name" placeholder="Theater Name" required><br>
  <input type="text" name="location" placeholder="Location" required><br>
  <input type="submit" value="Add Theater">
</form>
