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
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,target-densitydpi=device-dpi, user-scalable=no" />
    <title><?php echo $fetch_info['fname'] ?> | Home</title>
    <link rel="icon" type="image/x-icon" href="images/titleimg.jpg">
   <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
   <link rel="stylesheet" href="style.css">
   <script src="https://kit.fontawesome.com/4dc862254d.js" crossorigin="anonymous"></script>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    .h4{
        margin-left:40%;
        margin-right:auto;
        text-align:center;
        /* margin-top:15%; */
        font-size:20px;
        color:rgb(158, 196, 234);
        font-weight: 700;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        color: lightblue;
        top:40%;
        position: absolute;
    }
    /* For tablets and small desktops */
@media (max-width: 1024px) {
  .h4 {
    margin-left:40%;
  }
}

/* For large smartphones */
@media (max-width: 768px) {
  .h4 {
    margin-left:30%;
  }
}

/* For small smartphones */
@media (max-width: 480px) {
  .h4 {
    margin-left:20%;
  }
}
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        text-align:left;
        font-family: arial;
        margin-top: 5%;
        background-color: white;
        margin-bottom: 20px;
        border-radius: 8px;
    }
    button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: rgb(28, 100, 125);
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }
 
body, html {
    height: 100%;
    margin: 0;
    /* overflow: hidden; */
}

.background {
    position: relative;
    /* background-position: center; */
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    animation: changeBackground 20s infinite;
}

@keyframes changeBackground {
    0% { background-image: url('images/background/back1.jpg'); }
    30% { background-image: url('images/background/back2.jpg'); }
    60% { background-image: url('images/background/back3.jpg'); }
    90% { background-image: url('images/background/back4.jpg'); }
    100% { background-image: url('images/background/back3.jpg'); }
}

    </style>
</head>

<body>

    <div class="background">

    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">Foodie Navigator</label>
      <ul>
        <li><a class="active" href="#">Home</a></li>
        <li><a class="#" href="#">Areas</a></li>
        <li><a class ="#" a href="user-profile.php">Profile</a></li>
      </ul>
    </nav>

<div class="h4">
    Hello <?php echo $fetch_info['fname'] ?> <?php echo $fetch_info['lname'] ?>, 
    <br><br><label id="lblGreetings"></label>

    <script>//greeting js code
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
</div> <br><br>
    </div>

    <!-- <div class="card">
    <a href="user-profile.php"><button>Profile</button></a>
    </div> -->

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