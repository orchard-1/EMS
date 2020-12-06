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




$sql = "SELECT emp_fname,emp_id FROM emp";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>
          <td>".$row['emp_fname']."</td>
           <td><a href='view.php?id=$row[emp_id]'></a></td>
          </tr>"
         ;
    echo "<a href='view.php?id=$row[emp_id]'>".$row['emp_fname']."</a>";
    

  }
} else {
  echo "0 results";
}



$conn->close();




?>