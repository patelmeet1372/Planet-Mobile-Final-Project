<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "planet_mobile";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$fname =  mysqli_real_escape_string($conn,$_POST['fname']);
//echo $fname;
$lname =  mysqli_real_escape_string($conn,$_POST['lname']);
//echo $lname;
$rnum = rand(60,3000);
$date= date("Y/m/d");
$sql = "SELECT CustomerID FROM customer WHERE Fname = '$fname' AND Lname ='$lname' ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    //echo "id: " . $row["CustomerID"];
	$custID = $row["CustomerID"];
  }
} else {
    echo "0 results";
}


$oid = "SELECT OrderID FROM cart_contents
ORDER BY CartID DESC
LIMIT 1";
$res = mysqli_query($conn, $oid);
if (mysqli_num_rows($res) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($res)) {
    //echo "id: " . $row["OrderID"];
	$coid = $row["OrderID"];
  }
} else{
    echo "not found";
}

$coid = $coid + 1;
//echo $coid;

$cart = "INSERT INTO cart_contents (CustomerID, OrderID, ProductId, Quantity, Total, Promo_code) VALUES ('$custID', '$coid','10146', '1' ,'$rnum','code' )";
$insert2 = $conn->query($cart);

if($insert2 == TRUE){
  
}

$sql3= "SELECT OrderID FROM cart_contents WHERE CustomerID = '$custID'";
$result2 = mysqli_query($conn, $sql3);
if (mysqli_num_rows($result2) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result2)) {
    //echo "id: " . $row["OrderID"];
	$orderID = $row["OrderID"];
  }
} else {
    echo "0 results";
}

$payment = "INSERT INTO payment (CustomerID, Payment_date, MethodofPayment, Payment_amount) VALUES ('$custID','$date', 'Credit', '$rnum')";
$insert3 = $conn->query($payment);
if($insert3 == TRUE){
  //echo "payment";
}

$sql2 = "INSERT INTO invoice (OrderID, CustomerID, Payment_date, Order_total) VALUES ('$orderID','$custID', '$date', '$rnum' )";
$insert = $conn->query($sql2);
	 	//insertion query successful or not
	 	if($insert == TRUE) {
	 		echo "<h1 style='color:red; font-family: 'montserrat';'>Success! Thank you for choosing Planet Mobile</h1> <br>";
      
      echo "<a href = 'HomePage.html'> Home </a>";
	 		//exit();
	 	}

$sql4 = "SELECT Fname, Lname, Email, invoice.Payment_Date ,invoice.InvoiceID, invoice.OrderID, payment.MethodofPayment, invoice.Order_total
FROM customer
JOIN invoice
  ON customer.CustomerID=invoice.CustomerID AND customer.CustomerID = '$custID'
JOIN payment
ON payment.CustomerID=customer.CustomerID AND customer.CustomerID = '$custID'";
$result3 = $conn->query($sql4);
$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
  <!-- CSS Code: Place this code in the document's head (between the 'head' tags) -->
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
<style>
table.GeneratedTable {
  width: 100%;
  background-color: black;
  border-collapse: collapse;
  border-width: 2px;
  border-color: white;
  border-style: solid;
  color: white;
}

table.GeneratedTable td, table.GeneratedTable th {
  border-width: 2px;
  border-color: white;
  border-style: solid;
  padding: 3px;
}

table.GeneratedTable thead {
  background-color: black;
}
</style>
</head>
<body style="background: linear-gradient(to right, rgb(0, 0, 0), rgb(14, 23, 73));">
<h2 style="font-family: 'montserrat'; color: white; position: relative; top: 40px;">Here is your invoice</h2>
<br>
<br>
<br>
<br>
<?php
                // LOOP TILL END OF DATA
                while($rows=$result3->fetch_assoc())
                {
            ?>
<!-- HTML Code: Place this code in the document's body (between the 'body' tags) where the table should appear -->
<table class="GeneratedTable">
  <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Payment Date</th>
      <th>Invoice ID</th>
      <th>Order ID</th>
      <th>Method of Payment</th>
      <th>Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $rows['Fname'];?></td>
      <td><?php echo $rows['Lname'];?></td>
      <td><?php echo $rows['Email'];?></td>
      <td><?php echo $rows['Payment_Date'];?></td>
      <td><?php echo $rows['InvoiceID'];?></td>
      <td><?php echo $rows['OrderID'];?></td>
      <td><?php echo $rows['MethodofPayment'];?></td>
      <td>$<?php echo $rows['Order_total'];?></td>
    </tr>
    <?php
                }
            ?>
  </tbody>
</table>
<!-- Codes by Quackit.com -->




</body>
</html>