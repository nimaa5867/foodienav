<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,target-densitydpi=device-dpi, user-scalable=no" />
    <title>Login Form</title>
    <link rel="icon" type="image/x-icon" href="images/titleimg.jpg">
    <script src="https://kit.fontawesome.com/4dc862254d.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="style.css">
</head>
<style>
    html,body{
        background-image: url("images/background/formback.jpg");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed; 
    }
    @media (max-width:768px){
        html,body{
        background-image: url("images/background/formback.jpg");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed; 
    }
    }
</style>
<body>

<div class="container-forms">
                <form action="login-user.php" method="POST" autocomplete="">
                    <div class="login-text">Login</div>

                    <img src="images/login.jpg" alt="Error" style="border-radius:8px; width:40%; height:auto">

                    <div class="login-text">Login with your email and password.</div>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>

                        <input class="text-space" type="email" name="email" placeholder="&#xf0e0; Email Address" required value="<?php echo $email ?>" style="font-family:Arial, FontAwesome" /> <br>
                    <div class="form-group">
                        <input class="text-space" type="password" name="password" placeholder="&#xf023; Password" required style="font-family:Arial, FontAwesome">
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    <!-- <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div> -->
                    <button class="login-btn" type="submit" name="login" value="login">Login</button>
                    <div class="link login-link text-center">Not yet a member? <a href="signup-user.php">Signup now</a></div>
                </form>

</div>
<div class="marginbot"></div>
</body>
</html>