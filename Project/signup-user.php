<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,target-densitydpi=device-dpi, user-scalable=no" />
  <title>Signup Form</title>
  <link rel="icon" type="image/x-icon" href="images/Logo without bg 1.png">
  <link rel="stylesheet" href="style.css">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>

<body class="signin-background">
  <header>
    <nav class="navbar">
      <img src="images/Logo.png" alt="Brand Logo" class="logo" />
      <ul>
        <li><a class="active" href="#">SIGN IN</a></li>
        <li><a href="login-user.php">LOG IN</a></li>
      </ul>
      <div class="menu-icon" id="menu-icon">
        <i class="fas fa-bars"></i>
      </div>
    </nav>
    <nav class="side-menu" id="side-menu">
      <ul>
        <li><a href="login-user.php">LOG IN</a></li>
        <li><a class="active" href="#">SIGN IN</a></li>
      </ul>
    </nav>
  </header>
  <div class="container-forms">
    <form action="signup-user.php" method="POST" autocomplete="">
      <h2 class="login-text">SIGN UP</h2>
      <img src="images/signup.webp" alt="Error">
      <p class="login-text">It's quick and easy.</p>
      <?php
      if (count($errors) == 1) {
      ?>
        <div class="alert alert-danger text-center">
          <?php
          foreach ($errors as $showerror) {
            echo $showerror;
          }
          ?>
        </div>
      <?php
      } elseif (count($errors) > 1) {
      ?>
        <div class="alert alert-danger">
          <?php
          foreach ($errors as $showerror) {
          ?>
            <li><?php echo $showerror; ?></li>
          <?php
          }
          ?>
        </div>
      <?php
      }
      ?>
      <div class="form-group">
        <input class="text-space" type="text" name="f_name" placeholder="First Name" required value="<?php echo $name ?>">

        <input class="text-space" type="text" name="l_name" placeholder="Last Name" required value="<?php echo $name ?>">

        <input class="text-space" type="email" name="user_email" placeholder="Email Address" required value="<?php echo $email ?>">

        <input class="text-space" type="password" name="user_password" placeholder="Password" required minlength="6">

        <input class="text-space" type="password" name="cpassword" placeholder="Confirm password" required>
      </div>
      <div class="form-group">
        <button class="login-button" type="submit" name="signup" value="Signup">SIGN UP</button>

        <div class="form-text">Already a member? <a href="login-user.php">LOGIN HERE</a></div>
    </form>
  </div>



  <script>
    // JAVASCRIPT FOR MENU TOGGLE
    const menuIcon = document.getElementById("menu-icon");
    const sideMenu = document.getElementById("side-menu");

    menuIcon.addEventListener("click", function() {
      sideMenu.classList.toggle("open");
    });
  </script>
  </div>
  <?php 
    include("footer.php")
    ?>

</body>

</html>