<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['emp_id'])) {
    header('Location: login.php'); // Redirect to login if not logged in
    exit;
}

// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'employee_management');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the logged-in employee ID
$emp_id = $_SESSION['emp_id'];

// Retrieve form data
$institution = $_POST['institution'];
$employee_name = $_POST['employee_name'];
$designation = $_POST['designation'];
$subject = $_POST['subject'];
$first_appointment = $_POST['first_appointment'];
$joining_cadre = $_POST['joining_cadre'];
$working_from = $_POST['working_from'];
$qualifications = $_POST['qualifications'];
$village = $_POST['village'];
$mandal = $_POST['mandal'];
$district = $_POST['district'];
$phone_number = $_POST['phone_number'];
$other_info = $_POST['other_info'];

// Check if the employee already exists in the database
$check_query = "SELECT * FROM employee_details WHERE emp_id = '$emp_id'";
$result = $conn->query($check_query);

if ($result->num_rows > 0) {
    // If the employee exists, update the existing record
    $update_query = "UPDATE employee_details 
                     SET institution = '$institution',
                         employee_name = '$employee_name',
                         designation = '$designation',
                         subject = '$subject',
                         first_appointment = '$first_appointment',
                         joining_cadre = '$joining_cadre',
                         working_from = '$working_from',
                         qualifications = '$qualifications',
                         village = '$village',
                         mandal = '$mandal',
                         district = '$district',
                         phone_number = '$phone_number',
                         other_info = '$other_info'
                     WHERE emp_id = '$emp_id'";

    if ($conn->query($update_query) === TRUE) {
        echo "Details updated successfully!";
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else {
    // If the employee does not exist, insert a new record
    $insert_query = "INSERT INTO employee_details (emp_id, institution, employee_name, designation, subject, first_appointment, joining_cadre, working_from, qualifications, village, mandal, district, phone_number, other_info)
                     VALUES ('$emp_id', '$institution', '$employee_name', '$designation', '$subject', '$first_appointment', '$joining_cadre', '$working_from', '$qualifications', '$village', '$mandal', '$district', '$phone_number', '$other_info')";

    if ($conn->query($insert_query) === TRUE) {
        echo "Details submitted successfully!";
    } else {
        echo "Error: " . $insert_query . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
