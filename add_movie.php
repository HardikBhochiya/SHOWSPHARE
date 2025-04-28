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
session_start();
if (!isset($_SESSION['username'])) { header("Location: login.php"); exit; }
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST['title'];
  $language = $_POST['language'];
  $genre = $_POST['genre'];
  $hours = $_POST['hours'];
  $minutes = $_POST['minutes'];
  if ($hours < 0 || $hours > 5 || $minutes < 0 || $minutes > 59) {
    echo "Invalid duration!"; exit;
  }
  $duration = $hours . "h " . $minutes . "m";
  $sql = "INSERT INTO movies (title, language, genre, duration) VALUES ('$title', '$language', '$genre', '$duration')";
  echo $conn->query($sql) ? "Movie added successfully!" : "Error: $conn->error";
}
?>
<a href="index.php" class="button">🏠 Home</a>
<form method="POST">
  <input type="text" name="title" placeholder="Title" required><br>
  <!-- <input type="text" name="language" placeholder="Language" required><br> -->

  <label>Language:</label>
  <select name="language" required>
    <option value="">-- Select Language --</option>
    <option value="English">English</option>
    <option value="Japnese">Japnese</option>
    <option value="Hindi">Hindi</option>
    <option value="Gujarati">Gujarati</option>
  </select><br>

  <label>Genre:</label>
  <select name="genre" required>
    <option value="">-- Select Genre --</option>
    <option value="Action">Action</option>
    <option value="Adventure">Adventure</option>
    <option value="Comedy">Comedy</option>
    <option value="Horror">Horror</option>
    <option value="Drama">Drama</option>
  </select><br>
  <label>Duration:</label>
  <input type="number" name="hours" placeholder="Hours (0-5)" min="0" max="5" required>
  <input type="number" name="minutes" placeholder="Minutes (0-59)" min="0" max="59" required><br>
  <input type="submit" value="Add Movie">
</form>