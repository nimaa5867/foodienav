<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,target-densitydpi=device-dpi, user-scalable=no" />
  <title>Login Form</title>
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">
  <link rel="stylesheet" href="style.css">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>

<body class="background">
  <header>
    <nav class="navbar">
      <img src="images/Logo.png" alt="Brand Logo" class="logo" />
      <ul>
        <li><a href="signup-user.php">SIGN UP</a></li>
        <li><a class="active" href="#">LOG IN</a></li>
      </ul>
      <div class="menu-icon" id="menu-icon">
        <i class="fas fa-bars"></i>
      </div>
    </nav>
    <nav class="side-menu" id="side-menu">
      <ul>
        <li><a class="active" href="#">LOG IN</a></li>
        <li><a href="signup-user.php">SIGN UP</a></li>
      </ul>
    </nav>
  </header>
  <div class="container-forms">
    <form action="login-user.php" method="POST" autocomplete="on">
      <div class="login-text">LOGIN</div>

      <img
        src="images/login.webp"
        alt="Error" />

      <div class="login-text">Login with your email and password</div>
      <?php
      if (
        count($errors) >
        0
      ) { ?>
        <div class="alert">
          <?php
          foreach ($errors as $showerror) {
            echo $showerror;
          }
          ?>
        </div>
      <?php
      }
      ?>

      <input
        class="text-space"
        type="email"
        name="email"
        placeholder="Email Address"
        required
        value="<?php echo $email ?>" />
      <br />
      <div class="form-group">
        <input
          class="text-space"
          type="password"
          name="password"
          placeholder=" Password"
          required />
      </div>
      <div class="form-text">
        <a href="forgot-password.php">FORGOT PASSWORD?</a>
      </div>
      <button class="login-button" type="submit" name="login" value="login">
        LOGIN
      </button>
      <div class="form-text">
        Not yet a member? <a href="signup-user.php">SIGN UP NOW</a>
      </div>
    </form>
  </div>
  <?php
  include("footer.php")
  ?>
  <script>
    // JAVASCRIPT FOR MENU TOGGLE
    const menuIcon = document.getElementById("menu-icon");
    const sideMenu = document.getElementById("side-menu");

    menuIcon.addEventListener("click", function() {
      sideMenu.classList.toggle("open");
    });
  </script>
</body>

</html>