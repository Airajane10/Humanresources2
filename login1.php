<?php
session_start();


$host = "localhost";
$db = "HR1";
$user = "root";          
$pass = "";               

$error = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';


    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

   
    $stmt = $conn->prepare("SELECT * FROM employees WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

      
        if ($password === $row['password']) {
            $_SESSION['employee'] = $row;
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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HUMAN RESOURCES 2 - Employee Side</title>
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
      font-size: 32px;
      margin-bottom: 10px;
    }
    h2 {
      font-size: 20px;
      margin-bottom: 30px;
    }
    .login-container {
      background: white;
      backdrop-filter: blur(10px);
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.2);
      width: 350px;
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
    .error-message {
      color: red;
      text-align: center;
      margin-top: 10px;
      font-size: 14px;
    }
  </style>
</head>
<body>

  <h1>HUMAN RESOURCES 2</h1>
  <h2>Employee Side</h2>

  <div class="login-container">
    <form method="POST" autocomplete="off">
      <div class="input-group">
        <div class="label-box">Email</div>
        <input type="email" name="email" placeholder="Enter Email" required>
      </div>

      <div class="input-group">
        <div class="label-box">Password</div>
        <input type="password" name="password" placeholder="Enter Password" required>
      </div>

      <button type="submit">Log In</button>
      <?php if (!empty($error)) echo '<div class="error-message">' . $error . '</div>'; ?>
    </form>
  </div>

</body>
</html>
