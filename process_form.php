<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sat1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Escape all form values to prevent SQL injection
$department = mysqli_real_escape_string($conn, $_POST['department']);
$name = mysqli_real_escape_string($conn, $_POST['name']);
$client_type = mysqli_real_escape_string($conn, $_POST['client_type']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
$sex = mysqli_real_escape_string($conn, $_POST['sex']);
$age = mysqli_real_escape_string($conn, $_POST['age']);
$region = mysqli_real_escape_string($conn, $_POST['region']);
$service = mysqli_real_escape_string($conn, $_POST['service']);
$cc1 = mysqli_real_escape_string($conn, $_POST['cc1']);
$cc2 = mysqli_real_escape_string($conn, $_POST['cc2']);
$cc3 = mysqli_real_escape_string($conn, $_POST['cc3']);
$likert_sqd0 = mysqli_real_escape_string($conn, $_POST['likert_sqd0']);
$likert_sqd1 = mysqli_real_escape_string($conn, $_POST['likert_sqd1']);
$likert_sqd2 = mysqli_real_escape_string($conn, $_POST['likert_sqd2']);
$likert_sqd3 = mysqli_real_escape_string($conn, $_POST['likert_sqd3']);
$likert_sqd4 = mysqli_real_escape_string($conn, $_POST['likert_sqd4']);
$likert_sqd5 = mysqli_real_escape_string($conn, $_POST['likert_sqd5']);
$likert_sqd6 = mysqli_real_escape_string($conn, $_POST['likert_sqd6']);
$likert_sqd7 = mysqli_real_escape_string($conn, $_POST['likert_sqd7']);
$likert_sqd8 = mysqli_real_escape_string($conn, $_POST['likert_sqd8']);
$comment = mysqli_real_escape_string($conn, $_POST['comment']);
$contact = mysqli_real_escape_string($conn, $_POST['contact']);

// Construct the SQL query
$sql = "INSERT INTO survey (department, name, client_type, date, sex, age, region, service, cc1, cc2, cc3, likert_sqd0, likert_sqd1, likert_sqd2, likert_sqd3, likert_sqd4, likert_sqd5, likert_sqd6, likert_sqd7, likert_sqd8, comment, contact) 
VALUES ('$department', '$name', '$client_type', '$date', '$sex', '$age', '$region', '$service', '$cc1', '$cc2', '$cc3', '$likert_sqd0', '$likert_sqd1', '$likert_sqd2', '$likert_sqd3', '$likert_sqd4', '$likert_sqd5', '$likert_sqd6', '$likert_sqd7', '$likert_sqd8', '$comment', '$contact')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Close connection
$conn->close();
?>
