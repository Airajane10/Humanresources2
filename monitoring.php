<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Training Monitoring</title>
  <style>
    body {
      font-family: Georgia, serif;
      background-color: #f0f8ff;
      margin: 0;
      padding: 20px;
      color: #002147;
    }

    h1 {
      text-align: center;
      color: navy;
    }

    .form-container {
      max-width: 700px;
      margin: 30px auto;
      background-color: white;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 0 8px rgba(0,0,0,0.1);
    }

    .form-section {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-top: 10px;
    }

    select, input[type="text"], textarea {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    textarea {
      resize: vertical;
    }

    button {
      display: block;
      margin: 20px auto 0;
      background-color: navy;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
    }

    button:hover {
      background-color: #001f4d;
    }
  </style>
</head>
<body>

<h1>📊 Training Monitoring & Feedback</h1>

<div class="form-container">
  <form id="monitoringForm">
    
    <div class="form-section">
      <h3>Customer Information</h3>
      <label for="customerName">Name of Customer:</label>
      <input type="text" id="customerName" name="customerName" required>
    </div>

    <div class="form-section">
      <h3>Training Effectiveness Ratings</h3>

      <label for="contentRating">Content Quality:</label>
      <select id="contentRating" name="contentRating" required>
        <option value="">Select</option>
        <option>⭐</option>
        <option>⭐⭐</option>
        <option>⭐⭐⭐</option>
        <option>⭐⭐⭐⭐</option>
        <option>⭐⭐⭐⭐⭐</option>
      </select>

      <label for="trainerRating">Trainer Effectiveness:</label>
      <select id="trainerRating" name="trainerRating" required>
        <option value="">Select</option>
        <option>⭐</option>
        <option>⭐⭐</option>
        <option>⭐⭐⭐</option>
        <option>⭐⭐⭐⭐</option>
        <option>⭐⭐⭐⭐⭐</option>
      </select>

      <label for="relevanceRating">Relevance to Job:</label>
      <select id="relevanceRating" name="relevanceRating" required>
        <option value="">Select</option>
        <option>⭐</option>
        <option>⭐⭐</option>
        <option>⭐⭐⭐</option>
        <option>⭐⭐⭐⭐</option>
        <option>⭐⭐⭐⭐⭐</option>
      </select>
    </div>

    <div class="form-section">
      <h3>Feedback Survey</h3>
      <label for="feedback">What did you like or what could be improved?</label>
      <textarea id="feedback" name="feedback" rows="4" required></textarea>
    </div>

    <div class="form-section">
      <h3>Attendance & Engagement</h3>
      <label for="attendance">Did the customer attend the full training?</label>
      <select id="attendance" name="attendance" required>
        <option value="">Select</option>
        <option>Yes</option>
        <option>No</option>
        <option>Partially</option>
      </select>

      <label for="engagement">How would you rate the customer's engagement?</label>
      <select id="engagement" name="engagement" required>
        <option value="">Select</option>
        <option>Low</option>
        <option>Moderate</option>
        <option>High</option>
      </select>
    </div>

    <button type="submit">✅ Submit Monitoring</button>
  </form>
</div>

<script>
  document.getElementById('monitoringForm').addEventListener('submit', function(event) {
    event.preventDefault();
    alert('📝 Monitoring details submitted successfully!');
    this.reset();
  });
</script>

</body>
</html>
