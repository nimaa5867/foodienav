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
    <title><?php echo $fetch_info['fname'] ?> | Profile</title>
    <script src="https://kit.fontawesome.com/4dc862254d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
    <i class="fas fa-bars"></i>
    </label>
    <label class="logo">Foodie Navigator</label>
    <ul>
    <li><a class="#" href="index1">Home</a></li>
    <li><a class ="active" a href="user-profile.php">Profile</a></li>
    </ul>
</nav>

<div class="marginbot"></div>
    <div class="container-forms">
        <h2 class="login-text">Profile</h2>
        <div class="marginbot"></div>
        <div class="alignleft">
        <output class="output-space"> F Name - <?php echo $fetch_info['fname'] ?></output> <div class="marginbot"></div>
        <output class="output-space"> L Name - <?php echo $fetch_info['lname'] ?></output> <div class="marginbot"></div>
        <output class="output-space"> Reg NO: - <?php echo $fetch_info['regno'] ?></output> <div class="marginbot"></div>
        <output class="output-space"> Email - <?php echo $fetch_info['email'] ?></output> <div class="marginbot"></div>
        <output class="output-space"> Status - <?php echo $fetch_info['status'] ?></output> <div class="marginbot"></div>
        <div class="marginbot"></div>
        
        
    </div>
        <button onclick="location.href = 'logout-user.php';" class="login-btn" type="logout" name="logout" value="Signup">Logout</button>
    </div>


</body>   

<footer>
<br>
<a href="contents/about.html" style="color:aliceblue">About Us</a> <br> <a href="mailto:rajaratamalkoha@gmail.com" style="color:aliceblue">Contact Us</a> <br>
<a href="#"><i class="fa-brands fa-facebook" style="color:aliceblue"></i></a>  <a href="#"><i class="fa-brands fa-youtube" style="color:aliceblue"></i></a>
<h3>&copy; 2024 Foodie Navigator </h3>
<h3>All right reserved</h3>
<br>
</footer>

</html>