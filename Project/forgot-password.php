<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,target-densitydpi=device-dpi, user-scalable=no" />
    <title>Forgot Password</title>
    <link rel="icon" type="image/x-icon" href="images/titleimg.jpg">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container-forms">
                <form action="forgot-password.php" method="POST" autocomplete="">
                    <h2 class="login-text">Forgot Password</h2>
                    <img src="images/forgot.jpg" alt="Error" style="width:40%; height:auto; border-radius:8px">
                    <p class="login-text">Enter your email address</p>
                    <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>

                        <input class="text-space" type="email" name="email" placeholder="Enter email address" required value="<?php echo $email ?>">

                    <div class="link login-link text-center">Go back <a href="index1.php">Click here</a></div>
                    <div class="form-group">
                        <button class="login-btn" type="submit" name="check-email" value="Continue">Forgot Password</button>
                    </div>
                </form>

</div>
</body>
</html>