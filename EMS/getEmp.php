<?php

$emp_id=$_POST["emp_id"];
// echo $emp_id;

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
    echo("succesfull");
}

$sql="SELECT e.emp_fname,
        p.proj_name

FROM emp e,
    projects p,
    emp_proj ep

WHERE e.emp_id=$emp_id AND ep.emp_id=$emp_id
        AND p.proj_id=ep.proj_id ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["emp_fname"]."   "."project :". $row["proj_name"]. "<br>";
  }
} else {
  echo "0 results";
}


?>