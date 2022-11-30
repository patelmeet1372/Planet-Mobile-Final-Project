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

        
        $sql =  "INSERT INTO contact (Fname, Lname,Email, Message) VALUES ('{$conn->real_escape_string($_POST['firstname'])}', '{$conn->real_escape_string($_POST['lastname'])}','{$conn->real_escape_string($_POST['email'])}','{$conn->real_escape_string($_POST['message'])}') ";
        $insert = $conn->query($sql);
        if($insert == TRUE) {
        echo "<a href = 'HomePage.html'> Home </a>";
        echo '<script>alert("Your message has been sent successfully!")</script>';

        }
        else {
            die("Error: {$conn->errno} : {$conn->error}");
            exit();
        }

    }

?>

