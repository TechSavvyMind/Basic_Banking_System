<!DOCTYPE html>
<html>
<head>
    <title>Customer Records</title>
    <style>
        *
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
body {
    font-family: sans-serif;
  }
  
  table {
    border-collapse: collapse;
    width: 100%;
    margin-top: 20px;
    border: 1px solid black;
  }
  
  th, td {
    padding: 8px;
  }
  
  th {
    text-align: left;
    background-color: #dddddd;
    font-weight: bold;
    color: black;
  }
  
  td {
    text-align: left;
    color: black;
    font-size: 14px;
  }
  
  .table-container {
    width: 500px;
    margin: 0 auto;
  }
  
  @media screen and (max-width: 500px) {
    .table-container {
      width: 100%;
    }
  }
  
  @media screen and (max-width: 360px) {
    .table-container {
      width: 50%;
    }
  }
        form {
            margin-top: 30px;
            width: 400px;
            margin-left: auto;
            margin-right: auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        form h2 {
            margin-top: 0;
            font-size: 18px;
            color: #837269;
        }

        form label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        form input[type="text"],
        form input[type="email"],
        form input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        form input[type="submit"] {
            background-color: #dddddd;
            color: #000;
            border: none;
            padding: 10px 20px;
            margin-top: 20px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <h1>Customer Records</h1>

    <table>
        <tr>
            <th>S.no</th>
            <th>Name</th>
            <th>Email</th>
            <th>Bank Balance</th>
        </tr>

        <?php
        // Database connection
        $servername = "localhost"; // Replace with your server name
        $username = "root"; // Replace with your database username
        $password = ""; // Replace with your database password
        $dbname = "grip"; // Replace with your database name

        $conn = new mysqli('localhost','root','','grip');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetching all customer records
        $sql = "SELECT * FROM customers";
        $result = $conn->query($sql);

        // Displaying customer data
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["S.no"] . "</td>";
                echo "<td>" . $row["Name"] . "</td>";
                echo "<td>" . $row["Email"] . "</td>";
                echo "<td>" . $row["Bank_balance"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No records found.</td></tr>";
        }

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $balance = $_POST["balance"];
        
            // Get the current maximum serial number
            $maxSerialNumberSql = "SELECT MAX(`S.no`) AS max_serial FROM customers";
            $maxSerialNumberResult = $conn->query($maxSerialNumberSql);
            $maxSerialNumber = 0;
            if ($maxSerialNumberResult && $maxSerialNumberResult->num_rows > 0) {
                $row = $maxSerialNumberResult->fetch_assoc();
                $maxSerialNumber = $row["max_serial"];
            }
        
            // Calculate the new serial number
            $newSerialNumber = $maxSerialNumber + 1;
        
            $insertSql = "INSERT INTO customers (`S.no`, Name, Email, Bank_balance) VALUES ($newSerialNumber, '$name', '$email', '$balance')";
            if ($conn->query($insertSql) === TRUE) {
                echo "<p>New customer added successfully.</p>";
            } else {
                echo "Error: " . $insertSql . "<br>" . $conn->error;
            }
        }
        
        // Close the database connection
        $conn->close();
        ?>
    </table>
    <form method="POST" action="">
    <h2>Add Customer</h2>
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <label for="balance">Bank Balance:</label>
    <input type="number" name="balance" required>
    <input type="submit" value="Add Customer">
</form>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
</body>
</html>
