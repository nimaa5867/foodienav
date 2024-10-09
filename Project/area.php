<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Areas</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
  </head>
  <body>
    <header>
      <nav class="navbar">  
          <img src="images/Logo.png" alt="Brand Logo" class="logo"/>
          <ul>
            <li><a class="active" href="#">AREAS</a></li>
            <li><a href="user-profile.php">PROFILE</a></li>
            <li><a href="index1.php">HOME</a></li>
          </ul>
         <div class="menu-icon" id="menu-icon"><i class="fas fa-bars"></i></div>
      </nav>
      <nav class="side-menu" id="side-menu">
        <ul>
          <li><a href="index1.php">HOME</a></li>
          <li><a class="active" href="#">AREAS</a></li>
          <li><a href="user-profile.php">PROFILE</a></li>
        </ul>
      </nav>
    </header>

    <img src="images/background/map.webp" class="mapimg" />

    <div class="areanotice">
      "We're rolling out the red carpet for just two locations during our
      testing phase. <br />
      More destinations await!"
    </div>

    <div class="areacontainer">
      <a href="filter.php?location=colombo">
        <div class="areacontainer-card">
          <h2>Colombo</h2>
          <p>
            Experience a culinary journey like no other at our premier restaurant in the heart of Colombo, where flavor meets elegance.
          </p>
        </div>
      </a>
      <a href="filter.php?location=kandy">
        <div class="areacontainer-card">
          <h2>Kandy</h2>
          <p>
            Indulge in authentic and diverse cuisines at our cozy restaurant in Kandy, surrounded by the city's rich cultural charm.
          </p>
        </div>
      </a>
      <div class="disabled-areacontainer-card">
        <h2>Galle</h2>
        <p>Coming Soon!!!</p>
      </div>
      <div class="disabled-areacontainer-card">
        <h2>Kurunegala</h2>
        <p>Coming Soon!!!</p>
      </div>
      <div class="disabled-areacontainer-card">
        <h2>Anuradhapura</h2>
        <p>Coming Soon!!!</p>
      </div>
      <div class="disabled-areacontainer-card">
        <h2>Matara</h2>
        <p>Coming Soon!!!</p>
      </div>
    </div>

    <?php
    include("footer.php")
    ?>

    <script>
      // JAVASCRIPT FOR MENU TOGGLE
      const menuIcon = document.getElementById("menu-icon");
      const sideMenu = document.getElementById("side-menu");

      menuIcon.addEventListener("click", function () {
        sideMenu.classList.toggle("open");
      });
    </script>
</body>
</html>
