<?php
session_start();
include_once('dbConn.php');
$user = $_POST['textEmail'];
$pwd = $_POST['textPassword'];

//prevent sql injection

$user = stripcslashes($user);
$pwd = stripcslashes($pwd);

$user = mysqli_real_escape_string($conn,$user);
$pwd = mysqli_real_escape_string($conn,$pwd);

$sql = "SELECT * FROM `login` WHERE `email`='$user' AND `password` = '$pwd' ";


$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['email'] = $user;
    header("Location:dashboard/");
}
else{
    $_SESSION['login-failed'] = '<script>showAlert("Username or Password is Incorrect !","bg-danger")</script>';
    header("Location: index.php");
}