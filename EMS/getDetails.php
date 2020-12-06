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
    echo("succesfull");
}




$sql = "SELECT emp_fname,emp_id FROM emp";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      $a=3;
    // echo "<form action='getEmp.php' method='POST' >
    // <input type='submit'></form>";
    echo '<form action="a.php" method="POST">
            <div>
    <input type="number" name="id" value="1" >
            </div>
        
            <input type="submit">
        </form>';

    echo "<a href=
    'index.html'>"."id: " . $row["emp_fname"]."</a>". "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();




?>