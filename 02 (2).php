<html>
<body>

<h1>HTML Forms</h1>


<br>

<?php

$conn = new mysqli("localhost", "root", "", "mydb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM contactus";
$result = $conn->query($sql);



if ($result->row["id"] = 455 ) {
    // output data of each row
    $row = $result->fetch_assoc();
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
		
		$tt = $row["firstname"];
		
		echo "<br> <br>" . $tt;
} 


$conn->close();

 
?>
</body>
</html>
