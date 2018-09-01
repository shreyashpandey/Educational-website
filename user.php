<?php
//Step1
 $db = mysqli_connect('localhost','root','Uke2LEAeTG0Oo5F4','mydb1')
 or die('Error connecting to MySQL server.');
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
$sql1 = "CREATE TABLE users (
id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL,
password VARCHAR(100) NOT NULL
)";

if (mysqli_query($db, $sql1)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($db);
}
?>
