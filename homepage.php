<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        
        nav {
            width: 100%;
            background-color:  hsl(203, 69%, 32%);
            height: 75px;
            line-height:  75px;
            padding:  0px 120px;
            text-align: center;
            border-bottom: none;
        }

        nav h1 {
            font-size: 36px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: aliceblue;
            text-transform: uppercase;
        }
        
        /* Added CSS for the centered hover button */
        .center-button {
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .center-button a {
            display: inline-block;
            padding: 12px 24px;
            background-color: rgb(255, 255, 255);
            color: rgb(0, 0, 0);
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 24px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .center-button a:hover {
            background-color: hsl(212, 87%, 52%);
        }
        
        /* Updated CSS to position the social icons */
        .social-icons {
            position: fixed;
            bottom: 0px;
            right: 0px;
            display: flex;
            gap: 10px;
            color: black;
            font-size: 40px; /* Adjust the font size for bigger icons */
            text-decoration: none;
        }

        .social-icons a {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 60px;
            height: 60px;
            background-color: #FFF;
            color: black;
            border-radius: 50%;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .social-icons a:hover {
            transform: scale(1.2);
            background-color: #fff;
        }
        
        /* Added CSS to position the image */
        .image-container {
            width: 1500px;
            position: relative;
            margin-top: 75px; /* Adjusted margin to leave space for the nav bar */
        }

        .image-container img {
            width: 100%;
            display: block;
        }

        /* Added CSS to position the text after the image */
        .made-by-text {
            position: absolute;
            top: 900px;
            width: 100%;
            text-align: center;
            font-size: 25px;
            color: black;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
    <nav>
        <h1>Sparks Bank</h1>
    </nav>
    <div class="image-container">
        <img src="images/bank.png" alt="Bank Image">
        <div class="center-button">
            <a href="cards.php">Get Started</a>
        </div>
        <div class="made-by-text">
           @.Made by Deepak
        </div>
    </div>
    <div class="social-icons">
        <a href="https://github.com/TechSavvyMind"><i class="fab fa-github"></i></a>
        <a href="https://www.linkedin.com/in/y-lakshmi-deepak-847b31227/"><i class="fab fa-linkedin"></i></a>
    </div>
</body>
</html>
