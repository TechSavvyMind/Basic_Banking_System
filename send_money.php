<!DOCTYPE html>
<html>
<head>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            background-color: #f8f8f8;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            height: 100%;
            padding: 20px;
        }

        .card {
            background-color: #ffffff;
            padding: 20px 100px 40px;
            border-radius: 18px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin-bottom: 40px;
        }

        h1 {
            color: #333333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            color: #666666;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .form-container {
            text-align: center;
            max-width: 400px;
            margin: 0 auto;
        }

        .form-card {
            background-color: #ffffff;
            padding: 20px 100px 40px;
            border-radius: 19px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            display: block;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group select,
        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #cccccc;
        }

        .form-group button[type="submit"] {
            background-color: #ddd;
            color: #000;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-group button[type="submit"]:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="card">
        <h1>Deepak Yerram</h1>
        <h1>Account Balance</h1>
        <?php
    
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "grip";


        $conn = new mysqli($servername, $username, $password, $dbname);


        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {   
            if(isset($_POST['submit'])) {
                $amount = $_POST['amount'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $sql_1 = "UPDATE customers SET Bank_balance = Bank_balance + $amount WHERE Name = '$name' AND Email = '$email'";
                $result_1 = $conn->query($sql_1);
                $sql_2 = "UPDATE customers SET Bank_balance = Bank_balance - $amount WHERE Name = 'Y.Lakshmi Deepak'";
                $result_2 = $conn->query($sql_2);
                $id = uniqid("id-");
                date_default_timezone_set('Asia/Kolkata');
                $dt = date("d/m/y - l - h:i:s a");
                $sql_3 = "insert into transactions(id, sender, receiver, amount, `date and time`) values('$id','Y. Lakshimi Deepak', '$name', $amount, '$dt');";
                $result_3 = $conn->query($sql_3);
                if ($result_1 && $result_2) {
                    $fetchQuery = "SELECT Bank_balance FROM customers WHERE Name = 'Y.Lakshmi Deepak'";
                    $fetchResult = $conn->query($fetchQuery);
                    if ($fetchResult->num_rows > 0) {
                        $row = $fetchResult->fetch_assoc();
                        $updatedBalance = $row['Bank_balance'];
                        echo "Current balance: $updatedBalance <br>";
                        echo "Amount sent to $name";
                    } else {
                        echo "<p>No record found for Y.Lakshmi Deepak</p>";
                    }
                } else {
                    echo "Error: " . $conn->error;
                }
                
                                
            } else {
                $fetchQuery = "SELECT Bank_balance FROM customers WHERE Name = 'Y.Lakshmi Deepak'";
                $fetchResult = $conn->query($fetchQuery);
                if ($fetchResult->num_rows > 0) {
                    $row = $fetchResult->fetch_assoc();
                    $currentBalance = $row['Bank_balance'];
                    echo $currentBalance;
                } else {
                    echo "<p>No record found for Y.Lakshmi Deepak</p>";
                }
            }
        }

        $conn->close();
        ?>
    </div>

        <div class="form-container">
            <div class="form-card">
                <h1>Send Money</h1>
                <form method="POST" action="send_money.php">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <select id="name" name="name">
                            <option value="">Name</option>
                            <option value="Pratyusha">Pratyusha</option>
                            <option value="Sravs">Sravs</option>
                            <option value="Bobby">Bobby</option>
                            <option value="Aryan">Aryana</option>
                            <option value="Shalini">Shalini</option>
                            <option value="Sriya">Sriya</option>
                            <option value="Venu">Venu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <select id="email" name="email">
                            <option value="">Email-id</option>
                            <option value="Pratyushapaddu2714@gmail.com">Pratyushapaddu2714@gmail.com</option>
                            <option value="Sravs443@gmail.com">Sravs443@gmail.com</option>
                            <option value="bobby1728@gmail.com">bobby1728@gmail.com</option>
                            <option value="Aryansathya5@gmail.com">Aryansathya5@gmail.com</option>
                            <option value="shalini1312@gmail.com">shalini1312@gmail.com</option>
                            <option value="Sriyasri@gmail.com">Sriyasri@gmail.com</option>
                            <option value="Venudara143@gmail.com">Venudara143@gmail.com</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount:</label>
                        <input type="text" id="amount" name="amount" placeholder="Enter amount">
                    </div>
                    <div class="form-group">
                        <!--  -->
                        <button type="submit" name = "submit">Submit</button> 
                    </div>
                    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
                </form>
            </div>
        </div>
    </div>
</body>
</html>