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
        <hr>
      </div> 

      <form class="user-add-design" action="/index.php/create_user" method="POST">
          <div class="info-container">
            <div class="user-info">
              <label for="fname">First Name</label><br>
              <input name="fname" type="text" id="fname"><br>

              <label for="lname">Last Name</label><br>
              <input name="lname" type="text" id="lname"><br>

              <label for="avatar">Avatar</label><br>
              <input name="image" type="file" id="avatar"><br>

              <div class="avatar-container">
                <img src="../View/assets/img/cite.jpg" alt="avatar img">
              </div>
            </div>

            <div class="vertical-line"></div>

            <div class="user-acc">
              <label for="email">Email</label><br>
              <input name="email" type="email"><br>

              <label for="pass">Password</label><br>
              <input name="" type="password"><br>

              <label for="cpass">Confirm Password</label><br>
              <input name="password" type="password"><br>

              <label for="role">Role</label><br>
              <select name="role" id="role">
                <option name="role" value="employee">Employee</option>
                <option name="role" value="student">Student</option>
                <option name="role" value="teacher">Teacher</option>
              </select>
            </div>
          </div>

          <input type="submit" value="save">
          <button>cancel</button>
      </form>

  </main>
<script src="../View/assets/js/index.js"></script>
<?php require 'View/partials/footer.php' ?>