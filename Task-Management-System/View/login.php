<?php require 'View/partials/header.php' ?>

<link rel="stylesheet" href="../View/assets/css/login-style.css">

<body style="background-image: url(../View/assets/img/cite.jpg);">

  <div class="container">

    <nav>
      <div class="menu-bar">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <h1>CITE Task Management System</h1>

      <button>Go Back</button>
    </nav>  
    

    <form action="/<?php echo $GLOBALS["folder"]; ?>/index.php/login" method="POST">

      <input name="log_email" type="email" id="email" placeholder="Email">
      <input name="log_password" type="password" id="password" placeholder="Password">


      <div class="contain">
        <div class="remember">
          <input type="checkbox">
          <span>Remember Me</span>
        </div>
        
        <input type="submit" value="Sign In">
      </div>

    </form>

  </div>
  
<?php require 'View/partials/footer.php' ?>