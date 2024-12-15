<?php
// Start session to verify login
session_start();

// Check if the user is logged in
if (!isset($_SESSION['emp_id'])) {
    header('Location: login.php'); // Redirect to login if not logged in
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Employee Details</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
</head>
<body>
    <div class="form-container">
        <h2>Submit Employee Details</h2>
        <form action="details_action.php" method="POST">
            <label for="institution">Institution Name:</label>
            <input type="text" id="institution" name="institution" required>

            <label for="employee_name">Employee Name:</label>
            <input type="text" id="employee_name" name="employee_name" required>

            <label for="designation">Designation:</label>
            <input type="text" id="designation" name="designation" required>

            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>

            <label for="first_appointment">Date of First Appointment:</label>
            <input type="date" id="first_appointment" name="first_appointment" required>

            <label for="joining_cadre">First Joining Cadre Name:</label>
            <input type="text" id="joining_cadre" name="joining_cadre" required>

            <label for="working_from">Date From Which Working in Institution:</label>
            <input type="date" id="working_from" name="working_from" required>

            <label for="qualifications">Educational Qualifications:</label>
            <input type="text" id="qualifications" name="qualifications" required>

            <label for="village">Village:</label>
            <input type="text" id="village" name="village" required>

            <label for="mandal">Mandal:</label>
            <input type="text" id="mandal" name="mandal" required>

            <label for="district">District:</label>
            <input type="text" id="district" name="district" required>

            <label for="phone_number">Phone Number:</label>
            <input type="text" id="phone_number" name="phone_number" required>

            <label for="other_info">Any Other Information:</label>
            <textarea id="other_info" name="other_info"></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
