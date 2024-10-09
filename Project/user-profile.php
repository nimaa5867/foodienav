<?php require_once "controllerUserData.php"; ?>
<?php
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if ($email != false && $password != false) {
  $sql = "SELECT * FROM usertable WHERE email = '$email'";
  $run_Sql = mysqli_query($con, $sql);
  if ($run_Sql) {
    $fetch_info = mysqli_fetch_assoc($run_Sql);
    $status = $fetch_info['status'];
    $code = $fetch_info['code'];
    if ($status == "verified") {
      if ($code != 0) {
        header('Location: reset-code.php');
      }
    } else {
      header('Location: user-otp.php');
    }
  }
} else {
  header('Location: login-user.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $fetch_info['fname'] ?> | Profile</title>
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
        <li><a href="area.php">AREAS</a></li>
        <li><a class="active" href="user-profile.php">PROFILE</a></li>
        <li><a href="index1.php">HOME</a></li>
      </ul>
      <div class="menu-icon" id="menu-icon"><i class="fas fa-bars"></i></div>
    </nav>
    <nav class="side-menu" id="side-menu">
      <ul>
        <li><a href="index1.php">HOME</a></li>
        <li><a href="area.php">AREAS</a></li>
        <li><a class="active" href="user-profile.php">PROFILE</a></li>
      </ul>
    </nav>
  </header>

  <div class="container-forms">
    <h2 class="login-text">PROFILE</h2>
    <br>
    <div>
      <output class="output-space"> First Name - <?php echo $fetch_info['fname'] ?></output>
      <div class="marginbot"></div>
      <output class="output-space"> Last Name - <?php echo $fetch_info['lname'] ?></output>
      <div class="marginbot"></div>
      <output class="output-space"> Email - <?php echo $fetch_info['email'] ?></output>
      <div class="marginbot"></div>
      <output class="output-space"> Status - <?php echo $fetch_info['status'] ?></output>
      <div class="marginbot"></div>
    </div>
    <button onclick="location.href = 'logout-user.php';" class="login-button" type="logout" name="logout" value="Signup">Log out</button>
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