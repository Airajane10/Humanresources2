<?php
session_start();


$host = "localhost";
$db = "HR1";
$user = "root";
$pass = "";

$error = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

   
    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

   
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

     
        if ($password === $row['password']) {
            $_SESSION['user'] = $row;
            header("Location: verification.html");
            exit();
        } else {
            $error = "Invalid password.";
        }
    } else {
        $error = "Email not found.";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Administrative System</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: navy;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: #fff;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        h2 {
            font-size: 20px;
            margin-bottom: 30px;
        }

        .login-container {
            background: white;
            backdrop-filter: blur(10px);
            padding: 0;
            border-radius: 10px;
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.2);
            width: 700px;
            display: flex;
            flex-direction: row;
            overflow: hidden;
        }

        .form-section {
            flex: 1;
            padding: 40px;
        }

        .description-section {
            flex: 1;
            background: #2c3e50;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding: 40px;
        }

        .description-section h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .description-section p {
            font-size: 14px;
        }

        .input-group {
            display: flex;
            margin-bottom: 20px;
        }

        .label-box {
            background: black;
            color: white;
            padding: 10px;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            font-size: 14px;
            width: 30%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .input-group input {
            width: 70%;
            padding: 10px;
            border: 1px solid black;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            background: #f0f0f0;
            color: #333;
            outline: none;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: black;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        .employee-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: black;
            text-decoration: underline;
            font-size: 14px;
            cursor: pointer;
        }

        .error-message {
            text-align: center;
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <div class="form-section">
        <h1 style="color: #2c3e50; text-align: center; font-size: 24px;">HUMAN RESOURCES 1</h1>
        <form method="post" autocomplete="off">
            <div class="input-group">
                <div class="label-box">Email</div>
                <input type="email" name="email" value="admin@gmail.com" required>
            </div>
            <div class="input-group">
                <div class="label-box">Password</div>
                <input type="password" name="password" placeholder="Enter Password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <a href="login1.php" class="employee-link">Login as an Employee</a>
        <?php if (!empty($error)) echo '<div class="error-message">' . $error . '</div>'; ?>
    </div>

    <div class="description-section">
        <h2>HUMAN RESOURCES 2</h2>
        <p>Secure access to your dashboard. Enter your login credentials to continue.</p>
    </div>
</div>

</body>
</html>
