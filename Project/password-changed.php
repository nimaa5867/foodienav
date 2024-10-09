<?php require_once "controllerUserData.php"; ?>
<?php
if ($_SESSION['info'] == false) {
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,target-densitydpi=device-dpi, user-scalable=no" />
    <title>Login Form</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="style.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>

<body class="background">

    <div class="container-forms">
        <img src="images/changed.webp" alt="Error">

        <?php
        if (isset($_SESSION['info'])) {
        ?>
            <div class="alert alert-success">
                <?php echo $_SESSION['info']; ?>
            </div>
        <?php
        }
        ?>

        <br>
        <form action="login-user.php" method="POST">

            <button class="login-button" type="submit" name="login-now" value="Login Now">LOGIN NOW</button>

        </form>

    </div>
    <?php
    include("footer.php")
    ?>
</body>

</html>