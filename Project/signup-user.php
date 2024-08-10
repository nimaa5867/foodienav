<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,target-densitydpi=device-dpi, user-scalable=no" />
    <title>Signup Form</title>
    <link rel="icon" type="image/x-icon" href="images/titleimg.jpg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container-forms">
                <form action="signup-user.php" method="POST" autocomplete="">
                    <h2 class="login-text">Signup</h2>
                    <img src="images/signup.jpg" alt="Error" style="width:40%; height:auto; border-radius:8px">
                    <p class="login-text">It's quick and easy.</p>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="text-space" type="text" name="f_name" placeholder="First Name" required value="<?php echo $name ?>">
                    </div>
                    <div class="form-group">
                        <input class="text-space" type="text" name="l_name" placeholder="Last Name" required value="<?php echo $name ?>">
                    </div>
                    <div class="form-group">
                        <input class="text-space" type="email" name="user_email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="text-space" type="text" name="regno" placeholder="Registration Number" required>
                    </div>
                    <div class="form-group">
                        <input class="text-space" type="password" name="user_password" placeholder="Password" required minlength="6">
                    </div>
                    <div class="form-group">
                        <input class="text-space" type="password" name="cpassword" placeholder="Confirm password" required>
                    </div>
                    <div class="form-group">
                        <button class="login-btn" type="submit" name="signup" value="Signup">SignUp</button>
                    </div>
                    <div class="link login-link text-center">Already a member? <a href="login-user.php">Login here</a></div>
                </form>

    </div>
    <div class="marginbot"></div>
</body>
</html>