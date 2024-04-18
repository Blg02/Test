<?php
// Include the database connection file
include 'connect.php';

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

// Get department ID from department name
$dept_query = "SELECT dept_id FROM department WHERE dept_name = '$department'";
$dept_result = $conn->query($dept_query);
if ($dept_result->num_rows > 0) {
    $dept_row = $dept_result->fetch_assoc();
    $dept_id = $dept_row['dept_id'];

    // Construct the SQL query to insert into the client table
    $client_query = "INSERT INTO client (name, client_type, sex, age, region, service)
    VALUES ('$name', '$client_type', '$sex', $age, '$region', '$service')";

    if ($conn->query($client_query) === TRUE) {
        $client_id = $conn->insert_id; // Get the auto-generated client ID

        // Construct the SQL query to insert into the control table
        $control_query = "INSERT INTO control (client_id, dept_id, date, comment, contact, cc1, cc2, cc3, likert_sqd0, likert_sqd1, likert_sqd2, likert_sqd3, likert_sqd4, likert_sqd5, likert_sqd6, likert_sqd7, likert_sqd8)
        VALUES ($client_id, $dept_id, current_timestamp(), '$comment', '$contact', '$cc1', '$cc2', '$cc3', '$likert_sqd0', '$likert_sqd1', '$likert_sqd2', '$likert_sqd3', '$likert_sqd4', '$likert_sqd5', '$likert_sqd6', '$likert_sqd7', '$likert_sqd8')";

        if ($conn->query($control_query) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $control_query . "<br>" . $conn->error;
        }
    } else {
        echo "Error: " . $client_query . "<br>" . $conn->error;
    }
} else {
    echo "Error: Department not found";
}

// Close connection
$conn->close();
?>
