<?php
session_start();
if (!isset($_SESSION['username'])) { header("Location: login.php"); exit; }
?>
<link rel="stylesheet" href="style.css">
<h1>🎬 Movie Booking Portal</h1>
<a href="add_movie.php" class="button">Add Movie</a>
<a href="add_theater.php" class="button">Add Theater</a>
<a href="add_show.php" class="button">Add Show</a>
<a href="book_ticket.php" class="button">Book Ticket</a>
<a href="view_movies.php" class="button">View Movies</a>
<a href="view_shows.php" class="button">View Shows</a>
<a href="view_bookings.php" class="button">View Bookings</a>
<a href="logout.php" class="button">🚪 Logout</a>
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
