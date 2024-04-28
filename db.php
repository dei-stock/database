<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "premiere";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO customer (custnumb, custname, slsrnumb, custaddr, balance, credlim)
VALUES ('126', 'Doe', '12', 'Dau Mabalacat', '800', '1000')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>