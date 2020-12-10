

<?php

$Firstname = $_POST["Firstname"];
$Lastname = $_POST["Lastname"];

$Phone = $_POST["Phone"];


$Email = $_POST["Email"];
$password = $_POST["password"];

?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="surya";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO table1 (Firstname, email, password)
  VALUES ('".$_POST["Firstname"]."','".$_POST["Email"]."','".$_POST["password"]."')";




if ($conn->query($sql) === TRUE) {
  echo " <h1 style='color:green;'> New record created successfully </h1>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>