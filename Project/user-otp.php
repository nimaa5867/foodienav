<?php require_once "controllerUserData.php"; ?>
<?php
$email = $_SESSION['email'];
if ($email == false) {
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,target-densitydpi=device-dpi, user-scalable=no" />
    <title>Code Verification</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="style.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>

<body class="background">
    <div class="container-forms">
        <form action="user-otp.php" method="POST" autocomplete="off">
            <h2 class="login-text">CODE VERIFICATION</h2>
            <img src="images/otp.webp" alt="Error">
            <?php

            if (isset($_SESSION['info']) &&  $_SESSION['info'] != '') {

            ?>
                <div class="alert alert-success text-center">
                    <?php echo $_SESSION['info']; ?>
                </div>
            <?php
            }
            ?>
            <?php
            if (count($errors) > 0) {
            ?>
                <div class="alert alert-danger text-center">
                    <?php
                    foreach ($errors as $showerror) {
                        echo $showerror;
                    }
                    ?>
                </div>
            <?php
            }
            ?>

            <input class="text-space" type="number" name="otp" placeholder="Enter verification code" required>
            <div>
                <button class="login-button" type="submit" name="check" value="Submit">Submit</button>
            </div>
            <div class="form-text">
                <a href="login-user.php">GO BACK</a>
            </div>
        </form>
    </div>

    <?php
    include("footer.php")
    ?>

</body>

</html>