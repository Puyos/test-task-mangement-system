<?php require 'View/partials/header.php' ?>
<link rel="stylesheet" href="../View/assets/css/admin-style.css">

<body>
  <nav>

    <div class="admin-label">
      <h1>ADMIN</h1>
      <hr>
    </div>

    <div class="navigation">
      <button>Dashboard</button>
      <button>Projects</button>
      <button>Task</button>
      <button>Reports</button>
      <button>Users</button>
    </div>

  </nav>

  <main>

    <header>
      <h1>CITE Task Management System</h1>

      <div class="switch">
        <h5>Administrator</h5>
      </div>
    </header>

    <div class="home">

      <div class="welcome-message">
        <h1>Task List</h1><hr>
      </div>

      <div class="task-content">
        <table>
          <tr>
            <th># PROJECT</th>
            <th>Date Started</th>
            <th>Due Date</th>
            <th>Status</th>
          </tr>

          <tr>
            <td>1. Sample project</td>
            <td>May 8, 2024</td>
            <td>June 1, 2024</td>
            <td>On-Progress</td>
          </tr>

          <tr>
            <td>1. Sample project</td>
            <td>May 8, 2024</td>
            <td>June 1, 2024</td>
            <td>On-Progress</td>
          </tr>

          <tr>
            <td>1. Sample project</td>
            <td>May 8, 2024</td>
            <td>June 1, 2024</td>
            <td>On-Progress</td>
          </tr>

         
        </table>
      </div>

    </div>

    <button class="add-btn">Add New Project</button>

  </main>
  <script src="../View/assets/js/index.js"></script>
<?php require 'View/partials/footer.php' ?>