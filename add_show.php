
<!DOCTYPE html>
<html>
<head>
  <title>Add Show</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>Add Show</h1>
  <!-- your form here -->
</body>
</html>
<?php
include 'db.php';

// Fetch movies
$movies = $conn->query("SELECT * FROM movies");
// Fetch theaters
$theaters = $conn->query("SELECT * FROM theaters");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $movie_id = $_POST['movie_id'];
  $theater_id = $_POST['theater_id'];
  $date = $_POST['show_date'];
  $time = $_POST['show_time'];

  $sql = "INSERT INTO shows (movie_id, theater_id, show_date, show_time)
          VALUES ('$movie_id', '$theater_id', '$date', '$time')";

  echo $conn->query($sql) ? "Show added successfully!" : "Error: " . $conn->error;
}
?>

<form method="POST">
  <label>Select Movie:</label>
  <select name="movie_id" required>
    <option value="">-- Select Movie --</option>
    <?php while ($row = $movies->fetch_assoc()) {
      echo "<option value='{$row['movie_id']}'>{$row['title']}</option>";
    } ?>
  </select><br><br>

  <label>Select Theater:</label>
  <select name="theater_id" required>
    <option value="">-- Select Theater --</option>
    <?php while ($row = $theaters->fetch_assoc()) {
      echo "<option value='{$row['theater_id']}'>{$row['theater_name']}</option>";
    } ?>
  </select><br><br>

  <input type="date" name="show_date" required><br><br>
  <input type="time" name="show_time" required><br><br>
  <input type="submit" value="Add Show">
</form>
