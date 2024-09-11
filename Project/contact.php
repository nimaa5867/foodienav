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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
</head>
<body class="login-background">
<header>
      <nav class="navbar">  
          <img src="images/Logo.png" alt="Brand Logo" class="logo"/>
          <ul>
            <li><a href="../area.php">AREAS</a></li>
            <li><a href="user-profile.php">PROFILE</a></li>
            <li><a href="/Project/index1.php">HOME</a></li>
          </ul>
         <div class="menu-icon" id="menu-icon"><i class="fas fa-bars"></i></div>
      </nav>
      <nav class="side-menu" id="side-menu">
        <ul>
          <li><a href="#">HOME</a></li>
          <li><a href="../area.html">AREAS</a></li>
          <li><a href="user-profile.php">PROFILE</a></li>
        </ul>
      </nav>
    </header>
    <div class="container-forms">
    <form action="https://api.web3forms.com/submit" method="POST">
        <h2>Get in Touch.</h2>
        <hr> <br>
        <input type="hidden" name="access_key" value="5ba68968-61a9-4c84-8149-19b8c85eea37">
        <input type="text" name="name" placeholder="Your Name" class="text-space" value="<?php echo $fetch_info['fname'] ?> <?php echo $fetch_info['lname'] ?>" readonly>
        <input type="email" name="email" placeholder="Your Email" class="text-space" value="<?php echo $fetch_info['email'] ?>" readonly>
        <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message" class="text-space" required></textarea>
        <br>
        <button type="submit" class="login-button">Send</button>
    </form>
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