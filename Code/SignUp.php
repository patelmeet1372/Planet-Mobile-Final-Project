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
<h1 style="font-family: 'montserrat'; color:white; position: relative; top: 100px; padding-left:430px">
<?php
                 if(!empty($_POST)) {

					//create database connection
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "planet_mobile";
		   
					$conn = mysqli_connect($servername, $username, $password, $dbname);
					if(!$conn) {
						die("Connection failed: ".mysqli_connect_error());
					}
		   
					//depostiing the credentials into the databse
					$sql = "INSERT INTO Customer (Fname, Lname, Email, Password, Address, City, Province, Postal_code, Country) VALUES ('{$conn->real_escape_string($_POST['Fname'])}', '{$conn->real_escape_string($_POST['Lname'])}','{$conn->real_escape_string($_POST['Email'])}','{$conn->real_escape_string($_POST['Password'])}','{$conn->real_escape_string($_POST['Address'])}', '{$conn->real_escape_string($_POST['City'])}', '{$conn->real_escape_string($_POST['Province'])}', '{$conn->real_escape_string($_POST['Postal_code'])}', '{$conn->real_escape_string($_POST['Country'])}' )";
		   
					$insert = $conn->query($sql);
		   
					//insertion query successful or not
					if($insert == TRUE) {
						echo"<p style='color:red; font-family: 'montserrat'; '> 
						Success! You are now registered!
						</p>";
						echo"<a href = 'Login.html'> Log In </a>";
						exit();
					}
					else {
						die("Error: {$conn->errno} : {$conn->error}");
						exit();
					}
				}
	   ?>
	   </h1>

	    <a class="nav-link" href="HomePage.html"
            style="color: rgb(255, 255, 255); font-family: 'montserrat'; font-size: 30px; position: relative; top: 423px; padding-left:630px">
            <b><u>Back to HomePage</u></b> </a>
</body>
<div class = "navbar navbar-dark bg-dark" style="background: linear-gradient(to right, white, rgb(249, 251, 252)); position: relative; top: 438px; height: 67px;">
        <p id = "footer" style="color: black; font-family: 'Courier New', Courier, monospace; position: relative; right: 70px; top: 5px;"> © 2021 Copyright: Planet Mobile, All Rights Reserved. </p>
        <p class="paragraph">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-google"></a>
        </p>
    </div>
</html>