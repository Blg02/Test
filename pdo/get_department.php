<?php
// Include the database connection file
include 'connect.php';

// Fetch department names
$sql = "SELECT dept_name FROM department";
$result = $conn->query($sql);

$departments = array();
if ($result->rowCount() > 0) {
    $departments = $result->fetchAll(PDO::FETCH_COLUMN, 0);
}

// Output departments as JSON
header("Content-Type: application/json");
echo json_encode($departments);

// Close connection
$conn = null;
?>
