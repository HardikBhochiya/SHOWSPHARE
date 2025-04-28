<link rel="stylesheet" type="text/css" href="style.css">
<h2>Shows List !!</h2>

<table>
  <tr>
    <th>SHOW ID</th>
    <th>Movie</th>
    <th>Theater</th>
    <th>Date</th>
    <th>Time</th>
  </tr>

  <?php
  include 'db.php';
  $result = $conn->query("SELECT shows.show_id, movies.title, theaters.theater_name, shows.show_date, shows.show_time
  FROM shows
  JOIN movies ON shows.movie_id = movies.movie_id
  JOIN theaters ON shows.theater_id = theaters.theater_id");

  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['show_id']."</td>";
    echo "<td>".$row['title']."</td>";
    echo "<td>".$row['theater_name']."</td>";
    echo "<td>".$row['show_date']."</td>";
    echo "<td>".$row['show_time']."</td>";
    echo "</tr>";
  }
  ?>

</table>

