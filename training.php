<?php
// training.php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Training management - WorkBreakDown</title>
    <link rel="stylesheet" href="dashboard.css">
    </style>
</head>
<body>
    <h1>Welcome to Training Management</h1>
    <div class="container">
        <div class="selection-group">
            <button onclick="location.href='trainer_selection.php'">Trainer Selection</button>
            <button onclick="location.href='planning.php'">Planning</button>
            <button onclick="location.href='monitoring.php'">Monitoring</button>
            <button onclick="location.href='execution.php'">Training Execution</button>
        </div>
    </div>
</body>
</html>