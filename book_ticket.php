<!DOCTYPE html>
<html>
<head>
  <title>Add Movie</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>Add Movie</h1>
  <!-- your form here -->
</body>
</html>
<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $show_id = $_POST['show_id'];
  $customer_name = $_POST['customer_name'];
  $seats_booked = $_POST['seats_booked'];

  $sql = "INSERT INTO bookings (show_id, customer_name, seats_booked)
          VALUES ('$show_id', '$customer_name', '$seats_booked')";

  echo $conn->query($sql) ? "Booking successful!" : "Error: " . $conn->error;
}
?>
<form method="POST">
  <input type="number" name="show_id" placeholder="Show ID" required><br>
  <input type="text" name="customer_name" placeholder="Customer Name" required><br>
  <input type="number" name="seats_booked" placeholder="Seats Booked" required><br>
  <input type="submit" value="Book Ticket">
</form>
