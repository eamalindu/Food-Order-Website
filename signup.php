<?php session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up | Koththu Palace</title>
    <!--Boostrap CSS-->
    <link href="../../__Resources__/bootstrap-5.2.3/bootstrap-5.2.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Fontawesome CSS File-->
    <link href="css/style.css" rel="stylesheet">
    <!--Bootstrap JS-->
    <script src="../../__Resources__/bootstrap-5.2.3/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
    <!-- jquery CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!--Fontawesome CSS File-->
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@4cac1a6/css/all.css" rel="stylesheet" type="text/css"/>
    <link rel="icon" href="images/sqaure-logo.png" type="x-icon">
    <!--AOS CSS File-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--AOS JS File-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <style>
        .custom-div {
            width: 450px;
            padding: 30px;
            color: #fff;
            margin: 0 auto;
            border-radius: 0 15px
        }
        .custom-alert {
            z-index: 1200 !important;
            position: fixed;
            top: 5px;
            right: 5px;
            border: none !important
        }
    </style>
    <!--Loader-->
    <link rel="stylesheet" href="css/loader.css">
    <script src="js/loader.js"></script>
</head>
<div class="preloader">
    <div class="loading">
        <img src="images/loader.gif" alt="loading"/>
    </div>
</div>
<body id="section-2">
<div class="w-custom mx-auto min-vh-100 d-flex align-items-center justify-content-center p-lg-4">
    <div class="container p-5 bg-black rounded-4">
        <h1 Class="small fs-5 text-white mb-4"><a href="index.php" class="text-decoration-none text-muted"><i class="far fa-caret-left"></i> Go Back</a></h1>
        <h1 class="modal-title fs-5 text-white mb-3" id="staticBackdropLabel"><img src="images/sqaure-logo.png" width="40px"> Customer Sign Up </h1>
        <h2 class="text-white text-center">Kottu Palace</h2>
        <form action="add-customer.php" method="post">
            <label for="" class="text-white form-label">Email Address</label>
            <div class="mb-3 input-group">
                <span class="input-group-text bg-black text-white" id="spanEmail"><i class="fas fa-envelope"></i></span>
                <input class="form-control bg-dark shadow-none text-light" placeholder="example@domain.com" type="text" id="textEmail" name="textEmail" required
                       onkeyup="inputTextValidator(this,'^[a-z|A-Z]{2,19}[@][a-z|A-Z]{2,8}[.][a-z|A-Z]{2,3}$')">
            </div>
            <label for="" class="text-white form-label">Password</label>
            <div class="mb-3 input-group">
                <span class="input-group-text bg-black text-white" id="spanPassword"><i class="fas fa-lock-alt"></i></span>
                <input class="form-control bg-dark shadow-none text-light" placeholder="**********" type="password" id="textPassword" name="textPassword" required>
            </div>
            <label for="" class="text-white form-label">Confirm Password</label>
            <div class="mb-3 input-group">
                <span class="input-group-text bg-black text-white" id="spanConfirm"><i class="fas fa-lock-alt"></i></span>
                <input class="form-control bg-dark shadow-none text-light" placeholder="**********" type="password" id="textConfirm" name="textConfirm" required>
            </div>
            <div class="mb-3">
                <a class="text-white text-decoration-none"><i class="fal fa-eye"></i> Show Password</a>
                <button type="submit" class="btn-orangered btn float-end" name="btnRegister">Register</button>
            </div>
        </form>

    </div>
</div>

<script src="js/external-validator.js"></script>
<script src="js/alert-function.js"></script>
<script src="js/signup.js"></script>
<script src="js/password-generator.js"></script>
<?php
if(isset($_SESSION['login-failed'])){
    echo $_SESSION['login-failed'];
}

unset($_SESSION['login-failed']);
?>
</body>
</html>