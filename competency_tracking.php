<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Competency Tracking System</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f2f9ff;
      margin: 0;
      padding: 20px;
    }

    .container {
      max-width: 1100px;
      margin: auto;
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    }

    h1, h2 {
      text-align: center;
      color: #004080;
    }

    form {
      margin: 20px 0;
    }

    label {
      display: block;
      margin: 10px 0 5px;
    }

    input, select {
      width: 100%;
      padding: 10px;
      border-radius: 6px;
      border: 1px solid #ccc;
      margin-bottom: 15px;
    }

    button {
      background-color: #004080;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }

    button:hover {
      background-color: #002f5c;
    }

    .competency-list, .employee-gallery {
      margin-top: 30px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 12px;
      text-align: center;
    }

    th {
      background-color: #cce5ff;
      color: #003366;
    }

    .report-section {
      margin-top: 40px;
    }

    .employee-gallery {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
    }

    .employee-card {
      width: 150px;
      text-align: center;
    }

    .employee-card img {
      width: 100%;
      border-radius: 10px;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
    }

    .employee-card p {
      margin-top: 10px;
      font-weight: bold;
    }

    .trend-analysis {
      margin-top: 40px;
      background-color: #eaf4ff;
      padding: 20px;
      border-radius: 10px;
    }

    .trend-analysis h2 {
      color: #004080;
    }

    .trend-analysis p {
      margin-bottom: 10px;
    }

    .filter-section {
      margin-top: 30px;
      display: flex;
      gap: 20px;
      justify-content: center;
    }

    .filter-section select {
      width: auto;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>📊 Competency Tracking System</h1>

    

    <div class="competency-list">
      <h2>📋 Competency Records</h2>
      <table id="competencyTable">
        <thead>
          <tr>
            <TH>Employee Image</th>
            <th>Employee Name</th>
            <th>Competency</th>
            <th>Level</th>
            <th>Date Updated</th>
          </tr>
        </thead>
        <tbody>
        <td><img src="admin-avatar.png" alt="Lias Vance" width="40" style="border-radius:50%;"></td>
    <td>Lias Vance</td><td>Leadership</td><td>Advanced</td><td>2025-04-24</td>
  </tr>
  <tr>
    <td><img src="admin-avatar.png" alt="Seraphina Bellweather" width="40" style="border-radius:50%;"></td>
    <td>Seraphina Bellweather</td><td>Communication</td><td>Expert</td><td>2025-04-24</td>
  </tr>
  <tr>
    <td><img src="admin-avatar.png" alt="Jasper Thorne" width="40" style="border-radius:50%;"></td>
    <td>Jasper Thorne</td><td>Problem Solving</td><td>Intermediate</td><td>2025-04-24</td>
  </tr>
  <tr>
    <td><img src="admin-avatar.png" alt="Luna Dubois" width="40" style="border-radius:50%;"></td>
    <td>Luna Dubois</td><td>Teamwork</td><td>Advanced</td><td>2025-04-24</td>
  </tr>
  <tr>
    <td><img src="admin-avatar.png" alt="Caleb Sterling" width="40" style="border-radius:50%;"></td>
    <td>Caleb Sterling</td><td>Technical Skills</td><td>Expert</td><td>2025-04-24</td>
  </tr>
  <tr>
    <td><img src="admin-avatar.png" alt="Aurora Finch" width="40" style="border-radius:50%;"></td>
    <td>Aurora Finch</td><td>Leadership</td><td>Intermediate</td><td>2025-04-24</td>
  </tr>
  <tr>
    <td><img src="admin-avatar.png" alt="Atticus Blackwood" width="40" style="border-radius:50%;"></td>
    <td>Atticus Blackwood</td><td>Communication</td><td>Advanced</td><td>2025-04-24</td>
  </tr>
  <tr>
    <td><img src="admin-avatar.png" alt="Willow Hayes" width="40" style="border-radius:50%;"></td>
    <td>Willow Hayes</td><td>Teamwork</td><td>Expert</td><td>2025-04-24</td>
  </tr>
  <tr>
    <td><img src="admin-avatar.png" alt="Silas Ramsey" width="40" style="border-radius:50%;"></td>
    <td>Silas Ramsey</td><td>Technical Skills</td><td>Beginner</td><td>2025-04-24</td>
  </tr>
  <tr>
    <td><img src="admin-avatar.png" alt="Juniper Klein" width="40" style="border-radius:50%;"></td>
    <td>Juniper Klein</td><td>Problem Solving</td><td>Advanced</td><td>2025-04-24</td>
  </tr>
</tbody>

<form id="competencyForm">
      <h2>Update Employee Competency</h2>
      <label for="employee_name">Employee Name:</label>
      <input type="text" id="employee_name" required>

      <label for="competency">Competency Area:</label>
      <select id="competency" required>
        <option value="">--Select--</option>
        <option value="Leadership">Leadership</option>
        <option value="Technical Skills">Technical Skills</option>
        <option value="Communication">Communication</option>
        <option value="Problem Solving">Problem Solving</option>
        <option value="Teamwork">Teamwork</option>
      </select>

      <label for="level">Competency Level:</label>
      <select id="level" required>
        <option value="">--Select--</option>
        <option value="Beginner">Beginner</option>
        <option value="Intermediate">Intermediate</option>
        <option value="Advanced">Advanced</option>
        <option value="Expert">Expert</option>
      </select>

      <button type="submit">Add Competency Record</button>
    </form>

    <div class="report-section">
      <h2>📈 Generate Reports & Analyze Trends</h2>
      <p>This section allows managers to generate employee competency reports and observe trends over time. Integration with charts and backend reporting tools is recommended for live usage.</p>
      <button onclick="alert('📥 Report generation not yet connected to backend.')">Generate Competency Report</button>
    </div>

    <div class="trend-analysis">
      <h2>📊 Trend Analysis</h2>
      <p><strong>Popular Competency:</strong> Communication</p>
      <p><strong>Most Common Level:</strong> Advanced</p>
      <p><strong>Employees at Expert Level:</strong> 3</p>
      <p><strong>Least Represented Competency:</strong> Technical Skills (Beginner)</p>
    </div>
  </div>

  <div class="filter-section">
      <label for="filterCompetency">Filter by Competency:</label>
      <select id="filterCompetency">
        <option value="">All</option>
        <option value="Leadership">Leadership</option>
        <option value="Technical Skills">Technical Skills</option>
        <option value="Communication">Communication</option>
        <option value="Problem Solving">Problem Solving</option>
        <option value="Teamwork">Teamwork</option>
      </select>

      <label for="filterLevel">Filter by Level:</label>
      <select id="filterLevel">
        <option value="">All</option>
        <option value="Beginner">Beginner</option>
        <option value="Intermediate">Intermediate</option>
        <option value="Advanced">Advanced</option>
        <option value="Expert">Expert</option>
      </select>
    </div>
  <script>
    document.getElementById("competencyForm").addEventListener("submit", function(e) {
      e.preventDefault();

      const name = document.getElementById("employee_name").value;
      const competency = document.getElementById("competency").value;
      const level = document.getElementById("level").value;
      const date = new Date().toLocaleDateString();

      const table = document.getElementById("competencyTable").getElementsByTagName("tbody")[0];
      const newRow = table.insertRow();

      newRow.innerHTML = `
        <td>${name}</td>
        <td>${competency}</td>
        <td>${level}</td>
        <td>${date}</td>
      `;

      this.reset();
    });

    document.getElementById("filterCompetency").addEventListener("change", filterTable);
    document.getElementById("filterLevel").addEventListener("change", filterTable);

    function filterTable() {
      const competencyFilter = document.getElementById("filterCompetency").value;
      const levelFilter = document.getElementById("filterLevel").value;
      const rows = document.querySelectorAll("#competencyTable tbody tr");

      rows.forEach(row => {
        const competency = row.children[1].textContent;
        const level = row.children[2].textContent;

        const competencyMatch = !competencyFilter || competency === competencyFilter;
        const levelMatch = !levelFilter || level === levelFilter;

        row.style.display = competencyMatch && levelMatch ? "" : "none";
      });
    }
  </script>
</body>
</html>
