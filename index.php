<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Employee</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <h2>Register Employee</h2>
        <form action="register_action.php" method="POST">
            <label for="emp_id">Employee ID (7 digits):</label>
            <input type="text" id="emp_id" name="emp_id" pattern="\d{7}" maxlength="7" required>
            <small>Employee ID must be exactly 7 digits.</small>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Register">
        </form>
    </div>
</body>
</html>
