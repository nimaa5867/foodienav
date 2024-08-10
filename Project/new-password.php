<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a New Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container-forms">
                <form action="new-password.php" method="POST" autocomplete="off">
                    <h2 class="login-text">New Password</h2>
                    <img src="images/newpass.jpg" alt="Error" style="width:40%; height:auto; border-radius:8px">
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>

                        <input class="text-space" type="password" name="password" placeholder="Create new password" required>

                        <input class="text-space" type="password" name="cpassword" placeholder="Confirm your password" required> <br>

                        <button class="login-btn" type="submit" name="change-password" value="Change">Change</button>
                </form>

    </div>
    
</body>
</html>