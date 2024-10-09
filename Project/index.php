<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta
    name="viewport"
    content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,target-densitydpi=device-dpi, user-scalable=no" />
  <title>Landing Page</title>
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="landing-background">
    <header>
      <nav class="navbar">
        <img
          src="images/Logo.png"
          alt="Brand Logo"
          class="logo" />
        <ul>
          <li><a href="signup-user.php">SIGN UP</a></li>
          <li><a href="login-user.php">LOG IN</a></li>
        </ul>
        <div class="menu-icon" id="menu-icon">
          <i class="fas fa-bars"></i>
        </div>
      </nav>
      <nav class="side-menu" id="side-menu">
        <ul>
          <li><a href="login-user.php">LOG IN</a></li>
          <li><a href="signup-user.php">SIGN UP</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <div class="index-textcard">
        <div class="typewriter">
          <h1>Eat, Explore, Enjoy <br /></h1>
        </div>
      </div>
      <div class="index-textcardinfo">
        <div class="line">
          <h2 class="lineUp1">
            Navigate through a world of flavors with our expert
            recommendations and reviews.
          </h2>
          <h2 class="lineUp2">
            Find your next favorite restaurant or recipe with ease.
          </h2>
          <h2 class="lineUp3">
            From street food to fine dining, we guide you to the best bites.
          </h2>
        </div>
        <div class="responsive-btns">
          <a href="./signup-user.php" class="lineUp3">Sign Up</a>
          <a href="./login-user.php" class="lineUp3">Login</a>
        </div>
      </div>

    </main>
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