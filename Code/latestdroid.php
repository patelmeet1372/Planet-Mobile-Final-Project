<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "planet_mobile";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Model, Brand, Price 
FROM products
WHERE ProductID IN
(
SELECT ProductID FROM phone_specs WHERE OS = 'Andrioid 12' AND phone_specs.ProductID=products.ProductID
);";
$result = $conn->query($sql);

$conn->close();


?>
<!DOCTYPE html>
<html>
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Planet Mobile</title>
<link rel="stylesheet" href="HomePage.css" />
<style>
    @import url('https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Lobster&family=Montserrat:ital,wght@1,900&display=swap');
    </style>
</head>
<body style="background: linear-gradient(to right, rgb(0, 0, 0), rgb(14, 23, 73));">
<nav class="navbar-expand-lg navbar-light">


        <div class="navbar-collapse collapse justify-content-end" id="navbarNavDropdown"
            style= "background: white; height: 66px;">
            <div style="margin-right: 25cm;">
                <a href="HomePage.html"> <img src="images/logo-black.png" style="height: 75pt; width: 80pt; position: relative; right: 150px;"> </a>
            </div>
            <ul class="nav nav-pills">

                <li class="nav-item" style="padding-bottom: 8px;">
                    <a class="nav-link" href="HomePage.html" style="color: black; font-family: 'montserrat'; font-size: larger; position: relative; bottom: 5px;"> <b>Home</b> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="AboutUs.html" style="color: black; font-family: 'montserrat'; font-size: larger; position: relative; bottom: 5px;"> <b>About</b> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ContactUs.html" style="color: black; font-family: 'montserrat'    ; font-size: larger; position: relative; bottom: 5px;"> <b>Contact</b> </a>
                </li>


            </ul>

        </div>
    </nav>
    <div style="text-align:center">
    <h1 style="font-family: 'montserrat'; color: white; position: relative; top: 40px;">
        Latest⚡ Android Phones, Only at<span style="color: rgb(226, 53, 53); font-family: 'montserrat'; font-size: 40px;" >
          Planet Mobile !!!</span>
    </h1>
</div>
<h1 style="font-family: 'montserrat'; color:white; position: relative; top: 150px; padding-left:325px">
<?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <?php echo $rows['Model'];?>
                <a>,</a>
                <?php echo $rows['Brand'];?>
                <a>,</a>
                <?php echo $rows['Price'];?>
                
                <br>
                
            </tr>
            <?php
                }
            ?>

            </h1>
            <a class="nav-link" href="HomePage.html"
            style="color: rgb(255, 255, 255); font-family: 'montserrat'; font-size: 30px; position: relative; top: 308px; padding-left:630px">
            <b><u>Back to HomePage</u></b> </a>
</body>
<div class = "navbar navbar-dark bg-dark" style="background: linear-gradient(to right, white, rgb(249, 251, 252)); position: relative; top: 343px; height: 67px;">
        <p id = "footer" style="color: black; font-family: 'Courier New', Courier, monospace; position: relative; right: 70px; top: 5px;"> © 2021 Copyright: Planet Mobile, All Rights Reserved. </p>
        <p class="paragraph">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-google"></a>
        </p>
    </div>
</html>