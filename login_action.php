<?php
session_start();

// Connect to MySQL
$conn = new mysqli('localhost', 'root', '', 'employee_management');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$emp_id = $_POST['emp_id'];
$dob = $_POST['dob'];
$password = $_POST['password'];

// Check credentials
$sql = "SELECT * FROM employees WHERE emp_id = '$emp_id' AND dob = '$dob'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['emp_id'] = $emp_id;
        header('Location: details.php');
    } else {
        echo "Invalid password.";
    }
} else {
    echo "Invalid Employee ID or Date of Birth.";
}

$conn->close();
?>
