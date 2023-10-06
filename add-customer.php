<?php
session_start();
include_once('dbConn.php');


if (isset($_POST['btnRegister'])) {

    $email = $_POST['textEmail'];
    $password = $_POST['textConfirm'];

    $email = stripcslashes($email);
    $password = stripcslashes($password);

    $email = mysqli_real_escape_string($conn,$email);
    $password = mysqli_real_escape_string($conn,$password);

    $sql = "INSERT INTO login (email, password, status) Values ('$email','$password',1)";
    $isRegisteredSql = "SELECT * FROM login WHERE email = '$email'";

    $result = mysqli_query($conn,$isRegisteredSql);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['login-failed'] = '<script>showAlert("Email Already In Use !","bg-danger")</script>';
        header("Location: index.php");
    }
    else{
        if (mysqli_query($conn, $sql)) {
            $_SESSION['login-failed'] = '<script>showAlert("Your Account Successfully Created !<br>Login Now","bg-success")</script>';
            header("Location: index.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}