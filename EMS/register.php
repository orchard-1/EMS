<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee";

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$mobile =$_POST["mobile"];
$dob=$_POST["dob"];
$gender=$_POST["gender"];
$city=$_POST["city"];

echo $gender;
echo $fname;
echo $city;
echo $mobile;
echo $dob;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
    echo("succesfull");
}


$sql = "INSERT INTO emp (emp_fname, emp_lname,emp_mobile,emp_dob,emp_gender,emp_city )
VALUES ('$fname','$lname','$mobile','$dob','$gender','$city')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



$sql = "SELECT emp_fname FROM emp";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["emp_fname"]. "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();




?>