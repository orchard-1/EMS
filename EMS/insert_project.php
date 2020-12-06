<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee";

$proj_desc=$_POST["project_desc"];
$proj_name=$_POST["name"];
$proj_start=$_POST["start"];
$proj_end=$_POST["end"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
    echo("succesfull");
}


$sql = "INSERT INTO projects (proj_name,project_desc ,proj_start,proj_end)
VALUES ('$proj_name','$proj_desc','$proj_start','$proj_end')";

if ($conn->query($sql) === TRUE) {
  echo "New project record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();




?>