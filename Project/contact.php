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
</head>
<body>
<header>
      <nav class="navbar">  
          <img src="images/Logo.png" alt="Brand Logo" class="logo"/>
          <ul>
            <li><a class="#" href="../area.php">AREAS</a></li>
            <li><a class ="#" a href="user-profile.php">PROFILE</a></li>
            <li><a class="active" href="/Project/index1.php">HOME</a></li>
          </ul>
         <div class="menu-icon" id="menu-icon"><i class="fas fa-bars"></i></div>
      </nav>
      <nav class="side-menu" id="side-menu">
        <ul>
          <li><a class="active" href="#">HOME</a></li>
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
        <button type="submit" class="">Send</button>
    </form>
    </div>

</body>
</html>