<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "planet_mobile";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$oid = "SELECT OrderID FROM cart_contents
ORDER BY CartID DESC
LIMIT 1";
$res = mysqli_query($conn, $oid);
if (mysqli_num_rows($res) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($res)) {
    echo "id: " . $row["OrderID"];
	$coid = $row["OrderID"];
  }
} else{
    echo "not found";
}

$coid = $coid +5;

echo $coid;

	$conn->close();
?>