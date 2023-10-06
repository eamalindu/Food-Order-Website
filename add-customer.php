<?php
session_start();
include_once('dbConn.php');

//will execute the block of code id the btnRegister button is clicked
if (isset($_POST['btnRegister'])) {

    //catching user inputs and assigning them to variables
    $email = $_POST['textEmail'];
    $password = $_POST['textConfirm'];

    //sanitizing user inputs
    $email = stripcslashes($email);
    $password = stripcslashes($password);

    $email = mysqli_real_escape_string($conn,$email);
    $password = mysqli_real_escape_string($conn,$password);

    //SQL for Inserting new login information
    $sql = "INSERT INTO login (email, password, status) Values ('$email','$password',1)";
   //SQL for Checking email already registered
    $isRegisteredSql = "SELECT * FROM login WHERE email = '$email'";

    $result = mysqli_query($conn,$isRegisteredSql);

    //Check whether the email is already in use
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['login-failed'] = '<script>showAlert("Email Already In Use !","bg-danger")</script>';
        header("Location: index.php");
    }
    else{
        //pass the data to backend
        if (mysqli_query($conn, $sql)) {
            //Confirm message
            $_SESSION['login-failed'] = '<script>showAlert("Your Account Successfully Created !<br>Login Now","bg-success")</script>';
            //redirecting to home page
            header("Location: index.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    //Closing the SQL Connection
    mysqli_close($conn);
}