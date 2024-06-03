<?php require 'View/partials/header.php' ?>

<link rel="stylesheet" href="../View/assets/css/admin-style.css">
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
      <h1>Add New Project</h1><hr>
    </div>

    <form class="add-project-container" action="/index.php/create" method="POST">

        <label for="name">Name</label>
        <label for="status">Status</label>

        <input name="name" type="text" id="name">
        <input name="status" type="text" id="status">

        <label for="Sdate">Start Date</label>
        <label for="Edate" id="Edate">End Date</label>

        <input name="start_date" type="date" id="Sdate">
        <input name="end_date" type="date">

        <label for="Pmanager">Project Manager</label>
        <label for="PTmembers">Project Team Members</label>

        <input name="manager" type="text" name="" id="Pmanager">
        <input name="team_manager" type="text" id="PTmembers">

        <label for="description">Description</label><br>
        <textarea name="description" id="description"></textarea>

        <input type="submit">

      </form>

  </div>

</main>

<script src="../View/assets/js/index.js"></script>
<?php require 'View/partials/footer.php' ?>