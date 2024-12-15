<?php
// Connect to MySQL
$conn = new mysqli('localhost', 'root', '', 'employee_management');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$emp_id = $_POST['emp_id'];
$dob = $_POST['dob'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Validate Employee ID
if (!preg_match('/^\d{7}$/', $emp_id)) {
    die("Error: Employee ID must be exactly 7 digits.");
}

// Insert data into employees table
$sql = "INSERT INTO employees (emp_id, dob, password) VALUES ('$emp_id', '$dob', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful! <a href='login.php'>Login here</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
