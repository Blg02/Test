<?php
// Include the database connection file
include 'connect.php';

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
