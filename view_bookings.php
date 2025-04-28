<link rel="stylesheet" type="text/css" href="style.css">

<h2>Bookings List</h2>
<table>
  <tr>
    <th>BOOKING ID</th>
    <th>SHOW ID</th>
    <th>CUSTOMER NAME</th>
    <th>SEATS</th>
  </tr>

  <?php
  include 'db.php';
  $result = $conn->query(" 
  SELECT bookings.booking_id, shows.show_id, bookings.customer_name, bookings.seats_booked
  FROM bookings
  JOIN shows ON bookings.show_id = shows.show_id");

  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['booking_id']."</td>";
    echo "<td>".$row['show_id']."</td>";
    echo "<td>".$row['customer_name']."</td>";
    echo "<td>".$row['seats_booked']."</td>";
    echo "</tr>";
  }
  ?>

</table>


<!-- while ($row = $result->fetch_assoc()) {
  echo "Booking ID: " . $row['booking_id'] . " | " .
       "Show ID: " . $row['show_id'] . " | " .
       "Customer: " . $row['customer_name'] . " | " .
       "Seats: " . $row['seats_booked'] . "<br>";
}
?> -->
