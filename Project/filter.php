<?php
include('connection.php');

if (isset($_GET['location'])) {
    $location = htmlspecialchars($_GET['location']);
    $sql = "SELECT hotelID,hotelName,priceRange,mainPhoto,address FROM hotels WHERE location LIKE '$location%' ";

    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }
} else {
    echo 'error occured';
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Page</title>
    <link rel="stylesheet" href="style.css">
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

    <div class="sidebody">
        <div class="searchBar">
            <input type="text" placeholder="Search..." id="searchBar" name="searchBar">
            <i class="fa-solid fa-magnifying-glass glass" id="btn"></i>
        </div>

    </div>

    <div class="root-body">
        <div id="root">

        </div>
        <!--No more matching tag  -->
        <div id="box1"></div>
    </div>

    <?php
    include("footer.php")
    ?>

    <script>
        const product = <?php echo json_encode($data); ?>;


        const categories = [...new Set(product.map((item) => {
            return item
        }))];


        document.getElementById('searchBar').addEventListener('keyup', (e) => {
            const searchData = e.target.value.toLowerCase();
            const filteredData = categories.filter((item) => {
                return (
                    item.hotelName.toLowerCase().includes(searchData)
                )
            })
            displayItem(filteredData);

            //Display no more matching
            function displayMessage(message) {
                const outputElement = document.getElementById('box1');
                outputElement.textContent = message; // Update element content with message
            }

            if (filteredData.length === 0) {
                // Display empty message (replace with your preferred method)
                displayMessage("No results found !");
            } else {
                displayMessage();
            }

        });


        const displayItem = (items) => {
            document.getElementById('root').innerHTML = items.map((item) => {
                var {
                    hotelID,
                    mainPhoto,
                    hotelName,
                    priceRange,
                    link,
                    address
                } = item;
                return (
                    `<div class='box'>
                <div class='box-image'>
                    <img src=${mainPhoto} />
                </div>
                <div class='bottom'>
                    <h3>${hotelName}<br>${address}</h3>
                    <h4>${priceRange}</h4>
                <form action='reserve.php' method='post'>
                <input type='hidden' name='hotelID' value='${hotelID}'>
                <button class="login-button" type='submit' name='reserve'>Reserve</button>
                </form>
                </div>
            </div>`
                )
            }).join('')
        };
        displayItem(categories);
    </script>
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