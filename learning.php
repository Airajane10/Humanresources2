<?php
// learning.html
session_start();
if (!isset($_SESSION['user'])) {
  header('Location: index.html');
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Learning Management - WorkBreak</title>
  <link rel="stylesheet" href="dashboard.css">
</head>
<body>
  <h1>Welcome to Learning Management</h1>
  <div class="container">
  <div class="selection-group">
    <button onclick="location.href='identify_needs.html'">Learning Needs</button>
    <button onclick="location.href='evaluate_outcomes.html'">Learning Outcomes</button>
    <button onclick="location.href='develop_content.html'">Learning Content</button>
  </div>
</body>
</html>
