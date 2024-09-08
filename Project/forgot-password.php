<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,target-densitydpi=device-dpi, user-scalable=no" />
    <title>Forgot Password</title>
    <link rel="icon" type="image/x-icon" href="images/titleimg.jpg">
    <link rel="stylesheet" href="style.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
</head>
<body class="login-background">

<div class="container-forms">
                <form action="forgot-password.php" method="POST" autocomplete="">
                    <h2 class="login-text">FORGOT PASSWORD</h2>
                    <img src="images/forgot.jpg" alt="Error">
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

                        <input class="text-space" type="email" name="email" placeholder="Email address" required value="<?php echo $email ?>">

                    <div class="form-group">
                        <button class="login-button" type="submit" name="check-email" value="Continue">
                            CONTINUE
                        </button>
                    </div>
                    <div class="form-text">
                        <a href="index1.php">GO BACK</a>
                    </div>
                </form>

</div>
<?php 
    include("footer.php")
    ?>
</body>
</html>