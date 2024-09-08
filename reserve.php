<?php

include('./Project/connection.php');

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
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta cet="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Project/style.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <style>
        .resname {
            margin-left: auto;
            margin-right: auto;
            color: aliceblue;
            text-align: center;
            font-size: 25px;
            margin-bottom: 20px;
            font-weight: 900;
            display: block;
            padding-top: 50px;
        }

        .card-container {
            display: flex;
            flex-direction: row;
            gap: 20px;
            margin: auto;
            margin-top: 30px;
            width: fit-content;
            margin-bottom: 50px;
        }

        .card1 {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 600px;
            height: auto;
        }

        .card2 {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        .intercard2 {
            text-align: left;
            padding: 20px;
        }

        div.scroll-container {
            background-color: #333;
            overflow: auto;
            white-space: nowrap;
            padding: 10px;
            margin-left: 10%;
            margin-right: 10%;
        }

        div.scroll-container img {
            padding: 5px;
        }

        .incardtitle {
            font-size: 15px;
            color: orangered;
        }

        /*suggesion card*/
        .callout {
            position: relative;
            bottom: 35px;
            /* right: 20px; */
            margin-left: 10%;
            margin-right: 10%;
            margin-top: 5%;
            width: auto;
        }

        .callout-header {
            padding: 10px 10px;
            background: #555;
            font-size: 20px;
            color: white;
        }

        .callout-container {
            padding: 15px;
            background-color: #ffffff;
            color: black
        }

        .callout-container-card {
            position: relative;
            height: auto;
            width: 100%;
            height: auto;
            border-radius: 8px;
            color: black;
            background-color: aliceblue;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 20px;
            font-weight: 600;
            padding: 10px;
            transition: 0.6s;
        }

        .callout-container-card:hover {
            box-shadow: 4px 4px rgb(90, 90, 91);
        }

        .closebtn {
            position: absolute;
            top: 5px;
            right: 15px;
            color: white;
            font-size: 30px;
            cursor: pointer;
        }

        .closebtn:hover {
            color: lightgrey;
        }

        /* CSS */
        .interbtn {
            align-items: center;
            appearance: none;
            border-radius: 4px;
            border-style: none;
            box-shadow: rgba(0, 0, 0, .2) 0 3px 1px -2px, rgba(0, 0, 0, .14) 0 2px 2px 0, rgba(0, 0, 0, .12) 0 1px 5px 0;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: inline-flex;
            font-family: Roboto, sans-serif;
            font-size: .875rem;
            font-weight: 500;
            height: 36px;
            width: auto;
            justify-content: center;
            letter-spacing: .0892857em;
            line-height: normal;
            min-width: 64px;
            outline: none;
            overflow: visible;
            padding: 0 16px;
            position: relative;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
            transition: box-shadow 280ms cubic-bezier(.4, 0, .2, 1);
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: middle;
            will-change: transform, opacity;
        }

        .interbtn:hover {
            box-shadow: rgba(0, 0, 0, .2) 0 2px 4px -1px, rgba(0, 0, 0, .14) 0 4px 5px 0, rgba(0, 0, 0, .12) 0 1px 10px 0;
        }

        .interbtn:disabled {
            background-color: rgba(0, 0, 0, .12);
            box-shadow: rgba(0, 0, 0, .2) 0 0 0 0, rgba(0, 0, 0, .14) 0 0 0 0, rgba(0, 0, 0, .12) 0 0 0 0;
            color: rgba(0, 0, 0, .37);
            cursor: default;
            pointer-events: none;
        }

        .interbtn:not(:disabled) {
            background-color: #6200ee;
        }

        .interbtn:focus {
            box-shadow: rgba(0, 0, 0, .2) 0 2px 4px -1px, rgba(0, 0, 0, .14) 0 4px 5px 0, rgba(0, 0, 0, .12) 0 1px 10px 0;
        }

        .interbtn:active {
            box-shadow: rgba(0, 0, 0, .2) 0 5px 5px -3px, rgba(0, 0, 0, .14) 0 8px 10px 1px, rgba(0, 0, 0, .12) 0 3px 14px 2px;
            background: #A46BF5;
        }

        @media (max-width: 768px) {
            .card-container {
                flex-direction: column;
            }

            .card1 {
                background-color: white;
                border: 1px solid #ddd;
                border-radius: 5px;
                padding: 20px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                width: 100%;
                height: auto;
            }

            .card2 {
                background-color: white;
                border: 1px solid #ddd;
                border-radius: 5px;
                padding: 10px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                width: 100%;
                height: auto;
            }

            div.scroll-container {
                margin-right: 2%;
                margin-left: 2%;
            }

            .callout {
                bottom: 35px;
                position: relative;
                margin-left: 10%;
                margin-right: 10%;
                margin-top: 15%;
                width: auto;
                height: auto;
            }

            .callout-header {
                padding: 15px 10px;
                background: #555;
                font-size: 20px;
                color: white;
            }

            .callout-container {
                padding: 10px;
                background-color: #ffffff;
                color: black
            }
        }

        .home-background {
            position: relative;
            top: 0;
            left: 0;
            width: 100%;
            height: auto;
            min-height: 100vh;
            background-size: cover;
            background-repeat: no-repeat;
            animation: changeBackground 12s ease-in infinite;
        }

        @keyframes changeBackground {
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
</head>

<body class="home-background">
    <div class="resname"><?php echo $hotelName; ?></div>

    <div class="card-container">
        <div class="card1">
            <h3 class="incardtitle">About</h3>
            <p><?php echo $about ?></p> <br>
            <h3 class="incardtitle">CUISINES</h3>
            <p><?php echo $cuisines ?></p> <br>
            <h3 class="incardtitle">MEALS</h3>
            <p><?php echo $meals ?></p> <br>
            <h3 class="incardtitle">FEATURES</h3>
            <p><?php echo $features ?></p> <br>
            <h3 class="incardtitle" style="margin-bottom: 10px;">Opening Hours</h3>
            <div class="dis-flex"><i class="fa-solid fa-clock" style="margin-right: 10px;"></i>
                <h5>Weekdays - <?php echo $openinhHours ?></h5>
            </div> <br>
            <!-- <div class="dis-flex"><i class="fa-solid fa-clock" style="margin-right: 10px;"></i>
                <h5>Weekend - 11:00 AM - 10:00 PM</h5>
            </div> <br>
            <div class="dis-flex"><button class="interbtn" role="button" style="margin-right: 10%;">More <i class="fa-solid fa-circle-info" style="margin-left: 8%;"></i></button> <button class="interbtn" id="share" role="button">Share <i class="fa-solid fa-share-from-square" style="margin-left: 8%;"></i></button></div> -->
        </div>

        <div class="card2">
            <h2>Location and Contact</h2>
            <?php echo $mapURL ?> <br>
            <div class="intercard2">
                <div class="dis-flex"><i class="fa-solid fa-location-dot" style="margin-right: 10px;"> </i>
                    <h5><?php echo $address ?></h5>
                </div> <br>
                <div class="dis-flex"><i class="fa-solid fa-window-maximize" style="margin-right: 10px;"></i>
                    <h5><?php echo $websiteURL ?></h5> <i class="fa-solid fa-envelope" style="margin-left: 30px;margin-right: 10px;"></i>
                    <h5><?php echo $email ?></h5>
                </div> <br>
                <div class="dis-flex"><i class="fa-solid fa-phone" style="margin-right: 10px;"></i>
                    <h5><?php echo $hotelMobile ?></h5>
                </div>
            </div>
        </div>
    </div>
    <?php 
    include("./Project/footer.php")
?>
</body>

</html>