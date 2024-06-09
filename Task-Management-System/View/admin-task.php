<?php require 'View/partials/header.php' ?>

<link rel="stylesheet" href="../View/assets/css/admin-style.css">

<body>
  <nav>

    <div class="admin-label">
      <h1>ADMIN</h1>
      <hr>
    </div>

    <div class="navigation">
      <button id="Dashboard" >Dashboard</button>
      <button id="add_project" >add project</button>
      <button id="add_user" >add user</button>
      <button id="admin_project" >admin project</button>
      <button id="admin_task" >admin task</button>
      <button id="admin" >admin</button>
      <button id="logout" >logout</button>
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
            <th>Task</th>
            <th>Project Started</th>
            <th>Due Date</th>
            <th>Project Status</th>
            <th>Task Status</th>
          </tr>

          <tr>
            <td>1. Sample project</td>
            <td>Sample Task 1 <p>"the quick brown fox jump over the lazy dog"</p></td>
            <td>May 8, 2024</td>
            <td>June 1, 2024</td>
            <td>On-Progress</td>
            <td>Done</td>
          </tr>

          <tr>
            <td>1. Sample project</td>
            <td>Sample Task 2 <p>"sample task 2"</p></td>
            <td>May 8, 2024</td>
            <td>June 1, 2024</td>
            <td>Started</td>
            <td>Done</td>
          </tr>

        </table>
      </div>

    </div>

    <button class="add-btn">Add New Project</button>

  </main>
  <script src="../View/assets/js/index.js"></script>
<?php require 'View/partials/footer.php' ?>