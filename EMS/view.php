<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
    // echo("succesfull");
}

$id=$_REQUEST["id"];
echo $id;


$sql = "SELECT * FROM emp WHERE emp_id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "fname " . $row["emp_fname"]. "<br>";
    echo "gender " . $row["emp_gender"]. "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();





?>