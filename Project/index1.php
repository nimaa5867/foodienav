<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,target-densitydpi=device-dpi, user-scalable=no" />
    <title><?php echo $fetch_info['fname'] ?> | Home</title>
    <link rel="icon" type="image/x-icon" href="images/Logo without bg 1.png">
    <link rel="stylesheet" href="style.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
</head>
<body>
   <div class="home-background">
    <header>
      <nav class="navbar">  
          <img src="images/Logo.png" alt="Brand Logo" class="logo"/>
          <ul>
            <li><a href="../area.php">AREAS</a></li>
            <li><a href="user-profile.php">PROFILE</a></li>
            <li><a class="active" href="../Project/index1.php">HOME</a></li>
          </ul>
         <div class="menu-icon" id="menu-icon"><i class="fas fa-bars"></i></div>
      </nav>
      <nav class="side-menu" id="side-menu">
        <ul>
          <li><a class="active" href="#">HOME</a></li>
          <li><a href="../area.php">AREAS</a></li>
          <li><a href="user-profile.php">PROFILE</a></li>
        </ul>
      </nav>
    </header>
    <div class="h4">
       Hello <?php echo $fetch_info['fname'] ?> <?php echo $fetch_info['lname'] ?>, 
       <br><br><label id="lblGreetings"></label>
    </div> 
   </div>
   <?php
    include("footer.php")
    ?>

    <script>
    // GREATING JS CODE
    var myDate = new Date();
    var hrs = myDate.getHours();

    var greet;

    if (hrs < 12)
        greet = 'Good Morning';
    else if (hrs >= 12 && hrs <= 17)
        greet = 'Good Afternoon';
    else if (hrs >= 17 && hrs <= 24)
        greet = 'Good Evening';

    document.getElementById('lblGreetings').innerHTML =
       '<h2>' + greet + '</h2> and welcome!';
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