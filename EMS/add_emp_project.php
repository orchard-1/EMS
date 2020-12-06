<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee";

$emp_id=$_POST["emp_id"];
$proj_id=$_POST["proj_id"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
    echo("succesfull");
}


$sql = "INSERT INTO emp_proj(emp_id,proj_id)
VALUES ('$emp_id','$proj_id')";

if ($conn->query($sql) === TRUE) {
  echo "emp project created";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();




?>