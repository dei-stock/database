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

$sql = "DELETE FROM customer WHERE custnumb = '$custnumb'";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "Record has been deleted";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

$conn->close();
?>