<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Login</title>
 <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="login-container">
    <h2>Employee Login</h2>
    <form action="login_action.php" method="POST">
        <div class="form-group">
            <label for="emp_id">Employee ID:</label>
            <input type="text" id="emp_id" name="emp_id" pattern="\d{7}" maxlength="7"
                   placeholder="Enter 7-digit Employee ID" required>
        </div>

        <div class="form-group">
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>

        <div class="form-group">
            <input type="submit" value="Login">
        </div>
    </form>
</div>
</body>
</html>
