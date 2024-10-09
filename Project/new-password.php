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
    <title>Create a New Password</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="style.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>

<body class="background">

    <div class="container-forms">
        <form action="new-password.php" method="POST" autocomplete="off">
            <h2 class="login-text">NEW PASSWORD</h2>
            <img src="images/newpass.webp" alt="Error">
            <?php
            if (isset($_SESSION['info'])) {
            ?>
                <div class="alert-success alert ">
                    <?php echo $_SESSION['info']; ?>
                </div>
            <?php
            }
            ?>
            <?php
            if (count($errors) > 0) {
            ?>
                <div class="alert">
                    <?php
                    foreach ($errors as $showerror) {
                        echo $showerror;
                    }
                    ?>
                </div>
            <?php
            }
            ?>

            <input class="text-space" type="password" name="password" placeholder="Create new password" required>
            <input class="text-space" type="password" name="cpassword" placeholder="Confirm your password" required>
            <br>
            <button class="login-button" type="submit" name="change-password" value="Change">CHANGE</button>
        </form>

    </div>
    <?php
    include("footer.php")
    ?>
</body>

</html>