<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "planet_mobile";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT Model, Brand, Price, Description, Processor, RAM, ROM, Battery, OS FROM planet_mobile.products AS p, planet_mobile.phone_specs AS ps
  WHERE p.Model='iPhone 12' AND p.ProductID=ps.ProductID";
	$result = $conn->query($sql);

	$conn->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">
 
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

  <!--  java script from boot strap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
    crossorigin="anonymous"></script>




  <!-- Navigation bar from boot strap-->
  <nav class="navbar-expand-lg navbar-light">



    <div class="navbar fixed-top navbar-collapse collapse justify-content-end" id="navbarNavDropdown"
      style="right:50pt;">


      <ul class="nav nav-pills" style="position: relative; left: 10px;">

        <h1 style="vertical-align:middle; position: relative; top: 17px; margin-right: 100px; font-size: 45pt; font-family: 'montserrat'; color:rgb(247, 246, 240); 
              ">Planet Mobile</h1>

        <li class="nav-item">
          <a class="nav-link" href="HomePage.html"
            style="color: rgb(255, 255, 255); font-family: 'montserrat'; font-size: 20px; position: relative; top: 14px;"><b>Home</b> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="AboutUs.html"
            style="color: rgb(255, 255, 255); font-family: 'montserrat'; font-size: 20px; position: relative; top: 14px;"><b>About</b> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Checkout.html"
            style="color: rgb(255, 255, 255); font-family: 'montserrat'; font-size: 20px; position: relative; top: 14px;"> <b>Checkout</b> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Checkout.html"
            style="color: rgb(255, 255, 255); font-family: 'montserrat'; font-size: 20px; position: relative; top: 14px;"> <b>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Login.html"
            style="color: rgb(255, 255, 255); font-family: 'montserrat'; font-size: 20px; position: relative; top: 14px;"> <b>Login</b> </a>
        </li>
        


      </ul>

    </div>

  </nav>


  <!-- website logo on the navbar -->
  <a href="HomePage.html"> <img src="images/logo_3.0-removebg-preview.png" style="position: relative; top: -30px; height: 150px; padding-top: 30px;"> </a>
  <a href="HomePage.html"> <img src="images/cart.png" style="position: fixed; top: 8px; height: 75px; padding-top: 30px; padding-left: 1113px;"> </a>


    <meta charset="UTF-8">
    <title>Phones available</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px white;
        }
 
        h1 {
            text-align: center;
            color: white;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: black;
            border: 2px white;
        }
 
        th,
        td {
            font-weight: bold;
            border: 3px white;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
        tr{
          color: #b3b1b1;
        }
    </style>
</head>
 
<body >
    <section>
        <h1 style="font-family: 'montserrat'; color: white; position: relative; top: 40px;">iPhone 12</h1>
        <!-- TABLE CONSTRUCTION -->
        <table style="font-family: 'montserrat'; color: white; position: relative; 
        top: 80px; border: 4px solid white;">
            <tr style="border: 4px solid white;">
                <th>Model</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Description</th>
                <th>Processor</th>
                <th>RAM</th>
                <th>ROM</th>
                <th>Battery</th>
                <th>OS</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['Model'];?></td>
                <td><?php echo $rows['Brand'];?></td>
                <td><?php echo $rows['Price'];?></td>
                <td><?php echo $rows['Description'];?></td>
                <td><?php echo $rows['Processor'];?></td>
                <td><?php echo $rows['RAM'];?></td>
                <td><?php echo $rows['ROM'];?></td>
                <td><?php echo $rows['Battery'];?></td>
                <td><?php echo $rows['OS'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
    <a class="nav-link" href="iPhones.html"
    style="font-family: 'montserrat'; font-size:23px; color: white; position: relative; top: 275px; padding-left: 650px">
    <b><u>Back to iPhones</u></b> </a>
</body>
<div class = "navbar navbar-dark bg-dark" style="background: linear-gradient(to right, white, rgb(249, 251, 252)); position: relative; top: 298px; height: 67px;">
        <p id = "footer" style="color: black; font-family: 'Courier New', Courier, monospace; position: relative; right: 70px; top: 5px;"> © 2021 Copyright: Planet Mobile, All Rights Reserved. </p>
        <p class="paragraph">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-google"></a>
        </p>
    </div>
 
</html>
