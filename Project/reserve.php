<?php

include('connection.php');
$suggestionCardHtml = '';

if (isset($_POST['reserve'])) {
  $hotelID =  $_POST['hotelID'];

  $sql = "SELECT * FROM hotels WHERE  hotelID = '$hotelID'";
  $result = mysqli_query($con, $sql);

  $row = mysqli_fetch_assoc($result);

  $hotelName = $row['hotelName'];
  $hotelName = $row['hotelName'];
  $priceRange = $row['priceRange'];
  $mainPhoto = $row['mainPhoto'];
  $location = $row['location'];
  $about = $row['about'];
  $cuisines = $row['cuisines'];
  $meals = $row['meals'];
  $features = $row['features'];
  $openinhHours = $row['openinhHours'];
  $mapURL = $row['mapURL'];
  $address = $row['address'];
  $websiteURL = $row['websiteURL'];
  $email = $row['email'];
  $hotelMobile = $row['hotelMobile'];
  $slidePhoto1 = $row['slidePhoto1'];
  $slidePhoto2 = $row['slidePhoto2'];
  $slidePhoto3 = $row['slidePhoto3'];

  $sql2 = "SELECT * FROM hotels WHERE location = '$location' ORDER BY RAND() LIMIT 3";
  $result2 = mysqli_query($con, $sql2);

  while ($suggestionRow  = mysqli_fetch_assoc($result2)) {
    $suggestionId = $suggestionRow['hotelID'];
    $suggestionrange = $suggestionRow['priceRange'];
    $suggestionHotelName = $suggestionRow['hotelName'];
    $suggestionHotelAddress = $suggestionRow['address'];
    $suggestionPhoto = $suggestionRow['mainPhoto'];

    $suggestionCardHtml .= "<div class='box'>
                <div class='box-image'>
                    <img src=" . $suggestionPhoto . " />
                </div>
                <div class='bottom'>
                    <h3>" . $suggestionHotelName . "<br>" . $suggestionHotelAddress . "</h3>
                    <h4>" . $suggestionrange . "</h4>
                <form action='reserve.php' method='post'>
                <input type='hidden' name='hotelID' value='" . $suggestionId . "'>
                <button class=\"login-button\" type='submit' name='reserve'>Reserve</button>
                </form>
                </div>
            </div>";
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta cet="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $hotelName ?></title>
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">
  <link rel="stylesheet" href="style.css">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>
<style>
  @keyframes changeBackgroundReserve {
    0% {
      background-image: url("<?php echo $slidePhoto1 ?>");
    }

    50% {
      background-image: url("<?php echo $slidePhoto2 ?>");
    }

    100% {
      background-image: url("<?php echo $slidePhoto3 ?>");
    }
  }
</style>

<body class="reserve-background">
  <header>
    <nav class="navbar">
      <img src="images/Logo.png" alt="Brand Logo" class="logo" />
      <ul>
        <li><a href="area.php">AREAS</a></li>
        <li><a href="user-profile.php">PROFILE</a></li>
        <li><a href="index1.php">HOME</a></li>
      </ul>
      <div class="menu-icon" id="menu-icon"><i class="fas fa-bars"></i></div>
    </nav>
    <nav class="side-menu" id="side-menu">
      <ul>
        <li><a href="index1.php">HOME</a></li>
        <li><a href="area.php">AREAS</a></li>
        <li><a href="user-profile.php">PROFILE</a></li>
      </ul>
    </nav>
  </header>
  <div class="resname"><?php echo $hotelName; ?></div>
  <hr class="team-hr" />

  <div class="carousel">
    <button class="prev" onclick="prevSlide()">&#10094;</button>
    <div class="carousel-inner">
      <img
        src="<?php echo $slidePhoto1 ?>"
        class="carousel-item"
        alt="Image 1" />
      <img
        src="<?php echo $slidePhoto2 ?>"
        class="carousel-item"
        alt="Image 2" />
      <img
        src="<?php echo $slidePhoto3 ?>"
        class="carousel-item"
        alt="Image 3" />
      <img
        src="<?php echo $slidePhoto2 ?>"
        class="carousel-item"
        alt="Image 4" />
      <img
        src="<?php echo $slidePhoto1 ?>"
        class="carousel-item"
        alt="Image 5" />
    </div>
    <button class="next" onclick="nextSlide()">&#10095;</button>
  </div>


  <div class="card-container">
    <div class="card1">
      <h3 class="incardtitle">ABOUT</h3>
      <p><?php echo $about ?></p> <br>
      <h3 class="incardtitle">CUISINES</h3>
      <p><?php echo $cuisines ?></p> <br>
      <h3 class="incardtitle">MEALS</h3>
      <p><?php echo $meals ?></p> <br>
      <h3 class="incardtitle">FEATURES</h3>
      <p><?php echo $features ?></p> <br>
      <h3 class="incardtitle">PRICE RANGE</h3>
      <p><?php echo $priceRange ?></p> <br>
      <h3 class="incardtitle">OPENING HOURS</h3><br>
      <div><i class="fa-solid fa-clock"></i>
        <h5>Weekdays - <?php echo $openinhHours ?></h5>
      </div> <br>
      <div><i class="fa-solid fa-clock"></i>
        <h5>Weekend - 11:00 AM - 10:00 PM</h5>
      </div> <br>
      <div>
        <!-- <button class="login-button" type="button" style="margin-right: 10%;">More <i class="fa-solid fa-circle-info"></i></button> 
            <button class="login-button" id="share" type="button">Share <i class="fa-solid fa-share-from-square"></i></button> -->
      </div>
    </div>

    <div class="card2">
      <h2>Location and Contact</h2>
      <?php echo $mapURL ?> <br>
      <div class="intercard2">
        <div><i class="fa-solid fa-location-dot"> </i>
          <h5><?php echo $address ?></h5>
        </div> <br>
        <div><i class="fa-solid fa-window-maximize"></i>
          <h5><a href="<?php echo $websiteURL ?>"><?php echo $websiteURL ?></a></h5>
        </div> <br>
        <div><i class="fa-solid fa-envelope"></i>
          <h5> <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></h5>
        </div> <br>
        <div><i class="fa-solid fa-phone"></i>
          <h5><?php echo $hotelMobile ?></h5>
        </div>
      </div>
    </div>
  </div>
  <div class="callout">
    <div class="callout-header">Suggessions</div>
    <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span>
    <div class="callout-container">
      <p>Here are some suggessions that you might like....</p>
      <div>
        <div id="root-suggesion">
          <?php echo $suggestionCardHtml ?>
        </div>
      </div>
    </div>
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

    let currentSlide = 0;
    const slides = document.querySelectorAll(".carousel-item");
    const totalSlides = slides.length;
    let slideInterval;

    //JAVASCRIPT FOR CAROUSEL
    function showSlide(slideIndex) {
      if (slideIndex >= totalSlides) {
        currentSlide = 0;
      } else if (slideIndex < 0) {
        currentSlide = totalSlides - 1;
      } else {
        currentSlide = slideIndex;
      }

      const offset = -currentSlide * 100;
      document.querySelector(
        ".carousel-inner"
      ).style.transform = `translateX(${offset}%)`;
    }

    function nextSlide() {
      showSlide(currentSlide + 1);
    }

    function prevSlide() {
      showSlide(currentSlide - 1);
    }

    function startAutoSlide() {
      slideInterval = setInterval(nextSlide, 3000); // Change image every 3 seconds
    }

    function stopAutoSlide() {
      clearInterval(slideInterval);
    }

    document.querySelector(".next").addEventListener("click", () => {
      nextSlide();
      stopAutoSlide(); // Stops auto sliding when manually clicked
      startAutoSlide(); // Resets auto slide timer
    });

    document.querySelector(".prev").addEventListener("click", () => {
      prevSlide();
      stopAutoSlide();
      startAutoSlide();
    });

    startAutoSlide();
  </script>
</body>

</html>