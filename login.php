<?php
// register.php
session_start();
include('Connections.php'); // Assuming this file handles your database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['register'])) { // Check if it's the registration form
        $username = $_POST['username'];
        $birthday = $_POST['birthday'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Basic validation (you should add more robust validation)
        if (empty($username) || empty($birthday) || empty($email) || empty($password)) {
            echo "All fields are required.";
        } else {
            // Use prepared statements to prevent SQL injection
            $stmt = $conn->prepare("INSERT INTO users (username, birthday, email, password) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $username, $birthday, $email, $password);
            if ($stmt->execute()) {
                echo "<script>alert('Registration successful! Please login.'); window.location.href = 'login1.php';</script>"; // Redirect to login
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register - WorkBreakdown structure</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1 style="text-align:center; font-family: Georgia;">REGISTER FOR WORKBREAKDOWN STRUCTURE</h1>
        <form method="POST" style="text-align:center;">
            <input type="hidden" name="register" value="true">
            <label>Username:</label><br>
            <input type="text" name="username" required><br>
            <label>Date of Birth:</label><br>
            <input type="date" name="birthday" required><br>
            <label>Email:</label><br>
            <input type="email" name="email" required><br>
            <label>Password:</label><br>
            <input type="password" name="password" required><br>
            <button type="submit">Register</button>
        </form>
        <p style="text-align:center;color:rgb(250, 250, 250);">Already have an account? <a href="login1.php">Login here</p> 
    </div>
</body>
</html>