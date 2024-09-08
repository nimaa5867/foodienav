<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Areas</title>
    <link rel="stylesheet" type="text/css" href="project/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <script
      src="https://kit.fontawesome.com/4dc862254d.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <style>
    .areacontainer {
      margin-top: 4%;
      display: flex;
      flex-direction: column;
    }
    .areacontainer-card h2 {
      font-size: 20px;
      color: orangered;
    }
    .areacontainer-card {
      height: auto;
      width: auto;
      margin: 0 5%;
      background-color: aliceblue;
      padding: 10px;
      border-radius: 10px;
      display: block;
      margin-bottom: 20px;
      transition: all 0.3s;
    }
    .areacontainer-card:hover {
      padding: 15px;
      box-shadow: 0 10px 20px rgba(0, 0, 0);
      /*box-shadow: 0 20px 40px rgba(255, 255, 255, 0.5);*/
    }
    .areanotice {
      text-align: center;
      color: crimson;
      font-size: 20px;
      font-weight: bolder;
    }
    .mapimg {
      width: 40%;
      margin-top: 6%;
      margin-left: auto;
      margin-right: auto;
      display: block;
    }
    @media (max-width: 768px) {
      .areacontainer {
        margin-top: 15%;
      }
      .mapimg {
        width: 50%;
        margin-top: 25%;
        margin-left: auto;
        margin-right: auto;
        display: block;
      }
    }
  </style>
  <body>
    <header>
      <nav class="navbar">  
          <img src="project/images/Logo.png" alt="Brand Logo" class="logo"/>
          <ul>
            <li><a class="active" href="#">AREAS</a></li>
            <li><a href="Project/user-profile.php">PROFILE</a></li>
            <li><a href="Project/index1.php">HOME</a></li>
          </ul>
         <div class="menu-icon" id="menu-icon"><i class="fas fa-bars"></i></div>
      </nav>
      <nav class="side-menu" id="side-menu">
        <ul>
          <li><a href="#">HOME</a></li>
          <li><a class="active" href="#">AREAS</a></li>
          <li><a href="/Project/user-profile.php">PROFILE</a></li>
        </ul>
      </nav>
    </header>

    <img src="project/images/background/map.webp" class="mapimg" />

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
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Exercitationem, perspiciatis numquam. Ipsum facere, mollitia aliquam
            consequatur officiis et optio illum suscipit aliquid laboriosam
            repudiandae architecto dolorum numquam omnis enim delectus.
          </p>
        </div>
      </a>
      <a href="filter.php?location=kandy">
        <div class="areacontainer-card">
          <h2>Kandy</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis nisi
            totam tempore dignissimos illum aperiam repellat? Dolorem delectus
            ratione voluptatibus commodi maiores eveniet magnam. Atque at earum
            dicta. Tempore, accusantium.
          </p>
        </div>
      </a>
      <div class="areacontainer-card" style="cursor: not-allowed">
        <h2>Galle</h2>
        <p>Coming Soon!!!</p>
      </div>
      <div class="areacontainer-card" style="cursor: not-allowed">
        <h2>Kurunegala</h2>
        <p>Coming Soon!!!</p>
      </div>
      <div class="areacontainer-card" style="cursor: not-allowed">
        <h2>Anuradhapura</h2>
        <p>Coming Soon!!!</p>
      </div>
      <div class="areacontainer-card" style="cursor: not-allowed">
        <h2>Mathara</h2>
        <p>Coming Soon!!!</p>
      </div>
    </div>
    <footer>
      <div class="footer-container">
        <div class="footer-section">
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="#team">Our Team</a></li>
          </ul>
        </div>
        <div class="footer-section">
          <div class="social-icons">
            <a href="#" aria-label="Youtube"><i class="fab fa-youtube"></i></a>
            <a href="#" aria-label="Github"><i class="fab fa-github"></i></a>
            <a href="mailto:info@foodienavigator.live" aria-label="Google"
              ><i class="fab fa-google"></i
            ></a>
          </div>
        </div>
        <div class="footer-bottom">
          <p>&copy; 2024 Foodie Navigator. All rights reserved.</p>
        </div>
      </div>
    </footer>
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
