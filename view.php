<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "premiere";

$custnumb = $_POST['custnumb'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT custnumb, custname FROM customer WHERE custnumb = '$custnumb'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["custnumb"]. " - Customer Name: " . $row["custname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>