<!DOCTYPE html>
<html>
<head>
  <title>Transactions</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Transactions History</h1>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Sender</th>
        <th>Receiver</th>
        <th>Amount</th>
        <th>Date and Time</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $databasename = "grip";

      // Create a connection to the database
      $conn = new mysqli($servername, $username, $password, $databasename);

      // Check if the connection was successful
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      // The SQL query to fetch the data from the database
      $query = "SELECT * FROM transactions";

      // Execute the query
      $result = $conn->query($query);

      // Check if the query was successful
      if ($result->num_rows > 0) {
        // Loop through the results and echo the data
        while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row["id"] . "</td>";
          echo "<td>" . $row["sender"] . "</td>";
          echo "<td>" . $row["receiver"] . "</td>";
          echo "<td>" . $row["amount"] . "</td>";
          echo "<td>" . $row["date and time"] . "</td>";
          echo "</tr>";
        }
      } else {
        echo "No data found";
      }

      // Close the connection to the database
      $conn->close();
      ?>
    </tbody>
  </table>
</body>
</html>