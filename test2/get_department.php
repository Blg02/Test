<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch department names
$sql = "SELECT dept_name FROM department";
$result = $conn->query($sql);

$departments = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $departments[] = $row['dept_name'];
    }
}

// Output departments as JSON
echo json_encode($departments);

// Close connection
$conn->close();
?>
