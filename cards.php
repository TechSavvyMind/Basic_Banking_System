<?php include('server.php') ?>
<html>
<head>
<title>Lab Names</title>
<style>
* {
    margin: 4px;
    padding: 12px;
    box-sizing: border-box;
}

body {
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}

.align {
    display: flex;
    justify-content: center;
}

.labnames {
    margin: 50px;
    display: inline-block;
    width: 25%;
    border-radius: 5px;
    box-shadow: 2px 2px 10px rgb(0, 0, 0);
    transition: 0.3s;
    background-color: #f5f5f5;
}

.labnames:hover {
    transform: translateY(-5px);
    box-shadow: 2px 2px 15px rgba(0, 0, 0, 0.3);
}

.image img {
    width: 100%;
    height: 160px;
    border-top-right-radius: 5px;
    border-top-left-radius: 5px;
}

.title {
    padding: 20px;
    text-align: center;
}

.title h2 {
    font-size: 20px;
    color: #333;
}

.btn {
    text-align: center;
    padding-bottom: 20px;
}

button {
    display: inline-block;
    margin-top: 30px;
    margin-bottom: 30px;
    background-color: #fff;
    border: 2px solid #000;
    padding: 10px 20px;
    border-radius: 30px;
    text-align: center;
    text-decoration: none;
    transition: 0.3s;
    cursor: pointer;
    font-weight: bold;
    color: #000;
}

button a {
    color: #000;
    text-decoration: none;
}

button:hover {
    background-color: #fff;
    border-color: #000;
    color: #fff;
    transform: scale(1.05);
}

</style>
</head>
<body>
<div class="align lab cards">
    <div class="labnames">
        <div class="image">
            <img src="images/allcustomers.jpg" alt="lab">
        </div>
        <div class="title">
            <h2>All Customers Records</h2>
        </div>
        <div class="btn">
            <button><a href="allcustomer.php">View</a></button>
        </div>
    </div>
    <!---labnames2--->
    <div class="labnames">
        <div class="image">
            <img src="images/sendmoney.jpg" alt="lab">
        </div>
        <div class="title">
            <h2>Send Money</h2>
        </div>
        <div class="btn">
            <button><a href="Send_money.php">View</a></button>
        </div>
    </div>
    <!---labnames4--->
    <div class="labnames">
        <div class="image">
            <img src="images/paymenthistory.jpg" alt="lab">
        </div>
        <div class="title">
            <h2>Payment History</h2>
        </div>
        <div class="btn">
            <button><a href="payment_history.php">View</a></button>
        </div>
    </div>
</div>
</body>
</html>
