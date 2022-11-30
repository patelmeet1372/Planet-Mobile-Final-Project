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
<h1 style="font-family: 'montserrat'; color:white; position: relative; top: 50px; padding-left:450px">

<?php
if(!empty($_POST)){
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "planet_mobile";

	//create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	//check connection
	if (!$conn) {
		die("Connection failed: ".mysqli_connect_error());
	}

	if(isset($_POST['Email'])){
		$email = $_POST['Email'];
		$password = $_POST['Password'];

		$sql = "SELECT * FROM customer WHERE Email='".$email."' AND Password='".$password."' ";
		$res = mysqli_query($conn,$sql);

		if(mysqli_num_rows($res)==1) {
			echo"<p style='color:red; font-family: 'montserrat';'> 
			Welcome back! </p>";
			if (mysqli_num_rows($res) > 0) {
				while ($row = mysqli_fetch_assoc($res)) {
					echo "ID: ".$row['CustomerID']."<br> <br>
					 Name: ".$row['Fname']." ".$row['Lname']."<br>"."<br>
					 Email: ".$row['Email']."<br>";
				}
			}
			exit();
		}
		else {
			echo "<h3>Invalid login information. Please try again.</h3><br><a href='Login.php'>Log In</a><br><a href='SignUp.php'>Sign Up</a>";
			exit();
		}
	}
}
?>	
 </h1>