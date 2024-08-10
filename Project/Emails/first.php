<!--This is screen time out and redirect to page meta tag-->
<meta http-equiv="refresh" content="5; URL=../contents/profile.php" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,target-densitydpi=device-dpi, user-scalable=no" />
<?php require_once "../controllerUserData.php"; ?>
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
        $fname = $fetch_info['fname'];
        $lname = $fetch_info['lname'];
        if($status == "verified"){
            if($code != 0){
                header('Location: ../reset-code.php');
            }
        }else{
            header('Location: ../user-otp.php');
        }
    }
}else{
    header('Location: ../login-user.php');
}
?>

<?php
echo'Wait 5 seconds,you will be redirect home page.';
?>

<?php

//message
$msg = "Dear $fname $lname ,<br><br> You have not a special announcements. You have a update,follow our page https://www.facebook.com/profile.php?id=100094072383165&mibextid=ZbWKwL";

echo smtp_mailer($fetch_info['email'],
'Announcements',

$msg,

'');
?>