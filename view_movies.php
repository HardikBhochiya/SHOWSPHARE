<link rel="stylesheet" type="text/css" href="style.css">

<h2>Movies List</h2>

<table>
  <tr>
    <th>ID</th>
    <th>Movie Name</th>
    <th>Language</th>
    <th>Category</th>
    <th>Duration</th>
  </tr>

  <?php
  include 'db.php';
  $result = $conn->query("SELECT * FROM movies");

  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['movie_id']."</td>";
    echo "<td>".$row['title']."</td>";
    echo "<td>".$row['language']."</td>";
    echo "<td>".$row['genre']."</td>";
    echo "<td>".$row['duration']."</td>";
    echo "</tr>";
  }
  ?>

</table>

